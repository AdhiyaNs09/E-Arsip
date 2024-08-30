<?= $this->extend('layouts/master') ?>

<?= $this->section('content') ?>
<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <h5 class="card-title">Data Kelas</h5>
            <?php if (in_groups('admin')) : ?>
              <a class="btn" href="/classroom/new" style="background: #f6f9ff; border: none; color: #4154f1;">Tambah Data Kelas</a>
            <?php endif; ?>
          </div>

          <?php if (session()->getFlashdata('message')) : ?>
            <div class="alert alert-success" role="alert">
              <?= session()->getFlashdata('message'); ?>
            </div>
            <script>
              setTimeout(function() {
                document.querySelector('.alert').remove();
              }, 2000);
            </script>
          <?php endif; ?>

          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <th>Wali Kelas</th>
                <th>Ruang Kelas</th>
                <?php if (in_groups('admin')) : ?>
                  <th>Aksi</th>
                <?php endif; ?>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($classrooms as $key => $classroom) : ?>
                <tr>
                  <td><?= $key + 1; ?></td>
                  <td><?= $classroom['nama_kelas']; ?></td>
                  <td><?= $classroom['wali_kelas']; ?></td>
                  <td><?= $classroom['ruang_kelas']; ?></td>
                  <?php if (in_groups('admin')) : ?>
                    <td class="d-flex">
                      <a class="btn btn-primary mx-1" href="/classroom/<?= $classroom['kelas_id']; ?>/edit">Edit</a>
                      <form class="mx-1" action="/classroom/<?= $classroom['kelas_id']; ?>" method="post" style="display:inline;">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                      </form>
                    </td>
                  <?php endif; ?>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>
</section>
<?= $this->endSection() ?>