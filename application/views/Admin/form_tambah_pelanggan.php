<h2>Form Pelanggan Baru</h2>
<table>
    <form action="<?php echo base_url('c_admin/tambah_data_pelanggan')?>" method="post">
        <tr>
            <td>Nama Pelanggan</td>
            <td><input type="text" name="namaPelanggan"></td>
        </tr>
        <tr>
            <td>RT</td>
            <td><select name="rt"><?php foreach ($rt as $rt) {?>
                <option value="<?php echo $rt->idRt; ?>"><?php echo $rt->rt; ?></option>
                <?php } ?>
            </select></td>
        </tr>
        <tr>
            <td>RW</td>
            <td><select name="rw"><?php foreach ($rw as $rw) {?>
                <option value="<?php echo $rw->idRw; ?>"><?php echo $rw->rw; ?></option>
            <?php } ?></select></td>
        </tr>
        <tr>
            <td>Dusun</td>
            <td><select name="dusun"><?php foreach ($dusun as $dusun) { ?>
                <option value="<?php echo $dusun->idDusun;?>"><?php echo $dusun->namaDusun; ?></option>
            <?php } ?></select></td>
        </tr>
        <tr>
            <td><button type="submit">Tambah</button></td>
        </tr>
    </form>
</table>