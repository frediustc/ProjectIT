<?php
$rep = "../../";
$section_type = 'store';
$page = "Verification Page";
include $rep . 'php/include/head.php';
?>
    <div class="container">
      <div class="row">
        <div class="col-xs-6 col-xs-push-3">
            <form class="" action="./" method="post">
                <div class="form-group text-center">
                  <h1>Enter your validation code here</h1>
                  <?php include $rep . 'php/script/checkemailcode.php'; ?>
                  <input type="text" class="form-control text-center input-lg text-uppercase" name="code" placeholder="EX: GT3A776V1W97MAUF95T4LUQDW7HTXLLHRU018B7IIU6IDRB6ZX" required="">
                </div>
                <div class="text-center">
                    <input type="submit" name="sub" value="check code" class="btn btn-primary bg-primary btn-3d btn-lg"/>
                </div>
            </form>
        </div>
      </div>
    </div>
  </body>
</html>
