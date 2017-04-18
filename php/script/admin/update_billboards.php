<?php
if($u_actived && $u_id == 1)
{
    $alert_success = '<p class="alert bg-success"><span class="glyphicon glyphicon-ok"></span>';
    $alert_error = '<p class="alert bg-danger"><span class="glyphicon glyphicon-warning-sign"></span>';
    function applyUpdate($type, $input, $db, $alert_success, $alert_error, $error)
    {
        $up = $db->prepare('UPDATE billboards SET ' . $type . ' = :x WHERE billboard_id = :y');
        $up->bindValue(':x', $input, PDO::PARAM_STR);
        $up->bindValue(':y', $_GET['id'], PDO::PARAM_INT);
        $up->execute();
        echo $alert_success . $error . 'Information update</p>';
    }
    function updateInfo($type, $input, $db, $alert_success, $alert_error)
    {
        $input = htmlspecialchars(trim($input));
        $error = '<strong> <u>' . str_replace( '_', ' ', $type) . '</u> : </strong>';
        if(strlen($input) > 0)
        {
            switch ($type) {
                case 'billboard_location' :
                    (preg_match("#^[a-zA-Z0-9 \-]{5,100}$#", $input)) ? applyUpdate($type, $input, $db, $alert_success, $alert_error, $error) : print $alert_error . $error .'location wrong format</p>';
                    break;

                case  'billboard_price' || 'billboard_width' || 'billboard_height' || 'billboard_map_lat' || 'billboard_map_lon' || 'billboard_map_zoom' :
                    ((double)$input > 0) ? applyUpdate($type, $input, $db, $alert_success, $alert_error, $error) : print $alert_error . $error . ' must be a number</p>';
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

    if(isset($_POST['update-bill']) && isset($_POST['psw']) && !empty($_POST['psw']))
    {
        if(sha1(htmlspecialchars(trim($_POST['psw']))) === $u_pass)
        {
            switch ($_POST)
            {
                case isset($_POST['location']) && !empty($_POST['location']) :
                    updateInfo('billboard_location', $_POST['location'], $db, $alert_success, $alert_error);
                case isset($_POST['price']) && !empty($_POST['price']) :
                    updateInfo('billboard_price', $_POST['price'], $db, $alert_success, $alert_error);
                case isset($_POST['width']) && !empty($_POST['width']) :
                    updateInfo('billboard_width', $_POST['width'], $db, $alert_success, $alert_error);
                case isset($_POST['height']) && !empty($_POST['height']) :
                    updateInfo('billboard_height', $_POST['height'], $db, $alert_success, $alert_error);
                case isset($_POST['lattitude']) && !empty($_POST['lattitude']) :
                    updateInfo('billboard_map_lat', $_POST['lattitude'], $db, $alert_success, $alert_error);
                case isset($_POST['longitude']) && !empty($_POST['longitude']) :
                    updateInfo('billboard_map_lon', $_POST['longitude'], $db, $alert_success, $alert_error);
                case isset($_POST['zoom']) && !empty($_POST['zoom']) :
                    updateInfo('billboard_map_zoom', $_POST['zoom'], $db, $alert_success, $alert_error);
            }
        }
        else
        {
            echo $alert_error . 'Current password:</b> Wrong password</p>';
        }
    }
}
