<?php
   include "config.php";
?>
<?php
    $pick = $_POST ["pick"];
	$drop = $_POST ["drop"];
	$pdate = $_POST ["date1"];
	$ptime = $_POST ["time1"];
	
	$query = "INSERT INTO bookinformation(BookId,PickLocation,DropLocation,PickDate,PickTime)
	VALUES ('','$pick','$drop','$pdate','$ptime')";
	
	if(mysqli_query($conn,$query)){
		echo "<script> alert('Booking done successfully')</script>";
	    //header ("Location:CustomerDetails.php");
	}
	else{
		echo "<script>Error in inserting recods</script>";
		
	}
	mysqli_close($conn);
?>