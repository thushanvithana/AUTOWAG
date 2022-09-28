<?php

$severname="localhost";
$username="root";
$password="";
$dbnmae="autowag";

$con= new mysqli($severname, $username, $password, $dbnmae);

if($con->connect_error)
{
    die("connection faild: ".$con -> connect_error);
}

?>