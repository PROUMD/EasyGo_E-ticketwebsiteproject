<?php
require("server.php");
$platenum=$_POST['platenum'];
$vtype=$_POST['vtype'];
$vname=$_POST['vname'];
$vcapacity=$_POST['vcapacity'];

echo"vehicle Added successfully..";

$sql="INSERT INTO  vehicles (PlateNumber,VehicleName,VehicleType,VehicleCapacity) values ('$platenum','$vtype','$vname','$vcapacity')";
$result=mysqli_query($con,$sql);
if(!$result){
    echo"folse".mysqli_error($con);
}
?>