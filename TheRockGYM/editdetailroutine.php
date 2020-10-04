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

    		<?php
    		$id=$_GET['id'];
    		$sql="Select * from timetable t Where t.tid=$id";
    		$res=mysqli_query($con, $sql);
    					 if($res){
    						      	$row=mysqli_fetch_array($res,MYSQLI_ASSOC);

    						      }

    		?>




                    <form id="form1" name="form1" method="post" class="a1-container" action="updateroutine.php">

                        <input type="hidden" name='tid' value='<?php echo $id?>'>

                  <div class="form-group row">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">DAY1</label>
                  <div class="col-sm-10">
                  <input name="day1" class="form-control" id="planID"  value='<?php echo $row['day1'] ?>' placeholder="enter planID">
                  </div>
                  </div>
                  <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">DAY2</label>
                  <div class="col-sm-10">
                  <input name="day2" id="planName" type="text"value='<?php echo $row['day2'] ?>' class="form-control" placeholder="Enter plan name" size="40">
                  </div>
                  </div>
                  <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">DAY3</label>
                  <div class="col-sm-10">
                  <input type="text" name="day3" id="planDesc"class="form-control" value='<?php echo $row['day3'] ?>' placeholder="Enter plan description" size="40"></td>
                  </div>
                  </div>
                  <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">DAY4</label>
                  <div class="col-sm-10">
                  <input type="text" name="day4" id="planVal"class="form-control" value='<?php echo $row['day4'] ?>' size="40"></td>
                  </div>
                  </div>
                  <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">DAY5</label>
                  <div class="col-sm-10">
                  <input type="text" name="day5" id="planAmnt" value='<?php echo $row['day5'] ?>' class="form-control"placeholder="Enter plan amount" size="40"></td>
                  </div>
                  </div>
                  <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">DAY6</label>
                  <div class="col-sm-10">
                  <input type="text" name="day6" id="planAmnt" value='<?php echo $row['day6'] ?>' class="form-control"placeholder="Enter plan amount" size="40"></td>
                  </div>
                  </div>

                  <div class="form-group row">
                  <div class="col-sm-3">
                  </div>
                  <div class="col-sm-7">

                  <button type="submit" class="btn btn-success">UPDATE PLAN</button>
                  <button type="reset" class="btn btn-info">RESET</button>
                  </div>
                  </div>
                </form>
  

                   </div>
                   </div>



                     </div>

                   </body>
               </html>
