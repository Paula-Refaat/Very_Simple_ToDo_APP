<?php 
session_start();

$conn = mysqli_connect("localhost","root","","todoapp");
if(!$conn){
    echo "connect error " . mysqli_connect_error($conn);
}



if($_SERVER['REQUEST_METHOD']  == "POST" && isset($_POST['title'])){

    $title = trim(htmlspecialchars(htmlentities($_POST['title'])));
    $id = $_GET['id'];

    

    if(strlen($title) < 3){
        $_SESSION['errors'] = "title of task must be greater than 3 chars "; 
    }


    if(empty($_SESSION['errors'])){
        $sql = "UPDATE `taskes` SET `title`='$title' WHERE `id` = $id ";
        $result = mysqli_query($conn,$sql);

        if($result ){
            $_SESSION['success'] = "data updated succefully";
        }
    }else{
        header("location:../edit.php?id=$id");
        die;

    }


    // redirection 
    header("location:../index.php");

}