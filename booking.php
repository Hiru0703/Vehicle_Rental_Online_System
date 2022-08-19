<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="profile.css">
<link rel="stylesheet" href="footer.css">
<style>

body {
  background-image: url('image.JPG');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
  body:font-family: Arial, Helvetica, sans-serif;
}
ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: blue;
}

li {
        float: right;
		font-size:25px;
}

li a {
       display: block;
       color: white;
       text-align: center;
       padding: 10px 16px;  <!-- padding: 50px 16px; -->
       font-size:0px;
       text-decoration: none;  /*hidden underline*/
}

li a:hover {
           background-color: black;
}

legend {
	       padding: 15px 16px;
		   }
		   
label    {
	     font-size:20px;
		 color:black ;
		 font-family:"Lucida Console", "Courier New", monospace;
		 }
		 
fieldset {
        background-color:DodgerBlue;
		width: none;
		border:white 5px solid;
		}

input[type=text],select,date,time{
  width: 15%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 20%;
  background-color:DodgerBlue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: 5px;
  border-radius: 30px;
  cursor: pointer;
  fornt-size:50px;
}
img{
	width:50px;
	height:30px;
	border-radius:30%;
	padding: 5px;
}
.button {
  background-color:red;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>

<body>

<ul>
  <li> <a href="AboutUs.html"> About Us </a> </li>
  <li> <a href="#"> Contact Us</a> </li>
  <li> <a href="#"> Service & Offers </a> </li>
  <li> <a href="#"> Categories </a> </li>
  <li> <a href="#"> Home </a> </li>

<!-- create user profile -->

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="OrderDetails.php">Order Details</a>

</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰</button>  
</div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
</ul> 

<br>
<center>
<font style="font-family:Courier;
             font-size:70px;
			 color:#151599;  "> PLAN YOUR JOURNEY </font>
</center>
<br> <br>
<form method="post" action="BookDetail.php">

<fieldset>
&nbsp &nbsp
         <label for="pick"> Pick Up Location </label>
              <input type="text" required="" name="pick" value="">	
&nbsp &nbsp
         <label for="drop"> Drop Off Location </label>
              <input type="text" required="" name="drop" value="">
&nbsp &nbsp	
         <label for="date"> Date </label>
              <input type="date" required="" name="date1" value="" > 
&nbsp &nbsp
         <label for="time"> Time </label>
              <input type="time" required=""name="time1" value="">  
	
</fieldset>
<br><br>
    
	<font-size = "25px">
          <center>
<input type="submit" value="BOOK NOW" >
          </center> 
<p align="right">
<a href="CustomerDetails.php" class="button">Next Page</a>
	</p>
</form>

<br><br><br><br><br><br><br><br><br>

<!-- Add Footer -->
<footer>&nbsp &nbsp
  <font>Contact With Us:   
&nbsp &nbsp &nbsp
<a href="#">
       <img src="facebook.PNG" > </a>
&nbsp
<a href="#">
       <img src="twitter.PNG" > </a>
&nbsp
<a href="#">
       <img src="in.PNG" > </a>
&nbsp
<a href="#">
       <img src="youtube.PNG" > </a>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
We Are Welcome : 

       <img src="master.PNG" >
	   <img src="visa.PNG" >
	   <img src="amari.PNG" >
	   <img src="dis.PNG" >
</font> 
</footer>
</body>
</html>