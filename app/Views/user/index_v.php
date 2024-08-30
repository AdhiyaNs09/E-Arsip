<?= $this->extend('layouts/master'); ?>

<?= $this->section('content'); ?>

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Daftar User</h5>

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

        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Username</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($users as $key => $user) : ?>
                <tr>
                  <td><?= $key + 1 ?></td>
                  <td><?= $user->username ?></td>
                  <td><?= $user->name ?></td>
                  <?php if (in_groups('admin')) : ?>
                    <td>
                      <!-- Button trigger modal -->
                      <?php if ($user->userid !== user()->id) : ?>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $user->userid ?>">
                          Edit
                        </button>
                      <?php else : ?>
                        <span>-</span>
                      <?php endif; ?>


                      <!-- Modal -->
                      <div class="modal fade" id="modalEdit<?= $user->userid ?>" tabindex="-1" aria-labelledby="modalLabel<?= $user->userid ?>" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="modalLabel<?= $user->userid ?>">Edit User: <?= $user->username ?></h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <!-- Form untuk edit user -->
                              <form action="/user/<?= $user->userid ?>" method="post">
                                <?= csrf_field() ?>
                                <input type="hidden" name="_method" value="PUT">

                                <div class="mb-3">
                                  <label for="username" class="form-label">Username</label>
                                  <input type="text" class="form-control" id="username" name="username" value="<?= $user->username ?>">
                                </div>
                                <div class="mb-3">
                                  <label for="email" class="form-label">Email</label>
                                  <input type="email" class="form-control" id="email" name="email" value="<?= $user->email ?>">
                                </div>
                                <div class="mb-3">
                                  <label for="name" class="form-label">Role</label>
                                  <select name="name" id="name" class="form-select">
                                    <?php foreach ($roles as $role) : ?>
                                      <option value="<?= $role->id ?>" <?= $role->id == $user->group_id ? 'selected' : '' ?>><?= $role->name ?></option>
                                    <?php endforeach; ?>
                                  </select>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- <a href="/user/delete/<?= $user->userid ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?')">Delete</a> -->
                    </td>
                  <?php endif; ?>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>