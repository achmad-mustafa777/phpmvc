<?php

class Mahasiswa_model
{
  private $dbh;
  private $stmt;

  public function __construct()
  {
    //* data source name
    $dsn = 'mysql:host=localhost;dbname=phpmvc';

    //todo: lakukan pengecekan koneksi ke databases
    try {
      $this->dbh = new PDO($dsn, 'root', '123');
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }

  public function getAllMahasiswa()
  {
    //!lakukan query
    $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');

    //! lakukan eksekusi
    $this->stmt->execute();

    //!kita ambil datanya dalam bentuk array assosiatif
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
