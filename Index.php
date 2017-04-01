<?php
$page = "Admin Dashboard";
$css = "Admin.dashboard";
include("php/include/head.php");
include("php/include/menu.php");
?>
<div class="row text-center charts">
    <div class="col-sm-4 chart" id="visitors"></div>
    <div class="col-sm-4 chart" id="orders"></div>
    <div class="col-sm-4 chart" id="reports"></div>
</div>
<div class="row">
    <div class="col-sm-9">
        <!-- calendar-->
        <div class="row" id="fullcal">
            <div class="col-sm-5" id="appointement-view">
                <div class="row">
                    <p class="col-xs-6 text-left">
                        <a href="#" class="edit-appointment btn ddfj-crossicon"></a>
                    </p>
                    <p class="col-xs-6 text-right">
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
            <div class="col-sm-7 text-uppercase" id="calendar">
                <h1 class="text-right"><span class="ddfj-menuicon"></span><span class="actual-time">12:04 AM</span></h1>
            </div>
        </div>
        <!--orders and reports-->
        <div class="row text-center ok">
            <!-- reports-->
            <div class="col-sm-6">
                <h3>Reports</h3>
                <table class="lastest-reports">
                    <thead class="text-uppercase">
                        <tr>
                            <th><input type="checkbox" name="check-all-reports" /></th>
                            <th>Customers</th>
                            <th>Reports</th>
                            <th>Reports Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="checkbox" name="check-report-1" /></td>
                            <td class="text-capitalize"><a href="#"><span class="img-sizing"><img src="" alt="pp cust"/></span>Fredius Tout Court</a></td>
                            <td><a href="#">Fredius Tout Court wutewu wieuwe wiyw dwiyd wiydgwd iiwygd wdygwd wuhdgkj\ syugji daiudgb</a></td>
                            <td class="text-capitalize">21<sup>St</sup> Juin 2016</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--orders-->
            <div class="col-sm-6">
                <h1>ok</h1>
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

<?php include("php/include/footer.php");?>
