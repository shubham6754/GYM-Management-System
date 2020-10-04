<?php
require 'include/db_conn.php';
session_start();


if(isset($_POST['submit'])){

  $fulname=$_POST['full_name'];

  $query="update admin set username='".$fulname."' where username='".$_SESSION['login_user']."'";

  if(mysqli_query($con,$query)){
  	echo "<head><script>alert('Profile Change ');</script></head></html>";

     echo "<meta http-equiv='refresh' content='0; url=logout.php'>";
  }
  else{
  	echo "<head><script>alert('NOT SUCCESSFUL, Check Again');</script></head></html>";
	 echo "error".mysqli_error($con);
  }


}

?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    </head>
    <title></title>>

    <style type="text/css">
      body
      {
        background-color: #4F40AB;

      }
    </style>







      <body>


      <div class="container-fluid">


      <div class="row"style="padding-top:20px;">


        <?php include('sidenav.php'); ?>

      <div class="col-md-8">

    <div class="container">

    <div class="jumbotron" style="width:800px;padding:20px 20px 20px 5px ;" >

      <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="new_entry.php">
          <img src="images/98.png" width="30" height="30" class="d-inline-block align-top" alt="">
          Home
        </a>
        <a class="navbar-brand" href="index.php">
          <img src="images/90.jfif" width="30" height="30" class="d-inline-block align-top" alt="">
          LOGOUT
        </a>

      </nav>

       <h3><b><font color="red">Edit user profile</b></h3>

       (You will be required to Login Again After Profile Update)
       </font>

  	<hr />



    <div class="a1-container a1-small a1-padding-32" style="margin-top:2px;margin-left: 52px; margin-bottom:2px;margin-right:122px;">


       <form id="form1" name="form1" method="post" class="a1-container" action="">
         <table width="100%" border="0" align="center">
          <h4>  <b>	<u>CHANGE PROFILE</u></b> <h4><tr>
               <td height="35"><b>FULL NAME:</b></td>
               <td height="35"><input class="form-control" type="text" name="full_name" id="textfield2" value="<?php echo  $_SESSION['login_user']; ?>" maxlength="25" required></td>
             </tr>
             <tr>
               <td height="35"><b>PASSWORD:</b></td>
               <td height="35"><span class="form-control">*********</span> <a href="change_pwd.php" class="a1-btn a1-orange">Change password</a> <span class="help-block">*For security reasons hidden</span></td><br>
             </tr>



             <tr>
             <tr>

               <td height="35">&nbsp;</td>
               <td height="35"><input class="btn btn-success" type="submit" name="submit" id="submit" value="SUBMIT" >
                 <input class="btn btn-info" type="reset" name="reset" id="reset" value="Reset"></td>
             </tr>
           </table></td>
         </tr>
         </table>
       </form>
     </div>
    </div>
    </div>



    	</div>

    </body>
</html>
