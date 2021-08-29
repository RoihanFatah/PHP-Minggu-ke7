<?php 

// penulisan dan variabel
// $nama = "M. Roihan";
// $umur = 17;

//     echo "BELAJAR PHP";
//     echo "<br>";
//     echo "BELAJAR PHP";
//     echo "<br>";
//     echo "BELAJAR PHP";
//     echo "<br>";

//     echo "Nama : ";
//     echo $nama;
//     echo "<br>";
//     echo "Umur : ";
//     echo $umur;
//     echo "<br>";

//     echo "<h1>Buah</h1>"

    // Array

    $buah = ['Mangga','Apel','Pisang','Anggur','Melon'];
    

    foreach ($buah as $key => $value) {
        echo $key."=>".$value;
        echo "<br>";
    }
    echo "<br>";

    // array asosiatif

    $harga = ['Mangga' => 'Rp. 5000', 'Apel' => 'Rp. 7000', 'Pisang' => 'Rp. 10.000', 'Anggur' => 'Rp. 6000', 'Melon' => 'Rp. 8000'];

    foreach ($harga as $key => $value) {
        echo $key. " Harganya Adalah : ".$value;
        echo "<br>";
    }
    echo "<br>";

    //array keys

    $isi = array_keys($harga);
    
    echo $isi[2];


?>

<?php ?>

