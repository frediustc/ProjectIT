<?php 
try
{
    $db = new PDO("mysql:host=localhost;dbname=pit", "root", "");
}
catch(Exception $e)
{
    die("error: " . $e->getMessage());
}