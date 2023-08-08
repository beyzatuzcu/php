<!DOCTYPE html>
<html>
<head>
    <title>CRUD İŞLEMLERİ</title>
</head>
<body>
    <h1> Veritabanı PDO Kayıt İşlemleri</h1>
    <hr>
    <from action="islem.php" method="POST">
        <input type="text" name="bilgilerim_ad" required="" placholder="Adınızı giriniz...">
        <input type="text" name="bilgilerim_soyad" required="" placholder="SoyAdınızı giriniz...">
        <input type="email" name="bilgilerim_mail" required="" placholder="mailinizi giriniz...">
        <input type="text" name="bilgilerim_yas" required="" placholder="Yaşınızı giriniz...">
        <button type="submit" name="crud">Formu Gönder</button> 
    </form>
</body>
</html>