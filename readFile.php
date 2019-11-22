<?php 
function readStudents(){
    $i=0;
    $myfile = fopen("ogrenciCevap.txt", "r") or die("Unable to open file!");
    while(!feof($myfile)) {
       $ogrenciler[$i] = explode(":", fgets($myfile));
       $i++;
    }
    fclose($myfile);
    return $ogrenciler;
}
function whichStudent($a)
{
    $ogrenciler=readStudents();
    return $ogrenciler[$a];
}

function readCevapAnahtari() {
    $i=0;
    $cevapDosya = fopen("cevapAnahtari.txt", "r") or die("Unable to open file!");
    while(!feof($cevapDosya)){
        $cevapAnahtari[$i] = explode(":",fgets($cevapDosya));
        $i++;
    }
    fclose($cevapDosya);
    return $cevapAnahtari;
}
function explodeEachChar($x) {
    $c = array();
    while (strlen($x) > 0) {
        $c[] = substr($x,0,1);
        $x = substr($x,1);
    }
    return $c;
}
function kontrolEt($ogrenciCevap, $cevapAnahtari)
{
    $grup=[$ogrenciCevap[3]];
    if($grup=="A")
    {
        $hangiGrup=0;
    }
    elseif($grup=="B") 
    {
        $hangiGrup=1;
    }
    elseif($grup="C")
    {
        $hangiGrup=2;
    }
    $cevap_anahtari = explodeEachChar($cevapAnahtari[$hangiGrup][1]);
    $ogrenciCevap = explodeEachChar($ogrenciCevap[4]);
    karsilastir($ogrenciCevap,$cevap_anahtari);

}
function karsilastir($ogrenci, $cevaplar)
{
    $e=0;
    $t=0;
    $f=0;
    for ($i=0; $i < count($cevaplar); $i++) { 
     
        if($ogrenci[$i]==$cevaplar[$i])
        {
            $t++;
        }
        else if($ogrenci[$i]==" ")
        {
            $e++;
        }
        else
        {
            $f++;
        }
    }
    echo "Doğru: " . $t ."  Yanlış: " . $f . "  Boş: ". $e;
} 
?>