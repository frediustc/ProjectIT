<header class="navbar navbar-inverse navbar-fixed-top" id="menuTop">
    <div class="navbar-header">
        <p class="navbar-brand text-center text-uppercase">BigAdvertiser</p>
    </div>
    <ul class="nav navbar-nav navbar-right text-capitalize">
        <li>
            <a href="#" class="icon-display" data-toggle="tooltip" title="Add Billboard" data-placement="bottom">
                <button class="btn ddfj-addicon"></button>
            </a>
        </li>
        <li>
            <a href="#" class="icon-display" data-toggle="tooltip" title="Messages" data-placement="bottom">
                <button class="btn ddfj-msgicon"></button>
            </a>
        </li>
        <li>
            <a href="#" class="icon-display" data-toggle="tooltip" title="Notifications" data-placement="bottom">
                <button class="btn ddfj-bellicon"></button>
            </a>
        </li>
        <li>
            <a href="#" data-toggle="tooltip" title="Your Name" data-placement="bottom">Diomande Dro Freddy Junior</a>
        </li>
        <li>
            <a href="#" class="icon-display" data-toggle="tooltip" title="Account" data-placement="bottom">
                <button class="btn ddfj-usericon"></button>
            </a>
        </li>
    </ul>
</header>
<aside class="sidebar sidebar-fixed-left sidebar-default" id="menuLeft">
    <ul class="nav text-uppercase text-center sidebar-fit">
        <li>
            <a href="Index.php" class="<?php echo ($page === 'Admin Account') ? 'actived' : null;?>">
                <span class="text-block-middle">
                    <span class="ddfj-usericon"></span>
                    <span class="text-icon">Account</span>
                </span>
            </a>
        </li>
        <li>
            <a href="#" class="<?php echo ($page === 'Admin Dashboard') ? 'actived' : null;?>">
                <span class="text-block-middle">
                    <span class="ddfj-charticon"></span>
                    <span class="text-icon">Dashboard</span>
                </span>
            </a>
        </li>
        <li>
            <a href="#" class="<?php echo ($page === 'Admin Billboards') ? 'actived' : null;?>">
                <span class="text-block-middle">
                    <span class="ddfj-menuicon"></span>
                    <span class="text-icon">BillBoards</span>
                </span>
            </a>
        </li>
        <li>
            <a href="#" class="<?php echo ($page === 'Admin Reports') ? 'actived' : null;?>">
                <span class="text-block-middle">
                    <span class="ddfj-reporticon"></span>
                    <span class="text-icon">Reports</span>
                </span>
            </a>
        </li>
        <li>
            <a href="#" class="<?php echo ($page === 'Admin Orders') ? 'actived' : null;?>">
                <span class="text-block-middle">
                    <span class="ddfj-ordericon"></span>
                    <span class="text-icon">Orders</span>
                </span>
            </a>
        </li>
    </ul>
</aside>
<div class="container-fluid">
    <div class="row page-title no-space">
        <div class="col-xs-6">
            <h1>Administrator Dashboard</h1>
        </div>
        <div class="col-xs-6 text-right text-capitalyze text-block-middle">
            <p>Today's Date: <span class="todayDateTop">15 March 2017</span></p>
            <p>Actual Time: <span class="actualTimeTop">06:56:00 PM</span></p>
        </div>
    </div>