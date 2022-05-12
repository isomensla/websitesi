<?php
session_start();
ob_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Hakkımda</title>
    <link href="css/hakkimda.css" rel="stylesheet">
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
            <div class="hakkımda">Hakkımda&nbsp&nbsp</div>
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
                    <p style="margin-top:30px;margin-right:20px;margin-left:20px"><h1>Hakkımda</h1>Proje Amacı
                        Derste öğrenilen bilgiler (HTML, CSS, Javascript vb.) kullanılarak bir web sitesi geliştirilmesi
                        Proje Detayları
                        Öğrenciler bireysel olarak kendilerini ve memleketlerini tanıtan kişisel bir web sitesi uygulaması
                        geliştireceklerdir.
                        Site tasarımı olarak Bootstrap içeren responsive (çözünürlüğe göre değişen tasarım) (hazır tema
                        kullanılamaz) bir yapı kullanılmalıdır.
                        Hakkında sayfası giriş sayfası niteliğinde olmalı, sayfa sahibinin kendini tanıtan bilgiler (Hobiler,
                        Etkinlikler vb ) , sevdiği spor,etkinlik vb ait resimler, linkler vb. içermelidir.
                        Eğitim bilgilerini içeren CV niteliğinde samantic tagların kullanıldığı özgeçmiş sayfası olmalıdır.
                        Şehrim şeklinde bir sayfa olmalı, bu sayfada memletinize ya da sevdiğiniz şehre ait bilgiler yer
                        almalıdır. (Şehrin nufusu, gezilecek yerler vb) Sayfanın başında ya da sonunda en az 4 resimden
                        oluşan bir slider yer almalıdır. Slider’da yer alan resimlere tıklandığında ilgili resimlere ait içeriklere
                        link olmalıdır.(İçerikler ayrıntılı olmadan site içersinde yer almalı)
                        Mirasımız linkli bir sayfa ile, şehre ait kültürel miras niteliğindeki önemli bir eser; ya da Takımımız
                        linkli bir sayfada şehrin takımı (Futbol,Basketbol vb branş farketmez) html elamanları kullanılarak
                        tanıtılmalıdır.
                        İlgi alanlarım isminde bir sayfada, ilgi alanlarınız çerçevesinde (film, spor vb) internetten bulduğunuz
                        ücretsiz bir API servisinden veri alınıp gösterilmelidir.
                        Sitede bir login sayfası yer almalıdır. Login sayfasında öğrenci numaranıza ait kullanıcı adı (örneğin
                        b1812100001@sakarya.edu.tr) ve şifre (şifre “b1812100001” gibi herkesin domain içermeyen
                        numarası olmalı) bir php sayafasına post edilip burada kullanıcı bilgileri gönderilen sayfada
                        tanımlanan değişkenler ile kontrol edilmelidir. Eğer kontrol işlemi başarılı ise post edilen sayfada
                        Hoşgeldiniz “b1812100001” gibi bir mesajla login işleminin başarılı olduğu bildirilmeli, login işlemi
                        başarısız ise kullanıcı login sayfasına geri yönlendirilmelidir. Aynı zamanda login sayfasında kullanıcı
                        adı ve şifre alanının boş geçilmemesi ve kullanıcı adının mail adresi olup olmadığı kontrol edilmelidir.
                        Sitede form elamanları içeren bir iletişim sayfası olmalıdır.
                        İletişim sayfası tüm form elemanlarını içermeli, formun tüm elamanlarının elemanın özelliğine
                        göre seçim yada veri girişi yapılacak şekilde gönderilmesi sağlanmalıdır.
                        İletişim formundaki gerekli kontrol işlemleri (boş mu, e-mail formatında mı vb.) javascript
                        kullanılarak denetlenmelidir. (Html elemanlarına ait dahili denetimler kabul edilmeyecekitir)
                        Form, temizle ve gönder butonları içermelidir.
                        Gönderilen form elemanlarına ait bilgiler başka bir sayfada görüntülenmelidir.
                        Projenin içindeki stiller (renk, yaz</p> 
                        
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
               