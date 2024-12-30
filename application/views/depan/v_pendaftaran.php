<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pendaftaran | SMPIT Bina Insan Kamil Sukmajaya Depok</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/icon1.png'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/transition-style">
    <?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>
</head>

<body>
  <!--============================= HEADER =============================-->
  
  <div data-toggle="affix" style="border-bottom:solid 1px #f2f2f2;">
      <div class="container nav-menu2">
          <div class="row">
              <div class="col-md-12">
                  <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                  <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" style="top: 0.5rem;">
                          <span class="icon-menu"></span>
                      </button>
                      <a href="<?php echo site_url('');?>" class="navbar-brand nav-brand2" ><img class="img img-responsive" width="259px;" src="<?php echo base_url().'theme/images/icon-navbar.png'?>"></a>
                      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                          <ul class="navbar-nav">
                          <?php $this->load->view('depan/partial/v_routes');?>
                        </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
    <section>
</section>
<!--//END HEADER -->
<!--============================= BLOG =============================-->
<section class="blog-wrap">
<div transition-style="in:wipe:up">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 style="margin-bottom: 2rem;"><strong>Pendaftaran Baru</strong></h2>
              <?php echo $this->session->flashdata('msg');?>
              <?php foreach ($data->result() as $row) : ?>
                <div class="blog-single-item">
                    <div class="blog-img_block">
                        <img src="<?php echo base_url().'assets/images/'.$row->pendaftaran_gambar;?>" class="img-fluid" alt="blog-img">
                        <div class="blog-date">
                            <span><?php echo $row->tanggal;?></span>
                        </div>
                    </div>
                    <div class="blog-tiltle_block">
                        <h4><a href="<?php echo site_url('pendaftaran-detail/'.$row->pendaftaran_slug);?>"><?php echo $row->pendaftaran_judul;?></a></h4>
                        <h6> <a href="#"><i class="fa fa-user" aria-hidden="true"></i><span><?php echo $row->pendaftaran_author;?></span> </a></span></a></h6>
                        <?php echo limit_words($row->pendaftaran_isi,10).'...';?>
                        <div class="blog-icons">
                            <div class="blog-share_block">
                                <a href="<?php echo site_url('pendaftaran-detail/'.$row->pendaftaran_slug);?>">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
              <?php endforeach;?>
                <nav>
                    <?php error_reporting(0); echo $page;?>
                </nav>
            </div>
            <div class="col-md-4">
                <form action="<?php echo site_url('pendaftaran/search');?>" method="get">
                    <input type="text" name="keyword" placeholder="Search" class="blog-search" required>
                    <button type="submit" class="btn btn-warning btn-blogsearch">SEARCH</button>
                </form>
               
               

            </div>
        </div>
    </div>
    </div>
</section>
<!--//END BLOG -->
<!--============================= FOOTER =============================-->
<footer>
<?php $this->load->view('depan/partial/footer');?>
        </footer>
        <!--//END FOOTER -->
        <!-- jQuery, Bootstrap JS. -->
        <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
        <!-- Plugins -->
        <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
        <!-- Subscribe -->
        <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
        <!-- Script JS -->
        <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
    </body>

    </html>
