<?= $this->extend('auth/template/index');  ?>

<?= $this->section('content'); ?>
<div class="container">

  <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

          <div class="d-flex justify-content-center py-4">
            <a href="index.html" class="logo d-flex align-items-center w-auto">
              <img src="<?php echo base_url('assets/img/logo-arsip.png'); ?>" alt="">
              <span class="d-none d-lg-block">E-Arsip</span>
            </a>
          </div><!-- End Logo -->

          <div class="card mb-3">

            <div class="card-body">

              <div class="pt-4 pb-2">
                <h5 class="card-title text-center pb-0 fs-4"><?= lang('Auth.loginTitle') ?></h5>
                <p class="text-center small">Enter your username & password to login</p>
              </div>

              <?php if (session()->has('message')) : ?>
                <div class="alert alert-success">
                  <?= session('message') ?>
                </div>
              <?php endif ?>

              <form class="row g-3" action="<?= url_to('login') ?>" method="post">

                <?php if ($config->validFields === ['email']) : ?>
                  <div class="col-12">
                    <label for="login" class="form-label"><?= lang('Auth.email') ?></label>
                    <div class="input-group">
                      <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                      <input type="text" name="login" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" id="login" name="login" placeholder="<?= lang('Auth.email') ?>">
                      <div class="invalid-feedback">
                        <?= session('errors.login') ?>
                      </div>
                    </div>
                  </div>
                <?php else : ?>
                  <div class="col-12">
                    <label for="login" class="form-label"><?= lang('Auth.emailOrUsername') ?></label>
                    <div class="input-group">
                      <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                      <input type="text" name="login" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" id="login" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                      <div class="invalid-feedback">
                        <?= session('errors.login') ?>
                      </div>
                    </div>
                  </div>
                <?php endif; ?>

                <div class="col-12">
                  <label for="password" class="form-label"><?= lang('Auth.password') ?></label>
                  <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" id="password" placeholder="<?= lang('Auth.password') ?>">
                  <div class="invalid-feedback">
                    <?= session('errors.password') ?>
                  </div>
                </div>

                <?php if ($config->allowRemembering) : ?>
                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="remember" id="rememberMe" <?php if (old('remember')) : ?> checked <?php endif ?>>
                      <label class="form-check-label" for="rememberMe"><?= lang('Auth.rememberMe') ?></label>
                    </div>
                  </div>
                <?php endif; ?>

                <div class="col-12">
                  <button class="btn btn-primary w-100" type="submit"><?= lang('Auth.loginAction') ?></button>
                </div>

                <?php if ($config->allowRegistration) : ?>
                  <div class="col-12">
                    <p class="small mb-0"><?= lang('Auth.needAnAccount') ?> <a href="<?= url_to('register') ?>">Create an account</a></p>
                  </div>
                <?php endif; ?>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

</div>
<?= $this->endSection(); ?>