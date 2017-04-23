<?php
if($u_actived)
{
    if (isset($_POST['passupdate']) && isset($_POST['passpsw']) && !empty($_POST['passpsw'])) {
        if(sha1(htmlspecialchars(trim($_POST['passpsw']))) === $u_pass)
        {
            if(isset($_POST['n-psw']) && !empty($_POST['n-psw']))
            {
                updateInfo('user_password', $_POST['n-psw'], $db, $u_id, $alert_success, $alert_error);
            }
            else {
                echo $alert_error . 'new password:</b> empty</p>';
            }
        }
        else
        {
            echo $alert_error . 'Current password:</b> Wrong password</p>';
        }
    }
}
