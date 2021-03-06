<?php
include $rep . 'php/include/connect.php';
include  $rep . 'php/include/session.php';
if (preg_match("#Admin#", $page)) {
    if(isset($_SESSION['user_id']) && $_SESSION['user_id'] != 1)
    {
        header('location:' . $rep . 'store/');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $page; ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo $rep; ?>bootstrap/css/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo $rep; ?>css/bootstrap.me.css" rel="stylesheet" />
    <link href="<?php echo $rep; ?>css/font/myIcon/style.css" rel="stylesheet" />
    <link href="<?php echo $rep; ?>Asset/Widgets/Calendar/style.css" rel="stylesheet" />
    <?php if (isset($section_type) && $section_type === 'store') {
        ?> <link href="<?php echo $rep; ?>css/store.css" rel="stylesheet" /> <?php
    }
    else {
         ?> <link href="<?php echo $rep; ?>css/admin.css" rel="stylesheet" /> <?php
    }
     ($page === 'Admin Billboards' || $page === 'Admin Rents' || $page === 'Admin Reports' || $page === 'Admin Orders' || $page === 'Store Purchases Page') ? print '<link href="'. $rep .'css/table.css" rel="stylesheet" />' : null; ?>
    <link href="style.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
