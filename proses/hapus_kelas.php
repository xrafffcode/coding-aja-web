<?php
    include 'koneksi.php';
    
    $id_kelas = $_GET['id_kelas'];
    

    $sql = "DELETE FROM kelas WHERE id_kelas='$id_kelas'";
    if($conn->query($sql) === TRUE){
         header("location:/pages/admin.php?pesan=sukses_hapus");
    }else{
        echo "Eror: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>