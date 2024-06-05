<?php
$con=mysqli_connect("localhost","root","","seaview_inn");
if(mysqli_connect_error()){
    echo"<script>alert('cannot connect to the data');</script>";
    exit();
}
?>