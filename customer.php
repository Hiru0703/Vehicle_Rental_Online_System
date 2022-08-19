<?php
   include "config.php";
?>
<?php
    $custmerName = $_POST ["cname"];
	$CNumber =  $_POST ["cnumber"];
	$CEmail = $_POST ["cemail"];
	$CustomerEmail = $_POST ["cNIC"];
	
	$query = "INSERT INTO cus_information(CID,Name,cnum,cmail,nic)
	VALUES ('','$custmerName','$CNumber','$CEmail','$CustomerEmail')";
	
	if(mysqli_query($conn,$query)){
		echo "<script>Data insert successfully</script>";
		 header ("Location::paymentmethod.html");

	}
	else{
		echo "<script>Error in inserting recods</script>";
		
	}
	mysqli_close($conn);
?>