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
        <title>Struktur Organisasi</title>

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
        
        <nav class="navbar navbar-default navbar-fixed-top before-color">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand alo" href="index.html">Samarinda</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right scroll-to">
                        <li ><a href="/index">Home</a></li>
                        <li><a href="/index#about">Profil</a></li>
                        <li><a href="/index#services">Visi Misi</a></li>
                        <li class="active"><a href="/index/struktur-organisasi">Struktur Organisasi</a></li>
                        <li><a href="/index#blog">Berita</a></li>

                        {{-- <li><a href="post-single.html">Blog Post</a></li>                       --}}
                        <li><a href="/index/data-umum">Data</a></li>  
                        {{-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Data <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/index/data-umum">Data Umum</a></li>
                                <li><a href="/index/data-kewenangan">Data Kewenangan</a></li>
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
                            <a class="btn btn-white" href="/index#about">lihat</a>
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
                            <a class="btn btn-white" href="/index#about">lihat</a>
                        </div> <!-- /tp-caption -->
                    </li>
                    <!-- SLIDE 3 -->
                </ul>
            </div>
        </div><!--full width banner-->
        {{-- <div class="page-title">
            <div class="container text-center">
                <h3>Personel Kelurahan</h3>
                <span class="border-line"></span>
            </div>
        </div><!--page title--> --}}

        <div class="container section-padding">
            <div class="row">
                <div class="col-sm-3">

                </div>
                <div class="col-sm-10 col-sm-offset-2">
                    <div class="news-inner">
                        <div class="post-preview-content">
                            <h4 class="date">11 November, 2022</h4>
                            <h2 class="title">Struktur Kepengurusan</h2>
                            {{-- <p class="author">By Maria</p> --}}
                            <h5 class="post-option"><a href="#">Comment</a> 
                                {{-- <a href="#">Share</a> --}}
                            </h5>
                            <hr>
                        </div>
                    </div><!--hews header end-->   
                    <div class="news-content margin-bottom30">
                        <div class="dataTable-container card-body">
                            <table class="table table-striped">
                                <thead class="table-primary ">
                                    <th>No</th>
                                    <th>Opsi</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                    <th>Telepon</th>
                                    <th>Email</th>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><img src="{{ asset('asset/images/foto/foto profil/1.jpg') }}" class="img-thumbnail" alt="" width="75%"></td>
                                            <td>Dzulkifli, S.Sos</td>
                                            <td>Lurah</td>
                                            <td>082149396059</td>
                                            <td>dul8183@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><img src="{{ asset('asset/images/foto/foto profil/2.jpg') }}" lass="img-thumbnail" alt="" width="75%"></td>
                                            <td>Hj. Arbayah</td>
                                            <td>Bendahara</td>
                                            <td>085250304465</td>
                                            <td>arbayah071264@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><img src="{{ asset('asset/images/foto/foto profil/3.jpg') }}" lass="img-thumbnail" alt="" width="75%"></td>
                                            <td>Saiful, S.I.Kom</td>
                                            <td>Kasi Tata Pemerintahan</td>
                                            <td>082166917771</td>
                                            <td>ipul43437@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td><img src="{{ asset('asset/images/foto/foto profil/4.jpg') }}" lass="img-thumbnail" alt="" width="75%"></td>
                                            <td>Mariyani, SE</td>
                                            <td>Kasi Kesejahteraan dan Pemberdayaan Masyarakat</td>
                                            <td>085250316167</td>
                                            <td>mariyani5164@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td><img src="{{ asset('asset/images/foto/foto profil/5.jpg') }}" lass="img-thumbnail" alt="" width="75%"></td>
                                            <td>Saipul Anuar, SE</td>
                                            <td>Kasi Ekonomi dan Pembangunan</td>
                                            <td>08134899939</td>
                                            <td>Ifoel_sprak@yahoo.co.id</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td><img src="{{ asset('asset/images/foto/foto profil/6.jpg') }}" lass="img-thumbnail" alt="" width="75%"></td>
                                            <td>Gede Putu Djunaya</td>
                                            <td>Staff Sekertaris</td>
                                            <td>082368509444</td>
                                            <td>gp_djoey@yahoo.do.id</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td><img src="{{ asset('asset/images/foto/foto profil/7.jpg') }}" lass="img-thumbnail" alt="" width="75%"></td>
                                            <td>Ratna Kumalasati, SE</td>
                                            <td>Staff Sekertaris</td>
                                            <td>085754037431</td>
                                            <td>ratnakumalasari2186@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td><img src="{{ asset('asset/images/foto/foto profil/8.jpg') }}" lass="img-thumbnail" alt="" width="75%"></td>
                                            <td>Andi Haerati</td>
                                            <td>PTTB</td>
                                            <td>-</td>
                                            <td>ratihdeh@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td><img src="{{ asset('asset/images/foto/foto profil/9.jpg') }}" lass="img-thumbnail" alt="" width="75%"></td>
                                            <td>Hifni Irawan, S.Pdl</td>
                                            <td>PTTB</td>
                                            <td>0852250101989</td>
                                            <td>hefnicool@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td><img src="{{ asset('asset/images/foto/foto profil/10.jpg') }}" lass="img-thumbnail" alt="" width="75%"></td>
                                            <td>Mirasari, S.Pd</td>
                                            <td>PTTB</td>
                                            <td>085250511666</td>
                                            <td>mirasari1991@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td><img src="{{ asset('asset/images/foto/foto profil/11.jpg') }}" lass="img-thumbnail" alt="" width="75%"></td>
                                            <td>Rahmat, SE</td>
                                            <td>PTTB</td>
                                            <td>085250887039</td>
                                            <td>rahmatsamarinda.rs@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td><img src="{{ asset('asset/images/foto/foto profil/12.jpg') }}" lass="img-thumbnail" alt="" width="75%"></td>
                                            <td>Desy Hariyanti</td>
                                            <td>PTTH</td>
                                            <td>08115553402</td>
                                            <td>desyhariyanti14@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td><img src="{{ asset('asset/images/foto/foto profil/13.jpg') }}" lass="img-thumbnail" alt="" width="75%"></td>
                                            <td>Rudi</td>
                                            <td>PTTH</td>
                                            <td>082157418992</td>
                                            <td>rudisungaikapih99@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td>14</td>
                                            <td><img src="{{ asset('asset/images/foto/foto profil/14.jpg') }}" lass="img-thumbnail" alt="" width="75%"></td>
                                            <td>Rieski Setiyawan</td>
                                            <td>PTTH</td>
                                            <td>087887885041</td>
                                            <td>riskisetiyawan777@gmail.com</td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                 <nav>
  <ul class="pager">
    <li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> Previous</a></li>
    <li class="next"><a href="#">Next <span aria-hidden="true">&rarr;</span></a></li>
  </ul>
</nav>
                </div>
            </div>
        </div>

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
