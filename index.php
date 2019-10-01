
<!DOCTYPE html>
<html lang="en">

  <head>
    <style type="text/css">

    body {
    background: url(img/bgrapatbaru.jpg) no-repeat fixed;
   -webkit-background-size: 100% 100%;
   -moz-background-size: 100% 100%;
   -o-background-size: 100% 100%;
   background-size: 100% 100%;
}

</style>
<script type="text/javascript">
    //set timezone
    <?php date_default_timezone_set('Asia/Jakarta'); ?>
    //buat object date berdasarkan waktu di server
    var serverTime = new Date(<?php print date('Y, m, d, H, i, s, 0'); ?>);
    //buat object date berdasarkan waktu di client
    var clientTime = new Date();
    //hitung selisih
    var Diff = serverTime.getTime() - clientTime.getTime();    
    //fungsi displayTime yang dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik
    function displayServerTime(){
        //buat object date berdasarkan waktu di client
        var clientTime = new Date();
        //buat object date dengan menghitung selisih waktu client dan server
        var time = new Date(clientTime.getTime() + Diff);
        //ambil nilai jam
        var sh = time.getHours().toString();
        //ambil nilai menit
        var sm = time.getMinutes().toString();
        //ambil nilai detik
        var ss = time.getSeconds().toString();
        //tampilkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
        document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
    }
    setTimeout(function(){
    window.location.reload('slow');
}, 60000);
</script>

    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="img/logo.png">
    <link rel="icon" type="image/png" href="img/logo.png"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jadwal Rapat</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top" onload="setInterval('displayServerTime()', 1000);">
   
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-12 mx-auto">
            <h1 class="text-uppercase">
              <br>
              <br>
              <img src="img/ap1.png" width="260px" height="80px" align="right">
              <br>
              <br>
              <br>
              <p align= "right"><strong><font size= "9px"></font></p></strong>
            </h1>
            <hr>
            <div class="row">
            <div class="col-sm-6">
          <img src="img/tempat.png" width="50px" height="50px" align="right">
          </div>
          <div class="col-lg-5"><strong><font size= "5px">PST-Gd Grha AP L6-Ruang Rapat Ngurah Rai (20)</font></strong>
          </div>
        </div>
        <?php
            $now = date("d-m-Y");
        ?>
         <div class="row">
          <div class="col-sm-6">
          <img src="img/tanggal.jpg" width="50px" height="50px" align="right">
          </div>
          <div class="col-lg-5"><strong><font size= "5px"><?php echo $now?></font></strong>
          </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-sm-12" id="clock" align="right" style="font-weight: bold; font-size: 35px">
            </div>
          </div>
      </div>
    </div>


  

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
