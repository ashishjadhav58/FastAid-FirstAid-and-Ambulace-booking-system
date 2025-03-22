<?php

include 'ambulancerequest.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql="delete from `request` where id=$id";

    $result=mysqli_query($conn,$sql);
    if($result){
        header('Location:ambulancerequestaccess.php');
    }
    else{
        die(mysqli_error($conn));
    }

}

?>