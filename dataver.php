<?php

if (!isset($_POST['user'])) {
    Header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <title>Covid-19 Algoritma Veri Girişi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/a.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
</head>

<body>

<div class="container">
    <br>
  <h2 style="text-align: center;">Covid-19 Algoritma Veri Girişi</h2>
<p style="text-align: center;">Hepsini doldurmak zorunda değilsiniz. Verilen doğru olması yeterli...</p>

<br>
  <form action="db/islem.php" method="post">
  <div class="table-responsive">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Gün</th>
        <th>Baş Ağrısı</th>
        <th>Sırt Ağrısı</th>
        <th>Öksürük</th>
        <th>Ateş</th>
        <th>Göğüs Ağrısı</th>
        <th>Karın Ağrısı</th>
        <th>Göz Ağrısı</th>
        <th>Bel Ağrısı</th>
        <th>Tat Alma</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
        -1. Gün (Testten Önce)
        </td>
        <td> <select name="eksibir_basagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
        <td> <select name="eksibir_sirtagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
        <td> <select name="eksibir_oksuruk" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="eksibir_ates" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="eksibir_gogusagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="eksibir_karinagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="eksibir_gozagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="eksibir_belagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="eksibir_tatalmakaybi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
      </tr>
      <tr>
        <td>
        0. Gün (Test Pozitif)
        </td>
      <td> <select name="sifir_basagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
        <td> <select name="sifir_sirtagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
        <td> <select name="sifir_oksuruk" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="sifir_ates" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="sifir_gogusagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="sifir_karinagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="sifir_gozagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="sifir_belagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="sifir_tatalmakaybi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
      </tr>
      <tr>
        <td>
        1. Gün
        </td>
      <td> <select name="bir_basagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
        <td> <select name="bir_sirtagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
        <td> <select name="bir_oksuruk" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="bir_ates" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="bir_gogusagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="bir_karinagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="bir_gozagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="bir_belagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="bir_tatalmakaybi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
      </tr>
      <tr>
        <td>
        2. Gün
        </td>
      <td> <select name="iki_basagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
        <td> <select name="iki_sirtagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
        <td> <select name="iki_oksuruk" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="iki_ates" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="iki_gogusagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="iki_karinagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="iki_gozagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="iki_belagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="iki_tatalmakaybi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
      </tr>
      <tr>
        <td>
        3. Gün
        </td>
      <td> <select name="uc_basagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
        <td> <select name="uc_sirtagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
        <td> <select name="uc_oksuruk" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="uc_ates" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="uc_gogusagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="uc_karinagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="uc_gozagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="uc_belagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="uc_tatalmakaybi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
      </tr>
      <tr>
        <td>
        4. Gün
        </td>
      <td> <select name="dort_basagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
        <td> <select name="dort_sirtagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
        <td> <select name="dort_oksuruk" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="dort_ates" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="dort_gogusagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="dort_karinagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="dort_gozagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="dort_belagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="dort_tatalmakaybi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
      </tr>
      <tr>
        <td>
        5. Gün
        </td>
      <td> <select name="bes_basagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
        <td> <select name="bes_sirtagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
        <td> <select name="bes_oksuruk" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="bes_ates" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="bes_gogusagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="bes_karinagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="bes_gozagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="bes_belagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="bes_tatalmakaybi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
      </tr>
      <tr>
        <td>
        6. Gün
        </td>
      <td> <select name="alti_basagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
        <td> <select name="alti_sirtagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
        <td> <select name="alti_oksuruk" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="alti_ates" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="alti_gogusagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="alti_karinagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="alti_gozagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="alti_belagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="alti_tatalmakaybi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
      </tr>
      <tr>
        <td>
        7. Gün
        </td>
      <td> <select name="yedi_basagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
        <td> <select name="yedi_sirtagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
        <td> <select name="yedi_oksuruk" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="yedi_ates" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="yedi_gogusagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="yedi_karinagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="yedi_gozagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="yedi_belagrisi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
     <td> <select name="yedi_tatalmakaybi" style="width: 80px;" class="form-control">
            <option value="0">Hiç</option>
            <option value="1">Az</option>
            <option value="2">Orta</option>
            <option value="3">Çok</option>
        </select></td>
      </tr>

  </table>
  </div>
  <input name="hasta_adi" value="<?php echo $_POST['hasta_adi'] ?>" type="hidden">
  <input name="hasta_yas" value="<?php echo $_POST['hasta_yas'] ?>" type="hidden">

  <input name="hasta_mail" value="<?php echo $_POST['hasta_mail'] ?>" type="hidden">

  <input name="hasta_calisma" value="<?php echo $_POST['hasta_calisma'] ?>" type="hidden">
  <input name="hasta_sosyalstatu" value="<?php echo $_POST['hasta_sosyalstatu'] ?>" type="hidden">
  <input name="hasta_sehir" value="<?php echo $_POST['hasta_sehir'] ?>" type="hidden">


<center>  <button name="userdata" type="submit" class="btn btn-primary">Sonuçları Gönder</button></center>
  </form>
</div>
<center><div class="padding">
        <div class="row container d-flex justify-content-center">
        <div class="template-demo">
             <button type="button" onclick="window.open('https://www.twitter.com/flysquare0')"class="btn btn-social-icon btn-twitter btn-rounded"><i class="fa fa-twitter"></i></button> 
             <button type="button" onclick="window.open('https://www.github.com/flysquare')"class="btn btn-social-icon btn-dribbble btn-rounded"><i class="fa fa-github"></i></button> 
             <button type="button" onclick="window.open('https://www.linkedin.com/in/flysquare')"class="btn btn-social-icon btn-linkedin btn-rounded"><i class="fa fa-linkedin"></i></button> 

        </div>
    </div></center>
</body>
</html>
