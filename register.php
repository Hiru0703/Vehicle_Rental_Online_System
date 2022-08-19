<?php
include"config2.php";
?>
<?php
$FirstName=$_post['FN'];
$LastName=$_post['LN'];
$ContactNumber=$_post['CN'];
$EmailAddress=$_post['EA'];
$Password=$_post['Psw'];

$query="INSERT INTO login (RID,FName,LName,CNumber,EAdd,Password)
VALUES (' ','$FirstName','$LastName','$ContactNumber',$EmailAddress','$Password')";
?>

if(mysqli_query($conn,$query)){
echo "<script>Data insert successfully</script>";
//header ("Location::CustomerDetails.php");
}
else{
echo "<script>Error in inserting recods</script>";

}
mysqli_close($conn);