<?php
session_start();

$conn= new mysqli("localhost","root","","arms");

if(!$conn){
    echo "database error";
    }
?>