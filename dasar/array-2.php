<?php 

    $mangga = ['manalagi', 'lokal'];

    $buah = ['Mangga' => $mangga , 'Apel' => 'Rp. 7000', 'Pisang' => 'Rp. 10.000', 'Anggur' => 'Rp. 6000', 'Melon' => 'Rp. 8000'];

    var_dump($buah);
    echo "<pre>";
    print_r($buah);
    echo "</pre>";

    echo $buah['Mangga'] [0]. "<br>";

    foreach ($buah as $key => $value) {
        if (!is_array ($value)) {
            echo $key. "=>". $value;
            echo "<br>";
        } else {
            echo $key;
            foreach ($value as $key => $value) {
                echo "<li>";
                echo $value;
                echo "</li>";
            }
        }
        
    }

?>