<?php require_once 'baglan.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD İŞLEMLERİ</title>
</head>
<body>


	<h1>Veritabanı PDO düzenleme işlemleri</h1>
	<hr>
	

	<?php 

	$bilgilerimsor=$db->prepare("SELECT * from yazar where no=:no");
	$bilgilerimsor->execute(array(
		'no' => $_GET['no']
	));

	$bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC);

	?>

	<form action="islem.php" method="POST">

		<input type="text" required="" name="ad" value="<?php echo $bilgilerimcek['ad'] ?>">
		<input type="text" required="" name="soyad" value="<?php echo $bilgilerimcek['soyad'] ?>">
		<input type="text" required="" name="eser" value="<?php echo $bilgilerimcek['eser'] ?>">
		<input type="hidden" value="<?php echo $bilgilerimcek['no'] ?>" name="no">
		<button type="submit" name="updateislemi">Formu Düzenle</button>

	</form>

	<br>







</body>
</html>