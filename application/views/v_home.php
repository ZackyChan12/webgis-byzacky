<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?></title>
  <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

  <link href="<?= base_url() ?>assets/vendor/Sliding-Side-Menu-Panel-with-jQuery-Bootstrap-BootSideMenu/css/BootSideMenu.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/leaflet/leaflet.css" />
  <!-- HTML5 shim e Respond.js per rendere compatibile l'HTML 5 in IE8 -->
  <!-- ATTENZIONE: Respond.js non funziona se la pagina viene visualizzata in locale file:// -->
<!--[if lt IE 9]>
<script src="js/html5shiv.min.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

<style type="text/css">
  .user{
    padding:5px;
    margin-bottom: 5px;
  }
  #mapid {
	height: 450px;
  }
</style>
</head>
<body>

  <!--Test -->
  <div id="test">
    <h2 class="text-center">Data ATM <br> Bati-Bati</h2>
      <br>
      <div class="text-center">
      <button class="btn btn-primary active">Rute</button>
      <button class="btn btn-warning">Kembali</button>    
      </div>
    </div>
  <!--/Test -->

  <!--Normale contenuto di pagina-->
  <div class="container"> 
    <div class="row">
      <div class="col-md-12">
	  <h1>WEB GIS - Data ATM</h1>
	      <div id="mapid"></div>
      </div>
	  </div>
  </div>

  <!--Normale contenuto di pagina-->

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/Sliding-Side-Menu-Panel-with-jQuery-Bootstrap-BootSideMenu/js/BootSideMenu.js"></script>
  <script src="<?= base_url() ?>assets/vendor/leaflet/leaflet.js"></script>

  <script type="text/javascript">
    var map = L.map('mapid').setView([-3.5976619884102337, 114.70423807178267], 15);
	  var base_url = "<?= base_url()?>";
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var icon_atm = L.icon({
			iconUrl: base_url+'assets/image/marker/bank.png',
			iconSize: [23, 30],
		});

    <?php foreach($tampil_atm as $key => $value) { ?>
        L.marker([<?= $value->long_atm ?>, <?= $value->lat_atm ?>], {icon: icon_atm}).addTo(map)
        .bindPopup("<div style='text-align: center;'><h5><b><?= $value->nama_atm ?></h5></b></div><br>"+
        "<a href='<?= base_url('Home/info_ATM/' . $value->id_atm) ?>'><img src='<?= base_url('assets/uploads/' . $value->foto_atm) ?>' style='margin-bottom: 10px;' width=100%></a>"+
        "<div style='text-align: center;'><a href='<?= base_url('Home/info_ATM/' . $value->id_atm) ?>'><button class='btn btn-sm btn-success'>Detail</button></a></div>");
    <?php } ?>

    

    // $.getJSON(base_url+"home/atm", function(result){
		// var iconAtm = L.icon({
		// 	iconUrl: base_url+'assets/image/marker/bank.png',
		// 	iconSize: [30, 30],
		// });

    // $.each(result, function(i, field){
    //   var id        = result[i].id_atm;
    //   var nama      = result[i].nama_atm;
    //   var foto      = result[i].foto_atm;
    //   var atm_lat   = parseFloat(result[i].lat_atm);
    //   var atm_long  = parseFloat(result[i].long_atm);

    //   var myFeatureGroup = L.featureGroup()
    //         .on('click', groupClick)
    //         .addTo(map);

    //   // alert result
    //   var info_bidang = "<div style='text-align: center;'><h5><b>"+nama+"</b></h5></div>";
    //       info_bidang += "<a href='<?= base_url()?>home/info_ATM/"+id+"'><img src='<?= base_url()?>assets/uploads/"+foto+"' style='margin-bottom: 10px;' width=100%></a>";
    //       info_bidang += "<div style='text-align: center;'><a href='<?= base_url()?>home/info_ATM/"+id+"'><button class='btn btn-sm btn-success'>Detail ATM</button></a></div>";

    //   markerAtm = L.marker([atm_long, atm_lat], {icon: iconAtm})
    //         .bindPopup(info_bidang)
    //         .addTo(myFeatureGroup);
    //       markerAtm.id = result[i].id_atm;
    //   });
    // }); 


    // // Fungsi ini menangani aksi klik pada penanda dan melakukan tindakan dengan Marker yang diklik.
    // let klik_marker;

    // function groupClick(event) {
    //   console.log(`Click on marker ${event.layer.id}`);
    //   klik_marker = event.layer;
    //   doSomething(klik_marker);
    // }

    // function doSomething(marker) {
    //   // Melakukan sesuatu dengan marker yang diklik
    //   console.log(`Doing something with marker ${marker.id}`);
    // }
    // // Akhir fungsi aksi Marker  

  </script>

<script type="text/javascript">
    $('#test').BootSideMenu({side:"left", autoClose:false});
  </script>


</body>
</html>
