<h2>List Data Pelanggan</h2>
<table>
	<tr>
		<td>No</td>
		<td>Nama Pelanggan</td>
		<td>RT</td>
		<td>RW</td>
		<td>Dusun</td>
		<td>Status</td>
		<td>Kelola</td>
	</tr>
	<?php
    $no = 1;
    foreach ($pelanggan as $pelanggan) {
    ?>
	<tr>
		<td>
			<?php echo $no++;?>
		</td>
		<td>
			<?php echo $pelanggan->namaPelanggan;?>
		</td>
		<td>
			<?php echo $pelanggan->rw;?>
		</td>
		<td>
			<?php echo $pelanggan->rt;?>
		</td>
		<td>
			<?php echo $pelanggan->namaDusun;?>
		</td>
		<?php if ($pelanggan->status == 0) { ?>
			<td><?php echo "Aktif" ?></td>
		<?php
		} else { ?>
		<td><?php echo "Tidak Aktif"?></td>
		<?php
		} ?>
		<td><a href="<?php echo base_url('c_admin/form_edit_pelanggan/'.$pelanggan->idPelanggan); ?>">Edit</a></td>
	</tr>
	<?php } ?>
	<tr>
		<td><a href="<?php echo base_url('c_admin/form_pelanggan'); ?>">Tambah Data</a></td>
	</tr>
</table>
