<?php

if ($_SERVER['REQUEST_URI'] == '/robotik/devisi.php') {
  header("location: http://localhost/robotik/#portfolio");
} else {
  $devisi = $_GET['devisi'];
  if ($devisi != 'agravidravana' && $devisi != 'aquila' && $devisi != 'mohinder') {
    echo 'tidak ditemukan';
  } else {
    require('header-devisi.php');
    require('navbar.php');
    require($devisi. '.php');
    require_once('footer.php');
  }
}
