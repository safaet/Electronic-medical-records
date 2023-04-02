<?php
    $name = $_POST['name'] ;
    $number = $_POST['number'] ;
    $email = $_POST['email'] ;
    $date = $_POST['APdate'] ;

//database connection

$conn = new mysqli('localhost', 'root', '', 'connect_db') ;
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error) ;
}
else{
    $stmt = $conn->prepare("insert into appointment_form(name, number, email, APdate)values(?, ?, ?, ?)") ;
    $stmt->bind_param("ssss", $name, $number, $email, $date) ;
    $stmt->execute() ;
    echo "registration Successfully done..." ;
    $stmt->close() ;
    $conn->close() ;
}
?>