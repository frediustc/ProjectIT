<?php
$page = "Admin Dashboard";
$rep = "../";
include($rep . "../php/include/head.php");
include($rep . "../php/include/menu.php");
?>
<div class="row text-center">
    <div class="col-sm-4">
        <div class="box box-top box-primary" id="visitors"></div>
    </div>
    <div class="col-sm-4">
        <div class="box box-top box-warning" id="orders"></div>
    </div>
    <div class="col-sm-4">
        <div class="box box-top box-success" id="reports"></div>
    </div>
</div>
<div class="row" id="calendarReport">
    <div class="col-sm-9">
        <!-- calendar-->
        <div class="box box-top box-alt">
            <div class="row fullcal">
                <div class="col-sm-5" id="appointement-view">
                    <div class="appointement-view-content">
                        <div class="option-top no-margin">
                            <p class="text-right"><a href="#" class="add-appointment btn"><span class=" glyphicon glyphicon-plus"></span></a></p>
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
                    </div>
                </div>
            </div>

        </div>

        <!--orders and reports-->
        <div class="row">
            <div class="col-xs-8">
                <h3>Lastest Reports</h3>
                <div class="box box-top  box-danger">
                    <table class="lastest-reports table">
                        <thead class="text-uppercase">
                            <tr>
                                <th>Customers</th>
                                <th>Reports</th>
                                <th>Reports Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-capitalize text-center"><a href="#"><span class="pp-account-small bg-success box-circle text-center">FTC</span><br />Fredius Tout...</a></td>
                                <td><a href="#">Fredius Tout Court wutewu wieuwe wiyw dwiyd wiydgwd iiwygd wdygwd wuhdgkj\ </a></td>
                                <td class="text-capitalize">21<sup>St</sup> Juin 2016</td>
                            </tr>
                            <tr>
                                <td class="text-capitalize text-center"><a href="#"><span class="pp-account-small bg-success box-circle text-center">FTC</span><br />Fredius Tout...</a></td>
                                <td><a href="#">Fredius Tout Court wutewu wieuwe wiyw dwiyd wiydgwd iiwygd wdygwd wuhdgkj\ </a></td>
                                <td class="text-capitalize">21<sup>St</sup> Juin 2016</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-xs-4">
                <h3 class="text-right text-capitalize">14 New Registrations</h3>
                <div class="box box-top new-user-registed box-alt">
                    <div class="row">
                        <div class="col-xs-4 text-center">
                            <div>
                                <span class="pp-account-small bg-success box-circle">FTC</span>
                            </div>
                            <p>
                                Fredius Tout Court
                            </p>
                        </div>
                        <div class="col-xs-4 text-center">
                            <div>
                                <span class="pp-account-small bg-alt box-circle">FTC</span>
                            </div>
                            <p>
                                Fredius Tout Court
                            </p>
                        </div>
                        <div class="col-xs-4 text-center">
                            <div>
                                <span class="pp-account-small bg-danger box-circle">FTC</span>
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
<?php include($rep . "../php/include/footer.php");?>
