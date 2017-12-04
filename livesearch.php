<?php  
  
 $host="localhost";  
 $user="root";  
 $pass="";  
 $db="cookies";  
 $connect = new mysqli($host, $user, $pass, $db);  
 
 $name=$_GET["#name"];

 if ($connect->connect_error){
  echo "Failed to connect to MySQL: " . $connect->connect_error;
}

  
  elseif(isset($_POST["name"]) )  {
    $sql =  "SELECT * FROM product WHERE name LIKE '%$q%'";
    $result = $connect->query($sql);

    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        echo " And works in  " .$row["name"]."<br />" . "<br / > </h2> </div>";  


        
      }
    }else{
      echo "<h3> We haven't baked that cookie </h3>";
    }
  };


