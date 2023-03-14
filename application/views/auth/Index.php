      <div class="card mt-5" style="width: 25rem; margin: auto">
         <div class="card-body">
        <h1 class="card-header text-center">LOGIN</h1>
        <?php if( $this->session->flashdata('message')) : ?>
                <div class="alert alert-warning alert-dismissible fade show mt-2" role="alert">
                        <strong><?= $this->session->flashdata('message'); ?></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"> </button>
                </div>
                <!-- TOMBOL LOGIN -->
             <?php endif; ?>
             <form method="post" action="<?= base_url('auth/index');?>">
             <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username">
                <?= form_error('username', '<small class="text-danger pl-3">', '</small>');?>
             </div>
             <div class="mb3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
                <?= form_error('password', '<small class="text-danger pl-3">', '</small>');?>
             </div>
             <input type="submit" value="submit" class="btn btn-primary"></input>

           </form>
      </div>
</div>
