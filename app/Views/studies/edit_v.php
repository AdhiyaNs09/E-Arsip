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
          <form action="/study/<?= $studies['mapel_id']; ?>" method="post">
            <?= csrf_field() ?>
            <input type="hidden" name="_method" value="PUT">
            <?php $errors = session()->getFlashdata('errors'); ?>

            <div class="row mb-3">
              <label for="nama_mapel" class="col-sm-2 col-form-label">Mata Pelajaran</label>
              <div class="col-sm-10">
                <input class="form-control <?= isset($errors['nama_mapel']) ? 'is-invalid' : '' ?>" type="text" id="nama_mapel" name="nama_mapel" value="<?= (old('nama_mapel')) ? old('nama_mapel') : $studies['nama_mapel'] ?>">
                <div class="invalid-feedback">
                  <?= $errors['nama_mapel'] ?? '' ?>
                </div>
              </div>
            </div>

            <div class="row mb-3">
              <label for="guru_id" class="col-sm-2 col-form-label">Guru Mapel</label>
              <div class="col-sm-10">
                <select id="guru_id" name="guru_id" class="form-select <?= isset($errors['guru_id']) ? 'is-invalid' : '' ?>">
                  <?php foreach ($teachers as $teacher) : ?>
                    <option value="<?= $teacher['guru_id'] ?>" <?= $studies['mapel_id'] == $teacher['guru_id'] ? 'selected' : '' ?>>
                      <?= $teacher['nama_guru'] ?>
                    </option>
                  <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">
                  <?= $errors['guru_id'] ?? '' ?>
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