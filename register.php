<?php

include 'config.php';

$fullname          = $_POST['nama'];
$noktp  		= $_POST['noktp'];
$username 		= $_POST['username'];
$email        = $_POST['email'];
$gender          = $_POST['jenis_kelamin'];
$password        = $_POST['password'];

$query = mysqli_query($host,"INSERT INTO user(id_user, noktp, fullname, username, email, gender, password) 
                      VALUES ('','$noktp','$fullname','$username','$email', '$gender', '$password')");

if($query) {
    header('location:login.html');
}
else {
    header('location:daftar.html');
}

?>