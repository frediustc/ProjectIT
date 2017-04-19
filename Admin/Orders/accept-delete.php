<?php
if($u_actived && $u_id == 1)
{
    if(isset($_POST['delete']) && !empty($_POST['delete']))
    {
        $delEl = $db->prepare('DELETE FROM orders WHERE order_id = ?');
        if($delEl->execute(array($_POST['delete'])))
        {
            echo '<p class="alert bg-success"><span class="glyphicon glyphicon-ok"></span> Order removed !</p>';
        }
        else {
            echo '<p class="alert bg-error"><span class="glyphicon glyphicon-warning-sign"></span>removing error !</p>';
        }
    }
    elseif (isset($_POST['validate']) && !empty($_POST['validate'])) {
        $val = $db->prepare('UPDATE orders SET order_status = "actived" WHERE order_id = ?');
        if($val->execute(array($_POST['validate'])))
        {
            echo '<p class="alert bg-success"><span class="glyphicon glyphicon-ok"></span> Order actived !</p>';
        }
        else {
            echo '<p class="alert bg-error"><span class="glyphicon glyphicon-warning-sign"></span>activation error !</p>';
        }
    }
    elseif (isset($_POST['decline']) && !empty($_POST['decline'])) {
        $val = $db->prepare('UPDATE orders SET order_status = "pending" WHERE order_id = ?');
        if($val->execute(array($_POST['decline'])))
        {
            echo '<p class="alert bg-success"><span class="glyphicon glyphicon-ok"></span> Order decined !</p>';
        }
        else {
            echo '<p class="alert bg-error"><span class="glyphicon glyphicon-warning-sign"></span> declining error !</p>';
        }
    }
}
