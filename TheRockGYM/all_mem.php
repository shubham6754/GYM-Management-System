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
        background-color: #4F40AB;

      }
    </style>




      <body>


    <div class="jumbotron" style="width:1600px;padding:20px 20px 20px 5px ;" >




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


    		<h2><b>FULL DETAILS</b></h2>

    		    <table class="table table-bordered table-dark" >
    		      <thead class="thead-dark">

    		        <tr><h2>
    		          <th class="bg-dark" style="color:white;">Sl.No</th>
    		          <th class="bg-dark" style="color:white;">Membership Expiry</th>
                  <th class="bg-dark" style="color:white;">Member ID</th>

                  <th class="bg-dark" style="color:white;">Name</th>
    					 	 <th class="bg-dark" style="color:white;">Contact</th>
    						 <th class="bg-dark" style="color:white;">E-Mail</th>
    						 <th class="bg-dark" style="color:white;">City</th>
    						 <th class="bg-dark" style="color:white;">state</th>
    						 <th class="bg-dark" style="color:white;">Zipcode</th>
                 <th class="bg-dark" style="color:white;">StreetName</th>

                 <th class="bg-dark" style="color:white;">Gender</th>
                 <th class="bg-dark" style="color:white;">Joining Date</th>

    					  </tr>
    		      </thead>
    		      <tbody>


          <?php

        $query  = "select * FROM users a, address b
      WHERE a.userid = b.id
      ORDER BY joining_date";

							$result = mysqli_query($con, $query);
							$sno    = 1;

							if (mysqli_affected_rows($con) != 0) {
							    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							        $uid   = $row['userid'];
							        $query1  = "select * from enrolls_to WHERE uid='$uid' AND renewal='yes'";
							        $result1 = mysqli_query($con, $query1);
							        if (mysqli_affected_rows($con) == 1) {
							            while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {

							                echo "<tr><td>".$sno."</td>";

							                echo "<td>" . $row1['expire'] . "</td>";

							                echo "<td>" . $row['userid'] . "</td>";

							                echo "<td>" . $row['username'] . "</td>";

							                echo "<td>" . $row['mobile'] . "</td>";

							                echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['city'] . "</td>";
    echo "<td>" . $row['state'] . "</td>";
    echo "<td>" . $row['zipcode'] . "</td>";
    echo "<td>" . $row['streetName'] . "</td>";

							                echo "<td>" . $row['gender'] . "</td>";

							                echo "<td>" . $row['joining_date'] ."</td>";


							                $sno++;


							                $msgid = 0;
							            }
							        }
							    }
							}
						?>
					</tbody>
				</table>

<script>

	function ConfirmDelete(name){

    var r = confirm("Are you sure! You want to Delete this User?");
    if (r == true) {
       return true;
    } else {
        return false;
    }
}

</script>
	</div>	</div>
    	</div>

    </body>
</html>
