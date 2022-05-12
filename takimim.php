<?php
session_start();
ob_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Takimim</title>
    <link href="css/takımım.css" rel="stylesheet">

</head>
<body>
            <div class="takimim">Takimim&nbsp&nbsp&nbsp&nbsp&nbsp</div>
            <?php
            if(isset($_SESSION['Kullanici'])){
                ?>
                <div class="giris">Hoşgeldiniz <?php echo $_SESSION['Kullanici']?></div>
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
                <div class="animation start-takımım"></div>
             </nav><br><br><br><hr>
            
             <div class="container">
                <h1 style="padding-top:15px">İzmir Spor Kulüpleri</h1>
                <div class="sporlar" style="color:white;">
                <h2 style="padding-top:15px">Futbol Kulüpleri</h2><hr>
                    <div class="klupler">
                        <h3>BUCASPOR KULÜBÜ </h3>
                        <p>
                            Cumhuriyet' in kurulmasıyla birlikte ülkemizin dört bir yanında çakan futbol kıvılcımları, kısa süre sonra Buca'da yaşayan gençlerin de kalbini tutuşturdu. Aradan geçen 5 yıl gibi kısa bir sürede yapılanmasını tamamlayarak hedeflerini belirleyen Bucalı gençler, Süleyman Atakan, Bekir Eromat, Niyazi Gökgönül, Hasan Yalçınkaya ve Niyazi Aktaş tarafından , Karşıyaka (1912), Altay (1914), Altınordu (1923) ve Göztepe'den (1925) sonra, Bucaspor 1928 yılında İzmir'in 5. spor kulübü olarak kuruldu.  
                       <a href="https://www.izmirde.biz/?Syf=15&cat_id=590&baslik_name=QlVDQVNQT1IgS1VMw5xCw5w=" target="_blank">devami..</a>
                        </p>
                        <div class="foto">
                            <img class="fotoa" src="foto/takım/buca.png" alt="">
                        </div>
                    </div>
                    <div class="klupler" style="height:300px;">
                        <h3>KARŞIYAKA SPOR KLUBÜ </h3>
                        <P>                          
                            Kulübün ilk kurucularından ünlü Kuvayı Milliye kahramanı Kadızade Zühtü Işıl`ın anılarından öğrendiğimize göre, takımımızı kurmak için bir zeytin ağacı altında karar veren gençler; Yunan, Rum, İngiliz, ve Ermeni takımlarına karşı mücadele etmek için ant içmişlerdi. 1900 yılında yabancı egemenliğinde bir sömürge kenti gibi olan İzmir`de  Türk gençlerinin futbol kulüplerinde  milli örgütlenme yapmak istemeleri Karşıyaka Spor Kulübü`nü doğurdu.
                            <a href="https://www.izmirde.biz/?Syf=15&cat_id=591&baslik_name=S0FSxZ5JWUFLQSBTUE9SIEtVTMOcQsOc" target="_blank">devami..</a>
                        </P>
                        <div class="foto">
                             <img class="fotoa" src="foto/takım/karsıyaka.png" alt="">
                        </div>
                    </div>
                    <div class="klupler"  style="height:350px;">
                        <h3>İZMİRSPOR KLUBÜ</h3>
                        <P>
                          Bugünkü adıyla İzmirspor Kulübü, 1923 yılında Eşrefpaşa semtinin ileri gelenleri tarafından, turuncu-siyah renklerle “Altınay” adıyla kuruldu. Altınay’ın, Sakarya Kulübü ile girdiği rekabet, bir süre sonra sertleşince camianın ileri gelenleri, bu iki kulübü tek çatı altında birleştirmeye karar verdi ve 28 Kasım 1930’ da Altınay ile Sakarya, İZMİRSPOR adıyla birleşti. Kulübün resmi renkleri ise “mavi-beyaz” olarak tescil edildi. Ancak bu renkler, Fahrettin Altay Paşa’nın isteği üzerine daha sonra “lacivert-beyaz” olarak değiştirilmiştir.
                        <a href="https://www.izmirde.biz/?Syf=15&cat_id=593&baslik_name=xLBaTcSwUlNQT1IgS1VMw5xCw5w=" target="_blank">devami..</a>
                        </P>
                        <div class="foto">
                          <img class="fotoa" src="foto/takım/izmir.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="sporlar" style="color:white;">
                <h2 style="padding-top:15px">Voleybol Kulüpleri</h2><hr>
                     <div class="klupler">
                         <h3>ARKAS ERKEK VOLEYBOL KLUBÜ</h3>
                         <P>
                         Arkas (erkek voleybol takımı), 2001 yılında kurulan ve İzmir’de faaliyet gösteren Arkas Spor Kulübü’nün erkek voleybol takımı. Başkanı Lucien Arkas, voleybol şube sorumlusu Bernard Arkas’tır. Renkleri lacivert, mavi ve beyazdır. Efeler Ligi’nde mücadele etmektedir. Lig maçlarını 6,500 kişilik TVF Atatürk Voleybol Salonu Sigorta Shop Arena’nda oynamaktadır. <br>
                         <a href="https://tr.wikipedia.org/wiki/Arkas_(erkek_voleybol_tak%C4%B1m%C4%B1)" target="_blank">devami..</a>
                         </P>
                         <div class="foto">
                         <img class="fotoa" src="foto/takım/arkas.jpg" alt="">
                         </div>
                    </div>
                     <div class="klupler" style="height:300px;">
                     <h3>ARKAS KADIN VOLEYBOL KLUBÜ</h3>
                         <P>
                         Arkas (kadın voleybol takımı), 2007 yılında kurulan ve İzmir’de faaliyet gösteren Arkas Spor Kulübü’nün kadın voleybol takımıdır. Başkanı Lucien Arkas, voleybol şube sorumlusu Bernard Arkas’tır. Renkleri lacivert, mavi ve beyazdır. Türkiye Kadınlar İkinci Voleybol Ligi’nde mücadele etmektedir. Lig maçlarını ise 6,500 kişilik TVF Atatürk Voleybol Salonu Sigorta Shop Arena’nda oynamaktadır. <br>
                         <a href="https://tr.wikipedia.org/wiki/Arkas_(kad%C4%B1n_voleybol_tak%C4%B1m%C4%B1)" target="_blank">devami..</a>   
                         </P>
                         <div class="foto">
                         <img class="fotoa" src="foto/takım/arkas.jpg" alt="">
                         </div>
                    </div>
                     <div class="klupler" style="height:350px;">
                     <h3>KARŞIYAKA KADIN VOLEYBOL KLUBÜ</h3>
                         <P>
                         Karşıyaka (kadın voleybol takımı), Karşıyaka Spor Kulübü'nün 1912 yılında kurulmuş takımıdır. Renkleri yeşil kırmızıdır. Voleybol takımı maçlarını Mustafa Kemal Atatürk Karşıyaka Spor Salonu'nda oynamaktadır. <br> <br>
                         2012-2013 sezonunda Türkiye Bayanlar Voleybol 2. Ligi'nde mücadele etmektedir. 2012-2013 sezonunda 2. Lig takımı olarak Türkiye Kupası'nda final-four'a kalarak büyük bir başarı elde etmiştir. Aynı sezon averajla 2. Lig şampiyonluğunu kaçıran Karşıyaka final grubunu 3. olarak tamamlamış ve 1.Lig'e yükselememiştir.
                         <a href="https://tr.wikipedia.org/wiki/Kar%C5%9F%C4%B1yaka_(kad%C4%B1n_voleybol_tak%C4%B1m%C4%B1)" target="_blank">devami..</a>
                        </P>
                        <div class="foto">
                        <img class="fotoa" src="foto/takım/karsıyaka.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="sporlar" style="color:white;">
                <h2 style="padding-top:15px">Basketbol Kulüpleri</h2><hr>
                     <div class="klupler">
                         <h3>İBB TEKERLEKLİ SANDALYE BASKETBOL KULÜBÜ</h3>
                         <p>
                         İzmir Büyükşehir Belediyesi Spor Kulübü Tekerlekli Sandalye Basketbol Takımı, İzmir Büyükşehir Belediyesi Spor Kulübü bünyesinde 1996 yılında kurulan tekerlekli sandalye basketbolu takımıdır.
                        Tekerlekli Sandalye Basketbol Süper Lig'ine, 1996-1997 sezonunda Tekerlekli Sandalye Basketbol 1. Lig şampiyonu olarak yükselmiştir. Süper Lig'de 2000-01, 2001-02, 2002-03, 2003-04 ve 2020-21 sezonlarında şampiyon olmuştur. <br>
                        <a href="https://tr.wikipedia.org/wiki/%C4%B0zmir_B%C3%BCy%C3%BCk%C5%9Fehir_Belediyespor_(tekerlekli_sandalye_basketbol_tak%C4%B1m%C4%B1)" target="_blank">devami..</a>
                         </p>
                         <div class="foto">
                         <img class="fotoa" src="foto/takım/izmir.png" alt="">
                         </div>
                     </div>
                     <div class="klupler" style="height:300px;">
                        <h3>BORNOVA BELEDİYESPOR BASKETBOL KULÜBÜ</h3>
                         <p>
                         Bornova Belediyespor ya da sponsorluk ismi ile Bornova Belediyesi Karşıyaka, Bornova, İzmir merkezli basketbol takımıdır. Maçlarını İzmir Halkapınar Spor Salonu'nda yapmaktadırlar. 2009-2010 sezonunda ilk kez Türkiye Basketbol Ligi'nde mücadele etti. İlk sezonunda Fenerbahçe Ülker, Galatasaray ve Beşiktaş'ı yenmeyi başardı. <br>
                         <a href="https://tr.wikipedia.org/wiki/Bornova_Belediyespor_(basketbol_tak%C4%B1m%C4%B1)" target="_blank">devami..</a>
                         </p>
                         <div class="foto">
                             <img class="fotoa" src="foto/takım/bornova.jpg" alt="">
                            </div>
                     </div>
                     <div class="klupler" style="height:350px;">
                         <h3>TUBORG PİLSENER SK BASKETBOL KULÜBÜ</h3>
                         <p>
                         Tuborg Pilsener Spor Kulübü, İzmir'de yer alan erkek basketbol takımı. 2005-06 sezonu sonunda kapatılmadan önce TBL'de mücadele etmekteydi. <br> <br>
                         Tuborg Spor Kulübü, ilk olarak İzmir'de 1971 yılında "İzmir Yüzme İhtisas Kulübü Derneği" olarak bir ihtisas spor kulübü - Derneği kurulmuştur. 23 Mayıs 1978 tarihinde, Yaşar Holding bünyesine dahil olan kulüp "Tuborg Yüzme İhtisas Kulübü Derneği" adını almıştır.
                         <a href="https://tr.wikipedia.org/wiki/Tuborg_Pilsener_SK" target="_blank">devami..</a>
                         </p>
                         <div class="foto">
                         <img class="fotoa" src="foto/takım/tuborg.jpg" alt="">
                         </div>
                     </div>
                </div>
             </div>
             

</body>
</html>

