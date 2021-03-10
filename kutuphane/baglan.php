<?php 
try {  
$db_ad='kutuphane';
$db_kullanici='root';
$db_sifre='12345678';
$db = new PDO('mysql:host=localhost;charset=UTF8;dbname='.$db_ad, $db_kullanici, $db_sifre);
    
} 
catch (PDOException $e)
{
    print "Bağantı Hatası!: " . $e->getMessage() . "<br/>";
    die();
}
 


 ?>