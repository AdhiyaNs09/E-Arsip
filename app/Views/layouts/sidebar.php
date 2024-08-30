<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar rounded mt-4">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link collapsed " id="dashboard-link" href="/">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-heading">Manajemen Data</li>

    <li class="nav-item">
      <a class="nav-link collapsed" id="teacher-link" href="/teacher">
        <i class="bi bi-person"></i>
        <span>Data Guru</span>
      </a>
    </li><!-- End teachers Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" id="student-link" href="/student">
        <i class="bi bi-person"></i>
        <span>Data Siswa</span>
      </a>
    </li><!-- End students Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" id="classroom-link" href="/classroom">
        <i class="bi bi-person"></i>
        <span>Data Kelas</span>
      </a>
    </li><!-- End classroom Page Nav -->

    <li class="nav-heading">Manajemen Kelas dan Pelajaran</li>

    <li class="nav-item">
      <a class="nav-link collapsed" id="study-link" href="/study">
        <i class="bi bi-person"></i>
        <span>Mata Pelajaran</span>
      </a>
    </li><!-- End studies Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" id="schedule-link" href="/schedule">
        <i class="bi bi-person"></i>
        <span>Jadwal Pelajaran</span>
      </a>
    </li><!-- End schedule Page Nav -->

    <li class="nav-heading">Manajemen Surat</li>

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#arsip-nav" data-bs-toggle="collapse" href="/document">
        <i class="bi bi-journal-text"></i><span>Arsip</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="arsip-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="forms-elements.html">
            <i class="bi bi-circle"></i><span>Dokumen</span>
          </a>
        </li>
        <li>
          <a href="forms-elements.html">
            <i class="bi bi-circle"></i><span>Surat Masuk</span>
          </a>
        </li>
        <li>
          <a href="forms-layouts.html">
            <i class="bi bi-circle"></i><span>Surat Keluar</span>
          </a>
        </li>
        <li>
          <a href="forms-editors.html">
            <i class="bi bi-circle"></i><span>Laporan</span>
          </a>
        </li>
      </ul>
    </li>

    <?php if (in_groups('admin')) : ?>
      <li class="nav-heading">Manajemen Pengguna</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="user">
          <i class="bi bi-person"></i>
          <span>Manajemen Pengguna</span>
        </a>
      </li><!-- End role Page Nav -->
    <?php endif; ?>

  </ul>

</aside><!-- End Sidebar-->