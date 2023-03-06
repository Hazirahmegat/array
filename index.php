<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>BMI CALCULATION</h1>
    <form action="proses.php" method="post">
        <table>

            <tr>
                <td><label for="berat">BERAT:</label></td>
                <td><input type="text" name="berat" id="berat" require></td>
            </tr>

            <tr>
                <td><label for="tinggi">TINGGI:</label></td>
                <td><input type="text" name="tinggi" id="tinggi" require></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
                <td><input type="reset" name="reset" value="Reset"></td>
            </tr>
        </table>
    </form>
</body>
</html>