// JavaScript Document

var ogrenciler = new Array();
var cevaplar = new Array();
function sekme() {
	document.getElementById("yanSekme").style.display = "block";
	document.getElementById("yanSekme").style.width = "240px";
}
function userEdit(sicilNo, adi, soyadi, sifre) {
	getUserName(sicilNo, adi, soyadi, sifre);
}
function getUserName(sicilNo, adi, soyadi, sifre) {
	document.getElementById("sicilNoID").value = sicilNo;
	document.getElementById("adiID").value = adi;
	document.getElementById("soyadiID").value = soyadi;
	document.getElementById("sifreID").value = sifre;
}
function readText(that) {
	if (that.files && that.files[0]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			var text = e.target.result;
			ogrenciBol(text);
		}; //end onload()
		reader.readAsText(that.files[0]);

	} //end if html5 filelist support
}

function ogrenciBol(text) {
	var a = text.split("\n");
	for (let i = 0; i < a.length; i++) {
		ogrenciler[i] = a[i];
	}
	return ogrenciler;
}

function getAd(isim) {
	var a = isim.slice(0, 12);
	return a;
}

function getSoyad(soyisim) {
	var a = soyisim.slice(12, 24);
	return a;
}

function getNumara(no) {
	var a = no.slice(24, 33);
	return a;
}

function getGrup(grup) {
	var a = grup.slice(33, 34);
	return a;
}

function getCevap(cevaplar) {
	var a = cevaplar.slice(34);
	a = a.split("");
	return a;
}
function readCevapAnahtari(file) {
	readCevapText(file);
}
function readCevapText(that) {
	if (that.files && that.files[0]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			var text = e.target.result;
			cevapAnahtariOlustur(text);
		}; //end onload()
		reader.readAsText(that.files[0]);

	} //end if html5 filelist support
}
function cevapAnahtariOlustur(text) {
	var c = text.split("\n");
	for (let i = 0; i < c.length; i++) {
		cevaplar[i] = c[i];
		cevaplar[i] = cevaplar[i].split(":");
	}
}

function cevaplariOkut() {
	ogrenciBilgi = new Array();
	var toplamPuan = 0;
	var puan = 0;
	soruSayisi = (cevaplar[0][1].split("").length - 1);
	var dogruYapanSayi = new Array();
	puan = (100 / soruSayisi);
	for (let i = 0; i < soruSayisi; i++) {
		dogruYapanSayi[i] = 0;
	}

	for (let i = 0; i < ogrenciler.length; i++) {
		ogrenciBilgi[i] = [6];
	}
	for (let i = 0; i < ogrenciler.length; i++) {
		ogrenciBilgi[i][0] = getAd(ogrenciler[i]);
		ogrenciBilgi[i][1] = getSoyad(ogrenciler[i]);
		ogrenciBilgi[i][2] = getNumara(ogrenciler[i]);
		ogrenciBilgi[i][3] = getGrup(ogrenciler[i]);
		ogrenciBilgi[i][4] = getCevap(ogrenciler[i]);
	}
	cevapAnahtari = [soruSayisi];
	for (let i = 0; i < ogrenciBilgi.length; i++) {
		for (let c = 0; c < cevaplar.length; c++) {
			if (ogrenciBilgi[i][3] == cevaplar[c][0]) {
				cevapAnahtari = cevaplar[c][1].split("");
				break;
			}
			else {

			}
		}

		for (let j = 0; j < cevapAnahtari.length; j++) {
			if (ogrenciBilgi[i][4][j] == cevapAnahtari[j]) {
				ogrenciBilgi[i][4][j] = puan;
				toplamPuan += puan;
				dogruYapanSayi[i] += 1;
			}
			else if (ogrenciBilgi[i][4][j] == " ") {
				ogrenciBilgi[i][4][j] = 0;
			}
			else {
				ogrenciBilgi[i][4][j] = 0;
			}
		}
		ogrenciBilgi[i][5] = toplamPuan;
		toplamPuan = 0;
	}
	ogrenciBilgi[ogrenciBilgi.length - 1][3] = soruOrtalama(dogruYapanSayi, soruSayisi, puan);
	exportToCsv("sdadsa.csv",ogrenciBilgi);
}
function soruOrtalama(veri, soruSayisi, sorununPuani) {
	veri[0] = "Ortalama";
	for (let i = 1; i < soruSayisi + 1; i++) {
		veri[i] = (soruSayisi * sorununPuani) / veri[i];
		return veri;
	}
}

exportToCsv = function (dosya) {
	var CsvString = "";
	dosya.forEach(function (RowItem, RowIndex) {
		RowItem.forEach(function (ColItem, ColIndex) {
			CsvString += ColItem + ",";
		});
		CsvString += "\r\n";
	});
	CsvString = "data:application/csv," + encodeURIComponent(CsvString);
	var x = document.createElement("A");
	x.setAttribute("href", CsvString);
	x.setAttribute("download", "somedata.csv");
	document.body.appendChild(x);
	x.click();
}