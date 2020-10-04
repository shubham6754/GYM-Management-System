
<?php
require 'include/db_conn.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

      <link rel="stylesheet" href="bootstrap/css/bootstrap.min">
      <link rel="stylesheet" href="bootstrap/css/bootstrap">
      <link rel="stylesheet" href="bootstrap-theme.min">      <link rel="stylesheet" href="bootstrap/css/bootstrap.css.min">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">




    <title></title>>
    <style type="text/css">
      body
      {
        background-color: #B84CA6;

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



    <h1 style="text-align: center; "><b>PLAN DETAILS</b></h1>

      	<hr />

            <table class="table table-bordered table-dark" >
  <thead>
    <tr>
      <th class="bg-dark" style="color:white;">S.No</th>
      <th class="bg-dark" style="color:white;">Plan ID</th>
      <th class="bg-dark" style="color:white;">Plan Name</th>
      <th class="bg-dark" style="color:white;">Plan Details</th>
      <th class="bg-dark" style="color:white;">Month</th>
      <th class="bg-dark" style="color:white;">Rate</th>
      <th class="bg-dark" style="color:white;">Action</th>


    </tr>
  </thead>
  <tbody


        <?php


    $query  = "select * from plan where active='yes' ORDER BY amount DESC";
    $result = mysqli_query($con, $query);
    $sno    = 1;

    if (mysqli_affected_rows($con) != 0) {
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $msgid = $row['pid'];


            echo "<tr><td>" . $sno . "</td>";
            echo "<td>" . $row['pid'] . "</td>";
            echo "<td>" . $row['planName'] . "</td>";
            echo "<td width='380'>" . $row['description'] . "</td>";
            echo "<td>" . $row['validity'] . "</td>";
            echo "<td>₹" . $row['amount'] . "</td>";

            $sno++;

            echo '<td><a href=edit_plan.php?id="'.$row['pid'].'">
            <input type="button" class="btn btn-info" id="boxxe" style="width:100%" value="Edit Plan" >
            </a><form action="del_plan.php" method="post" onSubmit="return ConfirmDelete();">
            <input type="hidden" name="name" value="' . $msgid .'"/>
            <input type="submit" id="button1" value="Delete Plan" class="btn btn-danger"/></form></td></tr>';

        $msgid = 0;
        }

    }

    ?>
  </tbody>
		</table>

  </div>
  </div>
</div>



    </body>
</html>
