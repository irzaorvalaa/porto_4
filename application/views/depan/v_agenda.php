<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Agenda - SMPIT Bina Insan Kamil Sukmajaya Depok</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/icon1.png'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/fullcalendar.min.css'?>" />
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/transition-style">
</head>

<body>
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

<section class="events">
<div transition-style="in:square:hesitate">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2 class="event-title">Agenda</h2>
            </div>
            <div class="col-md-8">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item nav-tab1">
                        <a class="nav-link tab-list active" data-toggle="tab" href="#upcoming-events" role="tab">Agenda Terbaru </a>
                    </li>
                </ul>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="tab-content">
                <div class="tab-pane active" id="upcoming-events" role="tabpanel">
                  <?php foreach($data->result() as $row):?>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="event-date">
                                    <h4><?php echo date("d", strtotime($row->agenda_tanggal));?></h4> <span><?php echo date("M Y", strtotime($row->agenda_tanggal));?></span>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="event-heading">
                                    <h3><?php echo $row->agenda_nama;?></h3>
                                    <p><?php echo $row->agenda_deskripsi;?></p>
                                    <p><?php echo $row->agenda_keterangan;?></p>
                                    <h4>
                                    <strong>Agenda dimulai pada :</strong>
                                    <strong>Mulai : <?php echo $row->agenda_mulai;?> - Selesai <?php echo $row->agenda_selesai;?> </strong></h4>
                                    <h4><strong>Waktu : <?php echo $row->agenda_waktu?></strong></h4>
                                    <h4><strong>Tempat : <?php echo $row->agenda_tempat;?></strong></h4>
                                 
                                </div>
                          </div>
                      </div>
                      <hr class="event-underline">
                  </div>
                <?php endforeach;?>
      <div class="col-md-12 text-center">
        <?php echo $page;?>
    </div>
</div>

</div>
</div>
</div>
</div>
</section>

<footer>
<?php $this->load->view('depan/partial/footer');?>
                </footer>

        <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/moment.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/fullcalendar.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
    </body>

    </html>
