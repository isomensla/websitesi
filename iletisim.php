<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>İletişim</title>
   
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/iletisim.css">
</head>

<body style="background-image: url('foto/arkaplan.jpg');">
  <div class="container">
    <div class="üst" style="text-shadow: 5px 5px 5px #1b6f79b0;">
      İletişim
      <div class="cizgi"></div>
   </div>  
  
  <script>
		function control()
		{
			var x = document.forms["MyForm"]["kadi"].value;
			if (x == "") 
			{
				alert("Kullanici adi boş bırakılamaz");
				return false;
			}

      var z = document.forms["MyForm"]["password"].value;
      if (z == "") 
			{
				alert("Sifre kısmı boş bırakılamaz");
				return false;
			}

			var y = document.forms["MyForm"]["email"].value;
			if (y == "") 
			{
				alert("Mail kısmı boş bırakılamaz");
				return false;
			}

      var a = document.forms["MyForm"]["cinsiyet"].value;
      if (a == "") 
			{
				alert("Cinsiyet kısmı boş bırakılamaz");
				return false;
			}

      var b = document.forms["MyForm"]["sözlesme"].value;
      if (b == "") 
			{
				alert("Sikayet kısmı boş bırakılamaz");
				return false;
			}
      
			var forMail = /^[a-zA-Z0-9._-]+@([a-zA-Z0-9.-]+.)+([.])+[a-zA-Z0-9.-]{2,4}$/;
			if (forMail.test(y) == false) 
			{
				alert("Geçersiz Mail Adresi!!!");
				return false;
			}


		}	

  </script>
    <div class="formm" >
      <form  method="POST" action="iletisimcıktı.php" name="MyForm" onsubmit=" return control()">
        <div style="margin-left: 305px;;width: 350px;">
          <input type="text" name="kadi" id="kadi" placeholder="Kullanici Adi Giriniz..." class="kadi" >
        </div>
       <div style="margin-left: 305px;margin-top: 7px;;width:350px;">   
          <input type="password" name="password" id="password" placeholder="Sifre Giriniz..."  class="sifre" >
       </div> 

       <div style="margin-left: 305px;margin-top: 7px;;width:350px;">   
          <input type="text" name="email" id="email" placeholder="Mailinizi Giriniz..."  class="sifre" >
       </div> 
       <div class="radio">
           <input type="radio" name="cinsiyet" id="erkek"> 
           <label for="erkek"  style="font-family: Impact, Charcoal, sans-serif;font-size=15px">Erkek</label>

           <input type="radio" name="cinsiyet" id="kadın" style="margin-left:5px">
           <label for="kadın" style="font-family: Impact, Charcoal, sans-serif;font-size=15px">Kadın</label>
       </div>
       <h4 style="margin-left:60px;font-family: Impact, Charcoal, sans-serif;">Sikayetiniz</h4>
       <div class="sikayetcontainer">
            <textarea name="sikayet" id="sikayet" cols="118" rows="7" style="font-family: Impact, Charcoal, sans-serif;" required>

            </textarea>
          <div>
              <div class="sozlesme">
                      <input type="checkbox"  id="sozlesme" required >
                      <label for="sozlesme" class="">Yukarıdaki yazının size ait olduğunu kabul ediniz...</label>
              </div>
              <div class="ihlal">
                      <input type="checkbox" id="ihlal" required >
                      <label for="ihlal" class="">Sözlesmeyi okuyup kabul ediniz..</label>
              </div>        
              </div>    
        </div>

       <div class="buttonyer">  
          <button type="submit" style="	background-color: #1b6f79b0;"> Gönder </button> 
          <button type="reset" style="	background-color: #1b6f79b0;"> Temizle </button> 
       </div>
      </form>
    </div> 
  </div>
  </body>
  </html>