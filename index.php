<?php
require 'system/config/koneksi.php'
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Beranda</title>
  <link rel="shortcut icon" href="asset/internal/img/img-local/logo.jpg">
  <link rel="stylesheet" href="asset/internal/css/style_index1.css">
  <link rel="stylesheet" href="asset/internal/css/style_index2.css">
  <script src="asset/internal/js/preloader.js" type="text/javascript"></script>

  <script>
    $(document).ready(function() {
      $(".preloader").fadeOut();
    })
  </script>

</head>

<body>

  <!--Pre Loader-->
  <!-- <div class="preloader">
    <div class="loading">
      <img src="asset/internal/img/img-local/spiner.gif" width="80">
    </div>
  </div> -->


  <!--Navbar-->
  <header>
    <a href="#" id="logo"></a>
    <nav>
      <a href="#" id="menu-icon"></a>
      <ul id="top-menu">
        <li style="list-style: none; display: inline"></li>
        <li class="active">
          <a href="#">Home</a>
        </li>
        <li style="list-style: none; display: inline"></li>
        <li>
          <a href="#foo">Profil</a>
        </li>
        <li style="list-style: none; display: inline"></li>
        <li>
          <a href="#bar">Lokasi</a>
        </li>
        <li style="list-style: none; display: inline"></li>
        <li>
        <a href="page/login.php" target="_blank">Laporan</a>
        </li>
        <li style="list-style: none; display: inline"></li>
      </ul>
    </nav>
  </header>

  <!-- konten1 -->
  <div class="page-wrap">
    <div class="header">
      <div class="box-1">
        <div class="transbox">
        <h1 disabled>Bank Sampah Malang</h1>
        <p> Merubah sampah menjadi penghasilan tambahan Anda !!! </p>
        <p>Timbulan sampah yang jumlahnya semakin hari semakin menumpuk, khususnya di wilayah perkotaan, saat ini telah memunculkan banyak masalah ikutan sekaligus memendam berbagai masalah yang rentan terjadi di masa yang akan datang.
Melalui pembentukan dan operasionalisasi BSM diharapkan secara bertahap dapat mengubah persepsi dan paradigma masyarakat terhadap sampah, dari sesuatu yang tidak bernilai, tidak memiliki manfaat dan tidak mengandung kebaikan apapun didalamnya, menjadi sesuatu yang memiliki nilai ekonomis, bermanfaat dan dapat memberikan kebaikan bagi manusia maupun lingkungannya apabila diolah secara tepat.</p>
        <br> <br>

        <!-- <div class="center">
          <a href="page/login.php" target="_blank">
            <div class="btn" align="center">Login</div>
          </a> <!-- End Btn -->

          <!-- <a href="#">
            <div id="btn2" align="center">Register</div>
          </a> <!-- End Btn2 -->
        <!-- </div> --> 
      </div>
    </div>
  </div>
  </div>


  <!--konten2-->
  <div id="foo">
    <section class="team">
      <div class="container">
        <div class="row">
          <h1>TERTARIK BERGABUNG ???</h1>
          <p>
          Tahun 2010 ,Direktur BSM saat ini sebagai Kader Lingkungan,bergerak melakukan penyadaran di seluruh wilayah Kota Malang,akhirnya menemukan permasalahan bagaimana menangani sampah.Karena masyarakat sudah diajak memilah,tetapi oleh pasukan kuning  dicampur kembali.Setelah diskusi dengan Kepala Dinas Kebersihan & Pertamanan ditugaskan untuk melakukan riset tentang Bank Sampah di Jogja,Surabaya,Sidoarjo, dan Malang sendiri untuk melihat pasar dan bisnis sampah.Setelah itu,diputuskan menggandeng PKK,untuk melakukan sosialisasi ke seluruhan wilayah Kota Malang, dan pada bulan Juli 2011 berdirilah BSM,yang  disyahkan oleh notaris,serta tanggal 16 Agustus 2011 mendapatkan pengesahan Walikota Malang,dan pada tanggal 15 November 2011 , diresmikan oleh Menteri Lingkungan Hidup.
          Perkembangan BSM sampai saat ini:
