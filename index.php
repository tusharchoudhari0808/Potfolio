<?php
if(isset($_POST['Submit'])){
    $name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Massages = $_POST['Massages'];
    




// database connection....

$conn= new mysqli('localhost','root','','database_potfolio ');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into potfolio (Name,Email,Massages)value(?,?,?)");
    $stmt->bind_param("sss",$Name,$Email,$Massages);
    echo "registretion Successfully...";
    $stmt->execute();
    $conn->close();

}
}
