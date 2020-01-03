<div class="container-fluid">
	<h4> Keranjang Sewa </h4>
	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>NO</th>
			<th>MERK MOBIL</th>			
			<th>HARGA SEWA PER-HARI</th>
		</tr>
		<?php
		$no=1;
		foreach ($this->cart->contents() as $items): ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $items['name'] ?></td>
				<td align="left">Rp. <?php echo number_format($items['price'], 0,',','.')  ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
	<div align="right">
		<a href="<?php echo base_url('data_mobil/hapus_sewa') ?>"><div class="btn btn-sm btn-danger">HAPUS SEWA</div></a>
		<a href="<?php echo base_url('user/home') ?>"><div class="btn btn-sm btn-primary">HOME</div></a>
		<a href="<?php echo base_url('data_mobil/pembayaran_sewa') ?>"><div class="btn btn-sm btn-success">BAYAR</div></a>
	</div>
</div>

</div>