<?php
//provide your hostname, username and dbname
$host="localhost"; 
$username="user";  
$password="";
$db_name="cookies"; 
//$con=mysql_connect("$host", "$username", "$password")or die("cannot connect");

 $connect = new mysqli($host, $username, $password); 

mysqli_select_db("$db_name");

$book_name = $_POST['name'];

$sql = "select name from products where name LIKE '$name%'";

 $result = $connect->query($sql);

while($row=mysqli_fetch_array($result))
{
echo "<p>".$row['name']."</p>";
}
?>
