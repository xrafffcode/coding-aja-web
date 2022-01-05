<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta name="description" content="Tempat belajar online terbaik">
      <title>Coding Aja</title>

      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <link href="assets/style.css" rel="stylesheet">

      <link rel="icon" type="image/x-icon" href="/assets/img/icon.png">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    
    <body>
   
        <div id="particles-js"></div>
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
       <section class="h-100 w-100" style="box-sizing: border-box; background: rgb(37,37,156); background: linear-gradient(90deg, rgba(37,37,156,1) 0%, rgba(34,34,140,1) 39%, rgba(20,20,50,1) 100%);">
        <?php 
	    if(isset($_GET['pesan'])){
		if($_GET['pesan']=="login_dulu"){
			echo "
             <div class='alert  alert-dismissible fade show' role='alert' style='background: #524eee; color:white;'>
                <strong>Anda harus login untuk membaca kelas</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>

            ";
		}
	}
	?>
    <?php 
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['level']=="use"){
      header("location:index.php?pesan=gagal");
    }

     ?>

    <?php
      $filename = 'counter.txt';       
      function counter(){		
      global $filename;	
                    
      if(file_exists($filename)){		
        $value = file_get_contents($filename);	
      }else{		
        $value = 0;		
      }
                    
      file_put_contents($filename, ++$value);		
      }
                    
      counter();	
                    
    ?>
    <div class="container-xxl mx-auto p-0  position-relative header-2-3" style="font-family: 'Poppins', sans-serif;">
    
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a href="#">
          <img style="margin-right:0.75rem"
            src="/assets/img/logo.png" alt="" width="60">
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog"
          aria-labelledby="targetModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content border-0" style="background-color: #141432;"  >
              <div class="modal-header border-0" style="padding:	2rem; padding-bottom: 0;">
                <a class="modal-title" id="targetModalLabel">
                  <img style="margin-top:0.5rem" src="/assets/img/logo.png" alt="" width="60">
                </a>
                <button type="button" class="close btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close">
                </button>
              </div>
              <div class="modal-body" style="padding:	2rem; padding-top: 0; padding-bottom: 0;">
                <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                    <a class="nav-link" href="#" style="color: #E7E7E8;">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/pages/kelas.php">Kelas</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/pages/about.php">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/pages/contact.php">Contact</a>
                  </li>
                </ul>
              </div>
              <div class="modal-footer border-0 gap-3" style="padding:	2rem; padding-top: 0.75rem">
                <button class="btn btn-default btn-no-fill">Masuk</button>
                <button class="btn btn-fill border-0 text-white">Daftar</button>
              </div>
            </div>
          </div>
        </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#" style="color: #E7E7E8;">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/pages/kelas.php">Kelas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/pages/about.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/pages/contact.php">Contact</a>
            </li>
          </ul>
          <div class="gap-3">   
            <a href="/pages/login.php"><button class="btn btn-default btn-no-fill">Masuk</button></a>
            <a href="/pages/daftar.php"><button class="btn btn-fill text-white border-0">Daftar</button></a>
          </div>
          
        </div>
      </nav>

      <div>
     

        <div class="mx-auto d-flex flex-lg-row flex-column hero">
            
       
          <!-- Left Column -->
          <div class="left-column d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center">
            <div data-aos="zoom-in">
                 <h1 class="title-text-big">Learn and grow together with<br class=" d-lg-block d-none">Coding Aja</h1>
            </div>           
            <div class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3">
              <div data-aos="zoom-in">
                  <button class="btn d-inline-flex mb-md-0 btn-try text-white border-0">Belajar Sekarang</button>
              </div>
            </div>
          </div>
          <!-- Right Column -->
          <div class="right-column text-center d-flex justify-content-center pe-0">
            <div data-aos="zoom-in">
                <img id="img-fluid" class="h-auto mw-100" src="assets/img/hero-img.png" alt="hero-img" width="580" height="349">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="h-100 w-100" style="box-sizing: border-box; background: rgb(37,37,156); background: linear-gradient(90deg, rgba(37,37,156,1) 0%, rgba(34,34,140,1) 39%, rgba(20,20,50,1) 100%);">
    <div class="content-2-3 container-xxl mx-auto p-0  position-relative" style="font-family: 'Poppins', sans-serif">
            
            <div data-aos="fade-up">
                <div class="text-center title-text">
                    <h1 class="text-title text-white">Kenapa Memilih Kami</h1>
                    <p class="text-caption" style="margin-left: 3rem; margin-right: 3rem">
                        Tempat belajar design dan pemrograman terbaik
                    </p>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-anchor-placement="top-center">
                <div class="grid-padding text-center">
                    <div class="row">
                        <div class="col-lg-4 column">
                            <div class="icon">
                                <img src="/assets/img/mentor.png" alt="" />
                            </div>
                            <h3 class="icon-title text-white">Always On Mentor</h3>
                            <p class="icon-caption">
                                Fitur Konsultasi yang kami sediakan membuat Siswa langsung terhubung kepada Mentor pendamping secara On Time
                            </p>
                        </div>
                        <div class="col-lg-4 column">
                            <div class="icon">
                                <img src="/assets/img/course.png" alt="" />
                            </div>
                            <h3 class="icon-title text-white">The Course</h3>
                            <p class="icon-caption">
                                Course yang kami sediakan sudah menggunakan Bahasa Indonesia dan bisa didownload dengan mudah, dengan seperti ini dapat mudah di pahami oleh Siswa dan dapat di pelajari secara offline.
                            </p>
                        </div>
                        <div class="col-lg-4 column">
                            <div class="icon">
                                <img src="/assets/img/certificate.png" alt="" />
                            </div>
                            <h3 class="icon-title text-white">Certificate</h3>
                            <p class="icon-caption">
                            Dipastikan mendapatkan Sertifikat yang sesuai setelah menyelesaikan Course yang ada
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos="zoom-in-down">
                <div class="card-block">
                    <div class="card">
                        <div class="d-flex flex-lg-row flex-column align-items-center">
                            <div class="me-lg-3">
                                <img src="/assets/img/hero-img.png" alt="" width="180"/>
                            </div>
                            <div class="flex-grow-1 text-lg-start text-center card-text">
                                <h3 class="card-title text-white">
                                Tempat belajar online terbaik
                                </h3>
                                <p class="card-caption">
                                    Yuk belajar online di coding aja mulai sekarang
                                    <br class="d-none d-lg-block" /> dan tingkatkan skil diri kita.
                                </p>
                            </div>
                            <div class="card-btn-space">
                                <button class="btn btn-card text-white">Belajar Sekarang</button>
                                <button class="btn btn-outline">Masuk</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           
        </div>
        
    </section>
    <section class="client">
        <div data-aos="fade-down">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <h1 class="text-center">
                            Sudah digunakan lebih dari 320 pengguna
                        </h1>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="container review-section">
            <div class="row">
                
                <div class="col-md-5 px-5 mt-4 mt-md-0">
                    <div data-aos="fade-right">
                        <img src="/assets/img/client.png" alt="" class="img-fluid">
                    </div>      
                </div>
                <div class="col-md-7 mt-4 mt-md-0">
                    <div data-aos="fade-left">
                        <p class="review">
                        Semenjak belajar di Coding Aja skil saya lebih meningkat,dan juga saya bisa menjadi freelancer dengan penghasilan tinggi.Terima kasih Coding Aja!
                        </p>
                        <h5 class="mt-5">
                            Nizar Ali
                        </h5>
                        <p class="company">
                            Freelancer
                        </p>
                    </div>                    
                </div>
            </div>
        </div>
    </section>
    
    <section class="explore">
        <div class="pl-house">
            <div class="row text-content title pt-35 my-0 mx-0" id="header">
                <div class="col-md-9 px-md-0">
                    <div data-aos="fade-down">
                        <h1 class="pb-3">
                        Kelas kami  
                        </h1>
                        
                    </div>
                    
                </div>
                <div class="col-md-3 mt-md-3">
                    <div data-aos="fade-down">
                        <a href="/pages/kelas.php">
                            <button class="btn btn-blue px-5 py-3 mt-0">Lihat Semua</button>
                        </a>
                    </div>
                </div>
            </div>       
    </section>
    <section class="h-100 w-100" style="box-sizing: border-box; background: rgb(37,37,156); background: linear-gradient(90deg, rgba(37,37,156,1) 0%, rgba(34,34,140,1) 39%, rgba(20,20,50,1) 100%);">
        <div class="content-2-3 container-xxl mx-auto p-0  position-relative" style="font-family: 'Poppins', sans-serif ">  
            <section class="h-100 w-100" style="box-sizing: border-box; ">
                <div class="row section scrolling-wrapper flex-row flex-nowrap mx-2">
                    <div class="row" id="load_data">
                            <?php
                            include './proses/koneksi_user.php';
                            $query = "SELECT * FROM kelas";
                            $dewan1 = $db1->prepare($query);
                            $dewan1->execute();
                            $res1 = $dewan1->get_result();
                            while ($row = $res1->fetch_assoc()) {
                                $id_kelas = $row["id_kelas"];
                                $gambar_kelas = $row["gambar_kelas"];
                                $isi_kelas = $row["isi_kelas"];
                                $nama_kelas = $row["nama_kelas"];
                                $kalimat="$isi_kelas";
                                $tampil_sebagian=substr($kalimat, 0, 60);
                            ?>
                            <div class="col-sm-4 mb-3">
                                <div data-aos="zoom-in">
                                    <div class="card mt-4" style="color: white;">
                                        <img src="<?php echo "/assets/img_kelas/$gambar_kelas "; ?>" card-img-top alt="gambar">
                                        <div class="card-body text-decoration-none">
                                        <h5 class="card-title">
                                            <?php echo $nama_kelas; ?>
                                        </h5>
                                        <p class="card-text text-decoration-none text-decoration-none ">
                                            <?php echo $tampil_sebagian; ?>...
                                        </p>
                                        <a href="/pages/read.php?nama_kelas=<?php echo $nama_kelas; ?>">                           
                                            <button type="button" class="btn-card text-white w-100">Baca Kelas</button>
                                        </a> 
                                    </div>                             
                                </div>
                            </div>
                    </div>
                    <?php } ?>
                </div>
            </section>
        </div>
    </section>
         
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="/assets/script.js"></script>
    <script>
        AOS.init();
    </script>

    </body>
    <section class="h-100 w-100 " style="box-sizing: border-box; background-color: #141432">
        <div class="footer-2-3 container-xxl mx-auto position-relative p-0" style="font-family: 'Poppins', sans-serif">
            <div class="list-footer">
                <div class="row gap-md-0 gap-3">
                    <div class="col-lg-3 col-md-6">
                        <div class="">
                            <div class="list-space">
                                <img src="/assets/img/logo.png" alt="" width="120"/>
                            </div>
                            <p style="color: white;">
                                Website untuk belajar design dan code dari mentor yang sangat berpengalaman di bidangnya masing-masing. © 2021 Coding Aja
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h2 class="footer-text-title text-white">Product</h2>
                        <nav class="list-unstyled">
                            <li class="list-space">
                                <a href="" class="list-menu">Tips</a>
                            </li>
                            <li class="list-space">
                                <a href="" class="list-menu">Web Developer</a>
                            </li>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h2 class="footer-text-title text-white">Company</h2>
                        <nav class="list-unstyled">
                            <li class="list-space">
                                <a href="/pages/contact.php" class="list-menu">Contact Us</a>
                            </li>
                            <li class="list-space">
                                <a href="" class="list-menu">Blog</a>
                            </li>
                            <li class="list-space">
                                <a href="" class="list-menu">Culture</a>
                            </li>
                            <li class="list-space">
                                <a href="" class="list-menu">Security</a>
                            </li>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h2 class="footer-text-title text-white">Support</h2>
                        <nav class="list-unstyled">
                            <li class="list-space">
                                <a href="" class="list-menu">Getting Started</a>
                            </li>
                            <li class="list-space">
                                <a href="" class="list-menu">Help Center</a>
                            </li>
                            <li class="list-space">
                                <a href="" class="list-menu">Server Status</a>
                            </li>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="border-color info-footer">
                <div class="">
                    <hr class="hr" />
                </div>
                <div class="mx-auto d-flex flex-column flex-lg-row align-items-center footer-info-space gap-4">
                    <div class="d-flex title-font font-medium align-items-center gap-4">
                        <a href="">
                            <svg class="social-media-c social-media-left" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="15" cy="15" r="15" fill="#707092" />
								<g clip-path="url(#clip0)">
									<path
										d="M17.6648 9.65667H19.1254V7.11267C18.8734 7.078 18.0068 7 16.9974 7C14.8914 7 13.4488 8.32467 13.4488 10.7593V13H11.1248V15.844H13.4488V23H16.2981V15.8447H18.5281L18.8821 13.0007H16.2974V11.0413C16.2981 10.2193 16.5194 9.65667 17.6648 9.65667Z"
										fill="#141432" />
								</g>
								<defs>
									<clipPath id="clip0">
										<rect width="16" height="16" fill="white" transform="translate(7 7)" />
									</clipPath>
								</defs>
							</svg>
                        </a>
                        <a href="">
                            <svg class="social-media-c" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="15" cy="15" r="15" fill="#707092" />
								<g clip-path="url(#clip0)">
									<path
										d="M23 10.039C22.405 10.3 21.771 10.473 21.11 10.557C21.79 10.151 22.309 9.513 22.553 8.744C21.919 9.122 21.219 9.389 20.473 9.538C19.871 8.897 19.013 8.5 18.077 8.5C16.261 8.5 14.799 9.974 14.799 11.781C14.799 12.041 14.821 12.291 14.875 12.529C12.148 12.396 9.735 11.089 8.114 9.098C7.831 9.589 7.665 10.151 7.665 10.756C7.665 11.892 8.25 12.899 9.122 13.482C8.595 13.472 8.078 13.319 7.64 13.078C7.64 13.088 7.64 13.101 7.64 13.114C7.64 14.708 8.777 16.032 10.268 16.337C10.001 16.41 9.71 16.445 9.408 16.445C9.198 16.445 8.986 16.433 8.787 16.389C9.212 17.688 10.418 18.643 11.852 18.674C10.736 19.547 9.319 20.073 7.785 20.073C7.516 20.073 7.258 20.061 7 20.028C8.453 20.965 10.175 21.5 12.032 21.5C18.068 21.5 21.368 16.5 21.368 12.166C21.368 12.021 21.363 11.881 21.356 11.742C22.007 11.28 22.554 10.703 23 10.039Z"
										fill="#141432" />
								</g>
								<defs>
									<clipPath id="clip0">
										<rect width="16" height="16" fill="white" transform="translate(7 7)" />
									</clipPath>
								</defs>
							</svg>
                        </a>
                        <a href="">
                            <svg class="social-media-p" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path
									d="M17.8711 15C17.8711 16.5857 16.5857 17.8711 15 17.8711C13.4143 17.8711 12.1289 16.5857 12.1289 15C12.1289 13.4143 13.4143 12.1289 15 12.1289C16.5857 12.1289 17.8711 13.4143 17.8711 15Z"
									fill="#707092" />
								<path
									d="M21.7144 9.92039C21.5764 9.5464 21.3562 9.20789 21.0701 8.93002C20.7923 8.64392 20.454 8.42374 20.0797 8.28572C19.7762 8.16785 19.3203 8.02754 18.4805 7.98932C17.5721 7.94789 17.2997 7.93896 14.9999 7.93896C12.6999 7.93896 12.4275 7.94766 11.5193 7.98909C10.6796 8.02754 10.2234 8.16785 9.92014 8.28572C9.54591 8.42374 9.2074 8.64392 8.92976 8.93002C8.64366 9.20789 8.42348 9.54617 8.28523 9.92039C8.16736 10.2239 8.02705 10.6801 7.98883 11.5198C7.9474 12.428 7.93848 12.7004 7.93848 15.0004C7.93848 17.3002 7.9474 17.5726 7.98883 18.481C8.02705 19.3208 8.16736 19.7767 8.28523 20.0802C8.42348 20.4545 8.64343 20.7927 8.92953 21.0706C9.2074 21.3567 9.54568 21.5769 9.91991 21.7149C10.2234 21.833 10.6796 21.9733 11.5193 22.0115C12.4275 22.053 12.6997 22.0617 14.9997 22.0617C17.3 22.0617 17.5723 22.053 18.4803 22.0115C19.3201 21.9733 19.7762 21.833 20.0797 21.7149C20.8309 21.4251 21.4247 20.8314 21.7144 20.0802C21.8323 19.7767 21.9726 19.3208 22.011 18.481C22.0525 17.5726 22.0612 17.3002 22.0612 15.0004C22.0612 12.7004 22.0525 12.428 22.011 11.5198C21.9728 10.6801 21.8325 10.2239 21.7144 9.92039ZM14.9999 19.4231C12.5571 19.4231 10.5768 17.4431 10.5768 15.0002C10.5768 12.5573 12.5571 10.5773 14.9999 10.5773C17.4426 10.5773 19.4229 12.5573 19.4229 15.0002C19.4229 17.4431 17.4426 19.4231 14.9999 19.4231ZM19.5977 11.4361C19.0269 11.4361 18.5641 10.9733 18.5641 10.4024C18.5641 9.83159 19.0269 9.36879 19.5977 9.36879C20.1685 9.36879 20.6313 9.83159 20.6313 10.4024C20.6311 10.9733 20.1685 11.4361 19.5977 11.4361Z"
									fill="#707092" />
								<path
									d="M15 0C6.717 0 0 6.717 0 15C0 23.283 6.717 30 15 30C23.283 30 30 23.283 30 15C30 6.717 23.283 0 15 0ZM23.5613 18.5511C23.5197 19.468 23.3739 20.094 23.161 20.6419C22.7135 21.7989 21.7989 22.7135 20.6419 23.161C20.0942 23.3739 19.468 23.5194 18.5513 23.5613C17.6328 23.6032 17.3394 23.6133 15.0002 23.6133C12.6608 23.6133 12.3676 23.6032 11.4489 23.5613C10.5322 23.5194 9.90601 23.3739 9.35829 23.161C8.78334 22.9447 8.26286 22.6057 7.83257 22.1674C7.39449 21.7374 7.05551 21.2167 6.83922 20.6419C6.62636 20.0942 6.48056 19.468 6.4389 18.5513C6.39656 17.6326 6.38672 17.3392 6.38672 15C6.38672 12.6608 6.39656 12.3674 6.43867 11.4489C6.48033 10.532 6.6259 9.90601 6.83876 9.35806C7.05505 8.78334 7.39426 8.26263 7.83257 7.83257C8.26263 7.39426 8.78334 7.05528 9.35806 6.83899C9.90601 6.62613 10.532 6.48056 11.4489 6.43867C12.3674 6.39679 12.6608 6.38672 15 6.38672C17.3392 6.38672 17.6326 6.39679 18.5511 6.4389C19.468 6.48056 20.094 6.62613 20.6419 6.83876C21.2167 7.05505 21.7374 7.39426 22.1677 7.83257C22.6057 8.26286 22.9449 8.78334 23.161 9.35806C23.3741 9.90601 23.5197 10.532 23.5616 11.4489C23.6034 12.3674 23.6133 12.6608 23.6133 15C23.6133 17.3392 23.6034 17.6326 23.5613 18.5511Z"
									fill="#707092" />
							</svg>
                        </a>
                        <a href="">
                            <svg class="social-media-c" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="15" cy="15" r="15" fill="#707092" />
								<g clip-path="url(#clip0)">
									<path
										d="M17.9027 22.4467C17.916 22.4427 17.9287 22.4373 17.942 22.4327C26.0853 19.1973 23.8327 7 15 7C10.5673 7 7 10.6133 7 15C7 20.5513 12.6227 24.5127 17.9027 22.4467ZM10.5207 20.3727C11.0887 19.418 12.9267 16.7247 16.064 15.7953C16.72 17.468 17.18 19.4193 17.2253 21.632C14.848 22.4313 12.3407 21.8933 10.5207 20.3727ZM18.2087 21.2147C18.1213 19.0887 17.6873 17.2033 17.0687 15.57C18.4567 15.3533 20.0633 15.498 21.8853 16.228C21.498 18.402 20.108 20.2293 18.2087 21.2147ZM21.99 15.194C19.9833 14.44 18.2147 14.346 16.684 14.638C16.4473 14.1047 16.1987 13.592 15.9353 13.12C18.284 12.182 19.672 11.0387 20.2933 10.4333C21.39 11.7027 22.0413 13.346 21.99 15.194ZM19.5833 9.72133C19.018 10.2593 17.6867 11.346 15.41 12.2347C14.294 10.4693 13.1007 9.224 12.3447 8.52667C14.7633 7.53067 17.5527 7.956 19.5833 9.72133ZM11.3887 9.01533C11.9593 9.51733 13.212 10.7227 14.4207 12.5867C12.7607 13.1213 10.6793 13.514 8.148 13.5693C8.55067 11.64 9.75333 10.0053 11.3887 9.01533ZM8.02133 14.5733C10.8547 14.5273 13.148 14.08 14.9607 13.4747C15.2113 13.914 15.4493 14.3927 15.678 14.89C12.5213 15.8953 10.5487 18.4907 9.79333 19.6627C8.57467 18.3027 7.90267 16.528 8.02133 14.5733Z"
										fill="#141432" />
								</g>
								<defs>
									<clipPath id="clip0">
										<rect width="16" height="16" fill="white" transform="translate(7 7)" />
									</clipPath>
								</defs>
							</svg>
                        </a>
                    </div>
                    <nav class="mx-auto d-flex flex-wrap align-items-center justify-content-center gap-4">
                        <a href="" class="footer-link" style="text-decoration: none">Terms of Service</a>
                        <span>|</span>
                        <a href="" class="footer-link" style="text-decoration: none">Privacy Policy</a>
                        <span>|</span>
                        <a href="" class="footer-link" style="text-decoration: none">Licenses</a>
                    </nav>
                    <nav class="d-flex flex-lg-row flex-column align-items-center justify-content-center">
                        <p style="margin: 0">Copyright © 2021 Coding Aja</p>
                    </nav>
                </div>
            </div>
        </div>
    </section>
  </html>