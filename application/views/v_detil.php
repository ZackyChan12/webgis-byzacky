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
  <link href="<?= base_url()?>assets/vendor/leaflet/leaflet.css" rel="stylesheet">
  <!-- HTML5 shim e Respond.js per rendere compatibile l'HTML 5 in IE8 -->
  <!-- ATTENZIONE: Respond.js non funziona se la pagina viene visualizzata in locale file:// -->
<!--[if lt IE 9]>
<script src="js/html5shiv.min.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.min.css">

    <style type="text/css">
        .user {
            padding: 5px;
            margin-bottom: 5px;
        }

        #mapid {
            height: 380px;
        }

        .peta {
            float: left;
            width: 50%;
        }

        .foto {
            float: right;
            width: 50%;
            height: 380px;
        }

        .foto img {
            height: 380px;
            width: 100%;
        }

        .detilpeta {
            width: 100%;
            padding-top: 20px;
        }
    </style>
</head>

<body>
    <div class="peta">
        <div id="mapid"></div>
    </div>
    <div class="foto owl-carousel">
        <?php foreach($dt_gambar as $data) { ?>
        <img src="<?= base_url()?>assets/uploads/<?= $data['foto_atm'] ?>">
        <?php } ?>
    </div>
    <div class="detilpeta">
        <?php foreach($dt_id_atm as $da) : ?>
      <h5>Nama : <?= $da['nama_atm']; ?></h5>
      <h5>Alamat : <?= $da['alamat_atm']; ?></h5>
      <h5>Keterangan : <?= $da['ket_atm']; ?></h5>
    <?php endforeach; ?>
    </div>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="<?= base_url()?>assets/vendor/leaflet/leaflet.js"></script>

    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

    <script type="text/javascript">
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            items: 1,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true
        });
    </script>

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


    <?php foreach($dt_atm_id as $key => $value) { ?>
        L.marker([<?= $value->long_atm ?>, <?= $value->lat_atm ?>], {icon: icon_atm}).addTo(map)
        .bindPopup("<div style='text-align: center;'><h5><b><?= $value->nama_atm ?></h5></b></div><br>"+
        "<a href='<?= base_url('Home/info_ATM/' . $value->id_atm) ?>'><img src='<?= base_url('assets/uploads/' . $value->foto_atm) ?>' style='margin-bottom: 10px;' width=100%></a>"+
        "<div style='text-align: center;'><a href='<?= base_url('Home/info_ATM/' . $value->id_atm) ?>'><button class='btn btn-sm btn-success'>Detail</button></a></div>");
    <?php } ?>


    // L.marker([-3.5976619884102337, 114.70423807178267]).addTo(map)
    // .bindPopup('<b>Kantor Kecamatan Bati - Bati</b>')
    // .openPopup();

    // $.getJSON(base_url+"home/atm", function(result){
	// 	var iconAtm = L.icon({
	// 		iconUrl: base_url+'assets/image/marker/bank.png',
	// 		iconSize: [30, 30],
	// 	});

    // $.each(result, function(i, field){
    //   var id        = result[i].id_atm;
    //   var nama      = result[i].nama_atm;
    //   var foto      = result[i].foto_atm;
    //   var atm_lat   = result[i].lat_atm;
    //   var atm_long  = result[i].long_atm;

    //   var myFeatureGroup = L.featureGroup()
    //         .on('click', groupClick)
    //         .addTo(map);
        
    //   map.flyTo([atm_long,atm_lat], 18,{
    //             animate: true,
    //             duration: 2
    //           })

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

    </script>
</body>

</html>