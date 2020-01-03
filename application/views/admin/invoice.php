<div class="container-fluid">
	<h4>Invoice Pemesanan Sewa Mobil</h4>
	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>ID INVOICE</th>
			<th>NAMA PEMESAN</th>
			<th>EMAIL</th>
			<th>NO TELPON</th>
			<th>NO KTP</th>
			<th>PHOTO KTP</th>
			<th>ALAMAT PEMESAN</th>
			<th>TANGGAL MEMESAN</th>
			<th>BATAS PEMBAYARAN</th>
			<th>AKSI</th>
		</tr>
		<?php foreach ($invoice as $inv): ?>
			<tr>
				<td><?php echo $inv->id ?></td>
				<td><?php echo $inv->nama ?></td>
				<td><?php echo $inv->email ?></td>
				<td><?php echo $inv->no_telpon ?></td>
				<td><?php echo $inv->no_ktp ?></td>
				<td>
					<img width="60px" src="<?php echo base_url().'assets/upload/ktp/'.$inv->photo_ktp?>">
				</td>
				<td><?php echo $inv->alamat ?></td>
				<td><?php echo $inv->tgl_pesan ?></td>
				<td><?php echo $inv->batas_bayar ?></td>
				<td><?php echo anchor('invoice/detail/'.$inv->id, '<div class="btn btn-sm btn-primary">DETAIL</div>') ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
	
</div>
</div>