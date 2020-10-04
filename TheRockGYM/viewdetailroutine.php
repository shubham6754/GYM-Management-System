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
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">

  <a class="btn btn-success" href="editroutine.php">edit routine <span class="sr-only">(current)</span></a>          </li></ul>
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

<div id="div1">
    <table class="table table-striped table-dark" >
      <thead class="thead-dark">
        <tr>
          <td height="87" colspan="2"><b>ROUTINE NAME: <?php echo $row['tname'] ?> </B>&ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp; &ensp;&ensp; &ensp;&ensp;&ensp;&ensp;&ensp;

            <span align="right"> <img src="images/34.jFIF"class="rounded-circle"width="160" height="114"  alt=""/></span></td>
          </tr>
        <tr>
          <th class="bg-dark" style="color:white;">DAYS</th>
          <th class="bg-dark" style="color:white;">WORKOUT PLAN</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">DAY 1</th>
          <td><?php echo $row['day1'] ?></td>

        </tr>
        <tr>
          <th scope="row">DAY 2</th>
          <td><?php echo $row['day2'] ?></td>

        </tr>
        <tr>
          <th scope="row">DAY 3</th>
          <td><?php echo $row['day3'] ?></td>

        </tr>
        <tr>
          <th scope="row">DAY 4</th>
          <td><?php echo $row['day4'] ?></td>

        </tr>
        <tr>
          <th scope="row">DAY 5</th>
          <td><?php echo $row['day5'] ?></td>

        </tr>
        <tr>
          <th scope="row">DAY 6</th>
          <td><?php echo $row['day6'] ?></td>

        </tr>
        </tr>
      </tbody>

    </table>
  </div>
<input type="button" class="btn btn-dark" onclick="printDiv('div1')" value="Print" />
  </div>	</div>	</div>

    </body>
</html>
<script LANGUAGE="JavaScript">
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
