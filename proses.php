<?php

$berat = $_POST['berat'];
$tinggi = $_POST['tinggi'];
$bmi = $berat / ($tinggi ** 2);

$userdata = array(
    'berat' => $berat,
    'tinggi' => $tinggi,
    'bmi' => $bmi
);

if($bmi < 18.5){
    $hasil = "Kurung berat badan";
}else if($bmi <= 24.9){
    $hasil = "Normal";
}else if($bmi <= 29.9){
    $hasil = "Lebih berat badan";
}else{
    $hasil = "Obesiti";
}
?>