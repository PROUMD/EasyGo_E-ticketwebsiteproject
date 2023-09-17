<?php
require("server.php");
$email=$_POST['email'];
$fname=$_POST['fname'];
$lastname=$_POST['lname'];
$dob=$_POST['dob'];
$tel=$_POST['tel'];
$passwordnew=$_POST['psw'];
$passwordnewRepeat=$_POST['pswrepeat'];

echo"creation of new account is successful..";

$sql="INSERT INTO  signup(EMAIL,FNAME,LNAME,DOB,TEL,NEWPASSWORD,REPEAT_PASSWORD) values ('$email','$fname','$lastname','$dob',$tel,'$passwordnew','$passwordnewRepeat')";
$result=mysqli_query($con,$sql);
if(!$result){
    echo"folse".mysqli_error($con);
}
?>