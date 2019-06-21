<?php

	$signature = $_SERVER['SERVER_SIGNATURE'];
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
    $server_name = $_SERVER['SERVER_NAME'];
    
?>

<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <!-- meta charset -->
        <meta charset="utf-8">
        <!-- site title -->
        <title>RAJEB DEV LANDING PAGE</title>
        <!-- meta description -->
        <meta name="description" content="">
        <!-- mobile viwport meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- fevicon -->
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        
        <!-- ================================
        CSS Files
        ================================= -->
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i|Open+Sans:400,600,700,800" rel="stylesheet">
        <link rel="stylesheet" href="css/themefisher-fonts.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link id="color-changer" rel="stylesheet" href="css/color/red.css">
        <style>
            .hexagon-item{
                margin-left: -30px !important;
            }
            .hex-item div::before, .hex-item div::after {
                background-color: #ddd;
            }
            .page-home .overlay{
                background-color: rgba(255, 255, 255, 0.46) !important;
            }
        </style>
    </head>

    <body>

        <div class="preloader">
            <div class="loading-mask"></div>
            <div class="loading-mask"></div>
            <div class="loading-mask"></div>
            <div class="loading-mask"></div>
            <div class="loading-mask"></div>
        </div>


        <main class="site-wrapper">
            <div class="pt-table">
                <div class="pt-tablecell page-home relative" style="background-image: url('img/banner.jpg');">
                    <div class="overlay"></div>

                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                                <div class="page-title home text-center">
                                    <h1
                                    style="
                                        font-size: 100px;
                                        font-weight: bold;
                                        font-family: 'Fira Code';
                                    "
                                    >RAJEB DEV</h1>
                                    <p style="
                                        font-weight: bold;
                                        font-family: 'Fira Code';
                                        color: #000;
                                    ">
                                        ... Make Everything is Real ...
                                    </p>
                                </div>

                                <div class="hexagon-menu clear" style="margin-left: 5%;">
                                    <?php
                                            $page = 1;
                                            if (isset($_GET['page'])) {
                                                if (empty($_GET['page'])) {
                                                    $page = 1;
                                                }
                                                else {
                                                    $page = $_GET['page'];
                                                }
                                            }
                                            
                                            $dir = "../web/";
                                            $opendir = opendir($dir);
                                            $count  = 1;
                                            $arrData = [];
                                            while($file = readdir($opendir)) {
                                                if(!is_file($file) && $file<>'.' && $file<>'..') {
                                                    if($file != 'index.html'){
                                                        $count++;
                                                        $arrData[] = $file;
                                                    }
                                                }
                                            }
                                            $jumlahData = $count;
                                            $page == 1 ? $dataPerPage = 6 : $dataPerPage = 7;
                                            $awalPage = ($page-1)*$dataPerPage;
                                            $jumlahPage = ceil($jumlahData/$dataPerPage);
                                            $akhirPage = $page*$dataPerPage;
                                            if ($page == $jumlahPage ) {
                                                $akhirPage = $jumlahData-2;
                                            }
                                            if(file_exists($arrData[$awalPage].'/favicon.ico')) {
                                                $icon = $arrData[$awalPage].'/icon.png';
                                            } else {
                                                $icon = "./no_icon.png";
                                            }
                                    ?>
                                    <?php if ($page == 1) : ?>
                                    <div class='hexagon-item'>
                                        <div class='hex-item'>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <div class='hex-item'>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <a href='../phpmyadmin' class='hex-content'
                                        style='color: #000; font-weight: bold;'>
                                            <span class='hex-content-inner'>
                                                <span class='icon'>
                                                    <img  src='./icon.png'
                                                    style='
                                                        width: 50px;
                                                        height: 50px;
                                                    '
                                                     alt='icon'>
                                                </span>
                                                <span class='title'>PhpMyAdmin</span>
                                            </span>
                                            <svg viewbox='0 0 173.20508075688772 200' height='200' width='174' version='1.1' xmlns='http://www.w3.org/2000/svg'><path d='M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z' fill='#fff'></path></svg>
                                        </a>
                                    </div>
                                    <?php else : ?>
                                    <div class='hexagon-item'>
                                        <div class='hex-item'>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <div class='hex-item'>
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <a href='../web/<?= $arrData[$awalPage] ?>' class='hex-content'
                                        style='color: #000; font-weight: bold;'>
                                            <span class='hex-content-inner'>
                                                <span class='icon'>
                                                    <img  src='<?= $icon ?>'
                                                    style='
                                                        width: 50px;
                                                        height: 50px;
                                                    '
                                                     alt='icon'>
                                                </span>
                                                <span class='title'><?= $arrData[$awalPage] ?></span>
                                            </span>
                                            <svg viewbox='0 0 173.20508075688772 200' height='200' width='174' version='1.1' xmlns='http://www.w3.org/2000/svg'><path d='M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z' fill='#fff'></path></svg>
                                        </a>
                                    </div>
                                    <?php endif; ?>
                                    <!-- Mulai memanggil direktori project -->
                                    
                                    <?php
                                        $page == 1 ? $awalPage += 0 : $awalPage += 1;
                                        // $page == $jumlahPage ? $akhirPage += 1 : $akhirPage += 0;
                                        $count  = 1;
                                        $col = 0;
                                        $row = 4;
                                        $countCol = -1;
                                        for ($i=$awalPage; $i <= $akhirPage; $i++) {
                                            if(!is_file($arrData[$i]) && $arrData[$i]<>'.' && $arrData[$i]<>'..') {
                                                if($arrData[$i] != 'index.html'){
                                                    if(file_exists($arrData[$i].'/favicon.ico')) {
                                                        $icon = $arrData[$i].'/icon.png';
                                                    } else {
                                                        $icon = "./no_icon.png";
                                                    }

                                                    $modu = $count%4;

                                                    if ($modu==0) {
                                                        $row = 0;
                                                        if ($col == 1) {
                                                            $col = 2;
                                                        }else {
                                                            $col = 1;
                                                        }
                                                        $countCol++;
                                                        if ($col == 2) {
                                                            $countCol--;
                                                        }
                                                    }else{
                                                        $row++;
                                                    }

                                                    $x1 = 61+$countCol*(-24);
                                                    $y1 = -65+$countCol*(-45);

                                                    $x2 = -24+$countCol*(-24);
                                                    $y2 = -45+$countCol*(-45);

                                                    $css1 = "transform: rotate(30deg) translate(".$x1."px, ".$y1."px)";
                                                    
                                                    $css2 = "transform: rotate(30deg) translate(".$x2."px, ".$y2."px)";
                                                    
                                                    

                                                    if ($col == 0) {
                                                        $css = '';
                                                    }elseif ($col == 1) {
                                                        $css = $css1;
                                                    }else {
                                                        $css = $css2;
                                                    }
                                                    

                                                    echo "
                                                        <div class='hexagon-item'
                                                        style='$css'
                                                        >
                                                        <div class='hex-item'>
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                        </div>
                                                        <div class='hex-item'>
                                                            <div></div>
                                                            <div></div>
                                                            <div></div>
                                                        </div>
                                                        <a href='../web/$arrData[$i]' class='hex-content'
                                                        style='color: #000; font-weight: bold;'>
                                                            <span class='hex-content-inner'>
                                                                <span class='icon'>
                                                                    <img  src='$icon'
                                                                    style='
                                                                        width: 50px;
                                                                        height: 50px;
                                                                    '
                                                                    alt='icon'>
                                                                </span>
                                                                <span class='title'>$arrData[$i]</span>
                                                            </span>
                                                            <svg viewbox='0 0 173.20508075688772 200' height='200' width='174' version='1.1' xmlns='http://www.w3.org/2000/svg'><path d='M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z' fill='#fff'></path></svg>
                                                        </a>
                                                    </div>
                                                    ";
                                                $count++;
                                                }
                                            }
                                        }
                                    ?>
                                    <div class="hexagon-item" hidden>
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <a href="works.html" class="hex-content">
                                            <span class="hex-content-inner">
                                                <span class="icon">
                                                    <i class="tf-briefcase2"></i>
                                                </span>
                                                <span class="title">Works</span>
                                            </span>
                                            <svg viewbox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                        </a>
                                    </div>
                                    <div class="hexagon-item" hidden>
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <a href="testimonials.html" class="hex-content">
                                            <span class="hex-content-inner">
                                                <span class="icon">
                                                    <i class="tf-chat"></i>
                                                </span>
                                                <span class="title">Testimonials</span>
                                            </span>
                                            <svg viewbox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                        </a>
                                    </div>
                                    <div class="hexagon-item" hidden>
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <a href="contact.html" class="hex-content">
                                            <span class="hex-content-inner">
                                                <span class="icon">
                                                    <i class="tf-envelope2"></i>
                                                </span>
                                                <span class="title">Contact</span>
                                            </span>
                                            <svg viewbox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                        </a>
                                    </div>
                                </div> <!-- /.hexagon-menu -->

                            </div> <!-- /.col-xs-12 -->

                        </div> <!-- /.row -->
                    </div> <!-- /.container -->

                </div> <!-- /.pt-tablecell -->
            </div> <!-- /.pt-table -->
        </main> <!-- /.site-wrapper -->
        
        <!-- ================================
        JavaScript Libraries
        ================================= -->
        <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <!-- <script src="js/jquery.easing.min.js"></script> -->
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery-validation.min.js"></script>
        <script src="js/form.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>