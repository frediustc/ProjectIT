<?php
if($u_actived)
{
    if(isset($_POST['delete']) && !empty($_POST['delete']))
    {
        $delEl = $db->prepare('DELETE FROM orders WHERE order_id = ? AND order_user_id = ?');
        if($delEl->execute(array($_POST['delete'], $_POST['uid'])))
        {
            echo '<p class="alert bg-success"><span class="glyphicon glyphicon-ok"></span> billboards removed !</p>';
        }
        else {
            echo '<p class="alert bg-danger"><span class="glyphicon glyphicon-warning-sign"></span> removing billboard error !</p>';
        }
    }
}
