<div class="container-fluid">

          <div class="alert alert-info text-center" role="alert">
    <strong>MENU MANAGEMENT</strong>
      </div>
<div class="row">
	<div class="col">
   <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
   
   <?= $this->session->flashdata('message'); ?>
		<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#NewModal">TAMBAH MENU </a>
      		<table class="table table-hover">
        <thead>
              <tr>
                <th scope="col">NO</th>
                <th scope="col">MENU</th>
                <th scope="col">AKSI</th>
              </tr>
        </thead>
                <tbody>
                	<?php $i = 1; ?>
                	<?php foreach ($menu as $m) : ?>
                  <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $m['menu']; ?></td>
                    <td>
                      <a href="<?= base_url('Menu/hapus/') .$m['id']; ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  <?php $i++; ?>
              <?php endforeach; ?>
                </tbody>
      </table>
          </div>       
            </div>
             </div>
              </div>
                <!-- End of Main Content -->


<!-- Modal -->
        <div class="modal fade" id="NewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="NewModal">Tambah Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="<?= base_url('menu'); ?>" method="post">
              <div class="modal-body">
                <div class="form-group">
            <input type="text" class="form-control" id="formGroupExampleInput" id="menu" name="menu" placeholder="Nama Menu">
          </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
              </div>
          </form>
            </div>
          </div>
        </div>

    