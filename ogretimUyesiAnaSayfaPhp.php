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
  

  <title>Kullanıcılar</title>

  <!-- Bootstrap core CSS -->


  <!-- Custom styles for this template -->

</head>

<body onresize="test()" onLoad="yenile()">

    <div id="TumSayfa" onClick="kapat()">
		<div id="Header1">
	<div id="HeaderSinirlamaAlani1">
		<div >
   				<button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" style="float:right; margin-top:12px; margin-right:10px;">
    			</button>
    			<div class="dropdown-menu dropdown-menu-right">
					<ul class="acilirMenuUl">
      					<li class="acilirMenuItemi" style="text-align:center;"><a class="dropdown-item" href="#"><img src="avatar5.png" alt="kullanıcıLogo" class="img-circle" style="width:33px; height:33px; border-radius:50%;  line-height:1.5;"><span style="padding-left:6px;">Tarık Ahmet ERSOYLU</span></a></li>
						<li class="acilirMenuItemi"><a class="dropdown-item" href="ogretimUyesiAnaSayfaPhp.php">Ana Sayfa</a></li>
						<li class="acilirMenuItemi"><a class="dropdown-item" href="ogretimUyesiDersBilgileriPhp.php">Dersler</a></li>
      					<li class="acilirMenuItemi"><a class="dropdown-item" href="#">Bilgilerim</a></li>
						<div class="dropdown-divider" style="margin:0; padding:0;"></div>
						<li class="acilirMenuItemi"><a class="dropdown-item" href="#">Çıkış</a></li>
					</ul>	
   				</div>
 			</div>
			<img src="avatar5.png" alt="kullanıcıLogo" class="img-circle" style="max-width:50px; height:47px;  margin:5px; border-radius:50%; float:right; cursor:pointer;">
	</div>
</div>
		<h3 style="text-align:center; padding-top:60px; z-index:3;">OPTİK OKUTUCU</h3>
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
    				<input type="file" class="custom-file-input">
    				<label class="custom-file-label">Dosya Seç</label>
 				 </div>
				<button type="button" class="btn btn-primary" style="float:right; margin-top:20px; width:80px;">Okut</button>
				
			</div><br /><br />
    </div>
  </div>
  


</body>

</html>