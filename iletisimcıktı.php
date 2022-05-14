<?php  

   $kadi = $_POST['kadi'];
   $email = $_POST['email'];
   $sikayet =  $_POST['sikayet'];
 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sikayet Özet</title>
        <link rel="stylesheet" href="css/iletisimcıktı.css">
    </head>
    <body>
        <div class="container">
          <div class="yazi">
              Sikayet Özeti
          </div>  
        </div>
        <div class="container2">
         <div class="yazi2">
            <div> Kullanici Adi : &nbsp <?php echo $kadi ?></div>
            <div style="margin-top:20px"> Email : &nbsp  <?php echo $email ?><br></div>
            <div style="margin-top:20px">  Sikayet : &nbsp   <?php echo $sikayet ?><br></div>       
         </div>
         <div class="buttonyer">
         <a href="https://b211210061iismet.000webhostapp.com/index.php"><button onclick>Anasayfa</button></a>
           </div>
        </div>
    </body>
</html>