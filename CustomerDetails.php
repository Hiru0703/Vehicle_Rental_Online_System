<?php
   include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="footer.css">
<link rel="stylesheet" href="profile.css">
<style>

html {
  scroll-behavior: smooth;
}
#section1 {
  height: 500px;
 background-image: url('image1.JPG');
  background-repeat: no-repeat;
  background-attachment: fixed; 
   background-size: cover;
}

#section2 {
  height: 100px;
  background-color: Cornsilk;
}


body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color:white;
}

/* Full-width input fields */
input[type=text],[type=number] {
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #d9ffcb;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid:black;
 height:10px;
  margin-bottom: 25px;
  background-color:orange;
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
}

li a {
       display: block;
       color: white;
       text-align: center;
       padding: 50px 16px;
       font-size:20px;
       text-decoration: none;  /*hidden underline*/
}

li a:hover {
           background-color: black;
}
img{
	width:50px;
	height:30px;
	border-radius:30%;
	padding: 5px;
}

input[type=submit] {
  width: 100%;
  background-color:DodgerBlue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: 5px;
  border-radius: 30px;
  cursor: pointer;
  fornt-size:50px;
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
  <li> <a href="#"> Contact Us </a> </li>
  <li> <a href="#"> Service & Offers </a> </li>
  <li> <a href="#"> Categories </a> </li>
  <li> <a href="#"> Home </a> </li>
</ul>

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


<div class="main" id="section1">

<form action="customer.php" method=POST>
  <div class="container">
    <h1>Customer & Vehicle Details</h1>
    <p>Please fill in this form to get details.</p>
    <hr>

    <label for="name"><b>Customer Name</b></label>&nbsp 
    <input type="text" placeholder="Enter Name" name="cname" id="Cname" required>
<br>
    <label for="number"><b>Contact Numer</b></label> &nbsp
    <input type="number" placeholder="Enter Contact Number" name="cnumber" id="num" required>
<br>    
    <label for="email"><b>Email</b></label> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    <input type="text" placeholder="Enter Email" name="cemail" id="email" required>
<br>   
    <label for="nic"><b>NIC Number</b></label> &nbsp &nbsp &nbsp 
    <input type="number" placeholder="NIC Number" name="cNIC" id="Nnum" required>
 
<br> 
    
<label><b> Select Vehicle Type: </b></label>
<select name="vehicle">
  <option value="Car" name="car"> Car </option>
  <option value="van" name="van"> Van </option>
  <option value="bus" name="bus"> Bus </option>
</select>

&nbsp &nbsp &nbsp &nbsp

<label><b> Vehicle Condition: </b></label>

<select name="condition">
  <option value="A/C" name="ac"> A/C </option>
  <option value="non" name="nonac"> Non-AC </option>
 
</select>  
    <hr>
	
    <input type="submit" value="SUBMIT"></script>
  </div>
  <p align="right">
<a href="paymentmethod.html" class="button">Next Page</a>
	</p>
</form>
<!-- Add Footer -->

<div class="main" id="section2">

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
</div> 
</body>
<html>