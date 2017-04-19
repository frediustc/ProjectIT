<?php
if($u_actived && $u_id == 1)
{

    if(isset($_POST['delete']) && !empty($_POST['delete']))
    {
        $delEl = $db->prepare('DELETE FROM billboards WHERE billboard_id = ?');
        if($delEl->execute(array($_POST['delete'])))
        {
            echo 'work';
        }
        else {
            echo 'not work';
        }
    }
}
