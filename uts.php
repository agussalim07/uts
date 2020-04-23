<!DOCTYPE html>
<html>
<head>
	<title>AGUS SALIM UTS</title>
	<link rel="stylesheets" type="text/css" href="style.css">
</head>
<body>

		<!-- Ini adalah Judul -->
	<?php echo " Data Pemantauan Covid 19 Wilayah DKI Jakarta" ?> 
	<br>
	<?php date_default_timezone_set('Asia/Jakarta');
	echo"Per 18 April 2020   "   .date('H:i:s a'); ?>
	<br>
	<?php echo "Agussalim - 2016140870"; ?>


		<!-- ini adalah data yang dimasukan kedalam variabel dalam bentuk array numerik -->
	<?php $status = ['Positif','Dirawat','Sembuh','Meninggal']; ?>

	<?php $data   = [ 2904,1769,206,257]; ?>

<!-- ini adalah tabel pemanggilan data yang di simpan di variabel yang berisi array numerik -->

	<section class="table">
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th><?= $status[0];?></th>
			<th><?= $status[1];?></th>
			<th><?= $status[2];?></th>
			<th><?= $status[3];?></th>
		</tr>
			<td><?= $data[0];?></td>
			<td><?= $data[1];?></td>
			<td><?= $data[2];?></td>
			<td><?= $data[3];?></td>
	</table>
	</section>





</body>
</html>