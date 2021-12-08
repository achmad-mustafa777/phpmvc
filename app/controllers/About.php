<?php

class About
{
  public function index($nama = 'topa', $profesi = 'programmer')
  {
    echo "Hallo nama saya {$nama}, pekerjaan saya sebagai {$profesi}";
  }

  public function page()
  {
    echo 'ini halaman About boy dari method page';
  }
}
