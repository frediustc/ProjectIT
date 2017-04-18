<?php
if($u_actived && $u_id == 1)
{

    header('location: ' . $_SERVER['HTTP_REFERER']);
}
