<?php
//connecting to server first
include("connect.php");

//creating database if not exist
$query="CREATE DATABASE IF NOT EXISTS social_network";
$result=mysqli_query($connection,$query);
if(!$result)
{
    die("Query Field.".mysqli_error($connection));
}
?>