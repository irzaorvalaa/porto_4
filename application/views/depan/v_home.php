<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SMPIT Bina Insan Kamil Sukmajaya - Depok</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/icon1.png'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick-theme.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/style.css'?>" >
    <link rel="stylesheet" href="https://unpkg.com/transition-style">
    <?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>
       <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

    <style>
.card {
  padding: 5rem;
}

.cards {
  max-width: 1200px;
  display: grid;
  grid-gap: 13rem;
}

@media (min-width: 600px) {
  .cards { grid-template-columns: repeat(2, 1fr); }
}

@media (min-width: 900px) {
  .cards { grid-template-columns: repeat(3, 1fr); }
}

</style>
</head>

<body>
    <div data-toggle="affix">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" style="top: 0.5rem;">
                            <span class="icon-menu"></span>
                        </button>
                        <a href="<?php echo site_url('');?>" class="navbar-brand nav-brand2" ><img class="img img-responsive" width="259px;" src="<?php echo base_url().'theme/images/icon-navbar.png'?>"></a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown" >
                            <ul class="navbar-nav" >
                            <?php $this->load->view('depan/partial/v_routes');?>
                             </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
<section>
<div transition-style="in:wipe:down">
    <div class="slider_img layout_two">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block" src="<?php echo base_url().'theme/images/slider-7.png'?>" alt="First slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1 >Bepikir Kreaftif &amp; Inovatif</h1>
                            <h4>Bagi kami kreativitas merupakan gerbang masa depan.<br> kreativitas akan mendorong inovasi. <br> Itulah yang kami lakukan.</h4>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url().'theme/images/slider-6.png'?>" alt="Second slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title" style="margin-top: 2rem;">
                            <h1>Guru Bekualitas Tinggi</h1>
                            <h4>Guru merupakan faktor penting dalam proses belajar-mengajar.<br> Itulah kenapa kami mendatangkan guru-guru <br>terbaik dari berbagai penjuru.</h4>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url().'theme/images/slider-8.png'?>" alt="Third slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1>Proses Belajar Interatif</h1>
                            <h4>Kami membuat proses belajar mengajar menjadi lebih interatif.<br> dengan demikian siswa lebih menyukai <br>proses belajar.</h4>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <i class="icon-arrow-left fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <i class="icon-arrow-right fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    </div> 
</section>

<section class="clearfix about about-style2">
<div class="tile">
<div transition-style="in:square:bottom-right">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
               <h2 style="width: auto;">Selamat Datang di Sekolah SMPIT Bina Insan Kamil Sukmajaya Depok</h2>
               <p>Kami Menyambut baik terbitnya Website SMPIT Bina Insan Kamil yang baru , dengan harapan dipublikasinya website ini sekolah berharap : Peningkatan layanan pendidikan kepada siswa, orangtua, dan masyarakat pada umumnya semakin meningkat. </p>
            </div>
            <div class="col-md-4">
                <img src="<?php echo base_url().'theme/images/icon1.png'?>" class="img-fluid about-img" alt="#">
            </div>
            </div>
            </div>
</section>


<section class="testimonial">
<div class="tile">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Testimonial</h2>
                </div>
                <div class="col-md-12">
                    <div class="single-item">
                        <div class="quote">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <p class="quote_text">Yayasan Al Hidayah benar-benar mengagumkan. Saya sangat senang bisa bergabung dengan Yayasan Al Hidayah dan menjadi siswa terbaik tahun 2023.</p>
                            <div class="testi-img_block">
                                <img src="<?php echo base_url().'theme/images/student-1.png'?>" class="img-fluid" alt="#">
                                <p><span>Twilight Team Tech</span>Siswa Terbaik 2023</p>
                            </div>
                        </div>
                        <div class="quote">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <p class="quote_text">Yayasan Al Hidayah benar-benar mengagumkan. Saya sangat senang bisa bergabung dengan Yayasan Al Hidayah dan menjadi siswa terbaik tahun 2022. </p>
                            <div class="testi-img_block">
                                <img src="<?php echo base_url().'theme/images/student-2.png'?>" class="img-fluid" alt="#">
                                <p><span>Twilight Team Tech</span>Siswi Terbaik 2022</p>
                            </div>
                        </div>
                        <div class="quote">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <p class="quote_text">Yayasan Al Hidayah benar-benar mengagumkan. Saya sangat senang bisa bergabung dengan Yayasan Al Hidayah dan menjadi siswa terbaik tahun 2022. </p>
                            <div class="testi-img_block">
                                <img src="<?php echo base_url().'theme/images/student-2.png'?>" class="img-fluid" alt="#">
                                <p><span>Twilight Team Tech</span>Siswi Terbaik 2022</p>
                            </div>
                        </div>
                        <div class="quote">
                            <i class="fa fa-quote-left" aria-hidden="true"></i>
                            <p class="quote_text">Yayasan Al Hidayah benar-benar mengagumkan. Saya sangat senang bisa bergabung dengan Yayasan Al Hidayah dan menjadi siswa terbaik tahun 2022. </p>
                            <div class="testi-img_block">
                                <img src="<?php echo base_url().'theme/images/student-2.png'?>" class="img-fluid" alt="#">
                                <p><span>Twilight Team Tech</span>Siswi Terbaik 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

