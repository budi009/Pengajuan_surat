<?php

foreach ($wisuda as $wis) {
?><br>
    <table border="1" style="width: 100%;">
        <tr>
            <td>

                <table style="width: 100%;">
                    <tr>
                        <td>
                            <img style="width: 20px; height: 30px; margin-left: 50px;" src="<?= base_url('assets/img/daftar_wisuda/' . $wis->foto); ?>">
                           
                        </td>

                        <td>

                            <a style="line-height: 1;margin-left: 20px; margin-right: 120px;">Nama</a> : <?php echo $wis->nama ?><br>
                            <a style="line-height: 1;margin-left: 20px; margin-right: 127px;">NIM</a> : <?php echo $wis->nim ?><br>
                            <a style="line-height: 1;margin-left: 20px; margin-right: 67px;">Jenis Kelamin</a> : <?php echo $wis->jns_kelamin ?><br>
                            <a style="line-height: 1;margin-left: 20px;">Tempat/Tanggal Lahir</a> : <?php echo $wis->tempat_lahir ?>, <?php echo $wis->tanggal_lahir ?><br>
                            <a style="line-height: 1;margin-left: 20px;">Program Studi</a> : <?php echo $wis->prodi ?><br>
                            <a style="line-height: 1;margin-left: 20px;">Alamat</a> : <?php echo $wis->alamat ?><br>
                            <a style="line-height: 1;margin-left: 20px;">Nomor Telephone/HP</a> : <?php echo $wis->no_hp ?><br>
                            <a style="line-height: 1;margin-left: 20px;">Lama Studi</a> :<br>
                            <a style="line-height: 1;margin-left: 20px;">Judul Laporan</a> :<br>
                            <a style="line-height: 1;margin-left: 20px;">IPK</a> :<br>
                            <a style="line-height: 1;margin-left: 20px;">Alamat Sosmed</a> :<br>


                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
<?php } ?>