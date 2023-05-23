<?php
if ($_GET['devisi'] == 'agravidravana') {
  $title = 'AGRA VIDRAVANA';
  $des = 'Agra vidravana adalah tim robot terbang Universitas Negeri Semarang yang menjadi wadah bagi mahasiswa yang memiliki minat riset dan pengembangan UAV (Unmanned Aerial Vehicles) jenis racing plane.';
} elseif ($_GET['devisi'] == 'aquila') {
  $title = 'AQUILA';
  $des = 'AQUILA adalah tim robot terbang Universitas Negeri Semarang yang menjadi wadah bagi mahasiswa yang memiliki minat riset dan pengembangan UAV (Unmanned Aerial Vehicles) jenis Vertical Take-Off Landing.';
} else {
  $title = 'MOHINDER';
  $des = 'MOHINDER adalah tim robot terbang Universitas Negeri Semarang yang menjadi wadah bagi mahasiswa yang memiliki minat riset dan pengembangan UAV (Unmanned Aerial Vehicles) jenis Fixed Wing.';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title; ?></title>
  <meta content="<?= $des;; ?>" name="description">
  <meta content="<?= $title; ?>" name="keywords">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/robotik/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/robotik/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/robotik/favicon-16x16.png">
  <link rel="manifest" href="assets/img/robotik/site.webmanifest">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Knight - v2.2.1
  * Template URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>