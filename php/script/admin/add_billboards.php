<?php
if(isset($_POST['add-bill']) && !empty($_POST['add-bill']))
{
    function sanitizer($in)
    {
        return htmlspecialchars(trim($in));
    }
    $loc = sanitizer($_POST['location']);
    $prix = sanitizer($_POST['price']);
    $w = sanitizer($_POST['width']);
    $h = sanitizer($_POST['height']);
    $lat = sanitizer($_POST['lattitude']);
    $lon = sanitizer($_POST['longitude']);
    $z = sanitizer($_POST['zoom']);
    $psw = sanitizer($_POST['psw']);

    $data = [$prix, $w, $h, $lat, $lon, $z];
    $dataMsg = array('price must be a number higher than 0',
        'width must be a number higher than 0',
        'height must be a number higher than 0',
        'lattitude must be a number higher than 0',
        'longitude must be a number higher than 0',
        'zoom must be a number higher than 0'
    );
    $ckeckNbr = true;
    function checkNbr($ar, $dataMsg)
    {
        if(is_array($ar) && count($ar) > 0)
        {
            $out =  true;
            for($i = 0, $c = count($ar); $i < $c; $i++)
            {
                $ar[$i] = (double)$ar[$i];
                if(!is_double($ar[$i]) || $ar[$i] <= 0)
                {
                    if($i != 3 && $i != 4)
                    {
                        echo '<p class="alert bg-danger"><span class="glyphicon glyphicon-warning-sign"></span>' . $dataMsg[$i] . $ar[$i] .'</p>';
                        $out = false;
                    }
                }
            }
            return $out;
        }
    };
    $l = true;
    if(!preg_match("#^[a-zA-Z0-9 \-]{5,30}$#", $loc))
    {
        echo '<p class="alert bg-danger"><span class="glyphicon glyphicon-warning-sign"></span>Location Empty</p>';
        $l = false;
    }
    if(sha1($psw) !== $u_pass)
    {
        echo '<p class="alert bg-danger"><span class="glyphicon glyphicon-warning-sign"></span>Password is wrong</p>';
        $l = false;
    }
    if(checkNbr($data, $dataMsg) && $l)
    {
        $ins = $db->prepare('INSERT INTO billboards (billboard_location, billboard_price, billboard_width, billboard_height,
             billboard_availability, billboard_map_lat, billboard_map_lon, billboard_map_zoom, billboard_post_date) VALUES (?, ?, ?, ?, "free", ?, ?, ?, NOW())');
        $ins->execute(array($loc, $prix, $w, $h, $lat, $lon, $z));
        echo '<p class="alert bg-success"><span class="glyphicon glyphicon-ok"></span>Billboard added</p>';
    }
}
