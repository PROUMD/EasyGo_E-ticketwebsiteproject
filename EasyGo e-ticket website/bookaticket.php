<?php
require("server.php");
$email=$_POST['email'];
$lfrom=$_POST['lfrom'];
$destination=$_POST['destination'];
$departDay=$_POST['departDay'];
$nticket=$_POST['ntickets'];
$totalPrice=$_POST['totalprice'];

echo"You have successfully booked a ticket.."."<br>";
echo "You will get a confirmation message shortly.";

$sql="INSERT INTO  bookings (EMAIL,LEAVING,DESTINATION,DEPARTDATE,NTICKETS,TOTALPRICE) values ('$email','$lfrom','$destination','$departDay','$nticket','$totalPrice')";
$result=mysqli_query($con,$sql);
if(!$result){
    echo"folse".mysqli_error($con);
}
?>