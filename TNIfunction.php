<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaraan TNI</title>
</head>
<body>
    <fieldset>
    <legend><h1>Pendaftaran TNI</h1></legend>
    <form action="" method="get">
        Nama :  
        <input type="text" name="nama"><br>
        Berat Badan : 
        <input type="number" name="bb"><br>
        Tinggi Badan :
        <input type="number" nmae="tb"><br>
        <input type="submit" name="simpan" value="SIMPAN">

    </form>
    </fieldset>

    <?php
    if (isset($_POST['simpan'])) {
        $nama1 = $_POST['nama'];
        $bb1 = $_POST['bb'];
        $tb1 = $_POST['tb'];
        
        function seleksi($tinggi,$berat){
            
             if ($bb1<=60 && $tb1>=165) {
               return "di terima";
            }
            else{
                return "Kembali Latihan";
            }
            
        }
        echo "Nama : $nama1<br>";
        echo "tb : $tb1<br>";
        echo "bb : $bb1<br>";
        echo "Keterangan : ".seleksi($tb1,$bb1);
       

    }

    ?>
</body>
</html>