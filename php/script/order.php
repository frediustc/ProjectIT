<?php
if(isset($_POST['orderitnow']))
{
    function changedateformat($in)
    {
        $in = str_replace('/', '', $in);
        $ind = $in[2] . $in[3];
        $inm = $in[0] . $in[1];
        $iny = $in[4] . $in[5] . $in[6] . $in[7];
        $in = $iny . '-' . $inm . '-' .$ind;
        return $in;
    }
    $sd = changedateformat(trim(htmlspecialchars($_POST['sd'])));
    $ed = changedateformat(trim(htmlspecialchars($_POST['ed'])));


    function GeraHash($qtd){
    $Caracteres = 'ABCDEFGHIJKLMOPQRSTUVXWYZ0123456789';
    $QuantidadeCaracteres = strlen($Caracteres);
    $QuantidadeCaracteres--;
    $orderid;
    $Hash=NULL;
         for($x=1;$x<=$qtd;$x++){
             $Posicao = rand(0,$QuantidadeCaracteres);
             $Hash .= substr($Caracteres,$Posicao,1);
         }
     return $Hash;
     }

     do {
         $orderid =  GeraHash(6);
     }
     while(!empty($mc = $db->query('SELECT * FROM orders WHERE order_id = $orderid')));
    $i = $db->prepare('INSERT INTO orders(order_id, order_date, order_user_id, order_starting_date, order_ending_date, order_billboard_id, order_status) VALUES(?, NOW(), ?, ?, ?, ?, "pending")');
    if($i->execute(array($orderid, $u_id, $sd, $ed, $_GET['id'])))
    {
        echo '<p class="alert bg-success"><span class="glyphicon glyphicon-warning-sign"></span> Order successfully done we will contact you soon on your email address!!!</p>';
    }
    else {
        echo '<p class="alert bg-danger"><span class="glyphicon glyphicon-warning-sign"></span> Error</p>';
    }

}
