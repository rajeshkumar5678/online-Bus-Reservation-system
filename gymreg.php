<?php
$servername="localhost";
$username="root";
$password="";
$dbname="gym";
$conn=mysqli_connect($servername,$username,$password,$dbname);
?>
<?php
$query = "select * from memreg order by mid desc limit 1";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
$lastid = $row['mid'];
if($lastid== "")
{
	$empid="PID1";
}
else
{
	$empid= substr($lastid,3);
	$empid= intval($empid);
	$empid="PID" . ($empid + 1);
}
?>
<?php

$servername="localhost";
$username="root";
$password="";
$dbname="gym";
$conn=mysqli_connect($servername,$username,$password,$dbname);
?>
<?php

if(isset($_POST['submit']))
{
$mid=$_POST['mid'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$adde=$_POST['adde'];
$city=$_POST['city'];
$age=$_POST['age'];
$gender=$_POST['gen'];
$mno=$_POST['mno'];
$email=$_POST['email'];
$password=$_POST['password'];
if(! $conn)
{
  die("Connection Fail ".mysqli_connect_error());
}
else
{
$qq="insert into memreg VALUES('$mid','$fname','$lname','$adde','$city','$age','$_POST[gen]','$mno','$email','$password')";
if(mysqli_query($conn, $qq))
{
echo '<script>alert(" Thank You ! Your Data Inserted Sucessfully! Go to Login Page   ")</script>'; 
}
else 
{
echo '<script>alert("Sorry !Your Data Not Inserted Username Already Exist ")</script>'; 
}
}
}
?>



<html lang="en">
<head>



    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {

  margin-top: 0px;
  font-family: 'Open Sans', sans-serif; 
   no-repeat center center fixed;
   background-size: 100% 100%;
   height: 100%;
   position: absolute;
   width: 100%;
   background:url("images/banner.jpg");
	

  background-size: cover;
}

.login-container {
     background: linear-gradient(to right, #D7C14D   0%,#F85C4C  100%);
  padding: 12px;
}


.overlay {
  position: absolute;
  bottom: 100%;
  left: 0;
  right: 0;
  background-color: DodgerBlue;
  overflow: hidden;
  width: 100%;
  height: 0;
  transition: .59s ease;
}

.text {
  white-space: nowrap; 
  color: white;
  font-size: 20px;
  position: absolute;
  overflow: hidden;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  border: 1px solid #e7e7e7;
  background-color: #f3f3f3;
}

li 
{
  float: left;
}

li a 
{
  display: block;
  color: #000;
  text-align: center;
  padding: 15px 50px;
  text-decoration: none;
  color:black;
  font-size:18px;
}

.row::after {
  content: "";
  clear: both;
  display: table;
}



.login {
  width: 500px;
  margin: 12px auto;
  font-size: 12px;
}
.login-header,
.login p {
  margin-top: 0;
  margin-bottom: 0;
}

.login-triangle {
  width: 0;
  margin-right: auto;
  margin-left: auto;
  border: 12px solid transparent;
  border-bottom-color: #28d;
}

.login-header {
  background:#333339 ;
  padding: 20px;
  font-size: 1.4em;
  font-weight: normal;
  text-align: center;
  text-transform: uppercase;
  color:#ffffff;
}


.login p {
  padding: 12px;
}
.login input {
  box-sizing: border-box;
  display: block;
  width: 60%;
  border-width: 1px;
  border-style: solid;
  padding: 5px;
  outline: 0;
  font-family: inherit;
  font-size: 0.95em;
}



  
  
.login input[type="text"],
.login input[type="password"] {
  background: #fff;
  border-color: #bbb;
  color: #555;
}

.login input[type="password"]
 {
  background: #fff;
  border-color: #bbb;
  color: #555;
  
}
.login input[type="text"]:focus,
.login input[type="password"]:focus {
  border-color: #888;
}

.login input[type="submit"] {
  background: #333339 ;
  border-color: transparent;
  color: #fff;
  cursor: pointer;
  padding: 10px;

}

.login input[type="submit"]:hover {
  background:#000;
}
.login input[type="submit"]:focus {
  border-color:black;
}



.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 18px;
}

.icon {
  padding: 10px;
  background: #005eff;
  color: white;
  width: 40px;
  text-align: center;
}
</style>
</head>



<body>

<header>

 <nav class=  "navbar navbar-expand-md navbar-dark bg-dark fixed-top">
 
  <div class="container">
  
    <a  href="home.php" class=navbar-brand text-warningfont weight-bold"> <h4 style= color:#FFFE00 ;> GREEN BUS</h4>
    </a>
		  
		     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="collapsenavbar">
			        <span class="navbar-toggler-icon">   </span>
			 </button>
			 
		<div class="collapse navbar-collapse text-center" id="collapsenavbar">	 
     	       
	   
	    </div>				
</nav><br><br>




<br><br>
<div class="login">
  <h2 class="login-header">Passenger Registration</h2>
<center>
  <form action=" " method="post" class="login-container">
<p><input type="text" name="mid"  value="<?php echo $empid ?>" style=color:blue; readonly ></p>
    <p><input type="text" placeholder="Enter First Name" name="fname" required></p>
 <p><input type="text" placeholder="Enter Last Name" name="lname"required ></p>
<p><input type="text" placeholder="Enter Address" name="adde" required></p>
<p><input type="text" placeholder="Enter City" name="city" required></p>
<p><input type="text" placeholder="Enter Age" name="age" required></p>


<div >
    <select class="form-control" name="gen" style="width: 272px; font-size: 1.00em;" >
 <option Value=-1>Select Gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>  
      </select> 
 </div>
<p><input type="text" placeholder="Enter Mobile Number" name="mno" required></p>
<p><input type="text" placeholder="Enter Email ID" name="email" required></p>
    <p><input type="password" placeholder="Password" name="password"   required></p>
    <p><input type="submit" value="Register Here" name="submit" ></p>
<br><br>
  </form>
</center>
</div>
<br><br>
 <footer class="bg-dark text-white text-center text-lg-left">
<!-- Grid container -->
    <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
    <center>  <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        
		<h3 class="text-uppercase"> About GREEN BUS </h3>

   <p>
      We are a team of young professionals who have put in efforts to bring the best Bus Services in pune.  on one platform. 
	  GREEN BUS  is your online solution to search the best Buses  in pune and book an online.
  </p>
     </div></center>

  </div>
<!--Grid row-->
  </div>

<!-- Grid container -->




  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="#">GREEN BUS</a>
  </div>
  <!-- Copyright -->
  
  
</footer>



</body>
</html>