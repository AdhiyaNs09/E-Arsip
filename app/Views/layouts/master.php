<!DOCTYPE html>
<html lang="en">

<head>
  <?= $this->include('layouts/head'); ?>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="<?php echo base_url('assets/img/logo-arsip.png'); ?>" class="img-fluid" alt="">
        <span class="d-none d-lg-block">E-Arsip</span>
      </a>
      <i class="bi bi-list ms-lg-3 toggle-sidebar-btn"></i>
    </div><!-- End Logo -->


    <!-- search bar -->
    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="/result">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div>
    <!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li>
        <!-- End Search Icon-->

        <!-- profiles -->
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="<?php echo base_url('assets/img/profile-img.jpg'); ?>" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?= user()->fullname; ?></span>
          </a>
          <!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?= user()->username; ?></h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="/profile">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>


            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?= base_url('/logout') ?>">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <?= $this->include("layouts/sidebar") ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1><?= esc($title) ?></h1>
    </div>
    <!-- End Page Title -->

    <!-- Main content -->
    <?= $this->renderSection('content') ?>
    <!-- End Main content -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/vendor/apexcharts/apexcharts.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/chart.js/chart.umd.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/echarts/echarts.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/quill/quill.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/simple-datatables/simple-datatables.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/tinymce/tinymce.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/php-email-form/validate.js'); ?>"></script>

  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

  <script>
    flatpickr('#jam_mulai', {
      time_24hr: true,
      enableTime: true,
      noCalendar: true,
      dateFormat: "H:i",
    });

    flatpickr('#jam_selesai', {
      time_24hr: true,
      enableTime: true,
      noCalendar: true,
      dateFormat: "H:i",
    });
  </script>


  <script>
    document.addEventListener('DOMContentLoaded', (event) => {
      // Get current path
      const path = window.location.pathname;

      // Define your navigation items
      const navItems = [{
          id: 'dashboard-link',
          path: '/dashboard'
        },
        {
          id: 'teacher-link',
          path: '/teacher'
        },
        {
          id: 'student-link',
          path: '/student'
        },
        {
          id: 'classroom-link',
          path: '/classroom'
        },
        {
          id: 'study-link',
          path: '/study'
        },
      ];

      // Loop through navigation items and add 'active' class if path matches
      navItems.forEach(item => {
        const element = document.getElementById(item.id);
        if (element && path === item.path) {
          element.classList.remove('collapsed');
        }
      });
    });
  </script>

</body>

</html>