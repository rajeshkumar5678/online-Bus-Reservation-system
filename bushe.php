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
$setdate=$_POST['setdate'];
$busno=$_POST['busno'];
$dname=$_POST['dname'];
$fcity=$_POST['fcity'];
$tcity=$_POST['tcity'];
$btime=$_POST['btime'];
$atime=$_POST['atime'];
$sl=$_POST['sl'];
$amt=$_POST['amt'];
$sideseat=$_POST['sss'];
$wseat=$_POST['ws'];

$sql = "SELECT * FROM setbus WHERE setdate='$_POST[setdate]'  AND  dname='$_POST[dname]'  AND   bno='$_POST[busno]'  ";
$res= mysqli_query($conn, $sql);
if (mysqli_num_rows($res) > 0) 
{
  echo "<script>alert(' ALREADY SCHEDULED   ')</script>";	  	
} 	
else if($_POST['fcity']==$_POST['tcity'])
{
 echo "<script>alert('You Selected Both Same Cities ! Plz Select Another City.')</script>";	
}
else if($_POST['btime']==$_POST['atime'])
{
 echo "<script>alert('You Selected Both Same Time! Plz Select Different Time.')</script>";	
}
else
{
$qq="insert into setbus(setdate,bno,dname,fcity,tcity,btime,atime,sl,sideseat,wseat,amt) VALUES('$setdate','$busno','$dname','$fcity','$tcity','$btime','$atime','$sl','$sideseat','$wseat','$amt')";
if(mysqli_query($conn, $qq))
{
echo '<script>alert("Bus sheduled ")</script>'; 
}
else 
{
echo '<script>alert("Bus Not sheduled ")</script>'; 
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

td, th {
    border: 1px solid black;;
    text-align: center;
    padding: 8px;
    color:black;

}

tr:nth-child(even) {
    background-color: #EEA159;
}
tr:nth-child(odd) {
    background-color: white;
}
h2
{
   color:white;
}

</style>
</head>



<body>

<header>

 <nav class=  "navbar navbar-expand-md navbar-dark bg-dark fixed-top">
 
  <div class="container">
               <a class="btn btn-outline-light   mr-5" href="addash.php" role="button"> <svg width="1em" height="0.9em" viewBox="0 0 16 16" class="bi bi-arrow-left-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
</svg> </a>
    <a  href="home.php" class=navbar-brand text-warningfont weight-bold"> <h4 style= color:#FFFE00 ;> GREEN BUS</h4>
    </a>
		  
		     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="collapsenavbar">
			        <span class="navbar-toggler-icon">   </span>
			 </button>
			 
		<div class="collapse navbar-collapse text-center" id="collapsenavbar">	 
     	       
	   
	    </div>				
</nav>


<br><br><br><br>
<div class="login">
  <h2 class="login-header">Bus Schedule</h2>
<center>
  <form action=" " method="post" class="login-container">
<p><input type="text" name="setdate"    id="txtdate" placeholder="Select Date" required readonly ></p>
    <?php
$hostname="localhost";
$username="root";
$password="";
$db="gym";
$conn=mysqli_connect($hostname,$username,$password,$db);
$q="select * from busreg";
$result=mysqli_query($conn,$q);
?>
<select class="form-control" name="busno"  style="width: 272px; font-size: 1.00em;"></p>
<?php  while ($row=mysqli_fetch_array($result)):; ?>

<option value="<?php echo $row[1];?>"><?php echo $row[1]; ?></option>
<?php endwhile;?>
</select>

</p>
<?php
$hostname="localhost";
$username="root";
$password="";
$db="gym";
$conn=mysqli_connect($hostname,$username,$password,$db);
$q="select * from drireg";
$result=mysqli_query($conn,$q);
?>
<select class="form-control" name="dname"  style="width: 272px; font-size: 1.00em;"></p>
<?php  while ($row=mysqli_fetch_array($result)):; ?>

<option value="<?php echo $row[1];?>"><?php echo $row[1]; ?></option>
<?php endwhile;?>
</select>
</p>
<select class="form-control" name="fcity" style="width: 272px; font-size: 1.00em;" >
 <option Value=-1>Select From City</option>
        <option value="Mumbai">Mumbai</option>
        <option value="Pune">Pune</option>  
 <option value="Solapur">Solapur</option> 
 <option value="Nashik">Nashik</option> 
 <option value="Nagpur">Nagpur</option> 
      </select> 
</p>
<select class="form-control" name="tcity" style="width: 272px; font-size: 1.00em;" >
 <option Value=-1>Select To City</option>
        <option value="Mumbai">Mumbai</option>
        <option value="Pune">Pune</option>  
 <option value="Solapur">Solapur</option> 
 <option value="Nashik">Nashik</option> 
 <option value="Nagpur">Nagpur</option> 
      </select> 
</p>
 <p><input type="time" placeholder="Enter Boarding Time" name="btime"  required></p>
<p><input type="time" placeholder="Enter Arrival Time" name="atime" required></p>
<p><input type="text" placeholder="Enter Total Seat Limit" name="sl" required></p>
<p><input type="text" placeholder="Enter Side Seat Limit" name="sss" required></p>
<p><input type="text" placeholder="Enter Window Seat Limit" name="ws" required></p>
<p><input type="text" placeholder="Enter Amount" name="amt" required></p>



    <p><input type="submit" value="Set Schedule" name="submit" ></p>

  </form>
<center>
<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM setbus  ");
?>
<center>
<h2>LIST OF SCHEDULED BUSES</h2>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<center>
    <div >
	<table border='1'  cellpadding='40'>
 
  <tr>
 
    <td><b>Date</b></td>
    <td><b>Bus Number</b></td>
    <td><b>Driver Name</b></td>    
<td><b>From City</b></td>   
<td><b>To City</b></td>   
<td><b>Boarding Time</b></td>  
<td><b>Arrival Time</b></td>    
<td><b>Total Seat Limit</b></td>  
<td><b>Side Seat Limit</b></td>  
<td><b>Window Seat Limit</b></td>  
<td><b>Amount</b></td>  
 
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) 
{

?>
<tr>
    
    <td><?php echo $row["setdate"]; ?></td>
    <td><?php echo $row["bno"]; ?></td>
<td><?php echo $row["dname"]; ?></td>
<td><?php echo $row["fcity"]; ?></td>
<td><?php echo $row["tcity"]; ?></td>
<td><?php echo $row["btime"]; ?></td>
<td><?php echo $row["atime"]; ?></td>
<td><?php echo $row["sl"]; ?></td>
<td><?php echo $row["sideseat"]; ?></td>
<td><?php echo $row["wseat"]; ?></td>
<td><?php echo $row["amt"]; ?></td>

</tr>
</center>
<?php
$i++;
}
?>
</table>
</div>
</center>
 <?php
}
else{
    echo "No result found";
}
?>

</div>
</center>

<br><br><br><br><br>
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