<section class="clearfix about about-style1">
<div class="tile">
<div class="container">
        <div class="row">
            <div class="col-md-12" style="margin-bottom: 3rem;">
                <h2>Pendaftaran Sekolah SMPIT Bina Insan Kamil Sukmajaya - Depok</h2>
            </div>
        </div>
        <div class="row">
          <?php foreach ($info->result() as $row) :?>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="courses_box mb-4">
                    <div class="course-img-wrap">
                        <img src="<?php echo base_url().'assets/images/'.$row->pendaftaran_gambar;?>" class="img-fluid" alt="courses-img">
                    </div>
                    <!-- // end .course-img-wrap -->
                    <a href="<?php echo site_url('pendaftaran-detail/'.$row->pendaftaran_slug);?>" class="course-box-content">
                        <h3 style="text-align:center;"><?php echo $row->pendaftaran_judul;?></h3>
                    </a>
                </div>
            </div>
          <?php endforeach;?>
        </div> <br>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="<?php echo site_url('pendaftaran');?>" class="btn btn-default btn-courses">View More</a>
            </div>
        </div>
    </div>
    </div>
</section>

<section class="our_courses">
<div class="tile">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="text-align: center;">
                <h2>Artikel Terbaru</h2>
            </div>
        </div>
        <div class="row">
          <?php foreach ($berita->result() as $row) :?>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="courses_box mb-4">
                    <div class="course-img-wrap">
                        <img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" class="img-fluid" alt="courses-img">
                    </div>
                    <!-- // end .course-img-wrap -->
                    <a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>" class="course-box-content">
                        <h3 style="text-align:center;"><?php echo $row->tulisan_judul;?></h3>
                    </a>
                </div>
            </div>
          <?php endforeach;?>
        </div> <br>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="<?php echo site_url('artikel');?>" class="btn btn-default btn-courses">View More</a>
            </div>
        </div>
    </div>
    </div>
</section>

<section class="event">
<div class="tile">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="event-img2">
                <?php foreach ($pengumuman->result() as $row) :?>
                <div class="row">
                    <div class="col-sm-3"> <img src="<?php echo base_url().'theme/images/announcement-icon.png'?>" class="img-fluid" alt="event-img"></div><!-- // end .col-sm-3 -->
                    <div class="col-sm-9"> <h3><a href="<?php echo site_url('pengumuman');?>"><?php echo $row->pengumuman_judul;?></a></h3>
                      <span><?php echo $row->tanggal;?></span>
                      <p><?php echo limit_words($row->pengumuman_deskripsi,10).'...';?></p>

                    </div>
                </div>
                <?php endforeach;?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-12">
                      <?php foreach ($agenda->result() as $row):?>
                        <div class="event_date">
                            <div class="event-date-wrap">
                                <p><?php echo date("d", strtotime($row->agenda_tanggal));?></p>
                                <span><?php echo date("M. y", strtotime($row->agenda_tanggal));?></span>
                            </div>
                        </div>
                        <div class="date-description">
                            <h3><a href="<?php echo site_url('agenda');?>"><?php echo $row->agenda_nama;?></a></h3>
                            <p><?php echo limit_words($row->agenda_deskripsi,10).'...';?></p>
                            <hr class="event_line">
                        </div>
                        <?php endforeach;?>

                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
</section>

<footer>
<div class="tile">
<?php $this->load->view('depan/partial/footer');?>
</div>
</footer>

        <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/slick.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/waypoints.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/counterup.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
        <script>ScrollReveal().reveal('.tile', { interval: 100, delay: 100 , reset: true });</script>

    </body>

    </html>
