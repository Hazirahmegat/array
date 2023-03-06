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
            $
            echo $userdata['berat']; ?> kg</td>
        </tr>
        <tr>
            <td>Tinggi</td>
            <td><?php echo $userdata['tinggi']; ?> m</td>
        </tr>
        <tr>
            <td>BMI</td>
            <td><?php echo $userdata['bmi']; ?></td>
        </tr>
        <tr>
            <td>Hasil</td>
            <td><?php echo $hasil; ?></td>
        </tr>
    </table>
</body>
</html>
