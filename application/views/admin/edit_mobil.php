<div class="container-fluid">

 <div class="alert alert-info text-center" role="alert">
 		<i class="fas fa-edit"></i><strong>EDIT DATA MOBIL</strong>
			</div>
			<?php 
				foreach($mobil as $mb) : ?>
				<form method="post" action="<?php echo base_url(). 'Data_mobil/update'?>"> 



					<div class="for-group"> 
						<label>KODE TYPE</label>
						<input type="text" name="kode_type" class="form-control"
						value="<?php echo $mb->kode_type ?>">
					</div>

					<div class="for-group mt-3"> 
						<label>MERK</label>
						<input type="hidden" name="id_mobil" class="form-control"
						value="<?php echo $mb->id_mobil ?>">
						<input type="text" name="merk" class="form-control"
						value="<?php echo $mb->merk ?>">
					</div>

					<div class="for-group mt-3"> 
						<label>NO PLAT</label>
						<input type="text" name="no_plat" class="form-control"
						value="<?php echo $mb->no_plat ?>">
					</div>


					<div class="for-group mt-3"> 
						<label>TAHUN</label>
						<input type="number" name="tahun" class="form-control"
						value="<?php echo $mb->tahun ?>">
					</div>

					<div class="form-group mt-3">
						<label>Warna</label>
						<select name="warna" class="form-control">
							<option value="">---Pilih Warna--</option>

							<option value="1">Biru Muda</option>
							<option value="2">Silver</option>
							<option value="3">Hijau</option>
							<option value="4">Merah</option>
							<option value="5">Kuning</option>
							<option value="6">Biru Tua</option>
							<option value="7">Putih</option>
							<option value="8">Hitam</option>
						</select>
						
					</div>

					<div class="for-group mt-3"> 
						<label>STATUS</label>
						<select name="status" class="form-control">
									<option value="">--Pilih Status--</option>
									<option value="1">Tersedia</option>
									<option value="0">Tidak Tersedia</option>
								</select>
					</div>

					<button type="submit" class="btn btn-primary btn-sm mt-3">SIMPAN</button>

				</form>








				<?php endforeach; ?>
	</div>
</div>