<?= $this->extend('layouts/master'); ?>

<?= $this->section('content'); ?>
<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <h5 class="card-title">Jadwal Pelajaran</h5>
            <?php if (in_groups('admin')) : ?>
              <a class="btn" href="/schedule/new" style="background: #f6f9ff; border: none; color: #4154f1;">Tambah Data Jadwal</a>
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
                <th>Mapel</th>
                <th>Nama Guru</th>
                <th>Hari</th>
                <th>Jam Mulai</th>
                <th>Jam Akhir</th>
                <?php if (in_groups('admin')) : ?>
                  <th>Aksi</th>
                <?php endif; ?>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($schedules as $key => $j) : ?>
                <tr>
                  <td><?= $key + 1 ?></td>
                  <td><?= $j['nama_kelas'] ?></td>
                  <td><?= $j['nama_mapel'] ?></td>
                  <td><?= $j['nama_guru'] ?></td>
                  <td><?= $j['hari'] ?></td>
                  <td><?= $j['jam_mulai']->format('H:i') ?></td>
                  <td><?= $j['jam_selesai']->format('H:i') ?></td>
                  <?php if (in_groups('admin')) : ?>
                    <td>
                      <a class="btn btn-primary" href="/schedule/<?= $j['jadwal_id'] ?>/edit">Edit</a>
                      <form action="/schedule/<?= $j['jadwal_id'] ?>" method="post" style="display:inline;">
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger" type="submit">Hapus</button>
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
<?= $this->endSection(); ?>