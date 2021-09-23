<?php


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$server_name="localhost";
$username="root";
$password="";
$database_name="test1";

$conn=mysqli_connect($server_name,$username,$password,$database_name);

if(!$conn)
{die("Connection Failed:" . mysqli_connect_error());}

?>
	

