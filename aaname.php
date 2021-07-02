<?php  
 $connect = mysqli_connect("localhost", "root", "", "demo");  
 $number = count($_POST["age"]);  
 if($number > 0)  
 {  
      for($i=0; $i<$number; $i++)  
      {  
           if(trim($_POST["age"][$i] != ''))  
           {  
                $sql = "INSERT INTO dbl (age) VALUES('".mysqli_real_escape_string($connect, $_POST["age"][$i])."')";  
                mysqli_query($connect, $sql);  
           }  
      }  
      echo "Data Inserted";  
 }  
 else  
 {  
      echo "Please Enter Name";  
 }  
 ?> 