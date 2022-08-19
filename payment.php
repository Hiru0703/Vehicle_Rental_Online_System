<?php
	include "config.php"
?>
<?php
	$Owner=$_post['name'];
	$CVV=$_post['pwd'];
	$CardNo=$_post['Cno'];
	
	$query = "INSERT INTO paymentdetails(paymentID,Owner,CVV,Card Number)
	VALUES('','$Owner','$CVV','$CardNo')";
	if(mysqli_query($conn,$query)){
echo "<script>Data insert successfully</script>";
//header ("Location::CustomerDetails.php");
}
else{
echo "<script>Error in inserting recods</script>";
}
mysqli_close($conn);