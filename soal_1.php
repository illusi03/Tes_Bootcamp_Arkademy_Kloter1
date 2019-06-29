<?php
//SOAL 1 - BIODATA
/*
Diketahui : 
Field Biodata {Name,Age,Address,Hobbies,Is_Married,List_School,Skills,Interest_Int_Coding}
Dimana Hobbies, List_School, dan Skills adalah Tipe data gabungan lagi.
Hobbies = Array
List_School = Array Of Object {Name,YearIn,YearOut,Major}
Skills = Array Of Object {Name,Level}

Ditanyakan : 
Buatlah fungsi (Getter Data) yang returnya ke dalam format JSON

*/

//Untuk Enumerasi Level di PHP
class Level{
	public static $Beginner = "Beginner";
	public static $Advanced = "Advanced";
	public static $Expert = "Expert";
}

//Dibutuhkan Untuk Objek bertipe School
//Dengan Parameter Konstruktor
//	(Name, Year_In, Year_Out, Major)
class School{
	public $name;		//String
	public $year_in;	//Int
	public $year_out;	//Int
	public $major = NULL;	//String with default NULL
	private $dataJson = NULL; //String of Json tapi diPRIVATE akses Modifiernya.
	function __construct($name_p,$year_in_p,$year_out_p,$major_p = NULL){
		$this->name = $name_p;
		$this->year_in = $year_in_p;
		$this->year_out = $year_out_p;
		$this->major = $major_p;
	}
	function getData_JSONFormat(){
		$this->dataJson = array(
			'name' => $this->name,
			'year_in' => $this->year_in_p,
			'year_out' => $this->year_out_p,
			'major' => $this->major_p
		);
		return json_encode($this->dataJson);
	}
}

//Dibutuhkan Untuk Objek bertipe Skill
class Skill{
	public $skill_name;	//String
	public $level;	//Enumerasi ['Beginner','Advanced','Expert']
	function __construct($skill_name_p,$level_p){
		$this->skill_name = $skill_name_p;
		$this->level = $level_p;
	}
	function getData_JSONFormat(){
		$this->dataJson = array(
			'skill_name' => $this->skill_name,
			'level' => $this->level
		);
		return json_encode($this->dataJson);
	}
}

//Untuk Memudahkan (Dibungkus dengan Class , yg nantinya akan dibuat obj)
//Dengan Parameter Konstruktor
//	(Name, Age, Address, Hobbies, is_married, list_school, skills, interest_in_coding)
class Biodata{
	public $name;		//String
	public $age;		//Int
	public $address;	//String
	public $hobbies;	//Array of String
	public $is_married;	//Boolean
	//*Keterangan
	//Sebenarnya Jika ada prefix name "IS" lebih cocok untuk getter/assessor(fungsi get) diobjek kak.
	//Jadi cocoknya masuk ke fungsi , bukan ke Properti/Var. 
	//Tapi disoal mau ke format json , dijadiin properti aja deh ><
	public $list_school;	//Array of Object
	public $skills;		//Array of Object
	public $interest_in_coding;	//Boolean
	private $dataJson = NULL;	//String of Json tapi diPRIVATE akses Modifiernya.
	function __construct($name_p,$age_p,$address_p,$hobbies_p,$is_married_p,$list_school_p,$skills_p,$interest_in_coding_p){
		$this->name = $name_p;
		$this->age = $age_p;
		$this->address = $address_p;
		$this->hobbies = $hobbies_p;
		$this->is_married = $is_married_p;
		$this->list_school = $list_school_p;
		$this->list_school = $list_school_p;
		$this->skills = $skills_p;
		$this->interest_in_coding = $interest_in_coding_p;
	}
	function getData_JSONFormat(){
		$this->dataJson = array(
			'name' => $this->name,
			'age' => $this->age,
			'address' => $this->address,
			'hobbies' => $this->hobbies,
			'is_married' => $this->is_married,
			'list_school' => $this->list_school,
			'skills' => $this->skills,
			'interest_in_coding' => $this->interest_in_coding
		);
		return json_encode($this->dataJson);
	}
}
//Array of String
$my_hobbies = array("Maen Game(Dota 2)","Tidur (Jika bermimpi baik)","Olahraga (Tapi hanya catur)","Baca buku","Berdiam ditempat yg sejuk");
//Objek dari Sekolah
//	(Name, Year_In, Year_Out, Major)
$my_schools = array(
	new School("TK At-Ta'awun",2004,2005),
	new School("SD Negeri Gunung Koneng Kota Tasikmalaya",2005,2010),
	new School("SMP Negeri 18 Kota Tasikmalaya",2010,2011),
	new School("MTS Negeri 3 Kota Tasikmalaya",2011,2013),
	new School("SMK Negeri 2 Kota Tasikmalaya",2013,2016,"Teknik Komputer dan Jaringan")
);

$my_skills = array(
	new Skill("Algorithm","Advanced"),
	new Skill("Data Structure","Advanced"),
	new Skill("Database Analyst","Advanced"),
	new Skill("Pascal Lang.","Advanced"),
	new Skill("Java Lang.","Advanced"),
	new Skill("PHP Lang.","Advanced"),
	new Skill("Delpoy App. Android","Beginner")
);

// Objek dari Biodata dengan parameter aktual sbb.
// (Name, Age, Address, Hobbies, is_married, list_school, skills, interest_in_coding)
$my_biodata = new Biodata("Bambang Mohammad Azhari",21,"Kota Tasikmalaya, Kec. Kawalu",$my_hobbies,false,$my_schools,$my_skills,true);
// Memanggil Fungsi yg return datanya berupa Data dengan Format JSON.
$tempDataJson = $my_biodata->getData_JSONFormat();
echo $tempDataJson;

?>