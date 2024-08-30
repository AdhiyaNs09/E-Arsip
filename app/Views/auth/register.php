<?= $this->extend('auth/template/index');  ?>
<?= $this->section('content'); ?>
<div class="container">

  <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

          <div class="d-flex justify-content-center py-4">
            <a href="/register" class="logo d-flex align-items-center w-auto">
              <img src="<?php echo base_url('assets/img/logo-arsip.png'); ?>" alt="">
              <span class="d-none d-lg-block">E-Arsip</span>
            </a>
          </div><!-- End Logo -->

          <div class="card mb-3">

            <div class="card-body">

              <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4"><?= lang('Auth.register') ?></h5>
                <p class="text-center small">Enter your personal details to create account</p>
              </div>
              <?php if (session()->has('message')) : ?>
                <div class="alert alert-success">
                  <?= session('message') ?>
                </div>
              <?php endif ?>

              <form class="row g-3" action="<?= url_to('register') ?>" method="post">
                <?= csrf_field() ?>

                <!-- <div class="col-12">
                  <label for="" class="form-label">Your Name</label>
                  <input type="text" name="name" class="form-control" id="yourName" required>
                  <div class="invalid-feedback">Please, enter your name!</div>
                </div> -->

                <div class="col-12">
                  <label for="email" class="form-label"><?= lang('Auth.email') ?></label>
                  <input type="email" name="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" id="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                  <div class="invalid-feedback">
                    <?= session('errors.email') ?>
                  </div>
                </div>

                <div class="col-12">
                  <label for="username" class="form-label"><?= lang('Auth.username') ?></label>
                  <input type="text" name="username" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" id="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                  <div class="invalid-feedback">
                    <?= session('errors.username') ?>
                  </div>
                </div>

                <div class="col-12">
                  <label for="password" class="form-label"><?= lang('Auth.password') ?></label>
                  <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" id="password" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                  <div class="invalid-feedback">
                    <?= session('errors.password') ?>
                  </div>
                </div>

                <div class="col-12">
                  <label for="pass_confirm" class="form-label"><?= lang('Auth.repeatPassword') ?></label>
                  <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" id="password" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                  <div class="invalid-feedback">
                    <?= session('errors.pass_confirm') ?>
                  </div>
                </div>


                <div class="col-12">
                  <button class="btn btn-primary w-100" type="submit"><?= lang('Auth.register') ?></button>
                </div>
                <div class="col-12">
                  <p class="small mb-0"><?= lang('Auth.alreadyRegistered') ?> <a href="<?= url_to('login') ?>"><?= lang('Auth.signIn') ?></a></p>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

</div>

<?= $this->endSection(); ?>