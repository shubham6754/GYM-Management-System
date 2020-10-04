<?php
require 'include/db_conn.php';

if (isset($_POST['userID']) && isset($_POST['planID'])) {
    $uid  = $_POST['userID'];
    $planid=$_POST['planID'];
    $query1 = "select * from users WHERE userid='$uid'";

    $result1 = mysqli_query($con, $query1);

    if (mysqli_affected_rows($con) == 1) {
        while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {

            $name = $row1['username'];
            $query2="select * from plan where pid='$planid'";

            $result2=mysqli_query($con,$query2);
            if($result2){
               $planValue=mysqli_fetch_array($result2,MYSQLI_ASSOC);
               $planName=$planValue['planName'];
            }
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
    background-color: #7AAC83;

  }
</style>

</head>
<body>

<div class="container-fluid">


    <div class="row"style="padding-top:20px;">


          <?php include('sidenav.php'); ?>

          <div class="col-md-8">

          <div class="container">

<div class="jumbotron" style="width:800px  ;" >

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

	<hr />


  <div class="a1-container a1-small a1-padding-32" style="margin-top:2px; margin-bottom:2px;margin-right:122px;">
  <div class="a1-card-8 a1-light-gray" style="width:600px; margin:0 auto;">

    <h2><b>MAKE PAYMENT<b></h2>

      	<hr />
        <br>
       <form id="form1" name="form1" method="post" class="a1-container" action="submit_payments.php">

  	<table width="100%" border="0" align="center">
             <div class="form-group row">
               <label for="inputEmail3" class="col col-form-label">User ID:</label>
               <div class="col-sm-8">
                 <input name="uid" readonly required value=<?php echo $uid?> type="text" class="form-control" id="boxxe" placeholder="enter planID">
               </div>
             </div>


  <div class="form-group row">

      <label for="inputEmail3" class="col col-form-label">NAME:</label>
        <div class="col-sm-8">
          <input id="boxxe" type="text" name="uname" value='<?php echo $name?>' height="20px" class="form-control" id="boxxe" placeholder="enter name">
  </div>
  </div>


  </div>
  <div class="form-group row">
     <label for="inputEmail3" class="col col-form-label">CURRENT PLAN:</label>
       <div class="col-sm-8">
<input type="text" name="prevPlan" id="boxx" class="form-control" value="<?php echo $planName; ?>" readonly>
   </div>
   </div>


   <div class="form-group row">

         <label for="inputEmail3" class="col col-form-label">SELECT NEW PLAN:</label>
      <div class="col-sm-8">
        <select name="plan" id="boxx" class="form-control" required onchange="myplandetail(this.value)">
        <option value="">-- Please select --</option>
        <?php

           $query = "select * from plan where active='yes'";

           $result = mysqli_query($con, $query);

           if (mysqli_affected_rows($con) != 0) {
               while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                   echo "<option   value=" . $row['pid'] . ">" . $row['planName'] . "</option>";

               }
           }

        ?>
        </select>   </div>
  </div>

  <table id="plandetls">

  </table>
  </td>
  <br>

  <div class="col-sm-7">
    <tr>
      <td height="35"></td>
      <td height="35"><input class="btn btn-success" type="submit" name="submit" id="submit" value="ADD PAYMENT" >
        <input class="btn btn-info" type="reset" name="reset" id="reset" value="Reset"></td>

    </tr>
  </div>

  </form>

		</div>


    </body>
</html>


 <script>
        	function myplandetail(str){

        		if(str==""){
        			document.getElementById("plandetls").innerHTML = "";
        			return;
        		}else{
        			if (window.XMLHttpRequest) {
           			 xmlhttp = new XMLHttpRequest();
       				 }
       			 	xmlhttp.onreadystatechange = function() {
            		if (this.readyState == 4 && this.status == 200) {
               		 document.getElementById("plandetls").innerHTML=this.responseText;

            			}
        			};

       				 xmlhttp.open("GET","plandetail.php?q="+str,true);
       				 xmlhttp.send();
        		}

        	}
        </script>

<?php
} else {

}
?>
