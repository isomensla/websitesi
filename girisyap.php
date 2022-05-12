<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Giriş</title>
   
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/girisyap.css">
</head>

<body style="background-image: url('foto/arkaplan.jpg');">
  <div class="container">
    <div class="üst" style="text-shadow: 5px 5px 5px #1b6f79b0;">
      Giris Yap
      <div class="cizgi"></div>
   </div>  
   <?php
    if($_POST){
      $GelenKadi = $_POST['kadi'];
      $GelenSifre = $_POST['password'];

      if ($GelenKadi=="" or $GelenSifre=="")
      {
          echo "Lütfen Tüm Alanları Doldurun!";	
      }
      else
      {
          if ($GelenKadi=="b211210061@sakarya.edu.tr" && $GelenSifre=="b211210061")
          {
            $message = "Giriş Başarılı Yönlendiriliyorsunuz..";
            echo "<script type='text/javascript'>alert('$message');</script>";
              $_SESSION['Kullanici']= $GelenKadi;
              header("refresh:1 , url=anasayfa.php");

          }
          else
          {
               $message = "Hatalı Kullanıcı Adı veya Şifre Girdiniz.";
            echo "<script type='text/javascript'>alert('$message');</script>";	
          }
      }
  }
?>
    <div class="formm">
      <form  method="POST">
        <div style="margin-left: 305px;;width: 350px;">
          <input type="text" name="kadi" id="kadi" placeholder="Kullanici Adi Giriniz..." class="kadi" required>
        </div>
       <div style="margin-left: 305px;margin-top: 7px;;width:350px;">   
          <input type="password" name="password" id="password" placeholder="Sifre Giriniz..."  class="sifre" required>
       </div> 
       <div class="buttonyer">
    
          <button type="submit" style="	background-color: #1b6f79b0;"> Giriş Yap </button>
    
       </div>
      </form>
    </div> 
  </div>
  </body>
  </html>