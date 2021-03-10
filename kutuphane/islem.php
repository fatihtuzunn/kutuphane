
<?php 

require_once('baglan.php');

if(isset($_POST['kaydet']))
{
    $formliste=[$_POST['ad'],$_POST['soyad'],$_POST['eser'],$_POST['zaman']];
    
    $sorgu=$db->prepare("insert into yazar values(NULL,?,?,?,?)"); 
    $sorgu->execute($formliste);
Header("Location:index.php"); exit;


}







if(isset($_POST['kaydet']))
{
    $formliste=[$_POST['ad'],$_POST['soyad'],$_POST['eser'],$_POST['zaman']];
    
    $sorgu=$db->prepare("UPDATE yazar values(NULL,?,?,?,?)"); 
    $sorgu->execute($formliste);
Header("Location:index.php"); exit;

	

	if ($insert) {
		
		echo "kayıt başarılı";

		Header("Location:duzenle.php?durum=ok&no=$no");
		exit;

	} else {

		echo "kayıt başarısız";
		Header("Location:duzenle.php?durum=no&no=$no");
		exit;
	}






}



if ($_GET['bilgilerimsil']=="ok") {
	

	$sil=$db->prepare("DELETE from yazar where no=:id");
	$kontrol=$sil->execute(array(
		'id' => $_GET['no']
	));

if ($kontrol) {
		
		//echo "kayıt başarılı";

		Header("Location:eserler.php?durum=ok");
		exit;

	} else {

		//echo "kayıt başarısız";
		Header("Location:eserler.php?durum=no");
		exit;
	}





}

 ?>