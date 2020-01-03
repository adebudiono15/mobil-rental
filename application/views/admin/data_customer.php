<div class="container-fluid">

          <div class="alert alert-info text-center" role="alert">
    <strong>DATA CUSTOMER</strong>
      </div>
          <div class="row">         
          <?php foreach ($invoice as $inv) : ?>
          <?php $this->session->flashdata('message'); ?>
  
			<div class="card mr-2 ml-3 mt-2" style="width: 18rem;">
		  <div class="card-body">
		    <h5 class="card-title mb-1 alert alert-info"><?php echo $inv->nama ?></h5>
		    <p class="card-text mb-1">Alamat   : <?php echo $inv->alamat ?></p>
		    <td><?php echo anchor('invoice/hapusDataInvoice/' .$inv->id, '<div class="btn btn-primary btn-danger btn-sm mt-3 float-right">Hapus</div>') ?></td>
		  </div>
		</div>

<?php endforeach; ?>
       			 </div>
     		 </div>
    	   </div>


    