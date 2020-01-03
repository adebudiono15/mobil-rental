<div class="main-content">
	<section class="section">
			     <div class="alert alert-info text-center" role="alert">
			 	<strong>FORM TAMBAH DATA MOBIL</strong>
				</div>
	<div class="card">
		<div class="card-body">
				<form method="post" action="<?php echo base_url('data_mobil/tambah_mobil_aksi') ?>" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-6">
								<div class="form-group">
								<label>Type Mobil</label>
								<select name="kode_type" class="form-control">
									<option value="">--Pilih Type Mobil--</option>
									<?php foreach($type as $tp) : ?>
										<option value="<?php echo $tp->kode_type ?>"><?php echo $tp->nama_type ?></option>
									<?php endforeach;?>
								</select>
								<?php echo form_error('kode_type', '<div class="text-small text-danger">','</div>') ?>
							</div>

							<div class="form-group">
								<label>Merk</label>
								<input type="text" name="merk" class="form-control">
								<?php echo form_error('merk', '<div class="text-small text-danger">','</div>') ?>
							</div>

							<div class="form-group">
								<label>No Plat</label>
								<input type="text" name="no_plat" class="form-control">
								<?php echo form_error('no_plat', '<div class="text-small text-danger">','</div>') ?>
							</div>

							<div class="form-group">
								<label>Warna</label>
								<select name="warna" class="form-control">
									<option value="">--Pilih Warna--</option>
									<option value="1">Biru Muda</option>
									<option value="2">Silver</option>
									<option value="3">Hijau</option>
									<option value="4">Merah</option>
									<option value="5">Kuning</option>
									<option value="6">Biru Tua</option>
									<option value="7">Putih</option>
									<option value="8">Hitam</option>
								</select>
								<?php echo form_error('warna', '<div class="text-small text-danger">','</div>') ?>
							</div>
							</div>
							
							<div class="col-md-6">
							<div class="form-group">
								<label>Tahun</label>
								<input type="number" name="tahun" class="form-control">
								<?php echo form_error('tahun', '<div class="text-small text-danger">','</div>') ?>
							</div>

							<div class="form-group">
								<label>Status</label>
								<select name="status" class="form-control">
									<option value="">--Pilih Status--</option>
									<option value="1">Tersedia</option>
									<option value="0">Tidak Tersedia</option>
								</select>
								<?php echo form_error('status', '<div class="text-small text-danger">','</div>') ?>
							</div>

							<div class="form-group">
								<label>Gambar</label>
								<input type="file" name="gambar" class="form-control">
							</div>
							<div class="form-group">
								<label>Harga Sewa</label>
								<input type="number" name="harga" class="form-control">
								<?php echo form_error('merk', '<div class="text-small text-danger">','</div>') ?>
							</div>
						<button type="submit" class="btn btn-primary mt-2 mr-2">Simpan</button>
						<button type="reset" class="btn btn-danger mt-2">Reset</button>
					</div>
					</div>
			   </form>
			</div>
		</div>
	</section>
  </div>
      </div>
