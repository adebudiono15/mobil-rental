   
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
     

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="http://localhost/akademik/">
        <div class="sidebar-brand-icon ">
          <i class="fas fa-car"></i>
            </div>
          <div class="sidebar-brand-text mx-3">SISTEM SEWA MOBIL</div>
        </a>
      <!-- Divider -->
   <hr class="sidebar-divider">

          <?php
            $role_id = $this->session->userdata('role_id');
            $queryMenu = " SELECT `user_menu`.`id`,`menu`
                           FROM `user_menu` JOIN `user_access_menu`
                           ON `user_menu`. `id` = `user_access_menu` . `menu_id`
                           WHERE `user_access_menu`.`role_id` = $role_id 
                           ORDER BY `user_access_menu`.`menu_id` ASC ";
                           $menu = $this->db->query($queryMenu)->result_array();
          ?>
<!-- Loop -->
<?php foreach ($menu as $m) : ?>
  <div class="sidebar-heading">
   <?= $m['menu'];?>
  </div>
  <!-- Sub M -->
  <?php
            $menuId = $m['id'];
            $querySubMenu = "SELECT *
                             FROM `user_sub_menu` JOIN `user_menu`
                             ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                             WHERE `user_sub_menu`.`menu_id` = $menuId
                             AND `user_sub_menu`.`is_active` = 1
                              ";

  $subMenu = $this->db->query($querySubMenu)->result_array();
  ?> 
  <?php foreach ($subMenu as $sm) : ?>
    <?php if ($title == $sm['title']) : ?>
      <li class="nav-item active"> 
        <?php else : ?> 
          <li class="nav-item">
          <?php endif; ?>
        <a class="nav-link pb-0" href="<?= base_url($sm['url']); ?>">
          <i class="<?= $sm['icon']; ?>"></i>
          <span><?= $sm['title']; ?></span></a>
      </li>

<?php endforeach; ?>

<hr class="sidebar-divider mt-3">

<?php endforeach; ?>
     

 <li class="nav-item">   
      <a class="nav-link" href="base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  <span> Keluar </span> 
                </a>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      
    </ul>
    <!-- End of Sidebar -->

     <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin keluar?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih "YA" untuk keluar.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">TIDAK</button>
          <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">YA</a>
        </div>
      </div>
    </div>
  </div>