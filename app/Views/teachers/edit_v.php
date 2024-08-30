<?= $this->extend('layouts/master') ?>

<?= $this->section('content') ?>
<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <h5 class="card-title">Edit Data</h5>
          </div>

          <!-- Form Tambah Data Guru -->
          <form action="/teacher/<?= $teachers['guru_id']; ?>" method="post">
            <?= csrf_field() ?>
            <input type="hidden" name="_method" value="PUT">

            <?php $errors = session()->getFlashdata('errors'); ?>

            <div class="mb-3 row">
              <label for="nama_guru" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input class="form-control <?= isset($errors['nama_guru']) ? 'is-invalid' : '' ?>" type="text" id="nama_guru" name="nama_guru" value="<?= (old('nama_guru')) ? old('nama_guru') : $teachers['nama_guru']; ?>" autofocus>
                <div class="invalid-feedback">
                  <?= $errors['nama_guru'] ?? '' ?>
                </div>
              </div>
            </div>

            <div class="mb-3 row">
              <label for="nip" class="col-sm-2 col-form-label">NIP</label>
              <div class="col-sm-10">
                <input type="text" class="form-control <?= isset($errors['nip']) ? 'is-invalid' : '' ?>" id="nip" name="nip" value="<?= (old('nip')) ? old('nip') : $teachers['nip']; ?>">
                <div class="invalid-feedback">
                  <?= $errors['nip'] ?? '' ?>
                </div>
              </div>
            </div>

            <div class="mb-3 row">
              <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-sm-10">
                <input type="text" class="form-control <?= isset($errors['alamat']) ? 'is-invalid' : '' ?>" id="alamat" name="alamat" value="<?= (old('alamat')) ? old('alamat') : $teachers['alamat']; ?>">
                <div class="invalid-feedback">
                  <?= $errors['alamat'] ?? '' ?>
                </div>
              </div>
            </div>

            <div class="mb-3 row">
              <label for="kontak" class="col-sm-2 col-form-label">Kontak</label>
              <div class="col-sm-10">
                <input type="text" class="form-control <?= isset($errors['kontak']) ? 'is-invalid' : '' ?>" id="kontak" name="kontak" value="<?= (old('kontak')) ? old('kontak') : $teachers['kontak']; ?>">
                <div class="invalid-feedback">
                  <?= $errors['kontak'] ?? '' ?>
                </div>
              </div>
            </div>

            <div class="mb-3 row">
              <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">Submit Form</button>
              </div>
            </div>

          </form>

        </div>
      </div>

    </div>
  </div>
</section>
<?= $this->endSection() ?>