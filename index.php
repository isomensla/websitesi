<?php
session_start();
ob_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Anasayfa</title>
    <link href="css/anasayfa.css" rel="stylesheet"> 
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
            <div class="anasayfa">Anasayfa&nbsp&nbsp&nbsp&nbsp</div>
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
                <div class="animation start-home"></div>
             </nav><br><br><br><hr>

             <div class="container">
                <div class="slideshow-container">
                    <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="foto/üni.jpg" style="width: 1886px;height: 500px;">
                    <div class="text">Sakarya Üniversitesi</div>
                    </div>
                
                    <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="foto/kapı.jpg" style="width:1886px;height: 500px;">
                    <div class="text">Üniversite Kapısı</div>
                    </div>
                
                    <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="foto/göl.jpg" style="width:1886px;height: 500px;">
                    <div class="text">Sapanca Gölü</div>
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                    <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                    </div>
                </div>
                
            </div>

              <script>
                let slideIndex = 1;
                showSlides(slideIndex);

               function plusSlides(n) {
               showSlides(slideIndex += n);
               }

               function currentSlide(n) {
               showSlides(slideIndex = n);
               }

               function showSlides(n) {
               let i;
               let slides = document.getElementsByClassName("mySlides");
               let dots = document.getElementsByClassName("dot");

               if (n > slides.length) {slideIndex = 1}
               if (n < 1) {slideIndex = slides.length}
               
               for (i = 0; i < slides.length; i++) {
                   slides[i].style.display = "none";
               }
               for (i = 0; i < dots.length; i++) {
                   dots[i].className = dots[i].className.replace(" active", "");
               }
               slides[slideIndex-1].style.display = "block";
               dots[slideIndex-1].className += " active";
               }
              
           </script>

              
                    <div class="container2" style="float:left">
                    <div class="">
                       <script language="javascript" src="https://havadurumu15gunluk.xyz/sitene-ekle/1/havadurumu2.js?il=Sakarya&ilce=Adapazarı&w=300&h=415&title=9fb8ff&bg=2e5789&ids=1096"></script><noscript><a href="https://havadurumu15gunluk.xyz/havadurumu/1096/sakarya-adapazari-hava-durumu-15-gunluk.html">Adapazarı Hava durumu</a></noscript>
                    </div>
                    </div>

                    <div class="icerik1">         
                            <div class="icerik2">
                                <h1>Duyuru</h1>
                                <div class="cizgi"></div>
                                <div>
                                    <div class="duyuru">
                                    <i> Erasmus başvuruları başladı. <br>
                                            Tarih : 01.04.2022
                                    </div>
                                    <div class="duyuru">
                                    <i> Web teknoloji ödevi yapımına başlandı.<br>
                                            Tarih : 12.04.2022
                                    </div>
                                    <div class="duyuru">  
                                    <i> Matematik 2. kısa sınavı sisteme yüklendi. <br>
                                            Tarih : 27.04.2022  
                                    </div>
                                    <div class="duyuru">
                                    <i> Öğrenciler final tarihlerininin açıklanmasını bekliyor. <br>
                                            Tarih : 30.04.2022
                                    </div>
                                </div>
                            </div>

                            <div class="icerik2">  
                                <h1>Güncel Haberler</h1>
                                <div class="cizgi"></div>
                                <div class="haber">
                                        <div style="font: normal 11px Arial; width: 371px; border: solid 1px #ccc; background: #fff; border-radius: 3px; box-shadow: 1px 1px 3px #ccc;">
                                            <h2 style="padding: 8px; margin: 0; height: 25px; border: 0; border-bottom: solid 1px #ccc;">
                                                <a href="https://www.trthaber.com/">
                                                    <img src="https://trthaberstatic.cdn.wp.trt.com.tr/static/images/siteneEkle/logo_a_v3.png" alt="TRT Haber Haberler" style="border: none 0;">
                                                </a>
                                            </h2>
                                            <iframe frameborder="0" width="371" height="242" src="https://www.trthaber.com/sitene-ekle/mansetler-m/?haberSay=10&renk=a&baslik=1&resimler=1"></iframe>
                                            <div style="text-align: center;line-height: 23px;border-top: solid 1px #ccc; color: #666; margin-top: 5px;box-shadow: 0 -1px 3px #ccc;">
                                                <a style="text-decoration: none;color: #666; font: normal 11px Arial;" href="https://www.trthaber.com/">Güncel Haberler</a> &nbsp;|&nbsp; <a style="text-decoration: none;color: #666; font: normal 11px Arial;" href="https://www.trthaber.com/tum-mansetler.html">Haber Manşetleri</a>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="icerik2">
                                <h1>Spor Haberleri</h1>
                                <div class="cizgi"></div>
                                <div class="haber">
                                    <div style="font: normal 11px Arial; width: 371px; border: solid 1px #ccc; background: #fff; border-radius: 3px; box-shadow: 1px 1px 3px #ccc;">
                                        <h2 style="padding: 8px; margin: 0; height: 25px; border: 0; border-bottom: solid 1px #ccc;">
                                            <a href="https://www.trtspor.com.tr/">
                                                <img src="https://www.trtspor.com.tr/static/img/siteneEkle/logo_new_a.png" alt="TRT Spor Haberler" style="border: none 0;">
                                            </a>
                                        </h2>
                                        <iframe frameborder="0" width="371" height="242" src="https://www.trtspor.com.tr/sitene-ekle/spor-toto-super-lig-m/?haberSay=10&renk=a&baslik=1&resimler=1&a=4"></iframe>
                                        <div style="text-align: center;line-height: 23px;border-top: solid 1px #ccc; color: #666; margin-top: 5px;box-shadow: 0 -1px 3px #ccc;">
                                            <a style="text-decoration: none;color: #666; font: normal 11px Arial;" href="https://www.trtspor.com.tr/">En Son Haberler</a> &nbsp;|&nbsp; <a style="text-decoration: none;color: #666; font: normal 11px Arial;" href="https://www.trtspor.com.tr/haber/futbol/spor-toto-super-lig/">Spor Toto Süper Lig</a>
                                        </div>
                                    </div>
                                </div>
                            </div>                  
                    </div>
                    
                    
                    <div class="container2" style="float:right;border-radius:5px;">
                    <div class="anasayfaicerik">
                            Bu alanda  <br> 
                            reklam sergileyebilirisiniz.
                    </div>
                    </div>
                </div>
                <footer>
                Copright B211210061
                </footer>
             
        
          
 </body>
</html>