<?php
session_start();
if(isset($_SESSION['user_id']))
{
    if($page === 'Setup page' || $page === 'Administrator logIn')
    {
        header('location:' . $rep);
    }
    require $rep . '/php/include/user.php';
}
else
{
    if($page !== 'Setup page' && $page !== 'Administrator logIn')
    {
        header('location:' . $rep);
    }
}
