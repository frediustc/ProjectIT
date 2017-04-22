<header class="navbar navbar-inverse navbar-fixed-top" id="menuTop">
    <div class="navbar-header">
        <p class="navbar-brand text-center text-uppercase">HOLALA</p>
    </div>
    <ul class="nav navbar-nav navbar-right text-capitalize">
        <li>
            <a href="#" title="Your Name"><?php echo $u_fn; ?></a>
        </li>
        <li>
            <a href="<?php echo $rep;?>logout/" class="icon-display" title="Account">
                <span class="glyphicon glyphicon-log-out"></span>
            </a>
        </li>
    </ul>
</header>
<aside class="sidebar sidebar-fixed-left sidebar-default" id="menuLeft">
    <ul class="nav text-uppercase text-center sidebar-fit">
        <li>
            <a href="../Account/" class="<?php echo ($page === 'Admin Account') ? 'actived' : null;?>">
                <span class="text-block-middle">
                    <span class="ddfj-usericon"></span>
                    <span class="text-icon">Account</span>
                </span>
            </a>
        </li>
        <li>
            <a href="../Dashboard/" class="<?php echo ($page === 'Admin Dashboard') ? 'actived' : null;?>">
                <span class="text-block-middle">
                    <span class="ddfj-charticon"></span>
                    <span class="text-icon">Dashboard</span>
                </span>
            </a>
        </li>
        <li>
            <a href="../Billboards/" class="<?php echo ($page === 'Admin Billboards') ? 'actived' : null;?>">
                <span class="text-block-middle">
                    <span class="ddfj-menuicon"></span>
                    <span class="text-icon">BillBoards</span>
                </span>
            </a>
        </li>
        <li>
            <a href="../Orders/" class="<?php echo ($page === 'Admin Orders') ? 'actived' : null;?>">
                <span class="text-block-middle">
                    <span class="ddfj-ordericon"></span>
                    <span class="text-icon">Orders</span>
                </span>
            </a>
        </li>
        <li>
            <a href="../Rents/" class="<?php echo ($page === 'Admin Rents') ? 'actived' : null;?>">
                <span class="text-block-middle">
                    <span class="ddfj-reporticon"></span>
                    <span class="text-icon">Rents</span>
                </span>
            </a>
        </li>
    </ul>
</aside>
<div class="main-container">
    <div class="wrapper">
        <div class="row page-title">
            <div class="col-xs-6">
                <h1><?php echo $page; ?></h1>
            </div>
            <div class="col-xs-6 text-right text-capitalyze text-block-middle">
                <p>Today's Date: <span class="text-primary todayDateTop">...</span></p>
                <p>Actual Time: <span class="text-success actualTimeTop">00:00:00</span></p>
            </div>
        </div>
