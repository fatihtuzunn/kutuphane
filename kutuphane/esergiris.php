<?php require_once('baglan.php');
 ?>
<html>
<head>
       <meta charset="utf-8"/>
    <title>Veri Tabanı İşlemleri</title>
</head>
<body>
<form action="islem.php" method="post">
    <input type="text" name="ad" placeholder="Yazar adını giriniz"><br>
    <input type="text" name="soyad" placeholder="Yazar soyadını giriniz"><br>
    <input type="text" name="eser" placeholder="Eser adi girin">
    <input hidden="" type="date" name="zaman"> <br>
    <input type="submit" value="Kayit" name="kaydet" style="margin-left: 100px;">
</form>
<hr>
</body>
</html>