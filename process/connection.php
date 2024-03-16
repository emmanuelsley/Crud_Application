<?php
$conn = new mysqli('localhost','root','','crud');

// checking connection
if(!$conn){
    echo 'Connection error';
}