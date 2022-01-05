<?php
    include 'koneksi.php';

    if(isset($_POST['simpan'])){
        $nama_kelas = $_POST['nama_kelas'];
        $jenis_kelas = $_POST['jenis_kelas'];
        $isi_kelas = $_POST['isi_kelas'];
        $image = $_FILES['gambar_kelas']['name'];
        $target = "../assets/img_kelas/";
        $namaSementara = $_FILES['gambar_kelas']['tmp_name'];
        $terupload = move_uploaded_file($namaSementara, $target.$image);


        $sql = "INSERT INTO kelas (nama_kelas, jenis_kelas,gambar_kelas,isi_kelas) VALUES('$nama_kelas','$jenis_kelas','$image','$isi_kelas')";
        if($conn->query($sql) === TRUE){
            header("location:../pages/admin.php?pesan=tambah_sukses");
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }	
      
    }
   

    $conn->close();

?>