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



              <div class="col-md-8">

              <div class="container">

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



<br>

		<h2><b>Health Status</b></h2>

    <table class="table table-bordered table-dark" id="table-1" border=1>

		      <thead class="thead-dark">

		        <tr>
		          <th class="bg-dark" style="color:white;">Sl.No</th>
		          <th class="bg-dark" style="color:white;">Member ID</th>
							<th class="bg-dark" style="color:white;">Name</th>
					 	 <th class="bg-dark" style="color:white;">Contact</th>
						 <th class="bg-dark" style="color:white;">E-Mail</th>
						 <th class="bg-dark" style="color:white;">Gender</th>
						 <th class="bg-dark" style="color:white;">Date Of Birth</th>
						 <th class="bg-dark" style="color:white;">Joining date</th>

						 <th class="bg-dark" style="color:white;">Action</th></h2>

					  </tr>
		      </thead>
		      <tbody>



						<?php
							$query  = "select * from users ORDER BY joining_date";
							$result = mysqli_query($con, $query);
							$sno    = 1;

							if (mysqli_affected_rows($con) != 0) {
							    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							        $uid   = $row['userid'];
							        $uname;
							        $udob;
							        $ujoing;
							        $ugender;
							        $query1  = "select * from enrolls_to WHERE uid='$uid' AND renewal='yes'";
							        $result1 = mysqli_query($con, $query1);
							        if (mysqli_affected_rows($con) == 1) {
							            while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {

							                echo "<tr><td>".$sno."</td>";

							                echo "<td>" . $row['userid'] . "</td>";

							                echo "<td>" . $row['username'] . "</td>";

							                echo "<td>" . $row['mobile'] . "</td>";

							                echo "<td>" . $row['email'] . "</td>";

							                echo "<td>" . $row['gender'] . "</td>";

							                echo "<td>" . $row['dob'] . "</td>";

							                echo "<td>" . $row['joining_date'] ."</td>";

							                $uname=$row['username'];
							       			$udob=$row['dob'];
							        		$ujoing=$row['joining_date'];
							        		$ugender=$row['gender'];

							                $sno++;

							                echo "<td><form action='health_status_entry.php' method='post'><input type='hidden' name='uid' value='" . $uid . "'/>
							                <input type='hidden' name='uname' value='" . $uname . "'/>
							                <input type='hidden' name='udob' value='" . $udob . "'/>

							                <input type='hidden' name='ujoin' value='" . $ujoing . "'/>
							                <input type='hidden' name='ugender' value='" . $ugender . "'/><input type='submit' class='btn btn-success' id='button1' value='Health Status' class='btn btn-success'/></form></td></tr>";
							                $msgid = 0;
							            }
							        }
							    }
							}
						?>
					</tbody>
				</table>


    	</div>
	</div>	</div>
    </body>
</html>
