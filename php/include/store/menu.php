<aside class="sidebar sidebar-fixed-left" id="menuLeft">
    <div class="sidebar-fit nav text-ubillboardsercase text-center">
        <h1>Store</h1>
        <ul class="text-center list-unstyled">
            <li><a href="../Home/" <?php echo ($page === 'Store Home Page' || $page === 'Store Article Page') ? 'class="actived"': ''; ?> >Home</a></li>
            <li><a href="../Account/" <?php echo ($page === 'Store Account Page') ? 'class="actived"': ''; ?> >Account</a></li>
            <li><a href="../Purchases/" <?php echo ($page === 'Store Purchases Page') ? 'class="actived"': ''; ?> >Purchases</a></li>
            <li><a href="../Contact/" <?php echo ($page === 'Store Contact Page') ? 'class="actived"': ''; ?> >Contact</a></li>
            <?php if (isset($_SESSION['user_id'])) {
                echo '<li><a href="'.$rep.'Logout/">Logout</a></li';
            } ?>
        </ul>
    </div>
</aside>
<div class="container-fluid">
