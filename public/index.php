<?php

require_once '../app/init.php';

$app = new App();

/*
! MVC Model


!-> isi dari model berupa
	 -> data
	 -> servis
	 -> logic dan aplikasi yang dibuat
	 
! Tujuan pembelajaran
1. mendapatkan data dari tempat lain yang disebut model tanpa dari url 
2. menampilkan data dari model ke view
3. mengambil data di databases dan menampilkannya di view


todo: Yang akan dilakukan

1. Mendapatkan data di model berupa nama

	-> buat file dengan nama User_model.php di folder /app/models
	-> buat class dengan nama User_model 
	-> buat method baru lagi dengan nama model di class controller.php di bagian-
		 folder /app/core untuk menangani model mvc yang akan diarahkan ke folder-
		 models
	-> buat variabel baru di "Class Home extends Controller" untuk menampung-
		 method model yang berfungsi memanggil "Class User_model" beserta menggu-
		 nakan fungsi methodnya yang akan menjadi sebuah data
		 
		 $data['nama'] = $this->model('User_model')->getUser();
		 
	-> kemudian jadikan variabel tersebut sebagai parameter data yang akan dikirim-
		 kan ke folder /views/home/index
		 
		  $this->view('home/index', $data);
		  
	-> kemudian kita beralih ke bagian view yang akan menampilkan datanya di folder-
		 /views/home/index.php kita tambahkan data yang baru dikirimkan melalui -
		 "Class User_model".
		 
		 <p class="lead">Hallo my name is <?= $data['nama']; ?></p>
		 
		 
2. Mengambil data di databases dan menampilkan di view 

	-> tambahkan navbar baru dengan nama Mahasiswa lagi di folder /views/templates/header.php untuk-
		 menampilkan data mahasiswa 
	-> buat file baru di folder controllers dengan nama file Mahasiswa.php yang isinya
		 berupa "class Mahasiswa sebagai child dari Class Controller dan method yang-
		 akan berfungsi untuk mengarahkan ke view"
	-> buat file baru di folder /views/mahasiswa dengan nama index.php yang nantinya-
		 berfungsi menampilkan data dari databases di web browser
	-> buat file baru di folder /models dengan nama Mahasiswa_model.php yang ber-
		 fungsi sebagai data , penghubung dan mengambil data ke databases phpmyadmin
	-> buat databases di phpmyadmin
		 
	2.1. Yang akan dilakukan di /models/Mahasiswa_model.php adalah
		
		-> buat class dengan nama "Mahasiswa_model" yang akan conect ke databases dan mengambil datanya
		-> buat beberapa variabel untuk mengelola databases dan untuk cara koneksinya ke-
			 databases menggunakan driver PDO dengan tujuan jika kedepannya akan lebih flexi-
			 bel jika mengganti databasesnya
			 
			 -> variabel pertama untuk menampung koneksi PDOnya
			 -> variabek kedua untuk menampung querynya
			 
		-> buat method constructnya untuk melakukan koneksi langsung ke databases,-
			 sehingga ketika class ini dipanggil maka akan langsung terkoneksi ke-
			 databasesnya
		  
		
 */