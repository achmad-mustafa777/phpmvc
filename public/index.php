<?php

require_once '../app/init.php';

$app = new App();

/*
	!	MVC Database Wrapper (Pembungkus Database)

! Tujuan Pembelajaran

-> perlu sebuah class yang dapat mengelola database khusus data yang ada di folder-
	 model yang artinya dapat mengelola seluruh database
	 
-> membuat folder configurasi khusus mysqlnya

-> menampilkan hanya satu data berupa nama yang jika ingin lebih detail datanya-
	 maka akan diarahkan ke view yang lainnya
	 


	 
todo : Yang akan dilakukan

-> Membuat kelas terpisah khusus untuk koneksi dan mengambil data ke database-
	 sehingga bisa digunakan untuk ke seluruh database dan pengambilan data yang-
	 lainnya
	 
1. buat folder configurasinya khusus mysqlnya yang berisi data-data dari database-
	 buat di folder /app/config/config.php

2. hapus file constanta karena baseurlnya sudah dipindahkan ke file config

3. koneksikan file config di init.php

4. buat konstanta untuk data-data databasenya di file config.php berupa konstanta :
	 
	 -> nama host
	 -> nama user
	 -> password
	 -> nama database
	 -> alamat baseurl
	 
5. buat class Databasenya di folder corenya dengan nama file Database.php yang-
	 isinya berupa :
	 
	 -> variabel yang menampung nilai konstanta di config
	 -> variabel koneksinya
	 -> method construc yang langsung terkoneksi ke database
	 -> method  yang menghubungkan querynya, yang dibuat dalam bentuk generik agar-
	 		dapat digunakan untuk hal lain seperti "insert,delete,update"
	 -> method bind
	 -> method execute
	 -> method resulSet untuk pengambilan data dalam jumlah besar dengan method -
	 		array assosiatif
	 -> method single untuk pengambilan data secara individual dengan menggunakan-
	 		array assosiatif
	 		
6. koneksikan class Databasesnya di init.php sebelum digunakan di file Mahasiswa_model.php

7. jalankan class Databasenya di class Mahasiswa_model di folder model dibagian-
	 method constructnya
	 

	 
-> Menampilkan hanya satu data berupa nama, kemudian jika ingin lebih detail datanya-
	 maka akan diarahkan ke view yang lainnya menggunakan boostrap
	 
1. beralih ke website boostrap ke bagaian component list group untuk manampilkan-
	 data berupa list nama yang jika diklik akan menampilkan data secara detail,-
	 lalu copy htmlnya
	 
2. kita paste ke index.php di folder /views/mahasiswa/index.php

3. buat tombol detailnya disamping tampilan nama agar diarahkan ke halaman info-
	 lebih detail
	 
4. buat method baru dengan nama "detail" di bagian controllernya yaitu di folder-
	 /controllers/Mahasiswa.php yang bertujuan untuk menangani model datanya
	 
5. buat method baru di bagian folder models/Mahasiswa_model.php dengan nama method-
	 "getMahasiswaById()" untuk menangani pengambilan data secara individual mengg-
	 unakan id 
	 
6. buat file baru lagi untuk menampilkan data mahasiswa secara lengkap / detail -
	 menggunakan boostrap tampilan card di folder /views/mahasiswa/detail.php
		
 */