<?php
require 'include/db_conn.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap.min" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-grid" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-grid.min" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-reboot" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-reboot.min" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap.bundle" rel="stylesheet" media="screen">
    <link href="bootstrap/js/bootstrap.bundle.min" rel="stylesheet" media="screen">
     <link href="bootstrap/js/bootstrap.bundle.min" rel="stylesheet" media="screen">
     <link href="bootstrap/js/bootstrap" rel="stylesheet" media="screen">
     <link href="bootstrap/js/bootstrap.min" rel="stylesheet" media="screen">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <style type="text/css">
    #inputbtn:hover{cursor:pointer;}
  </style>
  <body style="background:url('images/22.jpg'); background-size: cover;">
    <div class="container-fluid" style="margin-top:60px;margin-bottom:60px;color:#34495E;">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-7"></div>

        <div class="col-md-4">
          <div class="card">
            <img src="images/21.jpg" class="card-img-top">
            <div class="card-body">
              <center


              <h5><b>Admin Login</b></h5>
              <br>
              <br>
              <form class="form-group" name="login" method="POST" action="">
                <div class="row">
                  <div class="col-md-4"><label>Username: </label></div>
                  <div class="col-md-8"><input type="text" name="username" class="form-control" placeholder="enter username" required/></div><br><br>
                  <div class="col-md-4"><label>Password: </label></div>
                  <div class="col-md-8"><input type="password" class="form-control" name="password" placeholder="enter password" required/></div><br><br><br>
                </div>
                <center><input type="submit" name="submit" value="Login" class="btn btn-outline-primary"></center>
              </form>


              </center>




&ensp;
				        <a style="color:#5D2573; text-decoration: none;" href="forgot_password.php">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Forgot password?</a>
				      </p>

              </form>


            </center>
            </div>
          </div>
        </div>
         <div class="col-md-7"></div>
      </div>
    </div>
		<?php

	    if(isset($_POST['submit']))
	    {
	      $count=0;
	      $res=mysqli_query($con,"SELECT * FROM `admin` WHERE username='$_POST[username]' && pass_key='$_POST[password]';");
				$row= mysqli_fetch_assoc($res);
	      $count=mysqli_num_rows($res);

	      if($count==0)
	      {
	        ?>

	              <script type="text/javascript">
	                alert("The username and password doesn't match.");
	              </script>



	        <?php
	      }
	      else
	      {
	        $_SESSION['login_user'] = $_POST['username'];


	        ?>
	          <script type="text/javascript">
	            window.location="new_entry.php"
	          </script>
	        <?php
	      }
	    }

	  ?>



  </body>
</html>
