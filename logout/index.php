<?php
session_start();
session_destroy();
if(isset($_SERVER['HTTP_REFERER']))
{
    header('location: ' . $_SERVER['HTTP_REFERER']);
} ?>
<h1>FUCK U!!!</h1>
