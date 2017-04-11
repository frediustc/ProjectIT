<?php
if($u_actived)
{
    $alert_success = '<p class="alert bg-success"><span class="glyphicon glyphicon-ok"></span>';
    $alert_error = '<p class="alert bg-danger"><span class="glyphicon glyphicon-warning-sign"></span>';
    function applyUpdate($type, $input, $db, $u_id, $alert_success, $alert_error, $error)
    {
        $up = $db->prepare('UPDATE users SET ' . $type . ' = :x WHERE user_id = :y');
        $up->bindValue(':x', $input, PDO::PARAM_STR);
        $up->bindValue(':y', $u_id, PDO::PARAM_INT);
        $up->execute();
        echo $alert_success . $error . 'Information update</p>';
    }
    function updateInfo($type, $input, $db, $u_id, $alert_success, $alert_error)
    {
        $input = htmlspecialchars(trim($input));
        $error = '<strong> <u>' . str_replace( '_', ' ', $type) . '</u> : </strong>';
        if(strlen($input) > 0)
        {
            switch ($type) {
                case 'user_account_pp_bg' :
                    (preg_match("#^[a-zA-Z \-]{5,30}$#", $input)) ? applyUpdate($type, $input, $db, $u_id, $alert_success, $alert_error, $error) : print $alert_error . $error .'color wrong format</p>';
                    break;

                case  'user_full_name' :
                    (preg_match("#^[a-zA-Z \-]{5,70}$#", $input)) ? applyUpdate($type, $input, $db, $u_id, $alert_success, $alert_error, $error) : print $alert_error . $error . 'full name wrong format</p>';
                    break;

                case 'user_email' :
                    $input = strtolower($input);
                    if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $input))
                    {
                        $exist = $db->prepare('SELECT * FROM users WHERE user_email = ?');
                        $exist->execute(array($input));
                        $ex = $exist->fetch();
                        (empty($ex)) ? applyUpdate($type, $input, $db, $u_id, $alert_success, $alert_error, $error) : print $alert_error . $error . 'Email already exists</p>';
                    }
                    else {
                        echo $alert_error . 'Email wrong format</p>';
                    }
                    break;

                case 'user_password' :
                    if(preg_match("#^[a-z0-9._\-]{6,32}$#", $input))
                    {
                        if($input === $_POST['c-psw'])
                        {
                            applyUpdate($type, sha1($input), $db, $u_id, $alert_success, $alert_error, $error);
                        }
                        else
                        {
                            echo $alert_error . 'Password and comfirm do not match</p>';
                        }
                    }
                    else {
                        echo $alert_error . 'Password is between 6 and 32 characters</p>';
                    }
                    break;
            }
        }
        else
        {
            if(strlen(trim($error)) > 0)
            {
                echo $alert_error . $error .' is empty</p>';
            }
        }
    }

    if(isset($_POST['update-profile']) && isset($_POST['psw']) && !empty($_POST['psw']))
    {
        if(sha1(htmlspecialchars(trim($_POST['psw']))) === $u_pass)
        {
            switch ($_POST)
            {
                case isset($_POST['color-pick']) && !empty($_POST['color-pick']) :
                    updateInfo('user_account_pp_bg', $_POST['color-pick'], $db, $u_id, $alert_success, $alert_error);
                case isset($_POST['fn']) && !empty($_POST['fn']) :
                    updateInfo('user_full_name', $_POST['fn'], $db, $u_id, $alert_success, $alert_error);
                case isset($_POST['mail']) && !empty($_POST['mail']) :
                    updateInfo('user_email', $_POST['mail'], $db, $u_id, $alert_success, $alert_error);
                case isset($_POST['n-psw']) && !empty($_POST['n-psw']) :
                    updateInfo('user_password', $_POST['n-psw'], $db, $u_id, $alert_success, $alert_error);
            }
        }
        else
        {
            echo $alert_error . 'Current password:</b> Wrong password</p>';
        }
    }
}
