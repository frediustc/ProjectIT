<?php
session_start();
if(isset($_SESSION['user_id']))
{
    switch($page)
    {
        case 'Setup page' :
            header('location: ' . $rep . 'Admin/');
            break;
        case 'Administrator logIn' :
            header('location: Dashboard/');
            break;
    }
    require $rep . 'php/include/user.php';
}
else
{
    if(!isset($section_type))
    {
        if($page !== 'Setup page' && $page !== 'Administrator logIn')
        {
            header('location:' . $rep . 'Admin/');
        }
    }
}
