<?php
session_start();
ob_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Özgeçmiş</title>
    <link href="css/b.css" rel="stylesheet">
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
                <a href="http://localhost/webteknoloji/girisyap.php"><button >Giriş Yap</button></a> 
                <?php
            }
            ?>
            <nav>
                <a href="http://localhost/webteknoloji/anasayfa.php">Anasayfa</a>
                <a href="http://localhost/webteknoloji/hakkimda.php">Hakkımda</a>
                <a href="http://localhost/webteknoloji/ozgecmis.php">Özgeçmiş</a>
                <a href="http://localhost/webteknoloji/ilgialanim.php">İlgi Alan.</a>
                <a href="http://localhost/webteknoloji/sehirim.php">Şehirim</a>
                <a href="http://localhost/webteknoloji/takimim.php">Takımım</a>
                <a href="http://localhost/webteknoloji/iletisim.php">İletişim</a>
                <div class="animation start-ozgecmis"></div>
             </nav><br><br><br><hr>


         <main><h3>ÖZGECMİS</h3>
             <article style="padding-top:20px">
                 <section style="border: 2px groove black;">
                     <h3 class="dönem">İlk Okul</h3>
                 </section>
                 <section style="border: 2px groove black;">
                 <h3 class="dönem">Orta Okul</h3>
                 </section>
                 <section style="border: 2px groove black;">
                 <h3 class="dönem">Lise</h3>
                 </section>
                 <section style="border: 2px groove black;"> 
                 <h3 class="dönem">Üniversite</h3>
                 </section>
             </article>
            
             <article class="article" style="padding-top:20px">
                 <section class="section" style="margin-top:10px;">
                    <img src="foto/okul/ilkokul.jpg" alt="23 Nisan İlkokulu">
                    <i>23 Nisan İlkokulu </i>
                </section>
                <section  class="section" style="margin-top:80px;">
                    <img src="foto/okul/ortaokul.jpg" alt="Karahallılar Ortaokulu">
                    <i>Karahallılar Ortaokulu</i>
                </section>
                <section  class="section" style="margin-top:70px;">
                    <img src="foto/okul/lise.jpg" alt="İnebey Anadolu Lisesi" >
                    <i>İnebey Anadolu Lisesi</i>
                </section>
                <section  class="section" style="margin-top:65px;">
                    <img src="foto/okul/üni.jpg" alt="Sakarya Üniversitesi">
                    <i>Sakarya Üniversitesi</i>
                </section>
             </article>
        </main>
</body>
</html>