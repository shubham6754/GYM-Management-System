<?php
require 'include/db_conn.php';


$uid=0;
$uname=0;

$cal="";
$hei="";
$wei="";
$fa="";
$remar="";

if(isset($_POST['submit'])){
	$calorie=$_POST['calorie'];
	$height=$_POST['height'];
	$weight=$_POST['weight'];
	$fat=$_POST['fat'];
	$remarks=$_POST['remarks'];
	$userid=$_POST['uid'];

	$query="update health_status set calorie='".$calorie."', height='".$height."',weight='".$weight."',fat='".$fat."',remarks='".$remarks."' where uid='".$userid."'";

	if(mysqli_query($con,$query)){
		echo "<head><script>alert('Health Status Added ');</script></head></html>";
        echo "<meta http-equiv='refresh' content='0; url=new_health_status.php'>";

	}
	else{
	 echo "<head><script>alert('NOT SUCCESSFUL, Check Again');</script></head></html>";
	 echo "error".mysqli_error($con);
	 echo "<meta http-equiv='refresh' content='0; url=new_health_status.php'>";

	}


}
else{
	$uid=$_POST['uid'];
	$uname=$_POST['uname'];

	$sql="select * from health_status where uid='".$uid."'";
	$result=mysqli_query($con,$sql);
	if($result){
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
       	$cal=$row['calorie'];
		$hei=$row['height'];
		$wei=$row['weight'];
		$fa=$row['fat'];
		$remar=$row['remarks'];
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

<br>



<div class="a1-container a1-small a1-padding-32" style="margin-top:2px; margin-bottom:2px;margin-right:122px;">
<div class="a1-card-8 a1-light-gray" style="width:600px; margin:0 auto;">
<h2><b><u>Enter Health Data</u><b></h2>

	  	<hr />
      </div>
      <br>

<form name="bmiForm" class="a1-container" method="post" class="a1-container" action="">
	<div class="form-group row">
		<label for="inputEmail3" class="col-sm-2 col-form-label">User ID:</label>
		<div class="col-sm-10">
			<input name="uid" readonly required value=<?php echo $uid?> type="text" class="form-control" id="boxxe" placeholder="enter planID">
		</div>
	</div>


<div class="form-group row">
<label for="inputEmail3" class="col-sm-2 col-form-label">NAME:</label>
<div class="col-sm-10">
<input id="boxxe" type="text"  readonly name="uname" value='<?php echo $uname?>' height="20px" class="form-control" id="boxxe" placeholder="enter name">
</div>
</div>

	<div class="form-group row">
	   <label for="inputEmail3" class="col-sm-2 col-form-label">CALORIE:</label>
	     <div class="col-sm-10">
	  <input type="text" id="boxxe" name="calorie" value=<?php echo $cal?> height="20px" class="form-control" id="boxxe" placeholder="enter Calories/day">
	     </div>
	 </div>
	 <div class="form-group row">
		<label for="inputEmail3" class="col-sm-2 col-form-label">WEIGHT(kg):</label>
			<div class="col-sm-10">
		<input type="text" id="boxxe" name="weight" value='<?php echo $wei?>' height="20px" class="form-control" id="boxxe" placeholder="enter Weight">
			</div>
	 </div>


	 <div class="form-group row">
		<label for="inputEmail3" class="col-sm-2 col-form-label">HEIGHT(cm):</label>
			<div class="col-sm-10">
		<input type="text" id="boxxe" name="height" value='<?php echo $hei?>' height="20px" class="form-control" id="boxxe" placeholder="enter Weight">
			</div>
	 </div>





	 <div class="form-group row">
	  <label for="inputEmail3" class="col-sm-2 col-form-label">FAT:</label>
	    <div class="col-sm-10">
	  <input type="text" id="boxxe" name="fat" value='<?php echo $fa?> 'height="20px" class="form-control" id="boxxe" placeholder="enter Body Fat Percent">
	    </div>
	 </div>

<input type="button" class="btn btn-dark" value="Calculate BMI" onClick="calculateBmi()">

	<hr />
<div class="form-group row">
 <label for="inputEmail3" class="col-sm-3 col-form-label">BMI:</label>
	 <div class="col-sm-9" style="width:30px">
<input type="text" name="bmi" size="25" class="form-control"></div>
</div>


<div class="form-group row">
 <label for="inputEmail3" class="col-sm-3 col-form-label">This Means:</label>
	 <div class="col-sm-9" style="width:30px">
<input type="text" name="meaning"  class="form-control"></div>
</div>
<div class="form-group row">
 <label for="inputEmail3" class="col-sm-3 col-form-label">REMARKS:</label>
	 <div class="col-sm-9" style="width:30px">
		 <input type="text" id="boxxe" name="remarks" value='<?php echo $remar?> 'height="20px" class="form-control" id="boxxe" placeholder="Trainer Remarks">
</div>
</div>
<input class="btn btn-success" type="submit" name="submit" id="submit" value="SUBMIT" >
	<input class="btn btn-info" type="reset" name="reset" id="reset" value="Reset">

</form>

  </div>
  </div>


</div>
</div>


</div>


</div>
</div>
</body>
</html>
<script language="JavaScript">
<!--
function calculateBmi() {
var weight = document.bmiForm.weight.value
var height = document.bmiForm.height.value
if(weight > 0 && height > 0){
var finalBmi = weight/(height/100*height/100)
document.bmiForm.bmi.value = finalBmi
if(finalBmi < 18.5){
document.bmiForm.meaning.value = "That member is too thin."
}
if(finalBmi > 18.5 && finalBmi < 25){
document.bmiForm.meaning.value = "That member is healthy."
}
if(finalBmi > 25){
document.bmiForm.meaning.value = "That  member have overweight."
}
}
else{
alert("Please Fill in weight and height ")
}
}

</script>
