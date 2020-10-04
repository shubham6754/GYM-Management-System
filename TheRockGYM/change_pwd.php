<?php
require 'include/db_conn.php';
session_start();


if(isset($_POST['submit'])){
if($_POST['pwfield']==$_POST['confirmfield']){
  $fulname=$_POST['pwfield'];

  $query="update admin set pass_key='".$fulname."' where username='".$_SESSION['login_user']."'";

  if(mysqli_query($con,$query)){
  	echo "<head><script>alert('Profile Change ');</script></head></html>";

     echo "<meta http-equiv='refresh' content='0; url=logout.php'>";
  }
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
			<div class="a1-container a1-small a1-padding-32" style="margin-top:2px; margin-bottom:2px;">
        <div class="a1-card-8 a1-light-gray" style="width:500px; margin:0 auto;">
		<div class="a1-container a1-dark-gray a1-center">
        	<h5><b><u>CHANGE PASSWORD</u></b></h5>
          <br>
        </div>
       <form id="form1" name="form1" action="" enctype="multipart/form-data" method="POST" class="a1-container" >
         <div class="form-group row">
           <label for="inputEmail3" class="col-sm-2 col-form-label"><b>PASSWORD:</b></label>
           <div class="col-sm-10">
<input type="password" name="pwfield" id="boxx" required="" class="form-control"  data-rule-required="true" data-rule-minlength="6" placeholder="Your new passowrd">           </div>
         </div>

         <div class="form-group row">
           <label for="inputEmail3" class="col-sm-2 col-form-label"><b>CONFIRM:</b></label>
           <div class="col-sm-10">
<input type="password" name="confirmfield" id="boxx" required="" class="form-control"  data-rule-equalto="#pwfield" data-rule-required="true" data-rule-minlength="6" placeholder="Confirm Your new passowrd">         </div>
</div>




             <tr>
               <td height="35"></td>
               <td height="35"><input class="btn btn-success"type="submit" name="submit" id="submit" value="SUBMIT" >
                 <input class="btn btn-info" type="reset" name="reset" id="reset" value="Reset"></td>
             </tr>
           </table></td>
         </tr>
         </table>
       </form>
    </div>
    </div>







    	</div>

    </body>
</html>
