<?php
include "connect.php";
if(isset($_GET['deletid'])){
    $Id = $_GET['deletid'];
    $sql ="DELETE FROM `student-info` WHERE Id=$Id ";
    $result = mysqli_query($conn,$sql);
    if( $result){
        // echo "deleted successfully";
        header("location:display.php");
    }else{
        die(mysqli_error($conn));
    }
}
?>