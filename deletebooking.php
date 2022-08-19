<?php
 include_once 'config.php';
?>
<?php
   $id = $_GET['id'];
   
   $query = "DELETE FROM bookinformation WHERE
   BookID='$id'";
   
   //excute query
   
   $data = mysqli_query ($conn,$query);
   
   if($data){
	   echo"<script>alert('Recod Delete Successfullt')</script>";
	   
   }else {
	   echo "<script>alert('Error..')</script>";
   }
   mysqli_close($conn);
?>