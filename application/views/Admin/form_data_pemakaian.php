<h2>Form Data pemakaian</h2>
<?php $tanggal = date("Ymd")?>

<table>
	<form action="<?php echo base_url('c_admin/tambah_data_pemakaian');?>" method="post">
		<tr>
			<td>Id Pembayaran</td>
			<td><input type="text" name="noTagihan" value="<?php echo $tanggal; ?>-"></td>
		</tr>
		<tr>
			<td>Nama Pelanggan</td>
			<td><select name="namaPelanggan">
					<option value=""></option>
					<?php 
                foreach ($pelanggan as $pelanggan) {?>
					<option value="<?php echo $pelanggan->idPelanggan; ?>">
						<?php echo $pelanggan->namaPelanggan; ?>
					</option>
					<?php } ?>
				</select></td>
		</tr>
		<tr>
			<td>Bulan</td>
			<td><input type="text" name="bulan" value="<?php 
                    $bulan= date('m');
                        switch($bulan){
                            case '01':
                                echo "Januari"; 
                                break; 
                            case '02' : 
                                echo "Februari"; 
                                break; 
                            case '03' : 
                                echo "Maret"; 
                                break; 
                            case '04' : 
                                echo "April";
                                break; 
                            case '05' :
                                echo "Mei"; 
                                break; 
                            case '06' : 
                                echo "Juni"; 
                                break; 
                            case '07' : 
                                echo "Juli"; 
                                break; 
                            case '08': 
                                echo "Agustus"; 
                                break; 
                            case '09' : 
                                echo "September" ; 
                                break; 
                            case '10' : 
                                echo "Oktober" ; 
                                break; 
                            case '11' :
                                echo "November" ; 
                                break; 
                            case '12' : 
                                echo "Desember" ; 
                                break; 
                            default: echo "tahugejrot"; 
                            } ?>" readonly>
			</td>
		</tr>
		<tr>
			<td>Tahun</td>
			<td><input type="text" name="tahun" value="<?php echo date('Y'); ?>" readonly></td>
		</tr>
		<tr>
			<td>Jumlah Meteran</td>
			<td><input type="text" name="meteran"></td>
		</tr>
		<tr>
			<td><button type="submit">Input</button></td>
		</tr>
	</form>
</table>
<h2>Data Pemakaian</h2>
<table>
	<tr>
		<td>No</td>
		<td>Id Pembayaran</td>
		<td>Nama Pelanggan</td>
		<td>Pemakaian</td>
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
			<?php echo $pemakaian->jumlahMeteran;?>
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
		<?php } ?>
</table>
