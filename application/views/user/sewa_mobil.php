
<div class="container-fluid">

        <div class="card">
          <h5 class="card-header">DETAIL MOBIL</h5>
          <div class="card-body">
          

            <?php foreach($mobil as $mb) : ?>
           <div class="row">
           	<div class="col-md-4">
           		<img class="card-img-top" src="<?php echo base_url().'assets/upload/'.$mb->gambar ?>"  >
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

           		</table>
           		<?php endforeach; ?>
</div>
</div>
</div>
</div>
	
	<form method="post" action="<?php echo base_url('data_mobil/tambah_sewa_aksi') ?>" enctype="multipart/form-data">
		<div class="row">
	<div class="col-md-6">	
       <div class="form-group ">
       	<label>Pembayaran</label>
       	<select name="pembayaran" class="form-control">
       		<option value="">--Pilih Rek Pembayaran--</option>
       		<option value="1">BRI</option>
       		<option value="2">BNI</option>
       		<option value="3">BCA</option>
       		<option value="4">MANDIRI</option>
       	</select>
       </div>

       <div class="form-group">
       	<label>No Hp</label>
       	<input type="number" name="no_hp" class="form-control">
       </div>

   
       	<div class="form-group">
       		<label>Tanggal Pinjam</label>
       		<input type="date" name="tanggal_pinjam" class="form-control">
       	</div>

       	<div class="form-group">
       		<label>Durasi Pinjam</label>
       		<select name="durasi_pinjam" class="form-control">
       		<option value="">--Pilih Durasi Pinjam--</option>
       		<option value="1">1 Hari</option>
       		<option value="2">2 Hari</option>
       		<option value="3">3 Hari</option>
       		<option value="4">4 Hari</option>
       	</select>
       	</div>

       	<div class="form-group">
       		<label>Total Biaya</label>
       		<input type="number" name="total_biaya" class="form-control" value="333" readonly>

       	</div>

       </div>
       	<div class="col-md-6">	
       		<div class="form-group">
       			<label>Nama</label>
       			<input type="text" name="nama" class="form-control">
       		</div>

       		

       			<div class="form-group ">
       			<label>Jenis Kelamin</label>
       			<select name="jenis_kelamin" class="form-control">
       				<option value="">--Pilih Jenis Kelamin--</option>
       				<option value="1">LAKI-LAKI</option>
       				<option value="2">PEREMPUAN</option>
       			</select>
       		</div>

       		<div class="form-group">
       			<label>Alamat</label>
       			<input type="text" name="alamat" class="form-control">
       		</div>

       			<div class="form-group">
       				<label>No KTP</label>
       				<input type="number" name="no_ktp" class="form-control">
       			</div>

       		<div class="form-group">
       			<label>Photo Selfi Dengan KTP</label>
       			<input type="file" name="photo_ktp" class="form-control">
       		</div>
       		<button type="submit" class="btn btn-primary mt-2 mr-2">Simpan</button>
       		<button type="reset" class="btn btn-danger mt-2">Reset</button>

           	</div>
           </div>
       </form>
   </div>