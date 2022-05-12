<?php
session_start();
ob_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <title>İlgi Alanim</title>
    <link href="css/ilgialanim.css" rel="stylesheet">
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
                <div class="animation start-ilgialan"></div>
             </nav><br><br><br>
            
             <div class="spor">
                
             </div>
             

</body>
</html>