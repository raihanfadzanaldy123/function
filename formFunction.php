<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>function</title>
</head>
<body>
    <fieldset>
        <legend><h1>Luas Persegi</h1></legend>
        <form action="" method="GET">
            <label for="">Sisi</label>
            <input type="number" min="1" name="s" required><br>
            <input type="submit" name="simpan" value="SIMPAN">
        </form>
    </fieldset>
    
    <?php
    if (isset($_GET['simpan'])) {
        $sisi = $_GET['s'];

        function luasPersegi($s){
            $luas = $s * $s ;
            return $luas;
        }
        $luas = luasPersegi($sisi);
        echo "Luas Persegi : $luas";
    }
    ?>
</body>
</html>