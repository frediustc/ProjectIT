<?php

$user = $db->prepare('SELECT u.user_full_name, u.user_password, u.user_email, u.user_account_status,
     u.user_account_pp_bg, up.user_pp_text_name, ut.user_type_name
    FROM users AS u
    INNER JOIN user_pp_text AS up
    ON up.user_pp_text_id = u.user_pp_text_id
    INNER JOIN user_type AS ut
    ON ut.user_type_id = u.user_user_type_id
    WHERE u.user_id = :id');
$user->bindValue(':id', $_SESSION['user_id'], PDO::PARAM_INT);
$user->execute();
$this_user = $user->fetch();
if(!empty($this_user))
{
    $u_id = $_SESSION['user_id'];
    $u_fn = $this_user['user_full_name'];
    $u_pass = $this_user['user_password'];
    $u_email = $this_user['user_email'];
    $u_email_chk = (strlen($u_email) > 20) ? (substr($u_email, -(strlen($u_email)), (strlen($u_email)) - (strlen($u_email) - 20))) : $u_email;
    $u_actived = ($this_user['user_account_status'] === 'actived') ? true : false;
    $u_pp_bg = $this_user['user_account_pp_bg'];
    $u_pp_txt = $this_user['user_pp_text_name'];
    $u_type = $this_user['user_type_name'];


    function retrieve_duration($_time, $time_z = 0)
    {
        $now = time();
        $_time = $now - $_time->getTimestamp();
        $min = 60;
        $hr = 60 * 60;
        $day = $hr * 24;
        $week = $day * 7;
        $month = $day * 31;
        $year = $day * 365;
        $_time = $_time - (2 * $hr);
        switch ($_time) {
            case ($_time < $min):
                $_time = 'just now';
                break;
            case $_time >= $min && $_time < $hr:
                $_time = $_time / $min;
                $_time = round( $_time) . ' mins. ago';
                break;
            case $_time >= $hr && $_time < $day:
                $_time = $_time / $hr;
                $_time = round( $_time) . ' hrs. ago';
                break;
            case $_time >= $day && $_time < $week:
                $_time = $_time / $day;
                $_time = round( $_time) . ' days. ago';
                break;
            case $_time >= $week && $_time < $month:
                $_time = $_time / $week;
                $_time = round( $_time) . ' weeks. ago';
                break;
            case $_time >= $month && $_time < $year:
                $_time = $_time / $month;
                $_time = round( $_time) . ' mths. ago';
                break;
            case $_time >= $year :
                $_time = $_time / $year;
                $_time = round( $_time) . ' yrs. ago';
                break;
        }
        return $_time;
    }
}
else
{
    die ('user do not exist');
}
