<?php

require_once '../app/init.php';

$app = new App();

/*
! MVC INSERT DATA
													
! Tujuan pembelajaran

-> melakukan insert data menggunakan bantuan modal box milik boostrap

-> membuat tombol tambah data mahasiswa apabila diklik akan masuk ke form-
	 tambah datanya menggunakan boostrap
	 
-> mengelola data yang dikirim dari form tambah data


todo: Yang akan dilakukan 

1. Membuat tombol tambah data dan formnya menggunakan boostrap yang ada di web-
	 https://getbootstrap.com/docs/4.1/components/modal/
	 
	 -> copy code <!-- Button trigger modal --> htmlnya lalu di paste ke folder 
	 		/views/Mahasiswa/index.php

	 -> copy code <!-- Modal --> htmlnya dan letakan di paling bawah code
	 
	 -> ganti id dari modal dengan nama "judulModal"
	 
	 -> isi content dari modal boxnya menggunakan element-element dari boostrapnya-
	 	  di web https://getbootstrap.com/docs/4.1/components/forms/ di bagian-
	 	  form controls berupa :
	 	  
	 	  -> element nama, nrp, email, jurusan
	 	  
	 -> tambahkan tag form untuk mengirim element-element tersebut
	 
	 -> tambahkan combo boxnya di dalam formnya juga untuk pilihan jurusan
	 
	 
2. Mengelola data yang akan dikirim dari form

	-> buat method baru untuk controllernya di file controllers/Mahasiswa.php dengan-
		 nama method "tambah"
		 
	-> buat method baru untuk menangani query insert datanya di bagian model dengan-
		 nama methodnya "tambahDataMahasiswa()" di /models/Mahasiswa_model.php.
		 
	-> buat method baru di file /core/Database.php yang bertujuan untuk menghitung-
		 ada berapa baris data yang baru berubah dalam tabelnya, yang akan mengemba-
		 likan nilai berupa angka.
	 
	 
 */