<?php
session_start();
ob_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Şehirim</title>
    <link href="css/sehrim.css" rel="stylesheet">
    <link rel="stylesheet" href="sehirim.js">
    <style>
      button{           
          text-align: center;
          margin-right: 100px;
          text-transform: uppercase;
          cursor: pointer;
          font-size: 20px;
          letter-spacing: 2px;
          position: relative;
          background-color: #2BD6B4;
          border: none;
          color: #34495e;
          width: 125px;
          height: 50px;
          text-align: center;
          transition-duration: 0.4s;
          overflow: hidden;
          box-shadow: 0 5px 15px #193047;
          border-radius: 3px;
          float:right;
          font-family: Impact, Charcoal, sans-serif;
          }

          button:hover {
          background: #fff;
          box-shadow: 0px 2px 10px 5px #2BD6B4;
          color: #000;
          }

          button:after {
          content: "";
          background: #2BD6B4;
          display: block;
          position: absolute;
          padding-top: 300%;
          padding-left: 350%;
          margin-left: -20px !important;
          margin-top: -120%;
          opacity: 0;
          transition: all 0.8s
          }

          button:active:after {
          padding: 0;
          margin: 0;
          opacity: 1;
          transition: 0s
	              }
          button:focus { outline:0; }

        .giris{
              float: right;
              margin-right: 100px;   
              margin-top:15px;
              font-family: Impact, Charcoal, sans-serif;
              font-size: 20px;
                    }

        footer{
          text-align: center;
          padding: 2px;
          background-color:#ffc990d0;
          color: white;

               }
            </style>
    
