<?php

$dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="rfidpost";

$conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

if(!$conn){
	die("Connection failed: ".mysqli_connect_error());
}