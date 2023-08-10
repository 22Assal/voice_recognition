<?php

$reader= array($_POST["data"]);


$servername ="localhost";
$username="root";
$password="";
$database_name="m3";

//connection.....
$con= new mysqli($servername,$username,$password,$database_name);
//connection validity....
if(!$con)
{
die("connection failed" . mysqli_connect_error());
}


$sqll="INSERT INTO m3 (id , sentence) VALUES( '','$reader')";


//insertion of data to the database :
if($con->query($sqll)=== TRUE){
echo " " . $reader;
}
else{
echo "Erorr: " .$sqll . "<br>" . $con->error;
}
$con->close();

?>