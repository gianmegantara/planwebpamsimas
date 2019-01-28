<h2>Form Edit Data Pelanggan</h2>
<table>
    <form action="<?php echo base_url('c_admin/edit_data_pelanggan/'.$pelanggan['idPelanggan'])?>" method="post">
        <tr>
            <td>Id Pelanggan</td>
            <td><input type="text" name="idPelanggan" value="<?php echo $pelanggan['idPelanggan']?>" disabled></td>
        </tr>
        <tr>
            <td>Nama Pelanggan</td>
            <td><input type="text" name="namaPelanggan" value="<?php echo $pelanggan['namaPelanggan'] ?>"></td>
        </tr>
        <tr>
            <td>RT</td>
            <td><select name="rt">
                <?php 
                foreach ($rt as $rt) {
                    if ( $rt->idRt == $pelanggan['idRt']) { 
                        ?>
                        <option value="<?php echo $rt->idRt; ?>" selected><?php echo $rt->rt; ?></option>
                        <?php 
                        } else {
                            ?>
                            <option value="<?php echo $rt->idRt; ?>"><?php echo $rt->rt; ?></option>
                        <?php
                        }
                } ?>
            </select></td>
        </tr>
        <tr>
            <td>RW</td>
            <td><select name="rw">
                <?php 
                foreach ($rw as $rw) {
                    if ( $rw->idRw == $pelanggan['idRw']) { 
                        ?>
                        <option value="<?php echo $rw->idRw; ?>" selected><?php echo $rw->rw; ?></option>
                        <?php 
                        } else {
                            ?>
                            <option value="<?php echo $rw->idRw; ?>"><?php echo $rw->rw; ?></option>
                        <?php
                        }
                } ?>
            </select></td>
        </tr>
        <tr>
            <td>Dusun</td>
            <td><select name="dusun">
                <?php 
                foreach ($dusun as $dusun) {
                    if ( $dusun->idDusun == $pelanggan['idDusun']) { 
                        ?>
                        <option value="<?php echo $dusun->idDusun; ?>" selected><?php echo $dusun->namaDusun; ?></option>
                        <?php 
                        } else {
                            ?>
                            <option value="<?php echo $dusun->idDusun; ?>"><?php echo $dusun->namaDusun; ?></option>
                        <?php
                        }
                } ?>
            </select></td>
        </tr>
        <tr>
            <td>Status</td>
            <td><select name="status">
                <option value="0" selected>Aktif</option>
                <option value="1">Tidak Aktif</option>     
            </select></td>
        </tr>
        <tr>
            <td><button type="submit">Edit</button></td>
        </tr>
    </form>
</table>