<?php 
include('config/bd.php');
    $reci_id = $_GET['reci_id'];
    $delete = mysqli_query($conn,"Delete from blood_recipient where reci_id = '$reci_id'");
    if($delete) {   
        header('location:index.php');
    }
    else {
        header('location:index.php');
    }
?>