<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lanjutan</title>
</head>
<body>
    <h1>Hello Word</h1>
    <?php
    $tipe_data = "Santai saja" ; // ini tipe data srting
    $tipe_data = 5; // ini tipe data integer

    ?>

    <h2><?=$tipe_data?></h2>
    <?php
        $pecahan = 5.85; // ini tipe data pecahan/float
    ?>

    <h2>Saya menampilkan nilai pecahan ini <?=$pecahan?></h2> 
    <?php
           $perbandingan = true; // ini tipe data boolean

            echo $perbandingan;
            echo "<br>";
    ?>

    <?php
    
       /*
            $provinsi[0] = "Jawa Barat";
            $provinsi[1] = "DKI Jakarta";
            $provinsi[2] = "IKN";
        */

            /* $provinsi = array ("Jawa Timur",
                               "DKI Jakarta",
                               "IKN"); */

            $hasil = 5;

            echo $hasil--;
            echo "<br/>" ;
            echo $hasil;
            echo "<br/>" ;

            define("SATU", 1);

            echo SATU;

            echo "<br/>";

            /*
            if($perbandingan == true) {
                echo "Ucapkan selamat pagi";
            } else {
                echo "Ucapkan selamat";
            }

            $perbandingan = 4;
            switch($perbandingan) {
                case true:
                    $pesan = "soto ayam";
                break;
                case false;
                    $pesan = "ayam geprek";
                break;
                default:
                    $pesan = "engga dong";

            }

            echo $pesan;
            */

            $pesan = ($hasil == 2 ) ? "Santai saja" : "Salah";

            echo $pesan;
            echo "<br/>";

            $provinsi = array ("Jawa Timur",
                               "DKI Jakarta",
                               "IKN",
                               "Jawa Tengah",
                               "Jawa Barat");

            foreach($provinsi as $key) {
                echo $key;
                echo "<br/>";
            }

            $i=1;

            while($i<5) {
                echo "Topi bundar <br/>";
                $i++;
            }
    ?>
    
    <!--
    <?php for ($i=0; $i<100; $i++) { ?>
        <h2>Hello Word</h2>
    <?php } ?>
    -->

</body>
</html>