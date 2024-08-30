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


          <form action="/classroom/<?= $classroom['kelas_id']; ?>" method="post">
            <?= csrf_field() ?>
            <input type="hidden" name="_method" value="PUT">
            <?php $errors = session()->getFlashdata('errors'); ?>

            <div class="row mb-3">
              <label for="nama_kelas" class="col-sm-2 col-form-label">Nama Kelas</label>
              <div class="col-sm-10">
                <input class="form-control <?= isset($errors['nama_kelas']) ? 'is-invalid' : ''; ?>" type="text" id="nama_kelas" name="nama_kelas" value="<?= (old('nama_kelas')) ? old('nama_kelas') : $classroom['nama_kelas']; ?>">
                <div class="invalid-feedback">
                  <?= $errors['nama_kelas'] ?? '' ?>
                </div>
              </div>
            </div>

            <div class=" row mb-3">
              <label for="wali_kelas" class="col-sm-2 col-form-label">Wali Kelas</label>
              <div class="col-sm-10">
                <input class="form-control <?= isset($errors['wali_kelas']) ? 'is-invalid' : ''; ?>" type="text" id="wali_kelas" name="wali_kelas" value="<?= (old('wali_kelas')) ? old('wali_kelas') : $classroom['wali_kelas']; ?>">
                <div class="invalid-feedback">
                  <?= $errors['wali_kelas'] ?? '' ?>
                </div>
              </div>
            </div>

            <div class="row mb-3">
              <label for="ruang_kelas" class="col-sm-2 col-form-label">Ruang Kelas</label>
              <div class="col-sm-10">
                <input class="form-control <?= isset($errors['ruang_kelas']) ? 'is-invalid' : '' ?>" type="text" id="ruang_kelas" name="ruang_kelas" value="<?= (old('ruang_kelas')) ? old('ruang_kelas') : $classroom['ruang_kelas']; ?>">
                <div class="invalid-feedback">
                  <?= $errors['ruang_kelas'] ?? '' ?>
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