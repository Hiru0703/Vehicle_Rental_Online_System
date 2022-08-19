<?php
 include_once 'config.php';
?>

<?php
   if($_GET['submit1']){
	   $book_id = $_GET['filed1'];
	   $picklo = $_GET['filed2'];
	   $droplo = $_GET['filed3'];
	   $pdate = $_GET['filed4'];
	   $ptime = $_GET['filed5'];
	   
	   $query = "UPDATE bookinformation
        SET BookID='$book_id',
		    PickLocation = '$picklo',
			DropLocation = '$droplo',
			PickDate = '$pdate',
			PickTime = '$ptime'
		WHERE BookID='$book_id'";
		
		$data = mysqli_query($conn,$query);
		if(data){
			echo "<script>alert('Record Update Successfully')</script>";
			header("Location:CustomerDetails.php");
		
			
		}else{
			echo"<script>alert('Error in updating record.')</script>";
		}
   }
   mysqli_close($conn);
?>