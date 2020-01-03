<div class="container-fluid">

          <div class="alert alert-info text-center" role="alert">
 		<strong>DATA MOBIL</strong>
			</div>
			<a href="<?php echo base_url('data_mobil/tambah_mobil') ?>" class="btn btn-primary mb-3">TAMBAH DATA</a>
			<?php echo $this ->session->flashdata('pesan') ?>
		<table class="table table-hover table-striped table-bordered ">
			<thead>
				<tr class="col">
				<th>NO</th>
				<th>GAMBAR</th>
				<th>TYPE</th>
				<th>MERK</th>
				<th>NO. PLAT</th>
				<th>STATUS</th>
				<th colspan="3">AKSI</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$no=1;
				foreach($mobil as $mb) : ?>
					<tr>
					<td><?php echo $no++ ?></td>
					<td>
						<img width="60px" src="<?php echo base_url().'assets/upload/'.$mb->gambar ?>">
					</td>
					<td><?php echo $mb->kode_type ?></td>
					<td><?php echo $mb->merk ?></td>
					<td><?php echo $mb->no_plat ?></td>
					<td><?php 
					if ($mb->status == "0") {
						echo "<span class='badge badge-danger'> Tidak Tersedia </span>"; 
						}else {
							echo "<span class='badge badge-primary'> Tersedia</span>";
						}
							?></td>
					<td><?php echo anchor('Data_mobil/edit/' .$mb->id_mobil, '<div class="btn btn-primary btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
					<td><?php echo anchor('Data_mobil/hapus/' .$mb->id_mobil, '<div class="btn btn-primary btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
					<td><?php echo anchor('Data_mobil/detail/' .$mb->id_mobil, '<div class="btn btn-primary btn-success btn-sm"><i class="fa fa-eye"></i></div>') ?></td>

				<?php endforeach; ?>

				</tr>
			</tbody>
		</table>
	</div>
</div>

    