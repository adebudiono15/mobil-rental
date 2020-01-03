<div class="container-fluid">
	<h4>DETAIL PESANAN <div class="btn btn-sm btn-success">NO. INVOICE : <?php echo $invoice->id ?></div> </h4>
		<table class="table table-bordered table-hover table-striped">
			<tr>
				
				<th>ID INVOICE</th>
				<th>MERK</th>
				<th>DURASI SEWA</th>
				<th>HARGA SEWA</th>
				<th>SUB-TOTAL</th>
			</tr>
			<?php 
			$total = 0;
			foreach ($transaksi as $trs) :
				$subtotal = $trs->durasi * $trs->harga;
				$total += $subtotal;
			 ?>
			 <tr>
			 	<td><?php echo $trs->id_invoice ?></td>
		
			 	<td><?php echo $trs->merk ?></td>
			 	<td><?php echo $trs->durasi ?> HARI</td>
			 	<td align="right">Rp. <?php echo number_format($trs->harga,0,',','.')  ?></td>
			 	<td align="right">Rp. <?php echo number_format($subtotal,0,',','.') ?></td>
			 </tr>
			<?php endforeach; ?>
			<tr>
				<td colspan="4" align="right">GRAND TOTAL</td>
				<td align="right">Rp. <?php echo number_format($total,0,',','.') ?></td>
			</tr>

		</table>
		<a href="<?php echo base_url('invoice') ?>"> <div class="btn btn-sm btn-primary">KEMBALI</div></a>
	</div>
</div>