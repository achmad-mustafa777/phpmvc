<?php

require_once '../app/init.php';

$app = new App();

/*
! Membuan persiapan membuat aplikasi MVC

1. membuat folder public yang akan menyimpan semua file2 yang bisa diakses oleh user seperti :
	-> index.php
	-> folder js
	-> folder img
	-> folder css
	
2. membuat folder App yang akan menyimpan folder & file2 utama dari aplikasi mvc seperti :
	-> folder core yaitu inti dari mvc ada didalam yang nantinya berfungsi untuk mengelola roting
	-> folder controllers yang mana semua file controllers ada didalam
	-> folder views yang berisi antarmuaka yang disajikan oleh controllers
		-> folder home untuk menyimpan kumpulan views sesuai dengan controller yang memanggilnya nanti
	-> folder models
	
3. memanggil file init.php di index.php yang terdapat di folder app dengan menggunakan teknik bootstrapping -
	 yang akan memanggil semua yang dibutuhkan di folder app
	 
4. memanggil dua kelas utama pembentuk mvcnya class App dan class Controller  di file init.php 

 */