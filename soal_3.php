<?php
//SOAL 3 - SEGITIGA

function segitiga($n){
    $brs = 1;
    while($brs <= $n){
        $kolom = $brs;
        //Looping Kolom Kosong (SPASI)
        while($kolom > 1){
            echo " ";
            $kolom--;
        }
        //Looping Kolom Bintang Sisi Kiri
        $kiri = 0;
        while($kiri <= ($n-$brs)){
            echo "*";
            $kiri++;
        }
        //Looping Kolom Bintang Sisi Kanan
        $kanan = $kiri;
        while($kanan > 1){
            echo "*";
            $kanan--;
        }
        echo "\n";
        //Lopping Kolom Kosong (Untuk membuat Lubang)
        $ksg = $kolom;
        while(false){
            
        }
        $brs++;
    }
}
segitiga(6);
?>