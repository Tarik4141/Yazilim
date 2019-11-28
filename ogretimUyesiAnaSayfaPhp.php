<?php
include "dataBaseInfo.php";
include "ogretimUyeUstMenu.php";
if (isset($_POST["dersAdiName"]) && isset($_POST["bolumAdiName"])) {
	$dersAdi = $_POST["dersAdiName"];
	$bolumAdi = $_POST["bolumAdiName"];
	$donem = $_POST["donemName"];
} else {
	echo 'POST EDİLMEDİ';
}
?>
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
	<link href="ogretimUyesiAnaSayfaCss.css" rel="stylesheet">
	<link href="testOkut.css" rel="stylesheet">
	<link href="table.css" rel="stylesheet">
	<style>
		#form {
			width: 70px;
			height: calc(1.5em + .75rem + 2px);
			font-size: 1rem;
			font-weight: 400;
			line-height: 1.5;
			color: #495057;
			background-color: #fff;
			background-clip: padding-box;
			border: 1px solid #ced4da;
			border-radius: .25rem;
			transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
		}
	</style>


	<title>Kullanıcılar</title>

	<!-- Bootstrap core CSS -->


	<!-- Custom styles for this template -->

</head>

<body onresize="test()" onLoad="yenile()">
	<script type="text/javascript">
		<?php
		require 'testOkut.js';
		?>

		var dosyaAdi;

		function ogrenciCevapYukle(file) {
			readOgrenciText(file);
		}

		function cevapAnahtariYukle(file) {
			readCevapText(file);
		}

		function okutBtnClick() {
			dosyaAdi =
				document.getElementById("bolumID").innerHTML + "_" +
				document.getElementById("dersID").innerHTML + "_" +
				document.getElementById("donemID").innerHTML + "_" +
				document.getElementById("sinavTuruID").value;
			cevaplariOkut(dosyaAdi);
		}
	</script>
	<div id="TumSayfa" onClick="kapat()">
		<?php echo $ustMenu ?>
		<h3 style="text-align:center; padding-top:60px; z-index:3;">OPTİK OKUTUCU</h3>
		<div class="form-group" id="testOkutma">

			<label id="bolumID"><?php echo "$bolumAdi"; ?></label>
			<br>
			<label id="dersID"><?php echo "$dersAdi"; ?></label>
			<br>
			<label id="donemID"><?php echo "$donem"; ?></label>
			<br>

			<label style="float:left;">Sınav:</label>
			<select class="form-control sel1" id="sinavTuruID">
				<option>Vize</option>
				<option>Final</option>
				<option>Bütünleme</option>
			</select>


			<label style="float:left;">Öğrenci Cevap Kağıdı:</label>
			<div class="custom-file  sel1">
				<input onchange='ogrenciCevapYukle(this)' type="file" class="custom-file-input sel1">
				<label class="custom-file-label">Dosya Seç</label>
				<button type="submit" class="btn btn-primary" style="width: 50%;">Düzenle</button>
			</div>


			<label style="float:left;">Cevap Anahtarı:</label>
			<div class="custom-file sel1">
				<input onchange='cevapAnahtariYukle(this)' type="file" class="custom-file-input sel1">
				<label class="custom-file-label">Dosya Seç</label>
				<form action="ogrenciCevaplarTablosu.html" method="POST">
					<button type="button" class="btn btn-primary" style="width: 50%;">Düzenle</button>
				</form>
			</div>
			<button onclick="okutBtnClick()" type="button" class="btn btn-primary" style="float:right; margin-top:20px; width:80px;">Okut</button>

		</div><br /><br />
	</div>
	</div>
	<div class="modal fade" id="ogrenciCevapDuzenleModal">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Modal Heading</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<div class="table-responsive table-responsive-data2">
						<table id="TabloSinirlamaAlani" class="table table-data2">
							<thead>
								<tr>
									<th>Adı</th>
									<th>soyadı</th>
									<th>Numara</th>
									<th>Grup</th>
									<th>Soru1</th>
									<th>Soru2</th>
									<th>Soru3</th>
									<th>Soru4</th>
									<th>Soru5</th>
									<th>Soru6</th>
									<th>Soru7</th>
									<th>Soru8</th>
									<th>Soru9</th>
									<th>Soru10</th>
									<th>Soru12</th>
									<th>Soru13</th>
									<th>Soru14</th>
									<th>Soru15</th>
									<th>Soru16</th>
									<th>Soru17</th>
									<th>Soru18</th>
									<th>Soru19</th>
									<th>Soru20</th>
									<th>Soru21</th>
									<th>Soru22</th>
									<th>Soru23</th>
									<th>Soru24</th>
									<th>Soru25</th>
									<th>Soru26</th>
									<th>Soru27</th>
									<th>Soru28</th>
									<th>Soru29</th>
									<th>Soru30</th>
								</tr>
							</thead>
							<tbody>
								<script>
									
								</script>
							</tbody>
						</table>
					</div>
				</div>
				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</body>

</html>