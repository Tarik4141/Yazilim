<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" language="javascript" src="Script.js"></script>
	<link href="css.css" rel="stylesheet">
	<link href="testOkut.css" rel="stylesheet">


	<title>Kullanıcılar</title>

	<!-- Bootstrap core CSS -->
	<!-- Custom styles for this template -->
</head>

<body>
	<script type="text/javascript">
		<?php
		require_once 'Script.js';
		?>

		function ogrenciCevaplari(file) {
			readText(file);
		}

		function cevapAnahtari(file) {
			readCevapText(file);
		}

		function okutBtnClick() {
			cevaplariOkut();
		}
	</script>
	<div id="TumSayfa">
		<?php
		include "dataBaseInfo.php";
		include "leftMenu.php";
		echo $leftMenu;
		$bolum_query = "select bolumNo,bolumAdi from bolum;";
		$bolum_result = $conn->query($bolum_query);
		$ders_query = "select dersKodu,(select dersAdi from dersler where dersKodu=dersAtama.dersKodu) as dersAdi from dersAtama;";
		$ders_result = $conn->query($ders_query);
		?>
		<div id="Icerik">
			<div class="form-group" id="testOkutma">
				<label style="float:left;">Bölüm:</label>
				<select onchange="bolumSelection()" id="bolumSelectionID" class="form-control sel1">
					<?php
					while ($bolum = mysqli_fetch_array($bolum_result)) {
						echo '<option>' . $bolum["bolumNo"] . ' - ' . $bolum["bolumAdi"] . '</option>';
					}
					?>
				</select>

				<label style="float:left;">Ders:</label>
				<select class="form-control sel1">
					<?php
					while ($select_Ders = mysqli_fetch_array($ders_result)) {
						echo '<option>' . $select_Ders["dersKodu"] . ' - ' . $select_Ders["dersAdi"] . '</option>';
					}
					?>
				</select>

				<label style="float:left;">Sınav:</label>
				<select class="form-control sel1">
					<option>1</option>
					<option>2</option>
				</select>

				<label style="float:left;">Öğrenci Cevap Kağıdı:</label>
				<div class="custom-file  sel1">
					<input onchange='ogrenciCevaplari(this)' type="file" class="custom-file-input sel1">
					<label class="custom-file-label">Dosya Seç</label>
				</div>

				<label style="float:left;">Cevap Anahtarı:</label>
				<div class="custom-file sel1">
					<input type="file" onchange='cevapAnahtari(this)' />
					<div id="isim"></div>
					<div id="soyisim"></div>
					<div id="numara"></div>
					<div id="grup"></div>
					<div id="cevap"></div>
				</div>
				<button type="button" onclick="okutBtnClick()" class="btn btn-primary" style="float:right; margin-top:20px; width:80px;">Okut</button>

			</div>
		</div>
	</div>

</body>

</html>