<div class="container mt-5 ">

  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Nama : <?= $data['mhs']['nama']; ?></h5>
      <h6 class="card-subtitle mb-2 text-muted">Nrp : <?= $data['mhs']['nrp']; ?></h6>
      <p class="card-text">Email : <?= $data['mhs']['email']; ?></p>
      <p class="card-text">Jurusan : <?= $data['mhs']['jurusan']; ?></p>

      <a href="<?= BASEURL; ?>/Mahasiswa" class="card-link">kembali</a>
    </div>
  </div>

</div>