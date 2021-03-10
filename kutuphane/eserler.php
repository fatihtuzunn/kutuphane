<?php require_once('baglan.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Kayitli Eserler</title>
</head>
<body>

<br><br><br>



<table align="center" style="text-align:center" border="1" width="500">
	<tr>
		<th>Ad</th>
		<th>Soyad</th>
		<th>Eser</th>
		<th>Islem</th>
		<th>Islem</th>
	</tr>	

<?php  

		$bilgilerimsor=$db->prepare("SELECT * from yazar");
		$bilgilerimsor->execute();

		$say=0;

		while($bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC)) { ?>


	<tr>
		<td><?php echo $bilgilerimcek['ad']; ?></td>
		<td><?php echo $bilgilerimcek['soyad']; ?></td>
		<td><?php echo $bilgilerimcek['eser']; ?></td>
		<td align="center"><a href="duzenle.php?no=<?php echo $bilgilerimcek['no'] ?>"><button>Düzenle</button></td></a>
		<td align="center"><a href="islem.php?no=<?php echo $bilgilerimcek['no'] ?>&bilgilerimsil=ok"><button>Sil</button></td></a>
	</tr>




<?php } ?>

</table>




</body>
</html>