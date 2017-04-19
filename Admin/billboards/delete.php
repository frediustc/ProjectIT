<?php
if($u_actived && $u_id == 1)
{
    if(isset($_POST['delete']) && !empty($_POST['delete']))
    {
        $delEl = $db->prepare('DELETE FROM billboards WHERE billboard_id = ?');
        if($delEl->execute(array($_POST['delete'])))
        {
            echo '<p class="alert bg-success"><span class="glyphicon glyphicon-ok"></span> billboards removed !</p>';
        }
        else {
            echo '<p class="alert bg-danger"><span class="glyphicon glyphicon-warning-sign"></span> removing billboard error !</p>';
        }
    }
}
