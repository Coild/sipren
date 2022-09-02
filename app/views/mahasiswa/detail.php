<div class="card mt-4" style="width: 18rem;">
  <div class="card-body">
    <img src="<?= BASEURL; ?>/img/<?= $data['mhs']['gambar']; ?>" class="img-thumbnail">
    <h5 class="card-title">Nama : <?= $data['mhs']['nama']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted">Nrp : <?= $data['mhs']['nrp']; ?></h6>
    <p class="card-text">Jurusan : <?= $data['mhs']['jurusan']; ?></p>
    <p class="card-text">Email : <?= $data['mhs']['email']; ?></p>
    <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>
  </div>
</div>