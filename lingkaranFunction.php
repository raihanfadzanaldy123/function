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
        <legend><h1>Lingkaran</h1></legend>
        <form action="" method="GET">
            <label for="">Jari-jari</label>
            <input type="number" min="1" name="jari" required><br><br><br><br>
        
            <label for="">Diameter</label>
            <input type="number" min="1" name="diameter" required><br><br>
         <input type="submit" name="simpan" value="SIMPAN">
    </form> 
    </fieldset>
    
    <?php
    if (isset($_GET['simpan'])) {
        $jari1 = $_GET['jari'];
        $diameter1 = $_GET['diameter'];

        function luasPersegi($jari1){
            $luas = 3.14 * $jari1 *$jari1 ;
            return $luas;
        }

        function kelilingLingkaran($jari1){
            $keliling = 2 * 3.14 * $jari1;
            return $keliling;
        }

        $luas = luasPersegi($jari1);
        echo "Luas Lingkaran : $luas <br>";
        $keliling = kelilingLingkaran($jari1);
        echo "Keliling Lingkaran : $keliling";
    }
    ?>
</body>
</html>