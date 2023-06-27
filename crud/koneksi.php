<?php
  $host = "sql208.epizy.com"; 
  $user = "epiz_32310939";
  $pass = "Zw50riG1N1fzld";
  $nama_db = "epiz_32310939_dppkb_plg"; //nama database
  $koneksi = mysqli_connect($host,$user,$pass,$nama_db); //pastikan urutan nya seperti ini, jangan tertukar

  if(!$koneksi){ //jika tidak terkoneksi maka akan tampil error
    die ("Koneksi dengan database gagal: ".mysql_connect_error());
  }
?>