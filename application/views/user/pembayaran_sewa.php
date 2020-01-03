<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div  class="col-md-8">
			<div class="btn btn-sm btn-success">
			<?php 
			$grand_total = 0;
			if ($keranjang = $this->cart->contents())
			{
				foreach ($keranjang as $item)
				{
					$grand_total = $grand_total + $item['subtotal'];
				}
				echo "HARGA SEWA: Rp. ".number_format($grand_total, 0,',','.'). ' / HARI';
			
			?>
			</div><br><br>
			<h4 align="center">INPUT ALAMAT SEWA DAN PEMBAYARAN</h4>
			<form method="post" action="<?php echo base_url('data_mobil/proses_sewa_mobil') ?>" enctype="multipart/form-data">
				<div class="form-group">
					<label> Nama Lengkap </label>
					<input type="text" name="nama" placeholder="Nama Lengkap" class="form-control" value="<?= $user['name']; ?>" readonly>
				</div>

				<div class="form-group">
					<label> Alamat Lengkap </label>
					<input type="text" name="alamat" placeholder="Alamat Lengkap" class="form-control">
				</div>

				<div class="form-group">
					<label> Email </label>
					<input type="text" name="email" placeholder="Alamat Lengkap" class="form-control">
				</div>

				<div class="form-group">
					<label> Nomor Telpon </label>
					<input type="text" name="no_telpon" placeholder="Nomor Telepon" class="form-control">
				</div>


				<div class="form-group">
					<label> Nomor KTP </label>
					<input type="text" name="no_ktp" placeholder="Nomor KTP" class="form-control">
				</div>

				<div class="form-group">
					<label>Photo KTP</label>
					<input type="file" name="photo_ktp" class="form-control">
				</div>

				<div class="form-group">
					<label> Tanggal Pinjam </label>
					<input type="date" name="tanggal_pinjam" placeholder="Tanggal Pinjam" class="form-control">
				</div>

				<div class="form-group">
					<label>Durasi Sewa</label>
					<select class="form-control" name="durasi">
						<option value="1">1 HARI</option>
						<option value="2">2 HARI</option>
						<option value="3">3 HARI</option>
						<option value="4">4 HARI</option>
						<option value="5">5 HARI</option>
						<option value="6">6 HARI</option>
						<option value="7">7 HARI</option>
					</select>
				</div>

				<div class="form-group">
					<label>Pilih BANK</label>
					<select class="form-control" name="bank">
						<option value="BCA">BCA</option>
						<option value="BRI">BRI</option>
						<option value="BNI">BNI</option>
						<option value="MANDIRI">MANDIRI</option>
					</select>
				</div>
				<button type="submit" class="btn btn-sm btn-primary">LANJUTKAN</button>

			</form>
			<?php
		}else
		{
			echo "DAFTAR SEWA ANDA MASIH KOSONG!";
		}
			?>
		</div>
		</div>
		<div class="col-md-2"></div>
</div>
</div>



