<?php
//Soal 5
/*
Diketahui :
Diberikan Sebuah Variable Berupa Nomor.
Antara Bilangan 1-9 Adalah Murni Nomor dan Bilangan 0 Dijadikan Delimiter.
Dengan kata lain Bil. 0 = Pemisah (Bukan Bilangan).

Ditanyakan : 
Urutkan bilangan Yg dimasukan berdasarkan Pemisah.
Lalu setelah diurutkan gabungkan lagi.
Contoh : 
Input
5956560159466056
Output
55566914566956
*/
function acakToUrut($masukan_Awal){
	// $hasil = $masukan_Awal;
	$delim = 0;
	$input = explode($delim,$masukan_Awal);
	$hasil = NULL;
	for($i=0; $i < sizeof($input); $i++){
	    $tempBil = str_split($input[$i]);
	    //Supaya lebih efektif (Hemat Waktu) memakai fungsi predifined PHP
	    sort($tempBil);
	    $joined= join($tempBil);
	    $hasil = $hasil.$joined;
	}
	return $hasil;
}
$MasukanNya = 5956560159466056;
$hslNya = acakToUrut($MasukanNya);
echo "Masukanya Adalah : ".$MasukanNya;
echo "\n";
echo "Hasilnya Adalah : ".$hslNya;
?>