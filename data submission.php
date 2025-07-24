<?php
include("testingconnection.php");
error_reporting(0);
?>

<?php
$STUDENTNAME=$_POST["studentname"];
$Password=$_POST["password"];
$confirmpassword=$_POST["confirmpassword"];
$COURSE=$_POST["course"];
$DURATION=$_POST["duration"];
$FEE=$_POST["fee"];
$query="insert into students values('$$STUDENTNAME','$Password','$confirmpassword','$COURS','$DURATION','$FEE')";
$data=mysqli_query($conn,$query);
if ($data){
    echo "data submitted successfully";
}
?>