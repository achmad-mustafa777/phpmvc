<div class="container mt-5 ">
  <div class="row">
    <div class="col-6">
      <h3>Daftar Mahasiswa</h3>

      <div class="list-group">
        <?php foreach ($data['mhs'] as $mhs) : ?>
          <a href="<?= BASEURL; ?>/Mahasiswa/detail/<?= $mhs['id']; ?>" class="list-group-item list-group-item-action list-group-item-primary">
            <?= $mhs['nama']; ?>
          </a>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</div>