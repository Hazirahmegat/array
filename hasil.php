<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>BMI Calculator</title>
    <style>
        table, th, td {
          border: 1px solid black;
          border-collapse: collapse;
        }
        th, td {
          padding: 5px;
          text-align: left;
        }
    </style>
</head>
<body>
    <h1>BMI Calculator</h1>
    <table>
        <tr>
            <td>Berat</td>
            <td><?php
            echo $berat=$_SESSION['berat']; ?> kg</td>
        </tr>
        <tr>
            <td>Tinggi</td>
            <td><?php 
            echo $tinggi=$_SESSION['tinggi']; ?> m</td>
        </tr>
        <tr>
            <td>BMI</td>
            <td><?php echo $bmi=$_SESSION['bmi']; ?></td>
        </tr>
        <tr>
            <td>STATUS</td>
            <td><?php echo $hasil=$_SESSION['hasil']; ?></td>
        </tr>
    </table>
</body>
</html>
