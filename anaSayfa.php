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
  <div id="TumSayfa">
	  <?php
include "leftMenu.php";
echo $leftMenu;
include "readFile.php";
$ogrenciler = readStudents();
?>

    <div id="Icerik">
			<div class="form-group" id="testOkutma" >
				
 				<label  style="float:left;">Bölüm:</label>
  				<select class="form-control sel1" >
    				<option>1</option>
    				<option>2</option>
  				</select>
				
				
				<label style="float:left;">Yarıyıl:</label>
  				<select class="form-control sel1" >
    				<option>1</option>
    				<option>2</option>
  				</select>
				
				
				<label style="float:left;">Ders:</label>
  				<select class="form-control sel1" >
    				<option>1</option>
    				<option>2</option>
  				</select>
				
				
				<label  style="float:left;">Sınav:</label>
  				<select class="form-control sel1">
    				<option>1</option>
    				<option>2</option>
  				</select>
				
				
				<label  style="float:left;">Öğrenci Cevap Kağıdı:</label>
  				<div class="custom-file  sel1">
    				<input type="file" class="custom-file-input sel1" >
    				<label class="custom-file-label" >Dosya Seç</label>
 				 </div>
				
				
				<label  style="float:left;">Cevap Anahtarı:</label>
  				<div class="custom-file sel1">
    				<input type="file" class="custom-file-input" >
    				<label class="custom-file-label" >Dosya Seç</label>
 				 </div>
				<button type="button" class="btn btn-primary" style="float:right; margin-top:20px; width:80px;">Okut</button>
				
			</div>
    </div>
  </div>
  


</body>

</html>