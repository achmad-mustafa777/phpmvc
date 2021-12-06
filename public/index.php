<?php

require_once '../app/init.php';

$app = new App();

/*
! Routing

todo: Tujuan pembelajaran 
-> Mengelola Url yang dikirimkan akan menjadi rapi (prety url) dengan harapan nanti 
ketika tidak menuliskan apapun di url akan beralih ke default kontroler

todo: Tahapan yang dilakukan

1.Buat method di class App yang berfungsi sebagai mengambil url dan memecahnya -
	(parsing url)
	
2.Melakukan Rewrite / menulis ulang yang bertujuan agar rapi urlnya dengan method -
	/ tehnik melakukan konfigurasi pada direktori kita menggunakan file .htaccess.
	
	-> file .htaccess adalah file yang bisa digunakan untuk memodifikasi konfigurasi -
		 dari server apache kita dan itu bisa dilakukan per folder dengan tujuan user -
		 lain tidak bisa mengaksess sembarangan.
		 
3. Membuat file .htaccess di folder app biar tidak bisa diakses oleh user lainnya
	
	-> buat file .htaccess di folder app
	-> tuliskan keyword "Options -Indexes" di file .htaccess yang artinya "selama -
		 didalam folder app tidak ditemukan file index.php, maka jangan tampilkan isi -
		 foldernya / blok aksessnya".
		 
4. Buat lagi file .htaccess nya di folder public

	-> buat file .htaccess di folder public
	-> isi / tuliskan keyword di file .htaccess
	
		~ 'Options -Multiviews' yang bertujuan untuk menghindari kesalahan / ambigu -
			 ketika memanggil folder / file public ini
			 
		~  melakukan tulis ulang url / rewrite yang ada di browser kita dengan key-
			 word 'RewriteEngine On'
			 
		~  tulis beberapa konfigurasi lagi dengan menulis keyword
			 1. RewriteCond %{REQUEST_FILENAME} !-d
			 2. RewriteCond %{REQUEST_FILENAME} !-f
			 yang artinya "jika url yang ditulis merupakan folder (d) / file (f) maka-
			 abaikan saja" bertujuan untuk menghindari jika ada nama folder/file yang-
			 sama dengan controller dan method kita nantinya
			 
		~  terakhir tulis ulang / rewrite aturan url
			 RewriteRule ^(.*)$ index.php?url=$1 [L] artinya " tulis ulang url dengan -
			 mengambil string diawal secara satu-persatu sampai akhir, lalu arahkan ke-
			 index.php kemudain ambil hasil dari tulis ulang url sebagai value dari url -
			 jika semua sudah terpenuhi maka jangan jalankan rule lainnya"
			 
			 ^ -> diambil string dari awal
			 (.) -> ambil apapun
			 * -> satu persatu
			 $ -> sampai akhir
			 $1 -> placeholder
			 [L] -> jika semua rule/aturan sudah dipenuhi jangan jalankan aturan lainnya.
			 
5. Kemudian kita pecah string yang diambil dari url menjadi array yaitu dengan cara:

	1. lakukan perbaikan di file App.php / class App di bagian method parseURL() -
		 untuk menghilangkan tanda '/' diakhir url dengan menambahkan keyword 'rtrim()'
		 
	2. bersihkan url dari karakter2 hack yang akan merusak web kita (security) dengan
		 fungsi 'filter_var();'
		 
	3. terakhi kita pecah urlnya dengan fungsi 'explode()'
		 
		 	
		
 */