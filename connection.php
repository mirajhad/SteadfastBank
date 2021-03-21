<?php
session_start();
$con = mysqli_connect('localhost','root','');

if($con){

    echo "successfully connected";

}
mysqli_select_db($con, 'banking');

?>