<div class="container-fluid">

          <div class="alert alert-info text-center" role="alert">
    <strong>GANTI PASSWORD</strong>
      </div>
           <div class="row">
           		<div class="col-lg-6">
           			<?= $this->session->flashdata('message'); ?>
           			<form action="<?= base_url('user/changepassword'); ?>" method="post">

<div class="form-group">
    <label for="current_password"></label>
    <input type="password" name="current_password" class="form-control" id="current_password" placeholder="Password saat ini">
  </div>
   <?= form_error('current_password','<small class="text-danger pl-3">','</small>'); ?> 

  <div class="form-group">
    <label for="new_password1"></label>
    <input type="password" name="new_password1" class="form-control" id="new_password1" placeholder="Password baru">
  </div>
   <?= form_error('new_password1','<small class="text-danger pl-3">','</small>'); ?> 

  <div class="form-group">
    <label for="new_password2"></label>
    <input type="password" name="new_password2" class="form-control" id="new_password2" placeholder="Ulangi password">
  </div>
   <?= form_error('new_password2','<small class="text-danger pl-3">','</small>'); ?> 

  <div class="form-group">
  	<button type="submit" class="btn btn-primary">GANTI PASSWORD</button>
</div>
      </form>
        </div>
		 </div>
		  </div>
        <!-- /.container-fluid -->
			</div>
      <!-- End of Main Content -->

    