<html>
<head>
	<title>Patient details</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>

    echo "<div class='container-fluid' style='margin-top:50px;'>
    <div class'card'>
    <div class='card-body'><a href='trainer_details.php' class='btn brn-light'>Go Back</a></div>




		    <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">New Plan Details</h1>
		  <table class="table table-dark">
		  <thead>
		    <tr>
		      <th scope="col">S.No</th>
		      <th scope="col">Plan ID</th>
		      <th scope="col">Plan Name</th>
		      <th scope="col">Plan Details</th>
		      <th scope="col">Rate</th>
		      <th scope="col">Action</th>


		    </tr>
		  </thead>
		  <tbody


		        <?php

					include("func.php");
					if(isset($_POST['patient_search_submit']))
					{
							$contact=$_POST['search'];
							 $query="select * from plan where planName='$contact'";
							$result=mysqli_query($con,$query);


							    if (mysqli_affected_rows($con) != 0) {
							        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

			            echo "<tr><td>" . $sno . "</td>";
			            echo "<td>" . $row['pid'] . "</td>";
			            echo "<td>" . $row['planName'] . "</td>";
			            echo "<td width='380'>" . $row['description'] . "</td>";
			            echo "<td>" . $row['validity'] . "</td>";
			            echo "<td>₹" . $row['amount'] . "</td>";
								}}
}
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

 </tbody>
 </table>
 </div></div></div>
 </body>

			  </html>
