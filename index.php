<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="proses.php" method="post">
        <table>

            <tr>
                <td><label for="name">NAMA:</label></td>
                <td><input type="text" name="nama" id="nama" require></td>
            </tr>

            <tr>
                <td><label for="bulan">BULAN:</label></td>
                <td><input type="number" name="bulan" id="bulan" require></td>
            </tr>

            <tr>
                <td><label for="harga">HARGA:</label></td>
                <td><input type="number" name="harga" id="harga" require></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
                <td><input type="reset" name="reset" value="Reset"></td>
            </tr>
        </table>
    </form>
</body>
</html>