<?php
ob_start();
session_start();
if (!$_SESSION['user_username']) {
    Header("Location: ../index.php");
}
include('../db/db.php');
$veriliusers=$db->prepare("SELECT * FROM hastalar ORDER BY hasta_id DESC");
$veriliusers->execute();
$say = $veriliusers->rowCount();

?>

<!DOCTYPE html>
<html lang="tr">
<head>
  <title>Veri Sahibi Kullanıcılar</title>
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
  <h2 style="text-align: center;">Veri hasta kullanıcılar</h2>
  <h6 style="text-align: center;"><?php echo "Toplam Kullanıcı: ".$say; ?></h6>

<br>
  
  <div class="table-responsive">
  <table style="margin: auto;" class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Adı</th>
      <th scope="col">Yaşı</th>
      <th scope="col">Şehir</th>
      <th>Görüntüle</th>
    </tr>
  </thead>
  <tbody>
 <?php
 
 while ($veriliuserscek = $veriliusers->fetch(PDO::FETCH_ASSOC)) {
    ?>
    
    <tr>
      <th scope="row"><?php echo $veriliuserscek['hasta_id'] ?></th>
      <td><?php echo $veriliuserscek['hasta_adi'] ?></td>
      <td><?php echo $veriliuserscek['hasta_yas'] ?></td>
      <td><?php echo $veriliuserscek['hasta_sehir'] ?></td>
      <td><button type="button" class="btn btn-success">Görüntüle</button></td>
    </tr>
    
    
    <?php
 }
 
 
 ?>

  
  </tbody>
</table>
  </div>
 

</div>

</body>
</html>
