<?php
//connecting to server
$connection=mysqli_connect("localhost","root","");
if(!$connection)
{
    die("Connection failed.".mysqli_connect_error());
}
?>