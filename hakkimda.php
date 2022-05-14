<?php
session_start();
ob_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Hakkımda</title>
    <link href="css/hakkımda.css" rel="stylesheet">
 
</head>
<body>
            <div class="hakkımda">Hakkımda&nbsp&nbsp</div>
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
                <div class="animation start-about"></div>
             </nav>
            <br><br><br><hr>
            <div  class="foto" style="float:left;">
                <div >
                <img src="foto/IMG_7952.jpg" alt="" style="width:350px;height:350px;border-radius:5px;">
                </div>
                <i style="color:white;margin-left:110px;padding-top:10px;text-align:center;float:left;color:black;">Eski Foça / İzmir</i>
                <div  style="margin-top:65px;">
                    <img src="foto/camlk1...jpg" alt="" style="width:350px;height:350px;border-radius:5px;">
                </div>
                <i style="color:white;margin-left:110px;padding-top:10px;text-align:center;float:left;color:black;">Çamlık / Balıkesir</i>
            </div>
                <div class="yazi">
                <h1>Hakkımda</h1>
                   <p class="yazi-p" style="margin-top:30px;margin-right:20px;margin-left:20px;">
                    Öncelikle kendi yaptığım ilk siteme hoş geldiniz. Benim ismim İsmet Özkan yaşım 18 Balıkesir Merkez doğumluyum. Annem babam ve ablam ile yaşıyordum ablam paramedik olarak Balıkesir'in erdek kısmına atandı bu sene görevine başladı. Babam bir fabrikada işçi olarak annem ise bir pastanede çalışıyor.
                    Babaannem ve Dedemlerin olduğu bir aile apartmanında kalıyoruz uzun süredir de böyle ve bundan çok mutluyum. İleride çok güzel yerlere gelme hedeflerim var bölümüm adına güzel işler yapmayı düşünüyorum ailemi gurulandırmadan da bundan vazgeçmem sanırım. Şuan birinci sınıf bilgisayar mühendsiliğindeyim ve bölümümdeki dersleri çok seviyorum yaptğım yapacağım işleri de öyle seveciğmi umuyorum
                    </p>
                        
                        <div class="ilgi" style="font-size:24px;margin-right:35px;margin-left:35px;">
                           <b>Sporlar</b> <hr>
                            <p style="font-size:18px">
                                - Futbol <br>
                                - Basketbol <br> 
                                - Yüzme <br>
                                - Fitness 
                            
                            </p>
                        </div>
                        <div class="ilgi" style="font-size:24px;margin-right:35px;">
                           <b> Sehirler </b><hr>
                            <p style="font-size:18px">
                                - İzmir <br>
                                - İstanbul <br>
                                - Balıkesir <br>
                                - Sakarya
                            </p>
                        </div>
                        <div class="ilgi" style="font-size:24px;margin-right:35px;">
                        <b> Hobiler </b>  <hr>
                            <p style="font-size:18px">
                                - Balık Tutma <br>
                                - E-Ticaret <br>
                                - Borsa <br>
                                - Yazılım
                            </p>
                        </div>
                        <div class="ilgi" style="font-size:24px;">
                        <b> Etkinlikler </b>  <hr>
                            <p style="font-size:18px">
                                - Teknofest <br>
                                - Fuarlar <br>
                                - Halısaha <br>
                                - Mangal
                            </p>
                        </div>

                </div>  
              
            <div class="foto" style="float:right;">
                <div >
                <img src="foto/4C363089-82EB-4A1F-839A-8E3EF246E850.jpg" alt="" style="width:350px;height:350px;border-radius:5px;">
                </div>
                <i style="color:white;margin-left:110px;padding-top:10px;text-align:center;float:left;color:black;">Kuvay-i Milliye / Balıkesir</i>
                <div  style="margin-top:65px;">
                    <img src="foto/IMG_2906.jpg" alt="" style="width:350px;height:350px;border-radius:5px;">
                </div>
                <i style="color:white;margin-left:110px;padding-top:10px;text-align:center;float:left;color:black;">Bigadiç Termal / Balıkesir</i>
             </div>
            
 </body>
</html>


</div>
               