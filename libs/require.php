<?php
include_once "libs/includes/Session.class.php";
include_once "libs/includes/Database.class.php";
include_once "libs/includes/User.class.php";

Session::start();

function load_templates($name)
{
    //include __DIR__."/../templates/$name.php";
    include $_SERVER["CONTEXT_DOCUMENT_ROOT"]."/app/templates/$name.php";
}

function validate_credentials($username,$password)
{
    if($username == "shubhash2002@gmail.com" and $password == "1234"){
        return true;
    } else {
        return false;
    }
}

function validate($username,$password,$email,$phone)
{
        Database::getconnection();
        $sql = "INSERT INTO `users` (`username`, `password`, `email`, `phone`, `blocked`, `active`)
        VALUES ('$username','$password','$email','$phone', '0', '1');";
        if ($conn->query($sql) === TRUE) {
        $error=false;
        } else {
        $error=$conn->error;
        }
        $conn->close();
        return $error;
 
}