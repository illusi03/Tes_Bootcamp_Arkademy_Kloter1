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
            if($kiri < 1 || $brs==1){
                echo "*";
            }else{
                echo " ";
            }
            $kiri++;
        }
        //Looping Kolom Bintang Sisi Kanan
        $kanan = $kiri;
        while($kanan > 1){
            if($kanan==2 || $brs==1){
                echo "*";
            }else{
                echo " ";
            }
            $kanan--;
        }
        echo "\n";
        $brs++;
    }
}
segitiga(6);
?>