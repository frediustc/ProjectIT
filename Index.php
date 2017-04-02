<?php
$page = "Admin Dashboard";
$css = "Admin.dashboard";
$rep = "./";
include($rep . "php/include/head.php");
include($rep . "php/include/menu.php");
?>
<div class="row text-center charts">
    <div class="col-sm-4">
        <div class="box" id="visitors">

        </div>
    </div>
    <div class="col-sm-4">
        <div class="box" id="orders">

        </div>
    </div>
    <div class="col-sm-4">
        <div class="box" id="reports">

        </div>
    </div>
</div>
<div class="row" id="calendarReport">
    <div class="col-sm-9">
        <!-- calendar-->
        <div class="box">
            <div class="row fullcal">
                <div class="col-sm-5" id="appointement-view">
                    <div class="appointement-view-content">
                        <div class="option-top no-margin">
                            <p class="half text-left no-padding no-margin">
                                <a href="#" class="edit-appointment btn ddfj-crossicon"></a>
                            </p>
                            <p class="half text-right no-padding no-margin">
                                <a href="#" class="add-appointment btn ddfj-addicon"></a>
                            </p>
                        </div>
                        <h1 class="text-uppercase text-center">15<small>tuesday</small></h1>
                        <ul class="list-unstyled" id="list-appointement">
                            <li class="text-capitalize">Meeting with fredius tout court<i class="at">@ frediustc@gmail.com</i><span class="appointement-time">11:30 AM</span></li>
                            <li class="text-capitalize">Meeting with Barcklet<i class="at">@ donsimondavy@gmail.com</i><span class="appointement-time">4:30 PM</span></li>
                            <li class="text-capitalize">Meeting with Barcklet<i class="at">@ donsimondavy@gmail.com</i><span class="appointement-time">4:30 PM</span></li>
                            <li class="text-capitalize">Meeting with Barcklet<i class="at">@ donsimondavy@gmail.com</i><span class="appointement-time">4:30 PM</span></li>
                        </ul>
                        <form class="text-center" method="post" action="#">
                            <h1>Add New Appointement</h1>
                            <div class="form-group">
                                <label class="sr-only text-capitalize" for="apt_tle">Title of your appointment</label>
                                <input type="text" name="add_appointement_title" placeholder="Title of your appointment" required=""  class="form-control text-capitalize" id="apt_tle"/>
                            </div>
                            <div class="form-group">
                                <label class="sr-only text-capitalize" for="apt_email">email address of the customer</label>
                                <input type="email" name="add_appointement_email_address" placeholder="email address of the customer" class="form-control text-capitalize" required="" id="apt_email" />
                            </div>
                            <div class="form-group">
                                <label class="sr-only text-capitalize" for="apt_time">add the time of this appointement</label>
                                <input type="number" name="add_appointement_time" placeholder="add the time of this appointement" class="form-control text-capitalize" required="" id="apt_time" />
                            </div>
                            <input type="submit" value="Add Appointement" name="add_appointement" class="btn btn-primary" />
                        </form>
                    </div>
                </div>
                <div class="col-sm-7 text-uppercase">
                    <div id="calendar">
                        <h1 class="text-right"><span class="ddfj-menuicon"></span><span class="actual-time">12:04 AM</span></h1>
                    </div>
                </div>
            </div>

        </div>

        <!--orders and reports-->
        <div class="row">
            <?php include($rep . 'php/include/AdminDashboard/reports.php'); ?>
            <div class="col-xs-4 new-user-registed">
                <h3 class="text-right text-capitalize">14 New Registrations</h3>
                <div>
                    <div class="row">
                        <div class="col-xs-4 text-center">
                            <div>
                                <img src="<?php echo $rep; ?>media/images/pp/2.jpg" alt="F" class="new-user-pp img-circle"/>
                            </div>
                            <p>
                                Fredius Tout Court
                            </p>
                        </div>
                        <div class="col-xs-4 text-center">
                            <div>
                                <img src="<?php echo $rep; ?>media/images/pp/3.jpg" alt="A" class="new-user-pp img-circle"/>
                            </div>
                            <p>
                                Fredius Tout Court
                            </p>
                        </div>
                        <div class="col-xs-4 text-center">
                            <div>
                                <img src="<?php echo $rep; ?>media/images/pp/1.jpg" alt="B" class="new-user-pp img-circle"/>
                            </div>
                            <p>
                                Fredius Tout Court
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 text-center">
                            <div>
                                <img src="<?php echo $rep; ?>media/images/pp/0.jpg" alt="L" class="new-user-pp img-circle"/>
                            </div>
                            <p>
                                Fredius Tout Court
                            </p>
                        </div>
                        <div class="col-xs-4 text-center">
                            <div>
                                <img src="<?php echo $rep; ?>media/images/pp/1.jpg" alt="K" class="new-user-pp img-circle"/>
                            </div>
                            <p>
                                Fredius Tout Court
                            </p>
                        </div>
                        <div class="col-xs-4 text-center">
                            <div>
                                <img src="<?php echo $rep; ?>media/images/pp/2.jpg" alt="P" class="new-user-pp img-circle"/>
                            </div>
                            <p>
                                Fredius Tout Court
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 text-center">
                            <div>
                                <img src="<?php echo $rep; ?>media/images/pp/0.jpg" alt="L" class="new-user-pp img-circle"/>
                            </div>
                            <p>
                                Fredius Tout Court
                            </p>
                        </div>
                        <div class="col-xs-4 text-center">
                            <div>
                                <img src="<?php echo $rep; ?>media/images/pp/1.jpg" alt="K" class="new-user-pp img-circle"/>
                            </div>
                            <p>
                                Fredius Tout Court
                            </p>
                        </div>
                        <div class="col-xs-4 text-center">
                            <div>
                                <img src="<?php echo $rep; ?>media/images/pp/2.jpg" alt="P" class="new-user-pp img-circle"/>
                            </div>
                            <p>
                                Fredius Tout Court
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--notification display-->
    <div class="col-sm-3 notif">
        <h3 class="text-center notif-title">Notifications</h3>
        <ul class="list-continous notif-list">
            <li class="messages">
                <h5 class="text-capitalize"><b>Fredius Tout Court</b></h5>
                <p>Has been rented by Barklays</p>
                <p class="disabled">
                    2 days ago<span class="notif-type ddfj-usericon"></span>
                </p>
            </li>
            <li class="reports">
                <h5 class="text-capitalize"><b>Fredius Tout Court</b></h5>
                <p>Has been rented by Barklays</p>
                <p class="disabled">
                    2 days ago<span class="notif-type ddfj-usericon"></span>
                </p>
            </li>
            <li class="orders">
                <h5 class="text-capitalize"><b>Fredius Tout Court</b></h5>
                <p>Has been rented by Barklays</p>
                <p class="disabled">
                    2 days ago<span class="notif-type ddfj-usericon"></span>
                </p>
            </li>
            <li class="uploads">
                <h5 class="text-capitalize"><b>Fredius Tout Court</b></h5>
                <p>Has been rented by Barklays</p>
                <p class="disabled">
                    2 days ago<span class="notif-type ddfj-usericon"></span>
                </p>
            </li>
            <li class="rents">
                <h5 class="text-capitalize"><b>Fredius Tout Court</b></h5>
                <p>Has been rented by Barklays</p>
                <p class="disabled">
                    2 days ago<span class="notif-type ddfj-usericon"></span>
                </p>
            </li>
            <li class="rents">
                <h5 class="text-capitalize"><b>Fredius Tout Court</b></h5>
                <p>Has been rented by Barklays</p>
                <p class="disabled">
                    2 days ago<span class="notif-type ddfj-usericon"></span>
                </p>
            </li>
            <li class="uploads">
                <h5 class="text-capitalize"><b>Fredius Tout Court</b></h5>
                <p>Has been rented by Barklays</p>
                <p class="disabled">
                    2 days ago<span class="notif-type ddfj-usericon"></span>
                </p>
            </li>
            <li class="uploads">
                <h5 class="text-capitalize"><b>Fredius Tout Court</b></h5>
                <p>Has been rented by Barklays</p>
                <p class="disabled">
                    2 days ago<span class="notif-type ddfj-usericon"></span>
                </p>
            </li>
        </ul>
    </div>
</div>
<?php include($rep . "php/include/footer.php");?>
