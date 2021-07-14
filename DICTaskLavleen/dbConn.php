<?php

$db = mysqli_connect("localhost","root","","dic_register");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>