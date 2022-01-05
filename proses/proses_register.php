<?php
    include 'koneksi.php';

    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    $sql = "INSERT INTO user (nama, username, password, level) VALUES('$nama','$username','$password','user')";
    if($conn->query($sql) === TRUE){
       header("location:/pages/register_sukses.php?pesan=sukses");
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>