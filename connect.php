<?php

$conn = new mysqli("localhost","root","","info");

if($conn == true){
    // echo "successfully true";
}else{
    $conn->connect_error;;
}
?>
