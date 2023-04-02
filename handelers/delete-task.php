<?php session_start(); ?>
<?php

if(isset($_GET['id'])){

    $conn =  mysqli_connect("localhost","root","","todoapp");

    if(!$conn){
        echo "connect error " . mysqli_connect_error($conn);
    }
}
    $id = $_GET['id'];
    $sql = "SELECT * FROM `taskes` WHERE id = $id ";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_row($result);

    if(!$row){
        $_SESSION['errors'] = "Data Not Exists";
    }
    else{
    $sql = "DELETE  FROM `taskes` WHERE id = $id ";
    $result = mysqli_query($conn,$sql);
    $_SESSION['success-del'] = "item Deleted Successfully";
    }
    header("location:../index.php");
?>