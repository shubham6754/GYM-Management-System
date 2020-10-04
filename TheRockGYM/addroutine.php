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

                <div class="jumbotron" style="width:800px;padding:20px 20px 20px 5px ;" >

     <nav class="navbar navbar-light bg-light">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">

      <a class="btn btn-success"href="viewroutine.php">VIEW ROUTINE <span class="sr-only">(current)</span></a>
    </li></ul>
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
        <h2><b><u>CREATE ROUTINE</u><b></h2>

  	<hr />


      <br>
 <div class="a1-container a1-small a1-padding-32" style="margin-top:2px;margin-left: 52px; margin-bottom:2px;margin-right:122px;">

                    <form id="form1" name="form1" method="post" class="a1-container" action="saveroutine.php">
                      <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">ROUTINE NAME</label>
                      <div class="col-sm-10">
                      <input name="rname" required class="form-control" id="planID"   placeholder="enter Routine name">
                      </div>
                      </div>
                  <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">DAY 1</label>
                  <div class="col-sm-10">
                  <input name="day1" required class="form-control" id="planID"   placeholder="enter Day 1 Plan">
                  </div>
                  </div>
                  <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">DAY 2</label>
                  <div class="col-sm-10">
                  <input name="day2" id="planName" required type="text" class="form-control" placeholder="enter Day 2 Plan" size="40">
                  </div>
                  </div>
                  <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">DAY 3</label>
                  <div class="col-sm-10">
                  <input type="text" name="day3"required  id="planDesc"class="form-control"  placeholder="enter Day 3 Plan" size="40"></td>
                  </div>
                  </div>
                  <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">DAY 4</label>
                  <div class="col-sm-10">
                  <input type="text" name="day4" required id="planVal"class="form-control" placeholder="enter Day 4 Plan" size="40"></td>
                  </div>
                  </div>
                  <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">DAY 5</label>
                  <div class="col-sm-10">
                  <input type="text" name="day5" required id="planAmnt"class="form-control"placeholder="enter Day 5 Plan" size="40"></td>
                  </div>
                  </div>
                  <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">DAY 6</label>
                  <div class="col-sm-10">
                  <input type="text" name="day6" required id="planAmnt"  class="form-control"placeholder="enter Day 6 Plan" size="40"></td>
                  </div>
                  </div>

                  <div class="form-group row">
                  <div class="col-sm-3">
                  </div>
                  <div class="col-sm-7">

                  <button type="submit" class="btn btn-success">ADD ROUTINE</button>
                  <button type="reset" class="btn btn-info">RESET</button>
                  </div>
                  </div>
                </form>
              </div>

    </div>
    </div>

    	</div>

    </body>
</html>
