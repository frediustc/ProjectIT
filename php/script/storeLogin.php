<?php
if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['psw']) && !empty($_POST['psw']) && isset($_POST['log']))
{
    function analyse($input)
    {
        return htmlspecialchars(trim($input));
    }

    $email = analyse($_POST['email']);
    $psw = analyse($_POST['psw']);

    if(strlen($email) > 0 && strlen($psw) > 0)
    {
        $users = $db->prepare('SELECT * FROM users WHERE user_email = :email AND user_password = :psw');
        $users->bindValue(':email', $email, PDO::PARAM_STR);
        $users->bindValue(':psw', sha1($psw), PDO::PARAM_STR);
        $users->execute();

        $user = $users->fetch();
        if(!empty($user))
        {
            if($user['user_user_type_id'] != 1 && $user['user_account_status'] == 'actived')
            {
                $_SESSION['user_id'] = $user['user_id'];
            }
            else
            {
                echo '<p class="alert alert-fixed-bottom-right bg-danger"><span class="glyphicon glyphicon-warning-sign"></span>Sorry but you are not the Admin</p>';
            }

        }
        else {
            echo '<p class="alert alert-fixed-bottom-right bg-danger"><span class="glyphicon glyphicon-warning-sign"></span>Email or password is wrong</p>';
        }
    }
    else {
        echo '<p class="alert alert-fixed-bottom-right bg-danger"><span class="glyphicon glyphicon-warning-sign"></span>Empty field</p>';
    }
}
