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

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th class="bg-dark" style="color:white;">Sl.No</th>      <th class="bg-dark" style="color:white;">Member Name</th>

      <th class="bg-dark" style="color:white;">Routine Name</th>
        <th class="bg-dark" style="color:white;">Routine Details</th>
    </tr>
  </thead>
  <tbody>

				<?php

					$query  = "select * FROM users a, timetable b
        WHERE a.userid = b.tid";
					//echo $query;

					$result = mysqli_query($con, $query);

					$sno    = 1;

					if (mysqli_affected_rows($con) != 0)
					{
					    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
						{


					                 echo "<tr><td>".$sno."</td>";
                           echo "<td>" . $row['username'] . "</td>";
					                echo "<td>" . $row['tname'] . "</td>";


					                $sno++;

					              echo '<td><a href="viewdetailroutine.php?id='.$row['tid'].'"><input type="button" class="btn btn-info" value="View Details" ></a></td></tr>';

					                $uid = 0;


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
