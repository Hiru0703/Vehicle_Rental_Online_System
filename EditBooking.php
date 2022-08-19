<?php
 include_once 'config.php';
?>

<?php
  $Book_id = $_GET['id'];
  $pick = $_GET['Bloca'];
  $drop = $_GET['Dloca'];
  $pickdate = $_GET['Pdate'];
  $picktime = $_GET['Ptime'];
?>

<!DOCTYPE html>
<html>
<head>

</head>

<body>

<form action="SubmitBooking.php" method="GET" name="form2">
<table border="0" width="25%">
 <tr>
   <td>Book ID</td>
   <td> <input type="text" value="<?php echo"$Book_id";?>" name="filed1" readonly ></td>
   </tr>
   
  <tr>
   <td>Pick Up Location</td>
   <td> <input type="text" value="<?php echo"$pick";?>" name="filed2"></td>
  </tr>
  
  <tr>
   <td>Drop Off Location</td>
   <td> <input type="text" value="<?php echo"$drop";?>" name="filed3"></td>
  </tr>
   
  <tr>
   <td>Pick Up Date</td>
   <td> <input type="date" value="<?php echo"$pickdate";?>" name="filed4"></td>
  </tr>
  
  <tr>
   <td>Pick Up Time</td>
   <td> <input type="time" value="<?php echo"$picktime";?>" name="filed5"></td>
  </tr>
 
  <tr>
   <td></td>
   <td> <input type="submit" value="Update" name="submit1"></td>
  </tr> 
  

</body>
</html>