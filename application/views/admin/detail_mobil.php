<div class="container-fluid">

        <div class="card">
          <h5 class="card-header">DETAIL MOBIL</h5>
          <div class="card-body">

            <?php foreach($mobil as $mb) : ?>
           <div class="row">
           	<div class="col-md-4">
           		<img width="400px" src="<?php echo base_url().'assets/upload/'.$mb->gambar ?>"  >
           	</div>
           	<div class="col-md-8"> 
           		<table class="table">
           			<tr>
           				<td> TYPE MOBIL </td>
           				<td><strong><?php echo $mb->kode_type ?></strong></td>
           			</tr>

           			<tr>
           				<td> MERK</td>
           				<td><strong><?php echo $mb->merk ?></strong></td>
           			</tr>

           			<tr>
           				<td> NO PLAT</td>
           				<td><strong><?php echo $mb->no_plat ?></strong></td>
           			</tr>

           			<tr>
           				<td> TAHUN </td>
           				<td><strong><?php echo $mb->tahun ?></strong></td>
           			</tr>

                <tr>
                  <td> STATUS </td>
                  <td><?php 
          if ($mb->status == "0") {
            echo "<span class='badge badge-danger'> Tidak Tersedia </span>"; 
            }else {
              echo "<span class='badge badge-primary'> Tersedia</span>";
            }
              ?>
                  </td>
                </tr>

           			<tr>
           				<td> WARNA </td>
           				<td>
           				<?php 
					if ($mb->warna == "1") {
						echo "<span class='badge badge-primary'>BIRU MUDA</span>"; 
						}else if($mb->warna == "2") {
						echo "<span class='badge badge-secondary'>SILVER</span>"; 
						}else if($mb->warna == "3") {
						echo "<span class='badge badge-success'>HIJAU</span>"; 
						}else if($mb->warna == "4") {
						echo "<span class='badge badge-danger'>MERAH</span>"; 
						}else if($mb->warna == "5") {
						echo "<span class='badge badge-warning'>KUNING</span>"; 
						}else if($mb->warna == "6") {
						echo "<span class='badge badge-info'>BIRU TUA</span>"; 
						}else if($mb->warna == "7") {
						echo "<span class='badge badge-light'>PUTIH</span>"; 
						}
						else if($mb->warna == "8") {
						echo "<span class='badge badge-dark'>HITAM</span>"; 
						}
						?>
						</td>
           			</tr>

                <tr>
                  <td> HARGA SEWA </td>
                  <td><strong>Rp. <?php echo number_format($mb->harga,0,',','.') ?></strong></td>
                </tr>

           		</table>

           		<?php echo anchor('Data_mobil', '<div class="btn btn-sm btn-danger">Kembali</div>')?>
           	</div>
           </div>
       <?php endforeach; ?>
          </div>
        </div>
          
      
		
		  </div>
			</div>

