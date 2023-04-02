<?php
    $name = $_POST['name'] ;
    $email = $_POST['email'] ;
    $Ymessage = $_POST['message'] ;

//database connection

$conn = new mysqli('localhost', 'root', '', 'connect_db') ;
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error) ;
}
else{
    $stmt = $conn->prepare("insert into message_form(name, email, message)values(?, ?, ?)") ;
    $stmt->bind_param("sss", $name, $email, $Ymessage) ;
    $stmt->execute() ;
    echo "message sent Successfully..." ;
    $stmt->close() ;
    $conn->close() ;
}
?>