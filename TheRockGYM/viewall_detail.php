
<?php

require 'include/db_conn.php';

if (isset($_POST['name'])) {
    $memid = $_POST['name'];
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







      <body


      <div class="container-fluid">

      <div class="row"style="padding-top:20px;">


        <?php include('sidenav.php'); ?>


      <div class="col-md-8">

    <div class="container">

    <div class="jumbotron" style="width:800px, padding-left= 5px;" >







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
        $query  = "SELECT * FROM users u
                 INNER JOIN address a ON u.userid=a.id
                 INNER JOIN  health_status h ON u.userid=h.uid
                 WHERE userid='$memid'";

          $result = mysqli_query($con, $query);
          $sno    = 1;

          $name="";
          $gender="";

          if (mysqli_affected_rows($con) == 1) {

              while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

                  $name    = $row['username'];
                  $gender =$row['gender'];
                  $mobile = $row['mobile'];
                  $email   = $row['email'];
                  $dob	 = $row['dob'];
                  $jdate    = $row['joining_date'];
                  $streetname=$row['streetName'];
                  $state=$row['state'];
                  $city=$row['city'];
                  $zipcode=$row['zipcode'];
                  $calorie=$row['calorie'];
                  $height=$row['height'];
                  $weight=$row['weight'];
                  $fat=$row['fat'];
                  $remarks=$row['remarks'];
              }
          }
          else{
             echo "<html><head><script>alert('Change Unsuccessful');</script></head></html>";
             echo mysqli_error($con);
          }


      ?>




    <div class="a1-container a1-small a1-padding-32" padding-left=5px; style="margin-top:2px; margin-bottom:2px;margin-right:122px;">
      <div class="a1-card-8 a1-light-gray" style="width:600px; margin:0 auto;">

      </div>
      <br>
      <div class="a1-container a1-small a1-padding-32" style="margin-top:2px;margin-left: 52px; margin-bottom:2px;margin-right:122px;">
