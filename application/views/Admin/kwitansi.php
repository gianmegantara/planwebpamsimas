<?php foreach ($tagihan as $tagihan) { ?>
<table width='100%' border='1' cellspacing='0' cellpading='1'>
<tr>
    <td colspan='3' align='center'>Badan Pengelola Sarana Penyediaan Air Minum dan Sanitasi</td>
<tr>
    <td colspan='3' align='center'>"TIRTA GIRI INDAH"</td>
</tr>
<tr>
    <td colspan='3' align='center'>Desa Tundagan KEcamatan Hantara</td>
</tr>
<tr>
    <td colspan='3' align='left'><?php echo $tagihan->bulan+" "+$tagihan->tahun ?></td>
</tr>
<tr>
    <td colspan='3' align='center'>Kwitansi Penerimaan BPS PAMs</td>
</tr>
<tr>
    <td align='left'>Nama</td>
    <td align='left'><?php echo  $tagihan->namaPelanggan ?></td>
</tr>
<tr>
    <td align='left'>Pemakaian</td>
    <td align='left'><?php echo $tagihan->jumlahMeteran+" M^3" ?></td>
</tr>
<tr>
    <td align='left'>Biaya per M^3</td>
    <td align='left'>Rp. 500</td>
</tr>
<tr>
    <td align='left'>Beban</td>
    <td align='left'>Rp. 1000</td>
</tr>
<tr>
    <td align='left'>Jumlah</td>
    <td align='left'><?php echo $tagihan->jumlah ?></td>
</tr>
<tr>
    <td align='left'>RT</td>
    <td align='left'><?php echo  $tagihan->rt ?></td>
</tr>
<tr>
    <td align='left'>RW</td>
    <td align='left'><?php echo  $tagihan->rw ?></td>
</tr>
<tr>
    <td align='left'>Dusun</td>
    <td align='left'><?php echo  $tagihan->namaDusun ?></td>
</tr>
<tr>
    <td align='left'>Pemakaian</td>
    <td align='left'><?php echo  $tagihan->jumlahMeteran ?></td>
</tr>
<tr>
    <td align='left'>Bulan</td>
    <td align='left'><?php echo  $tagihan->bulan ?></td>
</tr>
<tr>
    <td align='left'>Tahun</td>
    <td align='left'><?php echo  $tagihan->tahun ?></td>
</tr>

<?php } ?>
</table>