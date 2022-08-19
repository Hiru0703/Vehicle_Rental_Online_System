<?php
   include 'config.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
 
    <meta charset="utf-8">
    <title>Order Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	
	<style>
	
table {
    border-collapse: collapse;
    width: 100%;
    }

th, td {
  text-align: left;
  padding: 8px;
  }

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: red;
  color: white;
  }
body {
  background-image: url('image3.JPG');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
  body:font-family: Arial, Helvetica, sans-serif;
  
</style>
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo"><img class="logo" img src="redwood.JPEG" alt="logo" width="250" height="80" class="left" margin-right=0px></label>
      <ul>
        <li><a class="active" href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Feedback</a></li>
		 <li><a href="#">LOG IN</a></li>
      </ul>
    </nav>
    <section></section>
	<br><br>
	
	
	<table>
	<table border = "5" width = "100%">
	
	<tr style=" background-color: #04AA6D;
                color: white;">
	  <th class = "col1"> Reservation ID </th>
	  <th class = "col2"> Pick Up Location </th>
	  <th class = "col3">Drop Off Location</th>
	  <th class = "col4"> Pick Up Date </th>
	  <th class = "col5"> Pick Up Time</th>
	  <th class = "col6"> Edit</th>
	 
	</tr>
	<?php
	  $sql="SELECT *FROM bookinformation";
	  $result = $conn->query($sql);
	  if($result->num_rows>0){
		  while($row=$result->fetch_assoc()){
			  echo"<tr>";
			  echo"<td>".$row['BookId']."</td>";
	          echo"<td>".$row['PickLocation']."</td>";
			  echo"<td>".$row['DropLocation']."</td>";
			  echo"<td>".$row['PickDate']."</td>";
			  echo"<td>".$row['PickTime']."</td>";
			  echo"<td><a href='EditBooking.php?id=$row[BookId]&Bloca=$row[PickLocation]&Dloca=$row[DropLocation]&Pdate=$row[PickDate]&Ptime=$row[PickTime]'>
			  <input type='submit' value='Edit'></td>";
			
			  echo"</tr>";
		  }
	  }else{
		  echo "0 results";
	  }
	?>
echo </table>";
<br><br><br><br>

	</body>
	</html>