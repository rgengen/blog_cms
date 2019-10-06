<?php
//get the data to insert into db
$title = $_POST ["title"];
$content = $_POST ["content"];
$author= $_POST ["author"];
$date= $_POST ["date"];

//insert data with sql query
include_once 'db_connect.php';
$sql = "INSERT INTO posts (title, content, author, date) VALUES ('". 
    $title . "','". $content . "','". $author . "','". $date . "')";
    $result = mysqli_query ($conn, $sql);

    //redirect to homepage

    header ("Location: index.php");
    ?>