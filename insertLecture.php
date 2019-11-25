<?php
include "dataBaseInfo.php";
if (isset($_POST['dersKodu'])) {
    $dersKodu = $_POST["dersKodu"];
    $dersAdi = $_POST["dersAdi"];
    $bolumAdi = $_POST["bolumAdi"];
    $bolum_query = "select * from bolum where bolumAdi='$bolumAdi'";
    $bolum_result = $conn->query($bolum_query);
    $bolum = mysqli_fetch_array($bolum_result);
    $bolumNo = $bolum["bolumNo"];
    $dersKazanim = $_POST["dersKazanim"];
    $insert_query = "insert into dersler(dersKodu,dersAdi,bolumNo,dersKazanim) values ('$dersKodu','$dersAdi',$bolumNo,'$dersKazanim');";
    $insert = $conn->query($insert_query);
    header("Location: dersler.php");
} else {
    echo 'post edilmedi';
}
