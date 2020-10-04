<?php
if ($_GET['submi']) {
  $mass = $_GET['mass'];
  $height = $_GET['height'];

  function bmi($mass,$height) {
    $bmi = $mass/($height*$height);
    return $bmi;
  }
	if ($bmi <= 18.5) {
	 $output = "UNDERWEIGHT";

 } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
	 $output = "NORMAL WEIGHT";

 } else if ($bmi > 24.9 AND $num<=29.9) {
	 $output = "OVERWEIGHT";

 } else if ($bmi > 30.0) {
	 $output = "OBESE";
 }
}
echo "Your BMI value is  " . bmi($mass,$height). "  and you are : ";
$query="update health_status set remarks='".$output."' where uid='".$userid."'";

?>
