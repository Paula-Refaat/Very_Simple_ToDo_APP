<?php

//connection
$conn =  mysqli_connect("localhost","root","");

if(!$conn){
    echo "connect error " . mysqli_connect_error($conn);
}

 $sql = "CREATE DATABASE IF NOT EXISTS todoapp";
 
 //to make a Query
$result = mysqli_query($conn,$sql);
mysqli_close($conn);



//create Tables
$conn =  mysqli_connect("localhost","root","","todoapp");

if(!$conn){
    echo "connect error " . mysqli_connect_error($conn);
}

 $sql = "CREATE Table taskes(

    `id` INT PRIMARY KEY AUTO_INCREMENT,
    `title` varchar(200) not null

 ) ";
 //to make a Query
$result = mysqli_query($conn,$sql);
mysqli_close($conn);


