<?= $this->extend('layouts/master') ?>

<?= $this->section('content') ?>
<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <h5 class="card-title">Tambah Data</h5>
          </div>

          <!-- Table with stripped rows -->
          <form action="/schedule" method="post">
            <?= csrf_field() ?>
            <?php $errors = session()->getFlashdata('errors'); ?>

            <div class="row mb-3">
              <label for="kelas_id" class="col-sm-2 col-form-label">Nama Kelas</label>
              <div class="col-sm-10">
                <select class="form-select <?= isset($errors['kelas_id']) ? 'is-invalid' : '' ?>" id="kelas_id" name="kelas_id">
                  <?php foreach ($classrooms as $k) : ?>
                    <option value="<?= $k['kelas_id'] ?>" <?= old('kelas_id') == $k['kelas_id'] ? 'selected' : '' ?>><?= $k['nama_kelas'] ?></option>
                  <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">
                  <?= $errors['kelas_id'] ?? '' ?>
                </div>
              </div>
            </div>

            <div class="row mb-3">
              <label for="mapel_id" class="col-sm-2 col-form-label">Mapel</label>
              <div class="col-sm-10">
                <select class="form-select" id="mapel_id" name="mapel_id">
                  <?php foreach ($studies as $m) : ?>
                    <option value="<?= $m['mapel_id'] ?>" <?= old('mapel_id') == $m['mapel_id'] ? 'selected' : '' ?>><?= $m['nama_mapel'] ?></option>
                  <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">
                  <?= $errors['mapel_id'] ?? '' ?>
                </div>
              </div>
            </div>

            <div class="row mb-3">
              <label for="guru_id" class="col-sm-2 col-form-label">Nama Guru</label>
              <div class="col-sm-10">
                <select class="form-select" id="guru_id" name="guru_id">
                  <?php foreach ($teachers as $g) : ?>
                    <option value="<?= $g['guru_id'] ?>" <?= old('guru_id') == $g['guru_id'] ? 'selected' : '' ?>><?= $g['nama_guru'] ?></option>
                  <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">
                  <?= $errors['guru_id'] ?? '' ?>
                </div>
              </div>
            </div>

            <div class="row mb-3">
              <label for="hari" class="col-sm-2 col-form-label">Hari</label>
              <div class="col-sm-10">
                <select id="hari" class="form-select <?= isset($errors['hari']) ? 'is-invalid' : '' ?>" name="hari">
                  <option value="Senin" <?= old('hari') == 'Senin' ? 'selected' : '' ?>>Senin</option>
                  <option value="Selasa" <?= old('hari') == 'Selasa' ? 'selected' : '' ?>>Selasa</option>
                  <option value="Rabu" <?= old('hari') == 'Rabu' ? 'selected' : '' ?>>Rabu</option>
                  <option value="Kamis" <?= old('hari') == 'Kamis' ? 'selected' : '' ?>>Kamis</option>
                  <option value="Jumat" <?= old('hari') == "Jumat" ? 'selected' : '' ?>>Jumat</option>
                  <option value="Sabtu" <?= old('hari') == 'Sabtu' ? 'selected' : '' ?>>Sabtu</option>
                </select>
                <div class="invalid-feedback">
                  <?= $errors['hari'] ?? '' ?>
                </div>
              </div>
            </div>

            <div class="row mb-3">
              <label for="jam_mulai" class="col-sm-2 col-form-label">Jam Mulai</label>
              <div class="col-sm-10">
                <input class="form-control <?= isset($errors['jam_mulai']) ? 'is-invalid' : '' ?>" type="text" id="jam_mulai" name="jam_mulai" value="<?= old('jam_mulai') ?>">
                <div class="invalid-feedback">
                  <?= $errors['jam_mulai'] ?? '' ?>
                </div>
              </div>
            </div>

            <div class="row mb-3">
              <label for="jam_selesai" class="col-sm-2 col-form-label">Jam Selesai</label>
              <div class="col-sm-10">
                <input class="form-control <?= isset($errors['jam_selesai']) ? 'is-invalid' : '' ?>" type="text" id="jam_selesai" name="jam_selesai" value="<?= old('jam_selesai') ?>">
                <div class="invalid-feedback">
                  <?= $errors['jam_selesai'] ?? '' ?>
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