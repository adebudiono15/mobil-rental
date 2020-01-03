 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
<div class="alert alert-info" role="alert">
  <h4 class="alert-heading">DASHBOARD</h4>
  <hr>
  <p class=" text-center mb-5" >Anda Login Sebagai <strong><?= $user['name']; ?></strong></p> 
	<button type="button" class="btn btn-sm btn-primary " data-toggle="modal" data-target="#exampleModal">
		<i class="fas fa-cogs"></i>
  Control Panel
</button>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">

       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <p class="modal-title text-center" id="exampleModalLabel"><i class="fas fa-file-alt"></i>
  DATA</p>
       <div class="row">
<div class="col-md-3 text-primary text-center">
	<a href="<?php echo base_url('invoice') ?>"><p class="nav-link small text-primary">DATA INVOICE</p></a>
	<i class="fas fa-3x fa-file-alt"></i>
	</div>


<div class="col-md-3 text-primary text-center">
	<a href="<?php echo base_url('Data_mobil') ?>"><p class="nav-link small text-primary">DATA MOBIL</p></a>
	<i class="fas fa-3x fa-car"></i>
	</div>
	     
 <div class="col-md-3 text-primary text-center">
	<a href="<?php echo base_url('invoice/Customer') ?>"><p class="nav-link small text-primary">DATA CUSTOMERS</p></a>
	<i class="fas fa-3x fa-users"></i>
	</div>
       </div> <hr>

       		<p class="modal-title text-center" id="exampleModalLabel"><i class="fas fa-users-cog"></i>
  USER CONFIG</p>
              <div class="row">
       <div class="col-md-3 text-primary text-center">
       	<a href="<?php echo base_url('user/changepassword
') ?>"><p class="nav-link small text-primary">GANTI PASSWORD</p></a>
       	<i class="fas fa-3x fa-key"></i>
       	</div>

       <div class="col-md-3 text-primary text-center">
       		<a href="<?php echo base_url('user') ?>"><p class="nav-link small text-primary">PROFILE SAYA</p></a>
       		<i class="fas fa-3x fa-user"></i>
       		</div>

       <div class="col-md-3 text-primary text-center">
       	<a href="<?php echo base_url('user/edit') ?>"><p class="nav-link small text-primary">EDIT PROFILE</p></a>
       	<i class="fas fa-3x fa-user-edit"></i>
       	</div>
       	     
        <div class="col-md-3 text-primary text-center">
       	<a href="<?php echo base_url('admin/role') ?>"><p class="nav-link small text-primary">ROLE ADMIN/USER</p></a>
       	<i class="fas fa-3x fa-user-friends"></i>
       	</div>
              </div><hr>


  <p class="modal-title text-center" id="exampleModalLabel" ><i class="fas fa-align-left"></i>
  MENU MANAGEMENT</p>
              <div class="row">
       <div class="col-md-3 text-primary text-center">
        <a href="<?php echo base_url('menu') ?>"><p class="nav-link small text-primary">MENU MANAGEMENT</p></a>
        <i class="fas fa-3x fa-tasks"></i>
        </div>

       <div class="col-md-3 text-primary text-center">
          <a href="<?php echo base_url('menu/submenu') ?>"><p class="nav-link small text-primary">SUB-MENU</p></a>
          <i class="fas fa-3x fa-align-left"></i>
          </div>
              </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">KELUAR</button>
      </div>
    </div>
  </div>
</div>


        </div>
      </div>