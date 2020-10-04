
<?php
require 'include/db_conn.php';

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


    <div class="row" style="padding-left: 35px;">


<div class="jumbotron" style="width:1100px  ;" >

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
		<h3>Income Per Month</h3>

		<hr / >

		<form class="form-inline" >
	<?php
	$yearArray = range(2000, date('Y'));
	?>
	<select name="year" class="form-control"  id="syear" >
	    <option value="0">Select Year</option>
	    <?php
	    foreach ($yearArray as $year) {
	        $selected = ($year == date('Y')) ? 'selected' : '';
	        echo '<option '.$selected.' value="'.$year.'">'.$year.'</option>';
	    }
	    ?>
	</select>


	<?php
	$formattedMonthArray = array(
	                    "01" => "January", "02" => "February", "03" => "March", "04" => "April",
	                    "05" => "May", "06" => "June", "07" => "July", "08" => "August",
	                    "09" => "September", "10" => "October", "11" => "November", "12" => "December",
	                );

	?>
	<select name="month" class="form-control" id="smonth">
	    <option value="0">Select Month</option>
	    <?php

	    foreach ($formattedMonthArray as $month) {
	        $mm=implode(array_keys($formattedMonthArray,$month));
	        $selected = ($mm == date('m')) ? 'selected' : '';

	        echo '<option '.$selected.' value="'.$mm.'">'.$month.'</option>';
	    }
	    ?>
	</select>

	<input type="button" class="btn btn-outline-dark"  name="search" onclick="showMember();" value="Search">

</form>
<br>
<table id="memmonth"border=2  class="table table-bordered table-dark"  style="font-size:15px;">

</table>


<script>

  function showMember(){
  	var year=document.getElementById("syear");
  	var month=document.getElementById("smonth");
  	var iyear=year.selectedIndex;
  	var imonth=month.selectedIndex;
  	var mnumber=month.options[imonth].value;
  	var ynumber=year.options[iyear].value;
  	if(mnumber=="0" || ynumber=="0"){
      document.getElementById("memmonth").innerHTML="";
      return;
  	}
  	else{
  		if(window.XMLHttpRequest){
  			xmlhttp=new XMLHttpRequest();
  		}
  		xmlhttp.onreadystatechange=function(){
  			if(this.readyState==4 && this.status ==200){
  				document.getElementById("memmonth").innerHTML=this.responseText;
  			}
  		};
  		xmlhttp.open("GET","income_month.php?mm="+mnumber+"&yy="+ynumber+"&flag=0",true);
  		xmlhttp.send();
  	}

  }

</script>


    	</div></div></div>

    </body>
</html>
