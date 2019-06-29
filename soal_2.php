<?php
//SOAL 2 - VALIDASI

function is_email_valid($input){
	//Regex dibawah hanya sebatas Huruf saja (*Karena disoal hanya huruf)
	//Jika lebih komplit , Saya sisipkan dikomentar.
	/*
	if(preg_match("/^([a-zA-Z0-9\+_\-]+)(\.[a-zA-Z0-9\+_\-]+)*@([a-zA-Z0-9\-]+\.)+[a-zA-Z]{2,}$/ix", $input)) {
	*/
	if(preg_match("/^([a-zA-Z]+)*@([a-zA-Z]+\.)+[a-zA-Z]{2,}$/ix", $input)) {
	  return true;
	}
	return false;
}
function is_phone_valid($input){
    //Harus diawali dengan +62 dan diikuti dengan Nomor 0-9
	if(preg_match("/^\+62[0-9]{8,15}$/", $input)) {
	    return true;
	}
	return false;
}
function is_username_valid($input){
    //Harus diawali dengan Huruf KECIL
    //Minimal 5 maksimal 9 karakter
	if(preg_match("/^[a-z]{5,9}$/", $input)) {
	    return true;
	}
	return false;
}
function is_password_valid($input){
    //Harus Terdapat Minimal 1 Karakter Sbb. :
    //(Symbol/Non Angka dan Huruf,Angka,Huruf kecil dan Besar/Kapital)
    //Dan selain itu , Password harus terdapat Symbol # (Termasuk Ke Non Huruf dan Angka)
	if(preg_match("/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])(?=\S*[#])\S*$/", $input)) {
	    return true;
	}
	return false;
}
var_dump(is_username_valid('zeronull'));
var_dump(is_username_valid('userOke'));
var_dump(is_password_valid('p@sswW0rd#'));
var_dump(is_password_valid('C0d3YourFuture!@'));
var_dump(is_phone_valid('+6281234567890'));
var_dump(is_email_valid('iqbal@mail.c'));
?>


