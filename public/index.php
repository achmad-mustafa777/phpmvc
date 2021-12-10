<?php

require_once '../app/init.php';

$app = new App();

/*
! MVC Assets

todo: Tujuan pembelajaran

-> mengelola assets yang dimiliki yang ada di dalam folder Public
-> menerapkan framework boostrep css dan menampilkan gambar

todo: Yang akan dilakukan

-> Download bootsrepnya yang sudah dicompile di websitenya
-> pindahkan filenya ke public
-> menginclude / memanggil file bootsrtap di folder views

	-> menambahkan link yang diarahkan ke boostrap css di folder templates/header.php
	-> menambahkan link js di folder templates/footer.php
		 -> menambahkan link jQuery, poopernya dan link localnya (absolut url)
		 
-> buat file baru di folder core dengan nama file Constants.php yang bertujuan-
	 untuk menyimpan constanta-constanta yang kita butuhkan misalnya url absolut
	 
	 -> buat constantanya dengan nama BASEURL
	 -> lakukan require di file init.php
	 -> ubah link url absolutnya yang ada di file header.php dan footer.php dengan-
	 		constanta yang baru saja kita buat
	 		
-> kita modif tampilan sesuai dengan keinginan kita menggunakan boostrap, misal-
	 nya kita ingin menambahkan navbarnya
	 
	 -> ke situs bootsrap cari bagian navbarnya
	 -> copy code cssnya
	 -> paste codenya di bagaian file header.php
	 -> jalankan linknya di navbar
	 
-> beralih ke folder views/home/index.php untuk menambahkan tampilannya dengan -
	 jumbotrons
	 
	 -> ke situs bootsrap cari bagian jumbotrons
	 -> copy code htmlnya
	 -> paste codenya di file index.php dengan tujuan sebagai mempercantik tampilan-
	 		mengguankan bootsrap framework
		
 */