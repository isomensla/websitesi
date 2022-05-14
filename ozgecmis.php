<?php
session_start();
ob_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Özgeçmiş</title>
    <link href="css/özgeçmiş.css" rel="stylesheet">
    <style>
        .giris{
                float: right;
                margin-right: 100px;
                margin-top:15px;
                font-family: Impact, Charcoal, sans-serif;
                font-size: 20px;
            }
    </style>
</head>
<body>
            <div class="ozgecmis">Özgeçmiş&nbsp&nbsp&nbsp</div>
            <?php
            if(isset($_SESSION['Kullanici'])){
                ?>
                <div class="giris">Hoşgeldiniz&nbsp&nbsp&nbsp <?php echo $_SESSION['Kullanici']?></div>
                <?php
            }
            else{
                ?>
                <a href="https://b211210061iismet.000webhostapp.com/girisyap.php"><button >Giriş Yap</button></a> 
                <?php
            }
            ?>
            <nav>
                 <a href="https://b211210061iismet.000webhostapp.com/index.php">Anasayfa</a>
                <a href="https://b211210061iismet.000webhostapp.com/hakkimda.php">Hakkımda</a>
                <a href="https://b211210061iismet.000webhostapp.com/ozgecmis.php">Özgeçmiş</a>
                <a href="https://b211210061iismet.000webhostapp.com/ilgialanim.php">İlgi Alan.</a>
                <a href="https://b211210061iismet.000webhostapp.com/sehirim.php">Şehirim</a>
                <a href="https://b211210061iismet.000webhostapp.com/takimim.php">Takımım</a>
                <a href="https://b211210061iismet.000webhostapp.com/iletisim.php">İletişim</a>
                <div class="animation start-ozgecmis"></div>
             </nav><br><br><br><hr>


         <main>
             <div class="tavan">ÖZGECMİS</div>
             <article style="padding-top:20px">
                 <section style="border: 2px groove black;text-align:center;padding-top:25px">
                 <h2 style="margin-top:0px">Eğitim</h2>
                 <p> 
                   İlkokul -> 23 Nisan İlkokulu <br>
                    Ortaokul -> Karahallılar Ortaokulu <br>
                    Lise -> İnebey Anadolu Lisesi <br>
                    Üniversite -> Sakarya Üniversitesi C.E.
                   </p>
                 </section>
                 <section style="border: 2px groove black;text-align:center;padding-top:25px">
                    <h2 style="margin-top:0px">Hobiler</h2>
                    <p>
                        Hobilerim; <br>
                        -Futbol <br>
                        -Basketbol <br>
                        -Borsa <br>
                        -E-ticaret <br>
                        -Yazılım
                    </p>
                </section>
                 <section style="border: 2px groove black;text-align:center;padding-top:25px">
                 <h2 style="margin-top:0px">Hakkımda</h2>
                    <p>Bildiğim yazılım dilleri; <br>
                    - C#,C++,HTML,PHP,JS  <br> <br>
                    Bildiğim Diller; <br>
                    -Türkçe, İngilizce
                </p>
                </section>
                <section style="border: 2px groove black;text-align:center;padding-top:25px">
                <h2 style="margin-top:0px;">Bilgilerim</h2>
                <p>Ad = İsmet <br>
                    Soyad = Özkan <br>
                    Telefon = 05419153760 <br>
                    Doğum Tarihi = 12.08.2003 <br>
                    E-mail = ozkanismet2003@gmail.com    
            </p>
                </section>
               
                <div class="foto">
                    <img src="foto/üni.jpg" alt="">
                </div>        
                <div class="foto">
                <img src="foto/borsa.jpg" alt="">
             </div>       
                 <div class="foto">
                 <img src="foto/üni" alt="">
                </div>       
             </article>

              
            
        </main>  

        <br>
         
</body>
</html>