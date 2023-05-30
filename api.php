<?php



header("Content-type: application/json");

include 'connect.php';

//function read all
//function insert
// function update
// function delete

$Action =  $_POST['action'];

function readAll($conn){


    $data = array();

    $message = array();

    $query = "SELECT  * FROM  information";


    $result = $conn->query($query);

    // success or error

    if($result){


        while($row = $result->fetch_assoc()){
            $data [] = $row;

        }

        $message = array("status" => true, "data" => $data);


    }else{
        $message = array("status" => false, "data" =>$conn->error);
    }

    echo json_encode($message);
}
function readUserInfo($conn){

     


    $data = array();

    $message = array();

    
    $id = $_POST['userId'];
    $query = "SELECT  * FROM  information WHERE ID = '$id'";


    $result = $conn->query($query);

    // success or error

    if($result){


        while($row = $result->fetch_assoc()){
            $data [] = $row;

        }

        $message = array("status" => true, "data" => $data);


    }else{
        $message = array("status" => false, "data" =>$conn->error);
    }

    echo json_encode($message);
}
function DeleteUser($conn){

     


    $data = array();

    $message = array();

    
    $id = $_POST['userId'];
    $query = "DELETE  FROM  information WHERE ID = '$id'";


    $result = $conn->query($query);

    // success or error

    if($result){


       

        $message = array("status" => true, "data" => $data);


    }else{
        $message = array("status" => false, "data" =>$conn->error);
    }

    echo json_encode($message);
}

function registeredUser($conn){

    $id = $_POST['userId'];
    $title = $_POST['userTitle'];
    $description = $_POST['userDesc'];

    $data = array();
    

    $query = "INSERT INTO  information(ID,title,description) VALUES ('$id','$title','$description')";

    $result = $conn->query($query);

    if($result){
        $data = array("status" => true, "data" => "registered successfully");
    }else{
        $data =array("status" => false, "data" => $conn->error);
    }

    echo json_encode($data);
}
function updateUser($conn){

    $id = $_POST['userId'];
    $title = $_POST['userTitle'];
    $description = $_POST['userDesc'];

    $data = array();
    

    $query = "UPDATE information set title = '$title', description = '$description' where ID = '$id'";

    $result = $conn->query($query);

    if($result){
        $data = array("status" => true, "data" => "Updated successfully");
    }else{
        $data =array("status" => false, "data" => $conn->error);
    }

    echo json_encode($data);
}


if(isset($Action)){
    $Action($conn);
}else{
    echo "Action is * required";
}

?>