<?php
//SOAL 4 - LOGIKA
/*
Diketahui (Rules):
Pohon Jati = 1 Meter -> Awal tahun 2021
Hanya TUMBUH 1 Meter dimusim SEMI
Ketika dimusim PANAS, TUMBUH 3x Lipat dari Saat Tinggi Musim Sebelumnya
Ketika dimusim GUGUR, BERKURANG 1,5 Meter dari ukuran di Musim Sebelumnya
Ketika dimusim DINGIN, TUMBUH 15% dari saat Tinggi Musim Sebelumnya
Dicelsetiap Tahun Genap, Pohon Tersebut dipangkas pada AKHIR MUSIM DINGIN 1/2 Dari TinggiNya

Ditanyakan : 
Method (yg return nya) Menghitung Tinggi Pohon Akhir Tersebut Setelah N Tahun.
Dengan Parameter Tinggi_Awal,Tahun.
*/
define("SEMI",0);
define("PANAS",1);
define("GUGUR",2);
define("DINGIN",3);

function hitungPohon($tinggi_awal,$tahun){
	$Tinggi = $tinggi_awal;
	for($i=1; $i<=$tahun; $i++){
		for($j=0; $j < 4; $j++){
			if($j==SEMI){
				//Musim Semi
				$Tinggi = $Tinggi + 1;
			}else if($j==PANAS){
				//Musim Panas
				$Tinggi = $Tinggi * 3;
			}else if($j==GUGUR){
				//Musim Gugur
				$Tinggi = $Tinggi - 1.5;
			}else if($j==DINGIN){
				//Musim Dingin
				$TempTumbuh = ($Tinggi*15)/100;	//15 Persen
				$Tinggi = $Tinggi + $TempTumbuh;
			}
		}
		if( ($i%2) == 0 ){
			$Tinggi = $Tinggi/2;
		}
	}
	return $Tinggi;
}

//Contoh : 
//hitungPohon(tinggiAwal, tahun) = tinggi akhir
//hitungPohon(2,2) = 15.7m
$init_tinggi = 2;
$init_thn = 2;
echo "Tinggi Awal Pohon = ".$init_tinggi;
echo "\n";
echo "Tahun Awal = ".$init_thn;
echo "\n";
$x = hitungPohon($init_tinggi,$init_thn);
echo "Tinggi Pohon Adalah = ".$x;
?>