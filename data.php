<?php
if(isset($_POST['Submit'])){
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Massages = $_POST['Massages'];


$host = 'localhost';
$user = 'root';
$password ='';
$dbname = 'database_potfolio';


$conn= mysqli_connect($host,$user,$password,$dbname);

$sql = "INSERT INTO Tushar_data (Nmae,Email,Massages)values('$Name','$Email','$Massages')";
mysqli_query($conn,$sql);


}

?>