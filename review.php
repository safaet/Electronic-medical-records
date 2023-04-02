<?php
    $reviewer = $_POST['reviewer'] ;
    $review = $_POST['review'] ;

//database connection

$conn = new mysqli('localhost', 'root', '', 'connect_db') ;
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error) ;
}
else{
    $stmt = $conn->prepare("insert into review_form(reviewer, review)values(?, ?)") ;
    $stmt->bind_param("ss", $reviewer, $review) ;
    $stmt->execute() ;
    echo "review gained Successfully..." ;
    $stmt->close() ;
    $conn->close() ;
}
?>