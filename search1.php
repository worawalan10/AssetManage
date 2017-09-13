<!doctype html>
<html>
<head>
    <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/stylesheet-compiled.css?<?php echo rand(0,999); ?>">
  </head>
<?php

    include "header.php";
    //echo "<div>".$index.php."</div>"; //Change only this part on every other page you will create

?>
<body style="background-color:floralwhite;">
<div style="height:295px;">
        <form action="/action_page.php">
            <div class="form-group">
              <h2 class="text-center">ระบบตรวจนับครุภัณฑ์</h2><br>
              <center>
                  <div class="input-group col-xs-4">
                    <input type="text" class="form-control" placeholder="Search" name="search" id="ex3">
                    <div class="input-group-btn">
                      <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                  </div>
              </center>
            </div><br>
            <h4 class="text-center">หรือ</h4><br>
            <center><button type="submit" class="btn btn-default btn-lg">
                <span class="glyphicon glyphicon-qrcode"></span>&nbspค้นหาจากคิวอาร์โค้ด
            </button></center>
          </form><br><br>
</div>
</body>
<?php

	include "footer.php"

?>

 <script type="text/javascript" src="lib/jquery/jquery-3.2.1.min.js"></script>
    <!-- <script type="text/javascript" src="lib/popper/umd/popper.min.js"></script> -->
    <!-- <script type="text/javascript" src="lib/bootstrap-4.0.0/js/bootstrap.min.js"></script> -->
    <script type="text/javascript" src="lib/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="lib/bootstrap-validator/validator.min.js"></script>
    <script type="text/javascript" src="script/script.js?<?php echo rand(0,999); ?>"></script>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>	
</html>
