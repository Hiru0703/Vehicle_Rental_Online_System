<?php
	include"config.php";
?>
<?php
	$cusname=$_POST ["fname"];
	$email=$_POST ["mail"];
	$message=$_POST ["yourmessage"];
	
	$query "INSERT INTO contactdetail(CID,Name,Email,Message)
	VALUE('','$cusname','$email','$message')
	
	if(mysqli_query($conn,$query)){
	echo "<script>Data insert successfully</script>";
	//header ("Location::CustomerDetails.php");
	}
	else{
	echo "<script>Error in inserting recods</script>";

	}
	mysqli_close($conn);