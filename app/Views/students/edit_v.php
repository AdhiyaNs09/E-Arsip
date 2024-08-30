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
          <!-- Table with stripped rows -->
          <form action="/student/<?= $students['siswa_id']; ?>" method="post">
            <?= csrf_field() ?>
            <input type="hidden" name="_method" value="PUT">
            <?php $errors = session()->getFlashdata('errors'); ?>

            <div class="row mb-3">
              <label for="nama_siswa" class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input class="form-control <?= isset($errors['nama_siswa']) ? 'is-invalid' : '' ?>" type="text" id="nama_siswa" name="nama_siswa" value="<?= (old('nama_siswa')) ? old('nama_siswa') : $students['nama_siswa']; ?>" autofocus>
                <div class="invalid-feedback">
                  <?= $errors['nama_siswa'] ?? '' ?>
                </div>
              </div>
            </div>

            <div class="row mb-3">
              <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
              <div class="col-sm-10">
                <input type="text" class="form-control <?= isset($errors['nisn']) ? 'is-invalid' : '' ?>" id="nisn" name="nisn" value="<?= (old('nisn')) ? old('nisn') : $students['nisn']; ?>">
                <div class="invalid-feedback">
                  <?= $errors['nisn'] ?? '' ?>
                </div>
              </div>
            </div>

            <div class="row mb-3">
              <label for="kelas_id" class="col-sm-2 col-form-label">Kelas</label>
              <div class="col-sm-10">
                <select id="kelas_id" name="kelas_id" class="form-select <?= isset($errors['kelas_id']) ? 'is-invalid' : '' ?>">
                  <?php foreach ($classrooms as $k) : ?>
                    <option value="<?= $k['kelas_id'] ?>" <?= $students['kelas_id'] == $k['kelas_id'] ? 'selected' : '' ?>>
                      <?= $k['nama_kelas'] ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>

            <div class="row mb-3">
              <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
              <div class="col-sm-10">
                <input type="text" class="form-control <?= isset($errors['alamat']) ? 'is-invalid' : '' ?>" id="alamat" name="alamat" value="<?= (old('alamat')) ? old('alamat') : $students['alamat']; ?>">
                <div class="invalid-feedback">
                  <?= $errors['alamat'] ?? '' ?>
                </div>
              </div>
            </div>

            <div class="row mb-3">
              <label for="kontak" class="col-sm-2 col-form-label">Kontak</label>
              <div class="col-sm-10">
                <input type="text" class="form-control <?= isset($errors['kontak']) ? 'is-invalid' : '' ?>" id="kontak" name="kontak" value="<?= (old('kontak')) ? old('kontak') : $students['kontak']; ?>">
                <div class="invalid-feedback">
                  <?= $errors['kontak'] ?? '' ?>
                </div>
              </div>
            </div>


            <div class="row mb-3">
              <!-- <label class="col-sm-2 col-form-label">Submit Button</label> -->
              <div class="col-sm-10">
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