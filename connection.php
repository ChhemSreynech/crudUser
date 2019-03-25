<?php

$connect = mysqli_connect("localhost","root","","pnc_pracitice_database");

if(mysqli_connect_errno()!=0){
    die('error'.mysqli_connect_error());
}
?>