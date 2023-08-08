<!DOCTYPE html>
<html>
<head>
    <title>CRUD İŞLEMLERİ</title>
</head>
<body>
    <h1>Veritabanı PDO Kayıt İşlemleri</h1>
    <hr>
    <form action="islem.php" method="POST">
        <input type="text" name="bilgilerim_ad" required="" placeholder="Adınızı giriniz...">
        <input type="text" name="bilgilerim_soyad" required="" placeholder="SoyAdınızı giriniz...">
        <input type="email" name="bilgilerim_mail" required="" placeholder="mailinizi giriniz...">
        <input type="text" name="bilgilerim_yas" required="" placeholder="Yaşınızı giriniz...">
        <button type="submit" name="insertislemi">Formu Gönder</button> 
    </form>
</body>
</html>
