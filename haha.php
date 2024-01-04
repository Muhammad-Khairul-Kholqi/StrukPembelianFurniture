<?php
    $array = [5, 1, 20, 22, 6, 4, 5, 10, 50, 11, 95];

    $tabungan_unik = array_unique($array);
    foreach ($tabungan_unik as $angka) {
        echo $angka . ", ";
    }

    
?>