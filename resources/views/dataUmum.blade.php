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
                        <li ><a href="/index/struktur-organisasi">Struktur Organisasi</a></li>
                        <li><a href="/index#blog">Info Lainnya</a></li>
                        <li class="active"><a href="/index/data-umum">Data</a></li>  
                        {{-- <li><a href="post-single.html">Blog Post</a></li>                       --}}
                        {{-- <li class="dropdown" class="active">
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
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1500">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('asset/images/foto/12.jpg') }}" alt="desk" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

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
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1500">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('asset/images/foto/10.jpg') }}" alt="desk" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

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
                            <h2 class="title">Data Umum</h2>
                            {{-- <p class="author">By Maria</p> --}}
                            <h5 class="post-option"><a href="#">Comment</a> 
                                {{-- <a href="#">Share</a> --}}
                            </h5>
                            <hr>
                        </div>
                    </div><!--hews header end-->   
                    <div class="news-content margin-bottom30">
                        <div class="row">
                            <div class="col-12">
                                <h5>Monografi Kelurahan</h5>
                                <hr class="mb-0">
                                <ul class="nav nav-pills mb-3 nav bt-border">
                                    <li>
                                        <a class=" nav-link control-item" href="#data-umum" role="tab" data-toggle="tab" aria-expanded="true">Data Umum</a>
                                    </li>
                                    <li>
                                        <a class=" nav-link control-item" href="#data-kewenangan" role="tab" data-toggle="tab" aria-expanded="true">Data Kewenangan</a>
                                    </li>
                                    <li>
                                        <a class=" nav-link control-item" href="#data-kelembagaan" role="tab" data-toggle="tab" aria-expanded="true">Data Kelembagaan</a>
                                    </li>
                                </ul><br>
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="data-umum">
                                        <div class="table-responsive">
                                            <table class="table table-sm table-striped" align="center">
                                                <tbody>
                                                    <tr>
                                                        <td colspan="5">
                                                            <div align='center'>
                                                                <strong>PERATURAN MENTERI DALAM NEGERI</strong>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5">
                                                            <div align='center'>
                                                                <strong>Republik Indonesia</strong>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5">
                                                            <div align='center'>
                                                                <strong>Nomor 12  Tahun 2012</strong>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5">
                                                            <div align='center'>
                                                                <strong>Tentang MONOGRAFI DESA DAN KELURAHAN</strong>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5%">&nbsp;</td>
                                                        <td width="2%" align="center">1. </td>
                                                        <td width="30%">Nama Kelurahan</td>
                                                        <td width="3%" align="center">:</td>
                                                        <td width="47%"><strong>Kelurahan Sempaja Utara</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5%">&nbsp;</td>
                                                        <td width="2%" align="center">2. </td>
                                                        <td width="30%">Tahun Pembentukan</td>
                                                        <td width="3%" align="center">:</td>
                                                        <td width="47%"><strong>2006</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5%">&nbsp;</td>
                                                        <td width="2%" align="center">3. </td>
                                                        <td width="30%">Dasar Hukum Pembentukan</td>
                                                        <td width="3%" align="center">:</td>
                                                        <td width="47%"><strong>-</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5%">&nbsp;</td>
                                                        <td width="2%" align="center">4. </td>
                                                        <td width="30%">Nomor Kode Wilayah</td>
                                                        <td width="3%" align="center">:</td>
                                                        <td width="47%"><strong>64720508</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5%">&nbsp;</td>
                                                        <td width="2%" align="center">5. </td>
                                                        <td width="30%">Nomor Kode Pos</td>
                                                        <td width="3%" align="center">:</td>
                                                        <td width="47%"><strong>75119</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5%">&nbsp;</td>
                                                        <td width="2%" align="center">6. </td>
                                                        <td width="30%">Alamat Kantor Kelurahan</td>
                                                        <td width="3%" align="center">:</td>
                                                        <td width="47%"><strong>Jl. Wanyi RT 10 (samping rusunawa)</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5%">&nbsp;</td>
                                                        <td width="2%" align="center">7. </td>
                                                        <td width="30%">Kecamatan</td>
                                                        <td width="3%" align="center">:</td>
                                                        <td width="47%"><strong>Kecamatan Samarinda Utara</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5%">&nbsp;</td>
                                                        <td width="2%" align="center">8. </td>
                                                        <td width="30%">Kabupaten/Kota</td>
                                                        <td width="3%" align="center">:</td>
                                                        <td width="47%"><strong>Samarinda</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td width="5%">&nbsp;</td>
                                                        <td width="2%" align="center">9. </td>
                                                        <td width="30%">Provinsi</td>
                                                        <td width="3%" align="center">:</td>
                                                        <td width="47%"><strong>Kalimantan Timur</strong></td>
                                                    </tr>
                                                </tbody>
                                            </table ><br>
                                            <table class="table table-sm table-striped">
                                                <tbody>
                                                    <tr>
                                                        <td width="1">1.</td>
                                                        <td colspan="3" width="40%">Tipologi Kelurahan</td>
                                                        <td>Persawahan, Perladangan, Perkebunan, Perternakan, Pertambangan, Jasa & Perdagangan</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="1">2.</td>
                                                        <td colspan="3" width="40%">Tingkat Perkembangan Kelurahan</td>
                                                        <td>Sedang</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="1">3.</td>
                                                        <td colspan="3" width="40%">Luas Wilayah</td>
                                                        <td>45 km²</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="1">4.</td>
                                                        <td colspan="3" width="40%">Batas Wilayah</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td width="1">a.</td>
                                                        <td colspan="2" width="40%">Sebelah Utara</td>
                                                        <td>KECAMATAN TENGGARONG SEBERANG & KELURAHAN BUDAYA PAMPANG</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td width="1">b.</td>
                                                        <td colspan="2" width="40%">Sebelah Selatan</td>
                                                        <td>KELURAHAN SEMPAJA TIMUR & KELURAHAN SEMPAJA BARAT</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td width="1">c.</td>
                                                        <td colspan="2" width="40%">Sebelah Barat</td>
                                                        <td>Kelurahan BUKIT PINANG</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td width="1">d.</td>
                                                        <td colspan="2" width="40%">Sebelah Timur</td>
                                                        <td>KELURAHAN LEMPAKE</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="1">5.</td>
                                                        <td colspan="3" width="40%">Orbitrasi (Jarak dari Pusat Pemerintahan)</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td width="1">a.</td>
                                                        <td colspan="2" width="40%">Orbitrasi Kecamatan</td>
                                                        <td>Samarinda Utara</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td width="1">b.</td>
                                                        <td colspan="2" width="40%">Orbitrasi Kota</td>
                                                        <td>Samarinda</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td width="1">d.</td>
                                                        <td colspan="2" width="40%">Orbitrasi Kota/Ibukota Kabupaten</td>
                                                        <td>Samarinda</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td width="1">d.</td>
                                                        <td colspan="2" width="40%">Orbitrasi Provinsi</td>
                                                        <td>Kalimantan Timur</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="1">6.</td>
                                                        <td colspan="3" width="40%">Jumlah Tanah Bersertifikat</td>
                                                        <td>315</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="1">7.</td>
                                                        <td colspan="3" width="40%">Luas Tanah Kelurahan</td>
                                                        <td>-</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="1">8.</td>
                                                        <td colspan="3" width="40%">Penduduk Miskin (Standar BPS)</td>
                                                        <td>1.132 KK</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="1">9.</td>
                                                        <td colspan="3" width="40%">UMR Kabupaten/Kota</td>
                                                        <td>Rp. 0,-</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="1">10.</td>
                                                        <td colspan="3" width="40%">Pendapatan Perkapita</td>
                                                        <td>-</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="data-kewenangan">
                                        <table class="table table-sm table-striped">
                                            <tbody>
                                                <tr>
                                                    <td width="1">1.</td>
                                                    <td colspan="2">Jumlah SK Lurah yang Telah Ditetapkan</td>
                                                    <td>0 SK</td>
                                                </tr>
                                                <tr>
                                                    <td width="1">2.</td>
                                                    <td colspan="2">Bidang yang diatur oleh SK</td>
                                                    <td>0 Bidang</td>
                                                </tr>
                                                <tr>
                                                    <td width="1">3.</td>
                                                    <td colspan="2">Urusan yang dilimpahkan Walikota</td>
                                                    <td>- Urusan</td>
                                                </tr>
                                                <tr>
                                                    <td width="1">4.</td>
                                                    <td colspan="2">Urusan Asli yang masih dilaksanakan Kelurahan</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td width="1">a.</td>
                                                    <td>Jumlah Urusan</td>
                                                    <td>- Urusan</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td width="1">b.</td>
                                                    <td>Jenis Urusan</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td width="1">5.</td>
                                                    <td colspan="2">Program yang diterima Kelurahan</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td width="1">a.</td>
                                                    <td>Pemerintah Pusat</td>
                                                    <td>0 Program</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td width="1">b.</td>
                                                    <td>Pemerintah Provinsi</td>
                                                    <td>0 Program </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td width="1">c.</td>
                                                    <td>Pemerintah Kabupaten/Kota</td>
                                                    <td>1 Program </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                    <div class="tab-pane fade " id="data-kelembagaan">
                                        <table class="table table-sm table-striped">
                                            <tbody>
                                                <tr>
                                                    <th width="1">1.</th>
                                                    <th colspan="2">LPMK (Lembaga Pemberdayaan Masyarakat Kelurahan) atau Sebutan Lain</th>
                                                    <th></th>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td width="1">a.</td>
                                                    <td>Jumlah Pengurus</td>
                                                    <td>3 Orang</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>b.</td>
                                                    <td>Jumlah Anggota</td>
                                                    <td>10 Orang</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>c.</td>
                                                    <td>Jumlah Kegiatan per Bulan</td>
                                                    <td>4 Kegiatan</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>d.</td>
                                                    <td>Jumlah Dana yang Dikelola</td>
                                                    <td>Rp. 6,250,000,-</td>
                                                </tr>
                                                <tr>
                                                    <th>2.</th>
                                                    <th colspan="2">Lembaga Adat</th>
                                                    <th>0</th>
                                                </tr>
                                                <tr>
                                                    <th>3.</th>
                                                    <th colspan="2">TP PKK</th>
                                                    <th></th>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>a.</td>
                                                    <td>Jumlah Pengurus</td>
                                                    <td>0 Orang</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>b.</td>
                                                    <td>Jumlah Anggota</td>
                                                    <td>0 Orang</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>c.</td>
                                                    <td>Jumlah Kegiatan per Bulan</td>
                                                    <td>0 Kegiatan</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>c.</td>
                                                    <td>Jumlah Buku Administrasi yang Dikelola</td>
                                                    <td>0 Buku</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>d.</td>
                                                    <td>Jumlah Dana yang Dikelola</td>
                                                    <td>Rp. 0,-</td>
                                                </tr>
                                                <tr>
                                                    <th>4.</th>
                                                    <th colspan="2">BUMRT</th>
                                                    <th></th>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>a.</td>
                                                    <td>Jumlah BUMRT</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>b.</td>
                                                    <td>Jenis BUMRT</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>c.</td>
                                                    <td>Jumlah Modal Dasar</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>d.</td>
                                                    <td>Jumlah Dana yang Dikelola</td>
                                                    <td>Rp. 0,-</td>
                                                </tr>
                                                <tr>
                                                    <th>5.</th>
                                                    <th colspan="2">Karang Taruna</th>
                                                    <th></th>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>a.</td>
                                                    <td>Jenis Kegiatan</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>b.</td>
                                                    <td>Jumlah Pengurus</td><td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>c.</td>
                                                    <td>Jumlah Anggota</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th>6.</th>
                                                    <th colspan="2">RT / RW</th>
                                                    <th></th>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>a.</td>
                                                    <td>Jumlah RT</td>
                                                    <td>43 RT</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>b.</td>
                                                    <td>Jumlah RW</td>
                                                    <td> RW</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>c.</td>
                                                    <td>Honorarium yang diterima RW dalam sebulan</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>d.</td>
                                                    <td>Honorarium yang diterima RT dalam sebulan</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th>7.</th>
                                                    <th colspan="2">Ormas (Organisasi Masyarakat)</th>
                                                    <th></th>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>a.</td>
                                                    <td>LSM</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>b.</td>
                                                    <td>Ormas</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>c.</td>
                                                    <td>Parpol</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>d.</td>
                                                    <td>Keagamaan</td>
                                                    <td>0</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>e.</td>
                                                    <td>Lainnya</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <th>8.</th>
                                                    <th colspan="2">Koperasi</th>
                                                    <th></th>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>1.</td>
                                                    <td>Koperasi Simpan Pinjam</td>
                                                    <td>0 Unit</td>
                                                </tr>
                                                <tr><td></td>
                                                    <td>2.</td>
                                                    <td>Koperasi Unit Desa</td>
                                                    <td>0 Unit</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>3.</td>
                                                    <td>Lumbung Desa</td>
                                                    <td>0 Unit</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>4.</td>
                                                    <td>Kredit Cakdak Kulak</td>
                                                    <td>0 Unit</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>5.</td>
                                                    <td>Badan Badan Usaha</td>
                                                    <td>0 Unit</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>6.</td>
                                                    <td>Usaha Ekonomi Desa</td>
                                                    <td>0 Unit</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>7.</td>
                                                    <td>Lain-lain</td>
                                                    <td>1 Unit</td>
                                                </tr>
                                                <tr>
                                                    <th>9.</th>
                                                    <th colspan="2">Lembaga Kemasyarakatan Lainnya</th>
                                                    <th>-</th>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
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
        <script type="text/javascript" src="{{ asset("asset/js/jquery.flexslider-min.js") }}"></script>
        <script type="javascript" src="{{ asset("asset/js/parallax.min.js") }}"></script> 
        <script type="text/javascript" src="{{ asset("asset/js/jquery.prettyPhoto.js")}}"></script>	       
        <script type="text/javascript" src="{{ asset('asset/js/jqBootstrapValidation.js') }}"></script>
        <!--revolution slider scripts-->
        <script src="{{ asset('asset/rs-plugin/js/jquery.themepunch.tools.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('asset/rs-plugin/js/jquery.themepunch.revolution.min.js') }}" type="text/javascript"></script>  
        <script src="{{ asset('asset/js/template.js') }}" type="text/javascript"></script>

    </body>
</html>
