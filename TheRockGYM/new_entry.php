
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

      <body


      <div class="container-fluid">

      <div class="row"style="padding-top:20px;">


        <?php include('sidenav.php'); ?>

      <div class="col-md-8">

    <div class="container">

    <div class="jumbotron" style="width:800px;padding:20px 20px 20px 5px ;" >


      <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="new_entry.php">
          <img src="" width="30" height="30" class="d-inline-block align-top" alt="">

        </a>
        <a class="navbar-brand" href="index.php">
          <img src="images/90.jfif" width="30" height="30" class="d-inline-block align-top" alt="">
          LOGOUT
        </a>

      </nav>
            <br>


    <div class="a1-container a1-dark-gray a1-center" style="font-family: Times New Roman; color:#732540;">
      <h3><b><u>NEW REGISTRATION</u><b></h3>
        </div>

    <hr/>


    <div class="a1-container a1-small a1-padding-32" style="margin-top:2px;margin-left: 52px; margin-bottom:2px;margin-right:122px;">

      <br>
     <form id="form1" name="form1" method="post" class="a1-container" action="new_submit.php">
       <table width="100%" border="0" align="center">
       <tr>
         <td height="35"><table width="100%" border="0" align="center">
           <div class="form-group row">
             <label for="inputEmail3" class="col col-form-label">MEMBERSHIP ID</label>
             <div class="col-sm-8">
               <input name="m_id" type="text" required class="form-control" id="boxxe" placeholder="Enter PlanID">
             </div>
           </div>


           <div class="form-group row">
             <label for="inputEmail3" class="col col-form-label">NAME:</label>
             <div class="col-sm-8">
               <input id="boxxe" type="text" Required name="u_name" height="20px" class="form-control" id="boxxe" placeholder="Enter FullName">
             </div>
           </div>


           <div class="form-group row">
             <label for="inputEmail3" class="col col-form-label">GENDER:</label>
             <div class="col-sm-8">
               <select name="gender" required class="form-control" id="boxx" required>

        <option value="">--Please Select--</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
              </div>
           </div>

                      </div>
                      <div class="form-group row">
                       <label for="inputEmail3" class="col col-form-label">DATE OF BIRTH:</label>
                         <div class="col-sm-8">
                       <input type="date" id="boxxe"required  name="dob" height="20px" class="form-control" id="boxxe" placeholder="Enter Date of Birth">
                         </div>
                     </div>


                      <div class="form-group row">
                       <label for="inputEmail3" class="col col-form-label">JOINING DATE:</label>
                         <div class="col-sm-8">
                           <input type="date" id="boxxe"required  name="jdate"  height="20px" class="form-control" id="boxxe" placeholder="Enter JoiningDate">
                         </div>
                     </div>





           <div class="form-row">
             <div class="form-group col-md-6">
               <label for="inputEmail4">Email</label>
               <input type="email" name="email"required class="form-control" id="inputEmail4" placeholder="Enter Email">
             </div>
             <div class="form-group col-md-6">
               <label for="inputPassword4">Phone</label>
               <input type="number" name="mobile" required class="form-control" id="inputPassword4" placeholder="Mobile number">
             </div>
           </div>
           <div class="form-group">
             <label for="inputAddress">Address</label>
             <input type="text" name="street_name" required class="form-control" id="inputAddress" placeholder="Enter Address">
           </div>

           <div class="form-row">
             <div class="form-group col-md-6">
               <label for="inputCity">City</label>
               <input type="text" name="city" required class="form-control" id="inputCity" placeholder="Enter City">
             </div>
             <div class="form-group col-md-4">
               <label for="inputState">State</label>
               <input type="text" name="state" required class="form-control" id="inputCity" placeholder="Enter State">
               </select>
             </div>
             <div class="form-group col-md-2">
               <label for="inputZip">Zip</label>
               <input type="text" name="zipcode"required class="form-control" id="inputZip" placeholder="Enter zipcode">
             </div>
           </div>







     <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">PLAN</label>
        <div class="col-sm-10">
          <select name="plan"required  class="form-control" id="boxx" required onchange="myplandetail(this.value)">
          <option value="">--Please Select--</option>
          <?php
          $query="select * from plan where active='yes'";
          $result=mysqli_query($con,$query);
          if(mysqli_affected_rows($con)!=0){
          while($row=mysqli_fetch_row($result)){
           echo "<option value=".$row[0].">".$row[1]."</option>";
          }
          }

          ?>

          </select>    </div>
    </div>



<br>

<div class="col-sm-7">

  <button type="submit"class="btn btn-success">SUBMIT</button>
  <button type="reset" class="btn btn-info">RESET</button>
</div>
         </table></td>
       </tr>
       </table>
     </form>
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
