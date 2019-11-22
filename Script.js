// JavaScript Document

function sekme(){
	document.getElementById("yanSekme").style.display	=	"block";
	document.getElementById("yanSekme").style.width	=	"240px";	
}
function userEdit(sicilNo, adi, soyadi, sifre){
	getUserName(sicilNo,adi,soyadi,sifre);
  }
  function getUserName(sicilNo,adi,soyadi,sifre)
  {
	document.getElementById("sicilNoID").value = sicilNo;
	document.getElementById("adiID").value = adi;
	document.getElementById("soyadiID").value = soyadi;
	document.getElementById("sifreID").value = sifre;
  }