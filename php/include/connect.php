<?php
try
{
    $db = new PDO("mysql:host=localhost;dbname=projectit", "root", "");
}
catch(Exception $e)
{
    die ("error: " . $e->getMessage());
}
