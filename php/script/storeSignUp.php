<?php
if(isset($_POST['reg']))
{
    $alert_success = '<p class="alert bg-success"><span class="glyphicon glyphicon-ok"></span>';
    $alert_error = '<p class="alert bg-danger"><span class="glyphicon glyphicon-warning-sign"></span>';

    function sanitizer($input) { return htmlspecialchars(trim($input)); }
    $em = sanitizer($_POST['em']);
    $fn = sanitizer($_POST['fn']);
    $psw = sanitizer($_POST['psw']);
    $c = sanitizer($_POST['c-psw']);

    function GeraHash($qtd){
    $Caracteres = 'ABCDEFGHIJKLMOPQRSTUVXWYZ0123456789';
    $QuantidadeCaracteres = strlen($Caracteres);
    $QuantidadeCaracteres--;
    $mailcode;
    $Hash=NULL;
         for($x=1;$x<=$qtd;$x++){
             $Posicao = rand(0,$QuantidadeCaracteres);
             $Hash .= substr($Caracteres,$Posicao,1);
         }
     return $Hash;
     }

     do {
         $mailcode =  GeraHash(50);
     }
     while(!empty($mc = $db->query('SELECT * FROM users WHERE user_email_code = $mailcode')));

     if(preg_match("#^[a-zA-Z \-]{5,70}$#", $fn))
     {
         if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $em)) {
             $exist = $db->prepare('SELECT * FROM users WHERE user_email = ?');
             $exist->execute(array($em));
             $ex = $exist->fetch();
             if (empty($ex)) {
                 if (preg_match("#^[a-z0-9._\-]{6,32}$#", $psw)) {
                     if ($psw === $c) {
                         $exp = explode(' ', $fn);
                         $ppTxt = strtoupper($exp[0][0] . $exp[1][0]);
                         echo $ppTxt;
                         $ptxtCheck = $db->prepare('SELECT * FROM user_pp_text WHERE user_pp_text_name = ?');
                         $ptxtCheck->execute(array($ppTxt));
                         if (empty($ptxtCheck)) {
                             $ptxtins = $db->prepare('INSERT INTO user_pp_text(user_pp_text_name) VALUES (?)');
                             $ptxtins->execute(array($ppTxt));
                             $ppTxt = $db->lastInsertId();
                         }
                         else {
                             $ptxtCheckthis = $ptxtCheck->fetch();
                             $ppTxt = $ptxtCheckthis['user_pp_text_id'];
                         }

                         //send mail
                         include $rep . 'php/class/PhpMail/mail.php';
                         if (!$mail->send()) {
                             echo "Mailer Error: " . $mail->ErrorInfo;
                         }
                         else {
                             $ins = $db->prepare('INSERT INTO users(user_full_name, user_email, user_password, user_registration_date,
                                       user_email_code, user_account_status, user_account_pp_bg, user_user_type_id, user_pp_text_id)
                                        VALUES (?, ?, ?, NOW(), ?, "disactived", "bg-primary", 2, ?)');
                                  if($ins->execute(array($fn, $em, sha1($psw), $mailcode, $ppTxt)))
                                  {
                                      $_SESSION['user_id'] = $db->lastInsertId();
                                      header('location: ../VerifMsg/');
                                  }
                                  else {
                                      echo $alert_error . 'not inserted </p>';
                                  }

                         }
                     }
                     else
                     {
                         echo $alert_error . 'Password and comfirm password do not match</p>';
                     }

                 }
                  else
                 {
                     echo $alert_error . 'Password is between 6 and 32 characters</p>';
                 }

             }
              else
             {
                 echo $alert_error . 'Email already exists</p>';
             }
         }
         else
         {
             echo $alert_error . 'Email wrong format</p>';
         }

     }
     else
     {
         echo $alert_error . 'full name wrong format (between 5 and 70 characters)</p>';
     }
}
