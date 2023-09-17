<?php
require("server.php");
$rnum=$_POST['routenum'];
$rname=$_POST['routename'];
$currentLocation=$_POST['clocation'];
$rdestination=$_POST['destination'];

echo"Route Added successfully..";

$sql="INSERT INTO  routes(RouteNumber,RouteName,CurrentLocation,Destination) values ('$rnum','$rname','$currentLocation','$rdestination')";
$result=mysqli_query($con,$sql);
if(!$result){
    echo"folse".mysqli_error($con);
}
?>