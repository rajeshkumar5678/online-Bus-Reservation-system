<?php
session_start();
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
</nav>


  <!-- Background image -->
  <div
    class="p-5 text-center bg-image"
    style="
      background-image:url('https://microsites-websitebuilder.s3.amazonaws.com/images/vijayanttravels.com-slider1-0-1561704715.jpg');
	  height:400px;
	  
	  background-repeat: no-repeat; 
      margin-top:54px;
    "
  >
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3">GREEN BUS</h1>
          <h4 class="mb-3">Best Online Bus Booking in pune</h4>
          <a class="btn btn-outline-light btn-lg" href="" role="button"
            >Contact Us</a
          >
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->


 <!-- Navbar -->
  
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
     
	  
	  
      <div class="collapse navbar-collapse" id="navbarExample01">
	  
             <a class="btn btn-outline-light ml-5 mr-5" href="myde.php" role="button">My Details</a>
		
			 	 <a class="btn btn-outline-light  ml-5 mr-5" href="###" role="button">Check Availability</a>
				 	 <a class="btn btn-outline-light  ml-5 mr-5" href="##" role="button">Book Tickets</a>
					  <a class="btn btn-outline-light  ml-5 mr-5" href="##" role="button">My Tickets</a>
					   <a class="btn btn-outline-light  ml-5 mr-5" href="##" role="button">FeedBack</a>
			 	 <a class="btn btn-outline-light  ml-5 mr-5" href="logout.php" role="button">LogOut</a>
		</div>	
		
		
 </nav>


<!-- Navbar -->



</header>


<p hidden><?php echo $_SESSION['mno']; ?></p>
<?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $dbname = 'gym';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
   $a=$_SESSION['mno'];
   $sql = "SELECT fname, lname, mno ,email  FROM  memreg  where  mno='$_SESSION[mno]' ";
    $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) 
{
               echo " <center><h4>Welcome :".$row["fname"]." ". $row["lname"] ;
             //  echo    ;
				
$_SESSION['fname']=$row["fname"];
$_SESSION['lname']=$row["lname"];
$_SESSION['email']=$row["email"];
            }
         } else {
            echo "0 results";
         }
         mysqli_close($conn);
      ?>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<br><br><br>
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