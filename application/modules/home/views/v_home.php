<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SemNas-UNPAM</title>

    <!-- css -->
    <link rel="stylesheet" href="assets/landingpages/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/landingpages/bower_components/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/landingpages/assets/css/main.css">
    <link rel="stylesheet" href="assets/landingpages/assets/css/logincss.css">
</head>
<body data-spy="scroll" data-target="#site-nav">
    <nav id="site-nav" class="navbar navbar-fixed-top navbar-custom">
        <div class="container">
            <div class="navbar-header">

                <!-- logo -->
                <div class="site-branding">
                    <a class="logo" href="index.html">

                        <!-- logo image  -->
                        <img src="assets/landingpages/assets/images/logo.png" alt="Logo">

                        Seminar Nasional 2017
                    </a>
                </div>

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-items" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div><!-- /.navbar-header -->

            <div class="collapse navbar-collapse" id="navbar-items">
                <ul class="nav navbar-nav navbar-right">

                    <!-- navigation menu -->
                    <li class="active"><a data-scroll href="#about">Tentang</a></li>
                    <li><a data-scroll href="#speakers">Pembicara</a></li>
                    <li><a data-scroll href="#registration">Registrasi Pemakalah</a></li>
                    <li><a data-scroll href="#schedule">Daftar Kegiatan</a></li>
                    <li><a data-scroll href="#partner">Sponsor</a></li>
                    <li><a data-scroll href="#photos">Gallery</a></li>
                    <li><a href="v_login" data-toggle="modal" data-target="#login-modal"><button class="button button4">Login</button></a></li>

                </ul>
            </div>
        </div><!-- /.container -->
    </nav>

    <header id="site-header" class="site-header valign-center">
        <div class="intro">
            <h1>Seminar Nasional Universitas Pamulang 2017</h1>
            <h2>19 Januari 2017 / Auditorium Universitas Pamulang</h2>
            <p>Dengan Tema "<b>Developer Kampus</b>"</p>

            <a class="btn btn-info" data-scroll href="#info">Informasi</a>

        </div>
    </header>


    <?php echo $this->load->view('v_login'); ?>
    <!-- ini menu about -->
    <?php echo $this->load->view('v_about'); ?>
    <!--ini batas menu about -->

    <!-- ini menu pembicara -->
    <?php echo $this->load->view('v_speaker'); ?>
    <!--ini batas menu pembicara -->

    <!-- ini menu registrasi akun -->
    <?php echo $this->load->view('v_register'); ?>
    <!--ini batas menu registrasi akun -->

    <section id="contribution" class="section bg-image-2 contribution">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-uppercase mt0 font-400">Raih Masa Depan Mulai Dari Sekarang</h3>

                    <p>"inspirasi sukses bisa diraih dengan mendengar orang lain berbicara"</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ini menu schedule -->
    <?php echo $this->load->view('v_schedule'); ?>
    <!--ini batas menu schedule -->

    <!-- ini menu partner -->
    <?php echo $this->load->view('v_partner'); ?>
    <!--ini batas menu partner -->

    <!-- ini menu partner -->
    <?php echo $this->load->view('v_galery'); ?>
    <!--ini batas menu partner -->

    <!-- ini menu footer -->
    <?php echo $this->load->view('v_footer'); ?>
    <!--ini batas menu footer -->


    <!-- script -->
    <script src="assets/landingpages/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="assets/landingpages/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/landingpages/bower_components/smooth-scroll/dist/js/smooth-scroll.min.js"></script>
    <script src="assets/landingpages/assets/js/main.js"></script>
</body>
</html>
