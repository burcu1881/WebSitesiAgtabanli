<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>project</title>
    <link rel="stylesheet" href="proje.css">
</head>
<body>


<?php
include("baglanti.php");

if(isset($_POST["kaydet"])){

    $name=$_POST["isim"]; 
    $soyisim=$_POST["soyisim"];
    $email=$_POST["email"]; 
    
    $ekle="INSERT INTO kullanicilar (ad,soyadi,email) VALUES ('$name','$soyisim','$email')";
    
    $calistirekle = mysqli_query($baglanti,$ekle);

    

    mysqli_close($baglanti);
}




?>

    <!-- logo divi -->
    <div class="box3">  
        <a href="proje.html"> </a>
    </div> 

    <ul class="menu2">              
        <li class="menu2ul_li" style="width:85px;"> 
           <a class="menu2ul_li_a" href="hakkimizda.html"> Hakkımızda </a>
        </li> 
        <li class="menu2ul_li">  
            <a class=menu2ul_li_a href="http://localhost/uyelik/kayit.php">İletişim</a> 

            <!-- <a href="hakkimizda.html" target="_blank">Hakkımızda</a> ile de yeni sekmede a.ılmayı sağlayabilirdik. -->

            
        </li> 

        <li class="menu2ul_li"> 
            <a class=menu2ul_li_a href="subeler.html"> Şubelerimiz </a>
        </li> 
    </ul>

    <ul class="menu1">
        <li class="menu1ulli">
            <a class="menu1ul_li_a" href="ciltbakimi.html"> Cilt Bakımı</a>
        </li>
        <li class="menu1ulli" >
            <a class="menu1ul_li_a" href="sacbakim.html"> Saç Bakım </a>
        </li>
        <li class="menu1ulli" >
            <a class="menu1ul_li_a" href="makyaj.html"> Makyaj </a>
        </li>
        <li class="menu1ulli">
            <a class="menu1ul_li_a" href="bakim.html"> Parfüm </a>
        </li>  
    </ul>

    <div class="background"> 
        <div class="socmedbox">
            <h8 class="metin">Glow Up Sosyal Medya</h8>
            <a href="https://www.instagram.com"><div class="iconinsta"></div></a>
            <a href="https://www.x.com"><div class="iconx"></div></a>
            <a href="https://www.facebook.com"><div class="iconfacebook"></div></a>
        </div>

        <br>

        <!-- Form: method=POST -->
        <form method="POST" action="kayit.php" onsubmit="alert('E-mail bülten aboneliği talebiniz alınmıştır!');">
            <h6 class="metin">Glow Up E-mail Bülten Aboneliği</h6> 
            
            <label for="isim">İsim</label>
            <br>
            <input type="text" id="isim" name="isim" />
            <br><br>
        
            <label for="soyisim">Soyisim</label>
            <br>
            <input type="text" id="soyisim" name="soyisim" />
            <br><br>
        
            <label for="email">E-mail Adresi</label>
            <br>
            <input type="text" id="email" name="email" />
            <br><br>
            
            <input type="reset" value="Temizle">
            <!-- onclick yerine type="submit" -->
            <button type="submit" name="kaydet" >Gönder</button>
        </form> 






        
        <h6 class="metin2">İletişim Bilgileri</h6>
        <p class="iletisimbilgi">
            Adres: <br>
            Glow Up Kozmetik Mağazası İstiklal Caddesi No: 45, Beyoğlu, İstanbul  <br><br>
            Telefon:<br>
            +90 212 555 12 34 <br><br>
            Fax:<br>
            +90 212 555 12 35<br><br>
            E-mail:<br>
            info@glowupkozmetik.com <br><br>
            Çalışma Saatlerimiz:<br> 
            Pazartesi - Cuma: 09:00 - 19:00 <br>
            Cumartesi: 10:00 - 19:00 <br>
            Pazar: Kapalı <br>
        </p>
    </div>

    <div id="testimonials">
        <h2>Müşteri Yorumları</h2>
        <p id="testimonial">Yorumlar yükleniyor...</p>
    </div>
</body>
</html>
