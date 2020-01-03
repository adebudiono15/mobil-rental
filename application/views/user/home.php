<div class="container-fluid">

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo base_url('assets/slider/slide1.jpg') ?>" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('assets/slider/slide2.jpg') ?>" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('assets/slider/slide3.jpg') ?>" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

          <div class="row text-center mt-4">

<?php foreach($mobil as $mb) : ?>

<div class="card mr-1 ml-3 mb-3" style="width: 18rem;">
  <img src="<?php echo base_url().'assets/upload/'.$mb->gambar ?>" class="card-img-top" alt="...">
  <div class="card-body ">
    <h5 class="card-title mb-1"><?php echo $mb->merk ?></h5>
    <p class="card-text mb-1"><?php echo $mb->no_plat ?></p>

    <p class="card-text"><?php 
          if ($mb->status == "0") {
            echo "<span class='badge badge-danger'> Tidak Tersedia </span>"; 
            }else {
              echo "<span class='badge badge-primary'> Tersedia</span>";
            }
              ?> <span class='badge badge-primary'>Rp. <?php echo number_format( $mb->harga, 0,',','.') ?></span></p>
    <td><?php echo anchor('Data_mobil/sewa_mobil/' .$mb->id_mobil, '<div class="btn btn-primary btn-primary btn-sm">Sewa Mobil Ini</div>') ?></td>

   <td><?php echo anchor('Data_mobil/detail_mobil_user/' .$mb->id_mobil, '<div class="btn btn-primary btn-success btn-sm"><i class="fa fa-eye"></i></div>') ?></td>

  </div>
</div>
<?php endforeach; ?>
</div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    