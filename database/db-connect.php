<?php 
//server name
$servername = 'localhost';
$username = 'root';
$password = '';
$databasename = 'company';

$connection = mysqli_connect($servername , $username , $password , $databasename);

//check connection

if (mysqli_connect_errno())
{
    echo "failed connection" . mysqli_connect_errno();
    die();
}
//testing ==>> echo "connection";
?>