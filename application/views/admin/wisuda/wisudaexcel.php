<table border=1 class="table table-striped table-bordered bulk_action" style="width:100%">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>NIK KTP</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>No Hp</th>
            <th>Judul KP/MKI Indonesia</th>
            <th>Judul KP/MKI Inggris</th>
            <th>Judul PA Indonesia</th>
            <th>Judul PA Inggris</th>
            <th>Alamat</th>
            <th>Foto</th>
        </tr>
    </thead>
    <?php
    $id = 1;
    foreach ($wisuda as $w) {
    ?>
        <tr>
            <td><?php echo $id++ ?></td>
            <td><?php echo $w->nim ?></td>
            <td><?php echo $w->nama ?></td>
            <td><?php echo $w->prodi ?></td>
            <td><?php echo $w->nik_ktp ?></td>
            <td><?php echo $w->jns_kelamin ?></td>
            <td><?php echo $w->tempat_lahir ?></td>
            <td><?php echo $w->tanggal_lahir ?></td>
            <td><?php echo $w->no_hp ?></td>
            <td><?php echo $w->kp_indo ?></td>
            <td><?php echo $w->kp_ing ?></td>
            <td><?php echo $w->pa_indo ?></td>
            <td><?php echo $w->pa_ing ?></td>
            <td><?php echo $w->alamat ?></td>
            <td><?php echo $w->foto ?></td>

        </tr>
    <?php } ?>

</table>