</head>
<body>
            <div class="sehrim">Şehirim&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</div>
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
                <div class="animation start-sehirim"></div>
             </nav><br><br><br>
           <hr>
             <div class="slideshow-container" style="margin-top: 10px;">
                <div class="mySlides fade">
                  <div class="numbertext">1 / 4</div>
                  <img src="foto/img1.jpg" style="width: 1900px;height: 600px;">
                  <div class="text">Saat Kulesi</div>
                </div>
              
                <div class="mySlides fade">
                  <div class="numbertext">2 / 4</div>
                  <img src="foto/karsiyaka.jpg" style="width:1900px;height: 600px;">
                  <div class="text">Karşıyaka</div>
                </div>
              
                <div class="mySlides fade">
                  <div class="numbertext">3 / 4</div>
                  <img src="foto/alsancak.jpg" style="width:1900px;height: 600px;">
                  <div class="text">Alsancak Kordon</div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">4 / 4</div>
                    <img src="foto/karsiyaka.jpg" style="width:1900px;height: 600px;">
                    <div class="text">Karşıyaka</div>
                  </div>
                
              
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
              </div>
              <br>
              <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
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
                <hr>
             <div>
                 <img src="foto/tunc-soyer.jpg" alt="Tunc Soyer İzmir BB Başkanı"  style="float: left;width: 400px;height: 400;margin-right: 15px;margin-bottom: 2px;">
                
            </div>
           
            <h2 style="font-family: 'Cherry Swash',cursive;">İZMİR</h2>
                <p class="yazi">İzmir, Türkiye'de Ege Bölgesi'nde yer alan şehir ve ülkenin 81 ilinden biridir. Ülkenin nüfus bakımından en kalabalık üçüncü şehridir. Ekonomik, tarihi ve sosyo-kültürel açıdan önde gelen şehirlerden biridir. Nüfusu 2021 itibarıyla 4.425.789 kişidir. Yüzölçümü olarak ülkenin yirmi üçüncü büyük ilidir.Etrafı Aydın, Balıkesir, Manisa illeri ve Ege Denizi ve Ege Adaları ile çevrilidir.
                İzmir, yatlar ve gemilerle çevrilmiş uzun ve dar bir körfezin başında yer almaktadır. İzmir Limanı, Türkiye'nin en büyük yedinci limanıdır. İzmir'in batısında denizi, plajları ve termal merkezleriyle Urla Yarımadası uzanır. İzmir Körfezi çevresinde bulunan şehir, her yıl İzmir Enternasyonal Fuarı'nı düzenleyen önemli bir fuar merkezi ve liman kentidir.</p>
          
            <h4 style="font-family: 'Cherry Swash',cursive;">Coğrafyası</h4>
                <p class="yazi">İzmir ilinin yüzölçümü 11.891 km2'dir.[2] Türkiye Cumhuriyeti'nin en batı kısmında Ege Denizi'ne kıyısı olan bir ildir. Kuzeyde Balıkesir, doğuda Manisa, güneyde Aydın illeri ile komşudur. Dikili ilçesinin tam karşısında Yunanistan'ın Kuzey Ege Adaları coğrafi bölgesi'nin Midilli ili ve hem ilin hem coğrafi bölgenin yönetim merkezi olan Midilli şehri yer almaktadır. <br>İzmir ili içinde Ege Bölgesi'nin önemli akarsularından olan Gediz, Küçük Menderes ve Bakırçay akış gösterir. Diğer küçük akarsular arasında Güzelhisar Çayı ve Meles Çayı yer alır. İlde önemli büyüklükte bir göl yoktur. Göl sayılabilecek su birikintileri arasında en büyükleri Gölcük Gölü, Belevi Gölü, Çakalboğaz Gölleri ve Karagöl'dür. Madra Dağları, Yunt Dağları, Yamanlar Dağı, Nif Dağı, Bozdağlar, Aydın Dağları il sınırları içerisinde yer alır. İlin en yüksek noktası, Bozdağlar'ın Birgi yakınlarında bulunan 2.159 metre yüksekliğindeki tepesidir.Şehrin rakımı 2 metredir.
                İl bitki örtüsü yönünden Akdeniz ikliminin etkisi altındadır. Akdeniz bitkilerinin birçok türü bulunmaktadır. Yüzyıllarca aşırı otlatma, yangın ve tarla açma gibi nedenlerle ormanların ortadan kalktığı yerlerde, maki bitkileri bulunmaktadır. Maki florasına ardıç, pırnal, kermes meşesi, zeytin, çitlembik, sakız, akçakesme, tespih, katırtırnağı gibi kuraklığa dayanıklı ağaçlar girer. Ormanlar il içerisinde 475.779 hektarlık bir alanı kaplar. Ormanların kapladığı alan, il arazisinin %40'ıdır.</p>      
              
                 <i style="margin-top: 270px;margin-left: 100px;font-size: 15px;">Tunc Soyer İzmir BB Başkanı</i>
                 <br>
            
            <h4 style="font-family: 'Cherry Swash',cursive;">Spor</h4>
          <div>
              <table>  
                  <tr>
                      <td colspan="3" style="width: 75%;">
                        <p style="font-family: 'Cherry Swash',cursive;width: 1450px;">2019-20 sezonu sonunda Göztepe Süper Lig'de kalmıştır. Altay ve Altınordu 1. Lig'de yer alırken Menemenspor da 1. Lig'e yükselmiştir. Karşıyaka 3. Lig'de mücadele ederken Bucaspor ve Bergama Belediyespor, BAL'a düşmüştür. İzmir'in 3. Lig'de iki, BAL'da beş, kadınlar liginde iki takımı daha vardır.

                            İzmir Profesyonel Futbol Ligi 1929 ile 1959 arasında oynanmış ve İzmir'in o zamanki en yüksek derecedeki futbol turnuvası olmuştur. Turnuvayı kazanan takımlar Altay, Altınordu, Göztepe, İzmirspor, Karşıyaka, Üçok, Doğanspor ve Kayagücü'dür. Altay, 14 şampiyonluk ile bu turnuvanın en çok kazananıdır. Turnuva 1959'da Millî Lig kurulunca devam edilmemiştir.
                            
                            Türkiye çapında Göztepe, Türkiye Futbol Şampiyonası'nı 1 kere şampiyon olurken; Altınordu 3 kere ikincilik, Altay 2 kere ikincilik, İzmirspor ise 1 kere ikincilik başarısı göstermiştir. Türkiye Kupası'nda ise Altay ve Göztepe 2 kere şampiyonluk yaşamıştır. Süper Lig'de Altay 2 kere ve Göztepe 1 kere 3.lük başarısı göstermiştir.
                            
                            2018-19 sezonu sonunda İzmir'de basketbol erkekler Süper Lig takımı Pınar Karşıyaka'dır. 1. liglerde üç takımdan Bayraklı Belediyesi, 2. Liglerde dört takımdan Bornova Belediyesi lig üçüncüsü olmuşlardır. Ege Ünv.Gençlik erkek takımı 2. Lig'e yükselmiştir. Federasyon Kupası'nda Petkim Spor üçüncü olmuştur.
                            
                            2018-19 sezonu sonunda İzmir'de voleybol erkekler süper ligi takımı Arkas dördüncü olmuştur. 1. Lig'deki yedi takımından Bornova Anadolu Lisesi ve İzmir Özateş Spor küme düşmüştür. 2. Lig'deki beş takımından Saint Joseph 1. Lig'e çıkarken Belevi Gençlerbirliği ihraç edilmiştir. Bölgesel lige sekiz takımı katılmıştır.
                            
                            2018-19 sezonu sonunda hentbol takımlarından Göztepe ve İzmir BŞB (kadın-erkek) takımları Süper Lig'de kalırken Karşıyaka Belediyesi küme düşmüştür. 2. Lig'deki beş takımdan 1970 Vefa Gençlik S. 1. Lig'e çıkarken Atatürk TEML GSK ligden çekilmiştir.
                            
                            2020-21 TFF 1. Lig sezon sonunda 26 Mayıs 2021 tarihinde Atatürk Olimpiyat Stadyumu'nda oynanan TFF 1. Lig Play-off finali'nde Altay ve Altınordu karşı karşıya gelmiştir. Maçın 89.dakidası'nda Marco Paxiao'nun golü ile Altay maçı kazanmış ve Süper Lig'e çıkmıştır. Günümüzde Göztepe ve Altay Süper Lig'de İzmir'i temsil eden iki takımdır. 18 yıl sonra (2002-2003) sezonundan sonra Süper Lig'de aynı anda iki İzmir takımı mücadele etmektedir.</p>
                            
                      </td>
                      <td colspan="1" style="width: 25%;" align="center">
                        <img src="foto/220px-İzmir_Atatürk_Stadyumu.jpg" alt="" width="300px" style="margin-bottom: 10px;" >
                        <br><i>İzmir <br>Atatürk Stadyumu</i>  
                      </td>
                  </tr>  
            </table>
            <h4 style="font-family: 'Cherry Swash',cursive;">Turizm</h4>
            <table>
                <tr>
                    <td rowspan="3" style="width: 75%;">
                      <p style="font-family: 'Cherry Swash',cursive";>
                        Turizm ve Seyahat :
                        Özellikle Alsancak ve Çeşme ilçelerinde yoğunlaşan tur operatörleri, oteller ve araç kiralama firmaları bulunmaktadır. Çeşme, iç ve dış turizm açısından ülkenin sayılı merkezlerinden biridir. Yarımadanın ilk antik yerleşim yeri olan Ildırı (Erythrai), Çeşme'de yer almaktadır. Çeşme'nin en çok ziyaret edilen tarihi eseri II. Bayezid'ın yaptırdığı kale bugün müze olarak kullanılmaktadır. 1529 yılında Kanuni Sultan Süleyman tarafından yaptırılan iki katlı kervansaray, tipik Osmanlı dönemi kervansaraylarından biridir. Çeşme'ye bağlı bir mahalle olan ve tarihî taş evleri ile yılın 360 günü rüzgâr alması sebebiyle rüzgâr sörfüne elverişli plajları ile ünlü olan Alaçatı da, 704 kilometrekarelik alanında birçok eğlence mekânı ve oteli barındırmasıyla İzmir'in önemli tatil beldelerinden biridir. İzmir'in Selçuk ilçesinin üç kilometre güneybatısında yer alan ve UNESCO Dünya Miras Listesi’nde bulunan İzmir Efes Antik Kenti, Selçuk ilçesi sınırları içerisinde bulunmaktadır.Efes Antik Kenti ise ve yılda ortalama 1,5 milyon turist tarafından ziyaret edilmektedir. Foça, sayıları giderek azalan akdeniz fokunun yaşam alanlarından biridir. Ayrıca akdeniz fokları kentte her yıl yaz aylarında düzenlenen festivallerin de önemli bir sembolü haline gelmiştir. Urla'da 2015 yılından beri her yıl bahar aylarında Urla mutfağının tanıtıldığı Enginar Festivali düzenlenmektedir.[70] Buna ek olarak Urla'ya bağlı Özbek Mahallesinde her yıl Mart Dokuzu Ot Bayramı yapılmaktadır.[71] <br><br>
                        Teleferik Tesisleri :
                        Balçova Adatepe'de ormanlık alan üzerine kurulu, İzmir Büyükşehir Belediyesi’nin Teleferik Tesisleri'nde kendin pişir kendin ye, çay bahçesi, market, kafe ve bar alanları ile hoşça vakit geçirilecek bir dinlenme alanıdır. Saatte 1200 yolcu taşıyabilir teleferik sisteminin hat boyu 810 metre, yüksekliği ise 316 metredir. Tesisler 3 Kasım 2007 tarihinde kapanmış ve 2015 yılında tekrar yenilenip hizmete açılmıştır.
                       <br><br> Yassıcaada İşletmesi :
                        Konak ve Karşıyaka'dan kalkan vapurlarla ulaşılan Yassıca Ada'da günübirlik deniz keyfi yaşarken çeşitli yiyecek ve içecek alternatifleri sunmaktadır.  
                       <br><br> Murat Köşkü: Bornova'nın Erzene muhitindedir. 125 yıllık bina (eski köşk) İzmir Büyükşehir Belediyesi tarafından restore edilmiştir ve şu an Ege Üniversitesi Gençlik Merkezi olarak hizmet etmektedir.
                       <br><br> İzmir Doğal Yaşam Parkı: Çiğli'dedir. Başta İzmir halkının takdirini ve beğenisini kazanarak, Türkiye'nin modern yüzünü temsil etmek, dünyanın sayılı doğal yaşam parkları sıralamasında yerimizi üst noktalara taşımak, koruduğu değerler ile insanlara doğa sevgisini üst seviyede sunmak ve nesli tehlike altında olan canlıları korumak. Bunların hepsi Doğal Yaşam Parkı'nda bulunmakta. Kentsel gelişim süreci içerisinde, toplumun doğaya olan özlemini gidermek, doğal ve korunaklı ortamlar yaratmak, çevre bilincine ve tehlike altında olan ekolojik değerlere vurgu yaparak İzmir halkının doğa ve hayvan sevgisini arttırmak, yaşanabilir bir kent ortamı yaratılmasına katkıda bulunmaktadır. Doğal Yaşam Parkı 30 Kasım 2008 tarihinde açılmıştır. İzmir Doğal Yaşam Parkı hafta içi ve hafta sonları 09.00-17.00 saatleri arasında ziyaret edilebilir.
                        Konak Gençlik Tiyatrosu: 14 Şubat 2009'da Euterpe Sanat'ın kurucuları Ulaş Tuzak ve Atilla Ertörer tarafından Konak Kent Konseyi Gençlik Meclisi çatısı altında kurulmuş olup etkisini tüm İzmir'de hissettirerek kısa süre içerisinde büyümüş, güçlenmiş ve 27 Mart 2011 itibarıyla Konak Kent Tiyatrosu ismiyle Konak Belediye Başkanı Dr. Hakan Tartan'ın destekleriyle şu anki faaliyetlerini sürdürmektedir.</p>
                  <a href="https://tr.wikipedia.org/wiki/İzmir" target="_blank" style="font-family: 'Cherry Swash',cursive";>Kaynakça = https://tr.wikipedia.org/wiki/İzmir</a>
                    </td>
                    <td align="center">
                        <img src="foto/1280px-Turkish.town.cesme.jpg" alt="" width="350px" style="margin-bottom: 10px;" >
                        <br><i style="font-size: 14px;">Çeşme'de bulunan klasik Rum ve Türk mimarisi <br> evlerinden bir görünüm</i>  
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <img src="foto/Iskele_Quay_Urla_Turkey.jpg" alt="" width="350px" style="margin-bottom: 10px;" >
                        <br><i style="font-size: 14px;">Urla</i>  
                    </td>
                </tr>
            </table>
        </div>
        <footer>
          Copright B211210061
        </footer>
</body>
</html>