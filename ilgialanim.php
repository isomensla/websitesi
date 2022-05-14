<?php
session_start();
ob_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <title>İlgi Alanim</title>
    <link href="css/ılgıalanı.css" rel="stylesheet">
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
                


            <div class="ilgialan">İlgi Alanım</div>
            <?php
            if(isset($_SESSION['Kullanici'])){
                ?>
                <div class="giris">Hoşgeldiniz <?php echo $_SESSION['Kullanici']?></div>
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
                <div class="animation start-ilgialan"></div>
             </nav><br><br><br><hr>
            
             <div class="ilgi">
                <h2 style="padding-top:5px;font-size:25px">İlgi Alanlarım</h2>
                <p style="font-size:25px;">Öncelikle merhaba bugün size ilgi alanlarımdan bahsedicem. Son 4 senedir kripto paralarla çok ilgileniyorum ve kullanıyorum. Grafik okumak,zaman geçirmek,para kazanmak cidden kripto paralar ile çok zevkli.br <br> Bunun yanından da 4-5 aydır nft'lerle ilgilenmeye başladım ki sanırım bir ara patladı herkes onunla ilgileniyordu bilen bilmeyen.
                <br>E-ticaret ile de ilgilendim bir zamanalar aslında kur farkımız çok olmasa hala ilgilenebilirim cidden oda çok zevkliydi benim için. Güzel paralar kazanılabiliyordu. <br>
                Futbol oynamay, izlemeyi, takip etmeyi de çok severim tuttuğum bir takım var diyemem yalan olur ben iyi olan kazansın tarafındayım.
                </p>
             </div>

             <div class="api" style="float:left;margin-left:20px;">
             <h2>Süper Lig Puan Tablosu</h2>
             <div id="scoreaxis-widget-b00c4" style="border-width:1px;border-color:rgba(0, 0, 0, 0.15);border-style:solid;border-radius:8px;padding:10px;background:rgb(255, 255, 255);width:100%;container:1px" data-reactroot=""><iframe id="Iframe" src="https://www.scoreaxis.com/widget/standings-widget/600?borderColor=%234d4d4d&amp;font=10&amp;autoHeight=1&amp;links=1&amp;inst=b00c4" style="width:100%;border:none;transition:all 300ms ease"></iframe><script>window.addEventListener("DOMContentLoaded",event=>{window.addEventListener("message",event=>{if(event.data.appHeight&&"b00c4"==event.data.inst){let container=document.querySelector("#scoreaxis-widget-b00c4 iframe");container&&(container.style.height=parseInt(event.data.appHeight)+"px")}},!1)});</script></div>
             </div>

             <div class="borsa">
                 <h2 style="margin-bottom:15px">Kripto Borsası</h2>   
                <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright"><a href="https://tr.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank"><span class="blue-text">Kriptopara Piyasaları</span></a> TradingView'den</div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                {
                "width": "1830",
                "height": "670",
                "defaultColumn": "overview",
                "screener_type": "crypto_mkt",
                "displayCurrency": "USD",
                "colorTheme": "dark",
                "locale": "tr",
                "isTransparent": false
                }
                </script>
                </div>                   
              </div>
                    
        </body>
        </html>
