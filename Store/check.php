<?php
if(isset($_POST['searchAll']))
{
    $loc = (isset($_POST['location']) && !empty($_POST['location'])) ? trim(htmlspecialchars($_POST['location'])) : 'all';
    $sort = (isset($_POST['sort']) && !empty($_POST['sort'])) ? trim(htmlspecialchars($_POST['sort'])) : 'date';
    $order = (isset($_POST['order']) && !empty($_POST['order'])) ? trim(htmlspecialchars($_POST['order'])) : 'ASC';
    $min = (isset($_POST['min-price']) && !empty($_POST['min-price'])) ? trim(htmlspecialchars($_POST['min-price'])) : 0;
    $max = (isset($_POST['max-price']) && !empty($_POST['max-price'])) ? trim(htmlspecialchars($_POST['max-price'])) : 0;
    
    header('location: ' . $_SERVER['HTTP_REFERER'] . '?l=' . $loc . '&s=' . $sort . '&o=' . $order . '&n=' . $min . '&x=' . $max);
}
