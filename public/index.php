<?php

require_once '../app/init.php';

$app = new App();

/*
! MVC Controller

todo: Tujuan pembelajaran 
* -> menghubungkan url ke bagian controller dan parameternya ke tiap-tiap halaman
* -> memanggil controller dan method secara default jika tidak menuliskan url

todo: Yang akan dilakukan

!1. Mengubah method constructnya di folder core class App

	? buat properti yang menentukan controller,method, dan parameter defaultnya
	
	? buat file baru di folder controller dengan nama Home.php, berupa class Home yang nantinya akan menjadi extend ke class Controller yang ada di folder core
		 
		 -> didalam class Home akan dibuat method index yang kedepannya akan menjadi -
		 		method defaultnya, ketika url tidak ditulis methodnya, maka method ini -
		 		yang akan muncul secara defaultnya
		 		
	? lakukan perbaikan construcnya di class App dengan menambahkan pengecekan:
		
			1. menggunakan fungsi 'file_exists()' yang berfungsi mengecek apakah ada-
				 sebuah file didalam folder controller yang namanya sesuai dengan nama -
				 url yang diketikan
				 -> jika ada maka value properti controller akan di timpa dengan file -
				 		yang diketikan di dalam url
				 -> lalu gunakan fungsi 'unset()' untuk menghilangkan controllernya dari -
				 		element array, tujuan penggunaannya adalah untuk mengambil parameter-
				 		kedepannya.
				 		
	? gunakan fungsi 'require_once' untuk memanggil folder controller tujuan untuk mengambil controllernya file classnya
		 
	? lakukan instaniasi pemanggilan objek agar bisa dipanggil methodnya.
	
	? sekarang lakukan pengecekan untuk methodnya
	
		-> gunakan fungsi 'isset()' untuk pengecekan jika method telah ditulis di url
		-> gunakan fungsi 'method_exists()'
		-> jika ditemukan maka timpa value dari properti method dengan url yang ditangkap
		-> lalu lakukan unset()
		
	? sekarang kelola properti parameternya yang berupa array
	
		-> lakukan pengecekan apakah ditemukan parameter di url
		-> lalu gunakan fungsi 'array_values()' untuk mengambil datanya
		-> kemudian masukan ke dalam properti parameternya
		
	? terakhir jalankan controller, method dan parameternya jika ada, menggunakan fungsi 'call_user_func_array()'
		 
	!note: setiap pembuatan class di folder controller, jangan lupa untuk membuat method defaultnya.
		 	
		
 */