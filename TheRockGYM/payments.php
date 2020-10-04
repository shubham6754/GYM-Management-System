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

    <h2><b>Payments</b></h2>

        <table class="table table-bordered table-dark" >
          <thead class="thead-dark">

            <tr>
              <th class="bg-dark" style="color:white;">Sl.No</th>
              <th class="bg-dark" style="color:white;">Membership Expiry</th>
              <th class="bg-dark" style="color:white;">Name</th>
             <th class="bg-dark" style="color:white;">Member ID</th>
             <th class="bg-dark" style="color:white;">Phone</th>
             <th class="bg-dark" style="color:white;">Gender</th>

             <th class="bg-dark" style="color:white;">Action</th></h2>

            </tr>
          </thead>
          <tbody>



            <?php


              $query  = "select * from enrolls_to where renewal='yes' ORDER BY expire";
              $result = mysqli_query($con, $query);
              $sno    = 1;

              if (mysqli_affected_rows($con) != 0) {
                  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

                      $uid   = $row['uid'];
                      $planid=$row['pid'];
                      $query1  = "select * from users WHERE userid='$uid'";
                      $result1 = mysqli_query($con, $query1);
                      if (mysqli_affected_rows($con) == 1) {
                          while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {

                               echo "<tr><td>".$sno."</td>";
                              echo "<td>" . $row['expire'] . "</td>";
                              echo "<td>" . $row1['username'] . "</td>";
                              echo "<td>" . $row1['userid'] . "</td>";
                              echo "<td>" . $row1['mobile'] . "</td>";
                              echo "<td>" . $row1['gender'] . "</td>";

                              $sno++;

                              echo "<td><form action='make_payments.php' method='post'><input type='hidden' name='userID' value='" . $uid . "'/>
                              <input type='hidden' name='planID' value='" . $planid . "'/><input type='submit' class='btn btn-success' value='Add Payment ' class='btn btn-info'/></form></td></tr>";

                              $uid = 0;
                          }
                      }
                  }
              }

              ?>
          </tbody>
        </table>


    	</div>

    </body>
</html>
