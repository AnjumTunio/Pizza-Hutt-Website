<?php
$con=mysqli_connect('localhost','root','', "pizza_hut");
if(!$con)
{
	echo "not connected to server";
}
if(!mysqli_select_db($con,'pizza_hut'))
{
	echo "Not select Database";
//echo "Failed to Connect to my SQL::" .mysqli_connect_error();
}
$Name= $_POST['name'];
$Phone_NO = $_POST['phone_no'];
$Email =$_POST['email'];
$Address = $_POST['address'];
$Deal =$_POST['deal_name'];


//mysqli_select_db($con, 'Pizza_hut');
$sql="INSERT INTO form (Name,Phone,E_mail,Address,D_name)
VALUES('$Name','$Phone_NO','$Email','$Address','$Deal')";
if(!mysqli_query($con,$sql))
{
	echo  "Not inserted"; 
}
else
{
	echo " Order placed Successfully!! ";
}
header("refresh:8; url=orderform.html");
//mysqli_close($con);
?>