<?php
session_start();
if(isset($_SESSION['id']))
{
    require $rep . '/php/include/user.php';
}
