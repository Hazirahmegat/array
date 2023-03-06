<?php
session_start();

$berat = $_POST['berat'];
$tinggi = $_POST['tinggi'];
$bmi = bmiCalculate($berat, $tinggi);


function bmiCalculate($berat, $tinggi)
{
    $bmi = $berat / ($tinggi * 2);

    if ($bmi < 18.5) {
        $hasil = "Kurang berat badan";
    } else if ($bmi <= 24.9) {
        $hasil = "Normal";
    } else if ($bmi <= 29.9) {
        $hasil = "Lebih berat badan";
    } else {
        $hasil = "Obesiti";
    }

    return [$bmi, $hasil];
}

$_SESSION['bmi'] = $bmi[0];
$_SESSION['berat'] = $berat;
$_SESSION['tinggi'] = $tinggi;
$_SESSION['hasil'] = $bmi[1];

header("Location:hasil.php");
?>