<!DOCTYPE html>
<!--
	Bonativo by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Profil Kelurahan Sempaja Utara</title>

        <!-- Bootstrap -->
        <link href="{{ asset('asset/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset("asset/css/flexslider.css") }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('asset/icons/css/ionicons.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset("asset/icons/css/simple-line-icons.css") }}" rel="stylesheet" type="text/css">
       
        <!--revolution slider setting css-->
        <link href="{{ asset('asset/rs-plugin/css/settings.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/css/prettyPhoto.css') }}" rel="stylesheet" type="text/css" />
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="80">


        <!-- Static navbar -->
        <nav class="navbar navbar-default navbar-fixed-top ">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand alo" href="/index">Samarinda</a>
                    {{-- <a class="navbar-brand alo" href="index.html"><img src="{{ asset('asset/images/logo-sht.png') }}" alt=""></a> --}}
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right scroll-to">
                        <li class="active"><a href="#home">Home</a></li>
                        <li><a href="#about">Profil</a></li>
                        <li><a href="#services">Visi Misi</a></li>
                        <li><a href="/index/struktur-organisasi">Struktur Organisasi</a></li>
                        <li><a href="#blog">Berita</a></li>

                        <li><a href="/index/data-umum">Data</a></li>                      
                        {{-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Data <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/index/data-umum">Data Umum</a></li>
                                <li><a href="/index/data-kewenagan">Data Kewenangan</a></li>
                                <li><a href="/index/data-kelembagaan">Data Kelembagaan</a></li>
                            </ul>
                        </li>  --}}
                        <li><a href="#contact">Kontak</a></li>

                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>


        <div class="fullwidthbanner" id="home">
            <div class="tp-banner">
                <ul>
                    <!-- SLIDE 1 -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1500">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('asset/images/foto/2.jpg') }}" alt="desk" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption slider-title text-primary" data-x="center" data-y="center"  data-voffset="-30" data-speed="500" data-start="1200" data-easing="Power4.easeInOut" >
                            Selamat Datang
                        </div> <!-- /tp-caption -->
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption slider-caption " data-x="center" data-y="center" data-voffset="40" data-speed="500" data-start="1800" data-easing="Power4.easeInOut" data-captionhidden="on">
                            Profil Kelurahan Sempaja Utara
                        </div> <!-- /tp-caption -->

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption slider-button scroll-to" data-x="center" data-y="center" data-voffset="120" data-speed="500" data-start="2400" data-easing="Power4.easeInOut" data-captionhidden="on">
                            <a class="btn btn-white" href="#about">lihat</a>
                        </div> <!-- /tp-caption -->
                    </li>
                    <!-- SLIDE 2 -->
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1500">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('asset/images/foto/3.jpg') }}" alt="desk" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                        <!-- LAYERS -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption slider-title" data-x="center" data-y="center"  data-voffset="-30" data-speed="500" data-start="1200" data-easing="Power4.easeInOut">
                            Selamat Datang 
                        </div> <!-- /tp-caption -->

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption slider-caption" data-x="center" data-y="center" data-voffset="40" data-speed="500" data-start="1800" data-easing="Power4.easeInOut" data-captionhidden="on">
                            Profil Kelurahan Sempaja Utara
                        </div> <!-- /tp-caption -->

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption slider-button scroll-to" data-x="center" data-y="center" data-voffset="120" data-speed="500" data-start="2400" data-easing="Power4.easeInOut" data-captionhidden="on">
                            <a class="btn btn-white" href="#about">lihat</a>
                        </div> <!-- /tp-caption -->
                    </li>
                    <!-- SLIDE 3 -->
                </ul>
            </div>
        </div><!--full width banner-->





        <section id="about" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <div class="section-title">
                            <h1>Profil <span class="alo">Singkat</span></h1> 
                            <span class="border-line"></span>
                            <p class="lead subtitle-caption">
                                Sempaja Utara adalah salah satu kelurahan di Kecamatan Samarinda Utara, <span class="colored-text">Kota Samarinda</span>, Provinsi Kalimantan Timur, Indonesia.
                            </p>
                        </div>
                    </div>
                </div><!-- title row end-->

                <div class="row">
                    <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap clearfix">
                            <div class="left-side-icon">
                                <i class="ion-ios-lightbulb-outline front-icon"></i>
                                {{-- <i class="ion-ios-lightbulb-outline back-icon"></i> --}}
                            </div>
                            <div class="features-text-right">
                                <h3>Geografi</h3>                         
                                <p style="font-family:Noto Sans">
                                    Kelurahan Sempaja Utara memiliki luas 45,33 km² atau 19,75% dari luas wilayah Kecamatan Samarinda Utara. Kelurahan ini dibagi menjadi 43 Rukun Tetangga (RT).
                                </p>
                            </div>
                        </div><!--features icon wrap-->
                    </div><!--features col-->
                    <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap clearfix">
                            <div class="left-side-icon">
                                <i class="ion-ios-lightbulb-outline front-icon"></i>
                                {{-- <i class="ion-ios-lightbulb-outline back-icon"></i> --}}
                            </div>
                            <div class="features-text-right">
                                <h3>Sejarah</h3>                         
                                <p>Pada Tahun 1995 Kelurahan Sempaja Utara bernama Kelurahan Sempaja dibawah wilayah kerja Kecamatan Samarinda Utara, dan pada tanggal 06 Juni 1996 dimekarkan oleh Pemerintah Kota menjadi Kelurahan Sempaja Utara yang diresmikan oleh Bapak Walikota Drs. H. Achmad Amins, MM.</p>
                            </div>
                        </div><!--features icon wrap-->
                    </div><!--features col-->
                </div><!--row-->
                <div class="row">
                    
                    <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap clearfix">
                            <div class="left-side-icon">
                                <i class="ion-iphone front-icon"></i>
                                {{-- <i class="ion-iphone back-icon"></i> --}}
                            </div>
                            <div class="features-text-right">
                                <h3>Batas wilayah</h3>                         
                                <p style="font-family:Noto Sans">
                                    Batas Wilayah Kelurahan Sempaja Utara adalah sebagai berikut :
                                    <table class="table">
                                        <tbody>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>Utara</td>
                                            <td>Kecamatan Tenggarong Seberang dan Kelurahan Budaya Pampang</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">2</th>
                                            <td>Timur</td>
                                            <td>Kelurahan Lempake</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">3</th>
                                            <td>Selatan</td>
                                            <td>Kelurahan Sempaja Timur dan Sempaja Barat</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">4</th>
                                            <td>Barat</td>
                                            <td>Kelurahan Bukit Pinang</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                </p>
                            </div>
                        </div><!--features icon wrap-->
                    </div><!--features col-->
                    <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap clearfix">
                            <div class="left-side-icon">
                                <i class="ion-ios-people-outline front-icon"></i>
                                {{-- <i class="ion-ios-people-outline back-icon"></i> --}}
                            </div>
                            <div class="features-text-right">
                                <h3>Tipologi Kelurahan</h3>                         
                                <p>
                                    Persawahan, Perladangan, Perkebunan, Perternakan, Pertambangan, Jasa & Perdagangan
                                </p>
                            </div>
                        </div><!--features icon wrap-->
                    </div><!--features col-->
                </div><!--row-->
            </div><!--container-->      
        </section><!--about section end-->

        <div class="funfacts parallax-1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 margin-bottom30 text-center">
                        <div class="fact-box">
                            <h3>45,33 km²</h3>                          
                            <h5>Luas</h5>
                            <span class="border-line"></span>
                        </div>
                    </div><!--fact cols-->
                    <div class="col-sm-4 margin-bottom30 text-center">
                        <div class="fact-box">
                            <h3>21.369 jiwa</h3>                          
                            <h5>Jumlah Penduduk</h5>
                            <span class="border-line"></span>
                        </div>
                    </div><!--fact cols-->
                    <div class="col-sm-4 margin-bottom30 text-center">
                        <div class="fact-box">
                            <h3>471,7 jiwa/km²</h3>                          
                            <h5>Kepadatan </h5>
                            <span class="border-line"></span>
                        </div>
                    </div><!--fact cols-->
                    {{-- <div class="col-sm-3 margin-bottom30 text-center">
                        <div class="fact-box">
                            <h2>750</h2>                          
                            <h5>Cups of coffee</h5>
                            <span class="border-line"></span>
                        </div>
                    </div><!--fact cols--> --}}

                </div>
            </div>
        </div>
        {{-- <section id="about" class="section-padding"> --}}
        <section id="struktur" class="section-padding">
            <div class="team">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="section-title text-center">
                                <h1> <span class="alo">Struktur Organisasi</span></h1> 
                                <span class="border-line"></span>
                                <p class="lead subtitle-caption">
                                    Vivamus congue diam vitae tortor imperdiet congue. Nullam sagittis, tristique diam, ut ullamcorper tellus. Cras porttitor massa.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
    
                        <div class="col-sm-2 margin-bottom30">
                            <div class="team-box">
                                <img src="{{ asset('asset/images/foto/foto profil/1.jpg') }}" class="img-responsive" alt="" width="25%">
    
                                {{-- <ul class="social list-inline">
                                    <li><a href="#"><i class="icon icon-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon icon-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon icon-social-dribbble"></i></a></li>
                                </ul> --}}
                            </div>
                            <div class="team-desc">
                                <h4>DZULKIFLI, S.Sos</h4>
                                <em>Lurah</em>
                            </div>
                        </div><!--team col end-->
                        <div class="col-sm-2 margin-bottom30">
                            <div class="team-box">
                                <img src="{{ asset('asset/images/foto/foto profil/2.jpg') }}" class="img-responsive" alt="" width="25%">                       
                                {{-- <ul class="social list-inline">
                                    <li><a href="#"><i class="icon icon-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon icon-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon icon-social-dribbble"></i></a></li>
                                </ul> --}}
                            </div>
                            <div class="team-desc">
                                <h4>HJ.ARBAYAH</h4>
                                <em>Bendahara</em>
                            </div>
                        </div><!--team col end-->
                        <div class="col-sm-2 margin-bottom30">
                            <div class="team-box">
                                <img src="{{ asset('asset/images/foto/foto profil/3.jpg') }}" class="img-responsive" alt="" width="25%">                     
                                {{-- <ul class="social list-inline">
                                    <li><a href="#"><i class="icon icon-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon icon-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon icon-social-dribbble"></i></a></li>
                                </ul> --}}
                            </div>
                            <div class="team-desc">
                                <h4>Saiful, S. I.Kom</h4>
                                <em>Kasi Tata Pemerintahan</em>
                            </div>
                        </div><!--team col end-->
                        <div class="col-sm-2 margin-bottom30">
                            <div class="team-box">
                                <img src="{{ asset('asset/images/foto/foto profil/4.jpg') }}" class="img-responsive" alt="" width="25%">                     
                                {{-- <ul class="social list-inline">
                                    <li><a href="#"><i class="icon icon-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon icon-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon icon-social-dribbble"></i></a></li>
                                </ul> --}}
                            </div>
                            <div class="team-desc">
                                <h4>Mariyani, SE</h4>
                                <em>Kasi Kesejahteraan dan Pemberdayaan Masyarakat</em>
                            </div>
                        </div><!--team col end-->
                        <div class="col-sm-2 margin-bottom30">
                            <div class="team-box">
                                <img src="{{ asset('asset/images/foto/foto profil/5.jpg') }}" class="img-responsive" alt="" width="25%">                     
                                {{-- <ul class="social list-inline">
                                    <li><a href="#"><i class="icon icon-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon icon-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon icon-social-dribbble"></i></a></li>
                                </ul> --}}
                            </div>
                            <div class="team-desc">
                                <h4>Saipul Anuar, SE</h4>
                                <em>Kasi Ekonomi dan Pembangunan</em>
                            </div>
                        </div><!--team col end-->
                        <div class="col-sm-2 margin-bottom30">
                            <div class="team-box">
                                <img src="{{ asset('asset/images/foto/foto profil/6.jpg') }}" class="img-responsive" alt="" width="25%">                     
                                {{-- <ul class="social list-inline">
                                    <li><a href="#"><i class="icon icon-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon icon-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon icon-social-dribbble"></i></a></li>
                                </ul> --}}
                            </div>
                            <div class="team-desc">
                                <h4>Gede Putu Djunaya</h4>
                                <em>Staff Sekertaris</em>
                            </div>
                        </div><!--team col end-->
                        
                    </div>
                </div>
            </div><!--team section end-->
        </section>
        
        <section id="services" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <div class="section-title">
                            <h1>Visi <span class="colored-text">Misi</span></h1> 
                            <span class="border-line"></span>   
                        </div>
                    </div>
                </div><!-- title row end-->
                <div class="row ">
                    <div class="col-sm-2"></div><!--services col-->
                    <div class="col-sm-10">
                        <div class="feature-icon-wrap services-icons clearfix">
                            <div class="left-side-icon">
                                <i class="ion-ios-paperplane-outline front-icon"></i>
                            </div>
                            <div class="features-text-right">
                                <h3>Visi</h3>                         
                                <p>
                                    Pembangunan Yang Terkoordinasi Dalam Mewujudkan Pelayanan Prima
                                </p>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-sm-4"></div> --}}
                    {{-- <div class="col-sm-6 margin-bottom30">
                        <div class="feature-icon-wrap services-icons clearfix">
                            <div class="left-side-icon">
                                <i class="ion-ios-browsers-outline front-icon"></i>
                            </div>
                            <div class="features-text-right">
                                <h3>Web & Graphics design</h3>                         
                                <p>
                                    Vivamus congue diam vitae tortor imperdiet congue. Nullam sagittis, tristique diam, ut ullamcorper tellus. Cras porttitor massa.
                                </p>
                            </div>
                        </div>
                    </div><!--services col--> --}}
                </div><!--services row-->
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <div class="feature-icon-wrap services-icons clearfix">
                            <div class="left-side-icon">
                                <i class="ion-ios-world-outline front-icon"></i>
                            </div>
                            <div class="features-text-right">
                                <h3>Misi</h3>                         
                                <p>
                                    1. Meningkatkan Sistem Perencanaan Pembangunan Yang Baik Dengan Melibatkan Partisipasi Masyarakat Yang Aktif Dan Mandiri
                                </p>
                                <p>
                                    2. Meningkatkan Layanan Prima Kepada Masyarakat
                                </p>
                                <p>
                                    3. Meningkatkan Kualitas Sumber Daya Manusia (Sdm) Aparat Kelurahan
                                </p>
                                <p>
                                    4. Mewujudkan Lingkungan Yang Hijau, Bersih Dan Sehat
                                </p>
                                <p>
                                    5. Menciptakan Kondisi Wilayah Yang Aman Dan Tentram
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                    <!--services col-->
                    
                </div><!--services row-->
                
            </div>
        </section><!--services section end-->
        <div class="testimonials parallax-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <div class="flexslider testislider">
                            <ul class="slides">
                                <li>
                                    <div class="slide-items">
                                        <img src="{{ asset("asset/images/team-1.jpg") }}" alt="">
                                        <p>
                                            Vivamus congue diam vitae tortor imperdiet congue. Nullam sagittis, tristique diam, ut ullamcorper tellus. 
                                        </p>
                                        <h5>Maria Navratilova - Codeflicks inc.</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="slide-items">
                                        <img src="{{ asset ('asset/images/team-2.jpg')}}" alt="">
                                        <p>
                                            Vivamus congue diam vitae tortor imperdiet congue. Nullam sagittis, tristique diam, ut ullamcorper tellus. 
                                        </p>
                                        <h5>Maria Navratilova - Codeflicks inc.</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="slide-items">
                                        <img src="{{ asset('asset/images/team-3.jpg') }}" alt="">
                                        <p>
                                            Vivamus congue diam vitae tortor imperdiet congue. Nullam sagittis, tristique diam, ut ullamcorper tellus. 
                                        </p>
                                        <h5>Maria Navratilova - Codeflicks inc.</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--testimonials-->

        <section id="blog" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="section-title text-center">
                            <h1> <span class="alo"></span>Berita</h1> 
                            <span class="border-line"></span>
                            {{-- <p class="lead subtitle-caption">
                                Vivamus congue diam vitae tortor imperdiet congue.
                            </p> --}}
                        </div>
                    </div>
                </div><!--heading row-->
            </div><!--container-->

            <div class="news-wrapper  container-fluid">
                <div class='row'>
                <div class="col-sm-6 text-center no-padding">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63835.71253359386!2d117.17167495!3d-0.3768205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df677d8447e19ff%3A0x7174ac147fd8de1e!2sSempaja%20Utara%2C%20Kec.%20Samarinda%20Utara%2C%20Kota%20Samarinda%2C%20Kalimantan%20Timur!5e0!3m2!1sid!2sid!4v1668158491210!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>     
                </div><!--news col-->
                <div class="col-sm-6 text-center no-padding">
                    <a class="news-inner" href="post-single.html" style="background:url(images/bg-2.jpg) no-repeat; background-size: cover;">
                        <div class="post-overlay"></div>
                        <div class="post-preview-content">
                            <h4 class="date">24 April, 2015</h4>
                            <h2 class="title">Clean & Flat one page theme</h2>
                            <span class="border-line"></span>
                            <p class="author">By Maria</p>
                        </div>
                    </a>
                </div><!--news col-->
                <div class="col-sm-6 text-center no-padding">
                    <a class="news-inner" href="post-single.html" style="background:url(images/bg-3.jpg) no-repeat; background-size: cover;">
                        <div class="post-overlay"></div>
                        <div class="post-preview-content">
                            <h4 class="date">24 April, 2015</h4>
                            <h2 class="title">Clean & Flat one page theme</h2>
                            <span class="border-line"></span>
                            <p class="author">By Maria</p>
                        </div>
                    </a>
                </div><!--news col-->
                {{-- <div class="col-sm-6 text-center no-padding">
                    <a class="news-inner" href="post-single.html" style="background:url(images/bg-1.jpg) no-repeat; background-size: cover;">
                        <div class="post-overlay"></div>
                        <div class="post-preview-content">
                            <h4 class="date">24 April, 2015</h4>
                            <h2 class="title">Clean & Flat one page theme</h2>
                            <span class="border-line"></span>
                            <p class="author">By Maria</p>
                        </div>
                    </a>
                </div><!--news col--> --}}
                </div>
            </div>
            <div class="clearfix"></div>
        </section><!--news section end-->
        {{-- <div class="cta">
            <div class="container text-center scroll-to">
                <h1>Simple & clean one page template</h1>
                <a href="#contact" class="btn btn-border-black btn-radius btn-lg">Purchase now</a>
            </div>
        </div><!--call to action--> --}}

        {{-- <div class="cta">
            <div class="container text-center scroll-to">
                <h1>Simple & clean one page template</h1>
                <a href="#contact" class="btn btn-border-black btn-radius btn-lg">Purchase now</a>
            </div>
        </div><!--call to action--> --}}


        {{-- <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 ">
                        
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63835.71253359386!2d117.17167495!3d-0.3768205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df677d8447e19ff%3A0x7174ac147fd8de1e!2sSempaja%20Utara%2C%20Kec.%20Samarinda%20Utara%2C%20Kota%20Samarinda%2C%20Kalimantan%20Timur!5e0!3m2!1sid!2sid!4v1668158491210!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>      
                    </div>
                </div>
            </div>
        </section> --}}
        <!--contact section end-->{{-- col-sm-offset-3 --}}

        <section id="contact" class="section-padding">
        <footer class="footer">
            <div class="container ">
                <h3 class="alo">Kontak</h3>
                <br><br>
                <div class="row gy-3">
                    <div class="col-lg-6 col-md-6 d-flex">
                      <i class="bi bi-geo-alt icon"></i>
                      <div>
                        <h4>Alamat</h4>
                        <p>Jl. Wanyi RT 10 (Samping Rusunawa) <br>
                            Kelurahan Sempaja Utara Kecamatan <br>
                            Samarinda Utara Kota Samarinda 75119
                        </p>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 footer-links d-flex">
                      <i class="bi bi-telephone icon"></i>
                      <div>
                        <h4>Kontak Person</h4>
                        <p>
                          <strong>Telepon:</strong>0541-2521621<br>
                          <strong>Email:</strong>kelurahansempajautara06@gmail.com<br>
                          <strong>Fax:</strong>0541-2521621
                        </p>
                      </div>
                    </div>
                  </div><br><br>
                <span class="copyright">&copy; Copyright 2022. KKN Tematik 03 Created By <a href="https://www.facebook.com/galih.athalik.9/">Galih Athalik Ghazy</a>
                </span>
            </div>
        </footer>
        </section>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ asset('asset/js/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('asset/js/moderniz.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('asset/js/jquery.easing.1.3.js') }}" type="text/javascript"></script>
        <!-- bootstrap js-->
        <script src="{{ asset('asset/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script type="{{ asset('asset/text/javascript') }}" src="js/jquery.flexslider-min.js"></script>
        <script type="{{ asset('asset/text/javascript') }}" src="js/parallax.min.js"></script> 
        <script type="{{ asset('asset/text/javascript') }}" src="js/jquery.prettyPhoto.js"></script>	       
        <script type="{{ asset('asset/text/javascript') }}" src="js/jqBootstrapValidation.js"></script>
        <!--revolution slider scripts-->
        <script src="{{ asset('asset/rs-plugin/js/jquery.themepunch.tools.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('asset/rs-plugin/js/jquery.themepunch.revolution.min.js') }}" type="text/javascript"></script>  
        <script src="{{ asset('asset/js/template.js') }}" type="text/javascript"></script>

    </body>
</html>