Sampai bulan April 2013 terdapat:
- 282 Unit BSM masyarakat (yang aktif 90%)
- 169 Unit BSM Sekolah (yang aktif 60%)
- 24 Instansi (aktif)
- 434 Individu (aktif)
- Lapak/Pengepul 5 unit
- Jumlah Nasabah Total sebesar +21.000 Nasabah
Jumlah sampah yang Terambil BSM:
- Rata-rata perhari +2Ton Dari Nasabah BSM
- Rata-rata Perhari dari Lapak 0,5Ton dari lapak/pengepul
-Jumlah Total Rata-rata Perhari +2,5Ton
-Jumlah Total Transaksi Rata-rata Perhari + Rp. 4Jt.
Saat ini Penerimaan Penjualan sampah baik dari sampah yang di cacah/giling maupun yang tidak dicacah sebesar +150 Jt dengan keuntungan +30Jt perbulan
          </p>
        </div>
        <div class="row mgt50px">
          <div class="coloumn">
            <div class="imgBox">
              <img src="asset/internal/img/img-content/1.jpg">
            </div>
            <div class="details">
              <h3>#Tahap1<br><span>Lakukan Pendaftaran</span></h3>
            </div>
          </div>
          <div class="coloumn">
            <div class="imgBox">
              <img src="asset/internal/img/img-content/2.jpg">
            </div>
            <div class="details">
              <h3>#Tahap2<br><span>Pemilahan Sampah</span></h3>
            </div>
          </div>
          <div class="coloumn">
            <div class="imgBox">
              <img src="asset/internal/img/img-content/3.jpg">
            </div>
            <div class="details">
              <h3>#Tahap3<br><span>Penimbangan Sampah</span></h3>
            </div>
          </div>
          <div class="coloumn">
            <div class="imgBox">
              <img src="asset/internal/img/img-content/4.jpg">
            </div>
            <div class="details">
              <h3>#Tahap4<br><span>Mendapat Keuntungan</span></h3>
            </div>
          </div>
          <div style="clear: both;"></div>
        </div>
      </div>
    </section>
  </div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="asset/internal/js/index.js"></script>

  <!--konten maps-->

  <br>
  <div id="bar">
    <div class="row mgt50px">
      <h1 align="center">Lokasi Bank Sampah Malang</h1>
      <br>
      <br>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.033707938459!2d112.619461!3d-7.995455999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7882a9d385ba91%3A0x667db69be1ab50c9!2sBank%20Sampah%20Malang!5e0!3m2!1sid!2sid!4v1618640006044!5m2!1sid!2sid"width="1362" height="470" frameborder="0" style="margin-bottom: 0; left: 10px;" allowfullscreen></iframe>
    </div>
  </div>

  <!--footer-->
  <footer class="footer-distributed">

    <div class="footer-left">

      <a href="#" id="logo_f"></a>
      <br>

      <p class="footer-links">
      <ul>
        <a href="#">Home</a>
        ·
        <a href="#foo">Profil</a>
        ·
        <a href="#bar">Lokasi</a>
        ·
        <a href="#baz">Laporan</a>
        </p>

        <p class="footer-company-name">&copy; Bank Sampah Malang </p>
    </div>

    <div class="footer-center">

      <div>
        <i class="fa fa-map-marker"></i>
        <p><span>Jl. S. Supriadi No.38 A, Sukun, 
        <br>Kec. Sukun, Kota Malang, Jawa Timur 65147</span></p>
      </div>

      <div>
        <i class="fa fa-phone"></i>
        <p><a href="sms:(+62)81235875600">(+62)81235875600</a></p>
      </div>

      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="https://zerowaste.id/peta-minim-sampah/bank-sampah-malang-bsm-pusat/">https://zerowaste.id/peta-minim-sampah/bank-sampah-malang-bsm-pusat/</a></p>
      </div>

    </div>

    <div class="footer-right">

      <p class="footer-company-about">
        <span>Kunjungi Sosial Media Kami!</span>
        Untuk yang ingin lebih dekat dan ingin lebih dekat dengan Bank Sampah Malang, silahkan kunjungi sosial media kami dibawah ini!
      </p>

      <div class="footer-icons">

        <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>

      </div>

    </div>

  </footer>

</body>

</html>