<h2><b>EDIT MEMBER DATA</h2>
<hr/>
     <form id="form1" name="form1" method="post" class="a1-container" action="edit_mem_submit.php">
       <table width="100%" border="0" align="center">
       <tr>
         <td height="35"><table width="100%" border="0" align="center">
           <div class="form-group row">
             <label for="inputEmail3" class="col-sm-4 col-form-label">User ID:</label>
             <div class="col-sm-8">
               <input name="uid" readonly required value=<?php echo $memid?> type="text" class="form-control" id="boxxe" placeholder="Enter PlanID">
             </div>
           </div>


           <div class="form-group row">
             <label for="inputEmail3" class="col-sm-4 col-form-label">NAME:</label>
             <div class="col-sm-8">
               <input id="boxxe" type="text" name="uname" value='<?php echo $name?>' height="20px" class="form-control" id="boxxe" placeholder="Enter FullName">
             </div>
           </div>


           <div class="form-group row">
             <label for="inputEmail3" class="col-sm-4 col-form-label">GENDER:</label>
             <div class="col-sm-8">
               <select id="boxxe" class="form-control"  name="gender" id="gender" required>

               <option <?php if($gender == 'Male'){echo("selected");}?> value="Male">Male</option>
               <option <?php if($gender == 'Female'){echo("selected");}?> value="Female">Female</option>
               </select>
              </div>
           </div>

                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-4 col-form-label">MOBILE:</label>
                        <div class="col-sm-8">
                        <input id="boxxe" type="number" name="phone" maxlength="8" value=<?php echo $mobile?> value='<?php echo $name?>' height="20px" class="form-control" id="boxxe" placeholder="Enter Mobile">
                        </div>
                      </div>

             <div class="form-group row">
              <label for="inputEmail3" class="col-sm-4 col-form-label">EMAIL:</label>
                <div class="col-sm-8">
                  <input id="boxxe" type="email" name="email" required value=<?php echo $email?> height="20px" class="form-control" id="boxxe" placeholder="Enter Email">
                </div>



           </div>
           <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">DATE OF BIRTH:</label>
              <div class="col-sm-8">
            <input type="date" id="boxxe" name="dob" value=<?php echo $dob?> height="20px" class="form-control" id="boxxe" placeholder="Enter Date Of Birth">
              </div>
          </div>


           <div class="form-group row">
            <label for="inputEmail3" class="col-sm-4 col-form-label">JOINING DATE:</label>
              <div class="col-sm-8">
                <input type="date" id="boxxe" name="jdate" value=<?php echo $jdate?> height="20px" class="form-control" id="boxxe" placeholder="Enter Joining Date">
              </div>
          </div>


      <div class="form-group row">
       <label for="inputEmail3" class="col-sm-4 col-form-label">STREET NAME:</label>
         <div class="col-sm-8">
           <input type="text" id="boxxe" name="stname" value='<?php echo $streetname?>' height="20px" class="form-control" id="boxxe" placeholder="Enter Street Name">
         </div>
     </div>

     <div class="form-group row">
      <label for="inputEmail3" class="col-sm-4 col-form-label">STATE:</label>
        <div class="col-sm-8">
        <input type="text" id="boxxe" name="state" value='<?php echo $state?>' height="20px" class="form-control" id="boxxe" placeholder="Enter State">
        </div>
    </div>


    <div class="form-group row">
     <label for="inputEmail3" class="col-sm-4 col-form-label">CITY:</label>
       <div class="col-sm-8">
      <input type="text" id="boxxe" name="city" value='<?php echo $city?>' height="20px" class="form-control" id="boxxe" placeholder="Enter City">
       </div>
   </div>

   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-4 col-form-label">ZIP CODE:</label>
      <div class="col-sm-8">
    <input type="text" id="boxxe" name="zipcode" value='<?php echo $zipcode?>' height="20px" class="form-control" id="boxxe" placeholder="Enter Zip Code">
      </div>
  </div>
  <div class="form-group row">
   <label for="inputEmail3" class="col-sm-4 col-form-label">CALORIE:</label>
     <div class="col-sm-8">
  <input type="text" id="boxxe" name="calorie" value=<?php echo $calorie?> height="20px" class="form-control" id="boxxe" placeholder="Enter  Calories/day">
     </div>
 </div>

 <div class="form-group row">
  <label for="inputEmail3" class="col-sm-4 col-form-label">HEIGHT:</label>
    <div class="col-sm-8">
  <input type="text" id="boxxe" name="height" value='<?php echo $height?>' height="20px" class="form-control" id="boxxe" placeholder="Enter Height">
    </div>
</div>

<div class="form-group row">
 <label for="inputEmail3" class="col-sm-4 col-form-label">WEIGHT:</label>
   <div class="col-sm-8">
 <input type="text" id="boxxe" name="weight" value='<?php echo $weight?>' height="20px" class="form-control" id="boxxe" placeholder="Enter Weight">
   </div>
</div>

<div class="form-group row">
 <label for="inputEmail3" class="col-sm-4 col-form-label">FAT:</label>
   <div class="col-sm-8">
 <input type="text" id="boxxe" name="fat" value='<?php echo $fat?> 'height="20px" class="form-control" id="boxxe" placeholder="Enter Body Fat Percent">
   </div>
</div>


<div class="form-group row">
 <label for="inputEmail3" class="col-sm-4 col-form-label">REMARKS:</label>
   <div class="col-sm-8" style="width:30px">
     <input type="text" id="boxxe" name="remarks" value='<?php echo $remarks?> 'height="20px" class="form-control" id="boxxe" placeholder="Trainer REMARKS">
</div>


<br>
<br>
<br>
<div class="col-sm-7">

  <button type="submit"class="btn btn-success">SUBMIT</button>
  <button type="reset" class="btn btn-info">RESET</button>
</div>
         </table></td>
       </tr>
       </table>
     </form></div.
  </div>
  </div>


</div>
</div>


</div>




    </div>
  </div>

</div>
</div>
</body>
</html>

<?php
} else {

}
?>
