<?php

require_once '../app/init.php';

$app = new App();

/*
! MVC Views

todo: Tujuan pembelajaran

-> mengganti isi dari tiap-tiap controller dengan memanggil view / interface yang-
	 terdapat didalam folder views
	 
todo: Yang akan dilakukan

-> Memanggil method view di folder controller class Home dan About, dimana method view ter-
	 dapat di folder core di class Controller
	 
	 -> isi methodnya berupa alamat/link yang menghubungkan ke folder views yang-
	 		akan kita coba akses
	 -> buat dulu file di folder views/home dengan nama file index.php yang isinya-
	 		berupa html yang nantinya akan menjadi viewnya yang akan di access lewat-
	 		controller
	 		
-> Buat method yang akan mengarahkan ke folder views di folder core di dalam-
	 class Controller dengna 2 parameter. Paremeter pertama adalah link ke views,
	 parameter kedua adalah berupa data yang akan dikirimkan ke view berupa array.
	 Sementara dibuat data defaultnya berupa array kosong.
	 
	 -> isi methodnya berupa memanggil viewnya dengan menggunakan fungsi 'require_once'
	 -> jadikan class Home yang ada di folder controller sebagai child class dari-
	 		class Controller dengan menambahkan 'extends' 
	 		
-> Beralih ke controller About yang memiliki 2 method, yang nantinya akan mem-
	 buat 2 buah view, yaitu method index dan method page
	 
	 -> method pertama akan memanggil method view yang akan diarahkan ke folder-
	 		about/index
	 -> method kedua akan memanggil method view yang diarahkan ke folder about/pages
	 -> buat folder about di folder views dan file index dan page
	 -> jadikan class About yang di folder controller menjadi class child dari-
	 		class Controller
	 -> Sekarang mengirimkan data dari class About ke folder views menggunakan method-
	 		view
	 -> buat variabel array di method index yang isinya adalah parameter dari method-
	 		index itu sendiri yang akan menjadi parameter ke dua dari method view
	 		
-> Buat template html dengan tujuan tidak melakukan pekerjaan yang berulang-ulang-
	 / menerapkan DRY agar lebih efidien dan code menjadi lebih elegant
	 
	 -> buat folder dengan nama templates di dalam folder views
	 -> buat 2 file di dalam folder template yaitu file header.php & file footer.php-
	 		yang isinya adalah header html untuk file header.php & footer html untuk-
	 		file footer.php
	 -> lalu kita rangkai link menuju templates di folder controller , dan terapkan-
	 		ke seluruh class di dalam folder controller 
	 
	 
		 	
		
 */