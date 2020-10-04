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








  <h1 ><b><u>NEW PLAN DETAILS</u><b></h1>

      	<hr />
        <form id="form1" name="form1" method="post" class="a1-container" action="submit_plan_new.php">
  <div class="form-group row">
    <label for="inputEmail3" class="col col-form-label">PLAN ID</label>
    <div class="col-sm-8">
      <input name="planid" class="form-control" id="planID" placeholder="enter planID">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col col-form-label">PLAN NAME:</label>
    <div class="col-sm-8">
      <input name="planname" id="planName" type="text" class="form-control" placeholder="Enter plan name" size="40">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col col-form-label">PLAN DESCRIPTION</label>
    <div class="col-sm-8">
      <input type="text" name="desc" id="planDesc"class="form-control" placeholder="Enter plan description" size="40"></td>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col col-form-label">PLAN VALIDITY</label>
    <div class="col-sm-8">
      <input type="number" name="planval" id="planVal"class="form-control" placeholder="Enter validity in months" size="40"></td>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col col-form-label">PLAN AMOUNT</label>
    <div class="col-sm-8">
      <input type="text" name="amount" id="planAmnt" class="form-control"placeholder="Enter plan amount" size="40"></td>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-7">

      <button type="submit" class="btn btn-success">CREATE PLAN</button>
      <button type="reset" class="btn btn-info">RESET</button>
    </div>
  </div>
</form>



</div>
</div>

  </body>
</html>
