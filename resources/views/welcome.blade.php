<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>5 Sisi | Laporan Masyarakat</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/Logo.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">


    @include('includes.landing.stylesheet')


    <!-- =======================================================
    * Template Name: Vesperr - v4.7.0
    * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

    @include('includes.landing.navbar')


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Ruang Pelayanan Pengaduan Kamituwo Kalurahan Purwobinangun</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Sampaikan laporan masalah Anda di sini, kami akan
                        memprosesnya dengan cepat, aman dan nyaman.</h2>
                    <div data-aos="fade-up" data-aos-delay="800">
                        <a href="{{ url('login') }}" class="btn-get-started scrollto">Laporkan!</a>

                        <a href="#services" class="btn-get-started-2 scrollto">Alur laporan</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="150">
                    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assets/img/gambar1.jpg" class="d-block w-100 img-fluid animated"
                                    alt="Gambar 1">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/gambar2.jpg" class="d-block w-100 img-fluid animated"
                                    alt="Gambar 2">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/gambar4.jpg" class="d-block w-100 img-fluid animated"
                                    alt="Gambar 4">
                            </div>
                            <div class="carousel-item">
                                <img src="assets/img/gambar7.jpg" class="d-block w-100 img-fluid animated"
                                    alt="Gambar 7">
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">


        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Tentang Kami</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                        <p>
                        <h3>Lima Sisi</h3> adalah sistem laporan pengaduan Masyarakat yang dibuat untuk memudahkan
                        Masyarakat untuk memberikan pengaduan terkait permasalahan yang dialami warga setempat kepada
                        petugas kalurahan.
                        </p>
                        <ul>
                            <h3>Tujuan Lima Sisi</h3>
                            <li><i class="ri-check-double-line"></i>Memberikan pengaduan terkait suatu masalah yang
                                dialami warga dengan jelas kepada petugas kalurahan supaya bisa ditindak lebih lanjut.
                            </li>
                            <li><i class="ri-check-double-line"></i>Mempermudah masyarakat untuk berkomunikasi dengan
                                pihak Kalurahan.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <p>
                            {{-- <h4>LimaSisi</h4>merupakan komitmen  kami untuk melayani Masyarakat. Dengan hadirnya sistem pelaporan pengaduan online ini, diharapkan setiap suara masyarakat bisa didengar dan ditindaklanjuti oleh pihak Kalurahan. --}}
                        <h4>Harapan Kami</h4>kami berharap dari hasil pekerjaan kami ini dapat sedikit membantu
                        masyarakat di daerah Purwobinangun.
                        </p>
                        <a href="#services" class="btn-learn-more">Tata Cara atau Alur Pengaduan</a>
                    </div>
                    
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Informasi Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Informasi</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                        <ul>
                            <li><i class="ri-check-double-line"></i>SOP Permohonan Kartu Tanda Penduduk (KTP): <a href="https://purwobinangunsid.slemankab.go.id/home/2022/11/02/sop-permohonan-kartu-tanda-penduduk-ktp/" target="_blank">Lihat SOP KTP</a></li>
                            <li><i class="ri-check-double-line"></i>SOP Permohonan Kartu Keluarga (KK): <a href="https://purwobinangunsid.slemankab.go.id/home/2022/11/02/sop-permohonan-kartu-keluarga-kk/" target="_blank">Lihat SOP KK</a></li>
                        </ul>
                    </div>                    
                </div>

            </div>
        </section><!-- End Informasi Section -->

        <!-- ======= Counts Section ======= -->
        {{-- <section id="counts" class="counts">
      <div class="container">

        <div class="row">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
            <img src="assets/img/counts-img.svg" alt="" class="img-fluid">
          </div>

          <div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="65" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Pengguna</strong><br>DAFTAR pengguna</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Pengaduan</strong> <br> Jumlah pengaduan yg sudah dilaporkan</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-clock"></i>
                    <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Tuntas</strong> <br> Jumlah laporan yg sudah ditangani</p>
                  </div>
                </div>


              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Counts Section --> --}}

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>TATA CARA</h2>
                    <p>Nah ini dia alur pelaporan yang ada di website</p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class='bx bxs-edit-alt'></i></div>
                            <h4 class="title"><a href="">Kirim Laporan</a></h4>
                            <p class="description">Tulis laporan keluhan Anda dengan jelas.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bx bx-shuffle"></i></div>
                            <h4 class="title"><a href="">Proses Verifikasi</a></h4>
                            <p class="description">Tunggu sampai laporan Anda di verifikasi oleh admin/petugas.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title"><a href="">Tindak Lanjut</a></h4>
                            <p class="description">Laporan Anda sedang dalam diproses dan ditindak lanjut.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><i class='bx bx-check-shield'></i></div>
                            <h4 class="title"><a href="">Selesai</a></h4>
                            <p class="description">Laporan pengaduan telah selesai ditindak.</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Services Section -->


        @include('includes.landing.footer')







        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        @include('includes.landing.javascript')
</body>

</html>
