<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>project</title>
    <link rel="stylesheet" href="proje.css">
</head>
<body>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
   
    $isim    = $_POST['isim']    ?? '';
    $soyisim = $_POST['soyisim'] ?? '';
    $email   = $_POST['email']   ?? '';

   
    if (!empty($isim) && !empty($soyisim) && !empty($email)) {


        $servername = "localhost";   // Sunucu ismi veya IP
        $username   = "root";        // MySQL kullanıcı adı
        $password   = "";            // MySQL şifreniz
        $dbname     = "webproje";    // Az önce oluşturduğunuz veritabanı adı

  
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Bağlantı hatası: " . $conn->connect_error);
        }

     
        $isimSafe    = $conn->real_escape_string($isim);
        $soyisimSafe = $conn->real_escape_string($soyisim);
        $emailSafe   = $conn->real_escape_string($email);

        $sql = "INSERT INTO newsletter (isim, soyisim, email) 
                VALUES ('$isimSafe', '$soyisimSafe', '$emailSafe')";
        
        if ($conn->query($sql) === TRUE) {
         
            echo "<script>alert('E-mail bülten aboneliği talebiniz alındı!');</script>";
        } else {
            echo "Hata: " . $conn->error;
        }

   
        $conn->close();
    } else {
     
        echo "<script>alert('Lütfen tüm alanları doldurunuz!');</script>";
    }
}
?>


    <div class="box3">  
        <a href="proje.html"></a>
    </div> 

    <ul class="menu2">              
        <li class="menu2ul_li" style="width:85px;"> 
           <a class="menu2ul_li_a" href="hakkimizda.html"> Hakkımızda </a>
        </li> 
        <li class="menu2ul_li">  
            <a class="menu2ul_li_a" href="iletisim.php">İletişim</a>
        </li> 
        <li class="menu2ul_li"> 
            <a class="menu2ul_li_a" href="#"> Şubelerimiz </a>
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
            <h8 class="metin">
                Glow Up Sosyal Medya
            </h8>
            
            <a href="https://www.instagram.com">
                <div class="iconinsta"></div>  
            </a>
            <a href="https://www.x.com">
                <div class="iconx"></div>
            </a> 
            <a href="https://www.facebook.com">
                <div class="iconfacebook"></div>
            </a>
        </div> 

        <br>

        <!-- Form: method=POST, action="" (aynı sayfaya göndersin) -->
        <form method="POST" action="">
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
            <!-- type="submit" diyerek formu gerçekten gönderiyoruz -->
            <button type="submit">Gönder</button>
        </form> 
       
        <h6 class="metin2"> İletişim Bilgileri</h6>
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
