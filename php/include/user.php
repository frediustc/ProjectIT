<?php
$user = $db->prepare('SELECT u.user_full_name, u.user_email, u.user_account_status,
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
    $u_email = $this_user['user_email'];
    $u_state = $this_user['user_account_status'];
    $u_pp_bg = $this_user['user_account_pp_bg'];
    $u_pp_txt = $this_user['user_pp_text_name'];
    $u_type = $this_user['user_type_name'];
}
else
{
    die ('user do not exist');
}
