-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 21, 2022 at 03:25 PM
-- Server version: 5.7.33
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coding-aja`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(125) NOT NULL,
  `nama_kelas` text NOT NULL,
  `jenis_kelas` text NOT NULL,
  `gambar_kelas` varchar(255) NOT NULL,
  `isi_kelas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `jenis_kelas`, `gambar_kelas`, `isi_kelas`) VALUES
(10, 'Cara Membuat Login di Android Studio dengan Database MySQL', 'pemrograman', 'login page android.jpg', 'Cara Membuat Login di Android Studio dengan Database MySQL\r\n\r\nBerikut ini adalah langkah-langkah cara membuat login di Android Studio dengan Database MySQL, dikutip dari laman Simplified Coding:\r\n\r\n1. Membuat Database di MySQL\r\nLangkah awal sebelum membuat login di Android Studio adalah membuat database terlebih dahulu. Lalu, nantinya berfungsi untuk menyimpan berbagai data login pengguna aplikasi. \r\n\r\n2. Membuat Koneksi Database\r\nSetelah tahap pertama selesai, kamu harus membuat koneksi database. Tahap ini cukup penting, karena setiap proses pada PHP dapat dimasukkan ke dalam Android Studio.\r\n\r\nPada folder proyek kamu, buat file PHP baru dan namai dengan DbConnect.php. File yang akan digunakan untuk menghubungkan ke database nantinya harus dimasukkan kode skrip di dalamnya. \r\n\r\n3. Membangun Layanan Web\r\nMembangun layanan web merupakan bagian utamanya, karena untuk dua operasi, yaitu registrasi pengguna dan login pengguna\r\nBuat file PHP baru dengan nama Api.php yang akan menangani semua panggilan API, yaitu registrasi dan login. Kemudian, tulis kode skrip ke dalam file Api.php. Lalu, masing-masing untuk User Registration dan User Login.\r\n \r\n4. Membuat Tampilan Login dan Registrasi Android\r\nKini saatnya kita membuat bagian di Android. Bermula dari sini, semua ide kreatif kamu dibutuhkan untuk mendapatkan desain di tampilan. Kamu bisa mengubah warna, jenis font, dan lainnya yang dikombinasikan sesuai gaya dan keinginanmu. \r\n\r\nBuat proyek Android baru yang berisi tiga layer, yaitu registrasi dan login. Masukkan kode skrip sesuai desain yang kamu inginkan di masing-masing layer tersebut. \r\n\r\n5. Tambahkan Izin Internet di Manifest\r\nMembuat izin internet di file AndroidManifest.xml. Sebab, kamu akan melakukan operasi jaringan. Masukkan kode skrip di file tersebut. \r\n\r\n6. Menjalankan aplikasi\r\nTerakhir, coba jalankan aplikasi yang sudah kamu buat. Coba dengan melakukan registrasi dan login. Jika halaman registrasi dan login belum sesuai keinginanmu, perbaiki kode skrip yang kamu masukkan. \r\nSemoga penjelasan cara membuat login di Android Studio dengan database MySQL dapat membantumu untuk membuat aplikasi di Android. \r\n<div class=\"w3-panel w3-card w3-light-grey\"> \r\n<h4>HTML Example</h4>\r\n<div class=\"w3-code htmlHigh notranslate\">\r\n&lt;!DOCTYPE html&gt;<br>&lt;html&gt;<br>\r\n&lt;title&gt;HTML Tutorial&lt;/title&gt;<br>\r\n&lt;body&gt;<br><br>\r\n&lt;h1&gt;This is a heading&lt;/h1&gt;<br>\r\n&lt;p&gt;This is a paragraph.&lt;/p&gt;<br><br>\r\n&lt;/body&gt;<br>\r\n&lt;/html&gt;\r\n</div>\r\n</div>\r\n\r\n\r\n'),
(11, 'Membuat Character Ilustration  Menggunakan Adobe Ilustrator', 'design', 'lima.jpg', 'Membuat vector karakter di Adobe Illustrator\r\n\r\n\r\nAssalamualaikum wr.wb. Selamat datang di coding aja, pada  tutorial kali ini yaitu kita akan membahas tentang  â€˜â€™Membuat vector karakter di Adobe Illustratorâ€™â€™ . Langsung saja kita mulai proses pembuatannya. Langkah Pertama yang harus teman-teman lakuan adalah masukkan objek gambar yang sudah teman-teman buat dengan cara FILE > PLACE > PILIH GAMBAR.\r\n\r\nLangkah kedua yaitu membuat line art dengan cara trace gambar yang sudah dibuat sebelumnya, usahakan dalam membuat line art rapi sesuai bentuk gambar .\r\n\r\nTeman teman bias menggunakan pathfinder pada menu option WINDOW > PATHFINDER, menggunakan pathfinder ini sangat memudahkan kita dalam membuat karakter.\r\n\r\nLangkah ketiga yaitu memberi pewarnaan pada line art yang sudah dibuat dengan pentool. Posisi layer pewarnaan di atas layer outine.\r\n\r\n\r\nLangkah keempat memberi efek bayangan / shadow effect pada warna yang sebelumnya sudah dibuat dan dalam proses ini saya menggunakan pentool juga dalam membuat shadow dan highlight.\r\n\r\nLangkah keempat ini sangatlah penting, karena saat kita membuat effect shadow pada karakter, maka karakter yang sudah kita buat akan lebih realistis.\r\n\r\nMembuat karakter pada Adobe Illustrator susah susah gampang, tapi seiring waktu apabila teman- teman sering berlatih cara pembuatannya dan memahami tools yang sudah digunakan teman-teman akan terbiasa menggunakannya. Ini adalah hasil akhir dari proses pembuatan karakter di Adobe Illustrator.\r\n\r\n'),
(13, 'Membuat Landing Page Menggunakan HTML5, dan CSS', 'pemrograman', 'dua (2).jpg', 'Membuat Website Menggunakan HTML dan CSS\r\nMembuat wireframe / kerangka website\r\nLangkah yang pertama ini adalah membuat wireframe. Apa gunanya? Membuat wireframe sebelum membuat website dapat memudahkan kita dalam pemubuatan website agar tidak bingung akan dibuat desain seperti apa website kita nantinya. Membuat wireframe tidak perlu bagus, asalkan dapat mencakup semua isi dari website kalian nantinya dan tentunya dapat dijadikan patokan nantinya saat membuat.\r\n\r\nMenginstal text editor\r\nLangkah kedua inilah yang paling penting. Kalian harus menginstal terlebih dahulu aplikasi coding yang ingin digunakan, jika aplikasinya saja tidak punya gimana mau membuat website?\r\n\r\nMembuat folder baru\r\nMembuat folder ini dapat memudahkan kita untuk menyimpan hasil codingan kita nantinya agar tidak tercampur dengan file lainnya. Di folder inilah kalian dalam menyimpan semua hasil codingan yang telah dibuat dan juga file gambar yang akan digunakan untuk membuat website.\r\n\r\nMembuat file index\r\nBuatlah sebuah file dengan nama index.html pada text editor yang kalian sukai atau yang telah diinstal.\r\n\r\nTitle: isikan judul untuk nama file tersebut\r\n\r\nHeader: untuk membuat header atau judul awal website\r\n\r\nNav: untuk membuat navbar/ navigasi bar pada website\r\n\r\nArticle: membuat konten isi dari website yang akan dibuat\r\n\r\nFooter: membuat footer duntuk di bagian bawah website\r\n\r\nMembuat file style\r\nSetelah membuat file index.html selanjutkan kalian dapat membuat file dengan nama style.css pada text editor yang sama dan tentunya juga pada folder yang sama pula. Dalam file style.css ini kita isikan dengan deskripsi dari file index.html yang berisikan spesifikasinya dari header, navbar, konten, dan juga footer.\r\n\r\n\r\nUntuk codingan di atas hanya untuk refensi kalian dalam membuat file style.css selebihnya kalian bisa membuatnya sendiri dan menyesuaikan ingin seperti apa website yang akan dibuat.\r\n\r\n6.      Hubungkan file css dengan file html\r\nLangkah terakhir ini juga tidak kalah penting dengan langkah-langkah sebelumnya. Karena, jika kedua file tersebut belum dihubungkan maka program yang ada di file css tidak akan berjalan jika file html dijalankan. Untuk menghubungkan kedua file tersebut caranya cukup mudah.\r\n\r\n<link rel=\"stylesheet\" href=\"style.css\">\r\nCukup kalian tambahkan code seperti itu di bagian head pada file index, maka kedua file tersebut akan terhubung. Untuk membuat file lainnya untuk isi konten, kalian cukup ikuti langkah-langkah seperti membuat file index.html di atas. Sekian tutorial yang dapat saya sampaikan, kurang dan lebihnya mohon maaf. Terimakasih, semoga membantu.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(12) NOT NULL,
  `nama` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `level` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Muhamad Rafli Alfarizqi', 'rafli', 'riskiani', 'user'),
(2, 'admin', 'admin', 'admin22', 'admin'),
(4, 'Rafli', 'raflikun', 'rafli1234', 'user'),
(5, 'Nizar Ali', 'nzrxx', 'nizar123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(125) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
