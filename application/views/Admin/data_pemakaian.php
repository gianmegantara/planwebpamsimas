<h2>Data Pemakaian</h2>
<table>
	<tr>
		<td>No</td>
		<td>No pemakaian</td>
		<td>Nama Pelanggan</td>
		<td>RT</td>
		<td>RW</td>
		<td>Dusun</td>
		<td>Bulan</td>
		<td>Tahun</td>
		<td>Pemakaian</td>
	</tr>
	<?php
    $no = 1;
    foreach ($pemakaian as $pemakaian) {
    ?>
	<tr>
		<td>
			<?php echo $no++;?>
		</td>
		<td>
			<?php echo $pemakaian->noTagihan;?>
		</td>
		<td>
			<?php echo $pemakaian->namaPelanggan;?>
		</td>
		<td>
			<?php echo $pemakaian->rt ?>
		</td>
		<td>
			<?php echo $pemakaian->rw ?>
		</td>
		<td>
			<?php echo $pemakaian->namaDusun ?>
		</td>
		<td>
			<?php echo $pemakaian->bulan;?>
		</td>
		<td>
			<?php echo $pemakaian->tahun;?>
		</td>
		<td>
			<?php echo $pemakaian->jumlahMeteran;?>
		</td>
		<?php } ?>
		<tr>
		<form action="cetak_kwitansi" method="post">
			<td colspan=2>
				<button type="submit">Cetak Kwitansi</button>
			</td>
		</form>
		</tr>
</table>

