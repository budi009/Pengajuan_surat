<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiva="X-UA-Compatible" content="IE=edge">

    <title>Cetak Surat</title>

    <link rel="stylesheet" href="">

    <style>
        .line-title {
            border: 0;
            border-style: inset;
            border-top: 1px solid #000;
        }
    </style>

</head>

<body>
    <img src="assets/img/logopoliwangi.png" style="position: absolute" ; width="100px" height="auto">
    <table style="width: 100%;">
        <tr>
            <td align="center">
                <span style="line-height: 1.1; font-weight: bold; font-family: 'Times New Roman', Times, serif">
                    KEMENTERIAN RISET, TEKNOLOGI DAN PENDIDIKAN TINGGI<br>
                    POLITEKNIK NEGERI BANYUWANGI<br>
                    <a style="line-height: 1.1; font-size: 11px"> Jl. Raya Jember KM 13 Labanasem, Kabat, Banyuwangi, 68461 </a> <br>
                    <a style="line-height: 1.1; font-size: 11px"> Telepon / Faks : (0333) 636780 </a> <br>
                    <a style="line-height: 1.1; font-size: 11px"> E-mail : poliwangi@poliwangi.ac.id ; Website : http://www.poliwangi.ac.id </a> <br>
                </span>
            </td>
        </tr>
    </table>
    <hr class="line-title">

    <p style="margin-left: 50px; margin-right: 50px; text-align: justify;">
        <?php foreach ($datas as $data) {

        ?>
            <span style="margin-left: 10px;">
                <a style="margin-right: 40px; font-size: 12;">Nomor</a> : <?php echo $data->nomor_surat ?> /PL36/PK.01.06/2019 <a style="font-size: 12;margin-left: 125px;">Banyuwangi,</a>
            </span> <br>
            <span style="margin-left: 10px; ">
                <a style="margin-right: 23px;font-size: 12;">Lampiran</a> :
            </span> <br>
            <span style="margin-left: 10px;">
                <a style="margin-right: 40px;font-size: 12;">Perihal</a> : <a style="font-size: 12;">Izin Lokasi Kerja Praktek</a>
            </span>
    </p>
    

    <p style="margin-left: 50px; margin-right: 50px; text-align: justify;">

        <span style="margin-left: 10px;">
            <a style="margin-right: 5px; font-size: 12;">Kepada Yth </a> :
        </span> <br>
        <span style="margin-left: 10px; ">
            <b style="margin-right: 23px;font-size: 12;">Pimpinan <?php echo $data->tempat ?></b>
        </span> <br>
        <span style="margin-left: 10px;">
            <a style="margin-right: 40px;font-size: 12;"><?php echo $data->alamat_tempat ?></a>
        </span><br>
        <span style="margin-left: 10px;">
            <a style="margin-right: 40px;font-size: 12;">Di</a>
        </span><br>
        <span style="margin-left: 25px;">
            <a style="margin-right: 40px;font-size: 12;">Tempat</a>
        </span>
    </p>
    <p style="margin-left: 50px; margin-right: 50px; text-align: justify;">

        <a>Dengan hormat,
        </a>
    </p>
    <!-- <p style="margin-left: 50px; margin-right: 50px; text-align: justify;">

        <a>Berdasarkan surat yang kami terima Nomor : .... tanggal ... Perihal : Persetujuan Kerja Praktik,
            maka kami menyampaikan terima kasih telah mengjinkan mahasiswa kami untuk melakukan Kerja Praktik
            pada perussahaan Bapak/Ibu.
        </a>
    </p> -->
    <p style="margin-left: 50px; margin-right: 50px; text-align: justify;">

        <a>Sebagai bentuk kesiapan untuk memulai kegiatan Kerja Praktik, dengan ini kami sampaikan 
            <b>Surat Pengantar Kerja Praktik</b>, sebagai Berikut :
        </a>
    </p>
    <!-- <p style="margin-left: 50px; margin-right: 50px; text-align: justify;">
        <br style="line-height: 1;">
    </p> -->

    <table border="1" style="margin-left: 50px;">
        <tr>
            <td>
                <a style="margin-right: 150px;">Perusahaan</a>
                : <?php echo $data->tempat ?>
            </td>
        </tr>
        <tr>
            <td><a style="margin-right: 130px;">Program Studi</a>
                : <a style="margin-right: 250px;"><?php echo $data->nama_prodi ?></a></td>
        </tr>
        <tr>
            <td>
                <a style="margin-right: 110px;">Nama Peserta KP</a>
                <a>:</a>



                <table style="margin-left: 230px;">
                    <?php
                    $no = 1;
                    foreach ($datas2 as $data2) { ?>
                        <?php if ($data2->kp_id == $data->id_kp) { ?>
                            <tr>

                                <td><?php echo $no++ ?>.</td>
                                <td>
                                    <a style="margin-right: 50px;"><?php echo $data2->nama ?></a>
                                </td>
                                <td>NIM.<?php echo $data2->nim ?></td>
                            <?php } ?>
                        <?php } ?>
                            </tr>
                </table>

            </td>
        </tr>
    </table>
    <br>
    <p style="margin-left: 50px; margin-right: 50px; text-align: justify; line-height: 1;">

        <a>Mahasiswa kami akan mematuhi semua peraturan dan prosedur yang berlaku pada Perusahaan.
            Dan selanjutnya, kami mohon untuk dapatnya diberikan <b>Pembimbing Lapangan</b> untuk
            membimbing mahasiswa kami selama pelaksanaan kerja praktik agar berjalan dengan baik.
        </a>
    </p>
    <p style="margin-left: 50px; margin-right: 50px; text-align: justify;">

        <a>Demikian pengantar ini disampaikan, atas perhatian dan kerjasamanya disampaikan terima kasih.
        </a>
    </p>
    
    <p style="margin-left: 400px; margin-right: 50px; text-align: justify;">
        a.n. Direktur <br>
        Wakil Diraktur Bidang Akademik
        <br style="line-height: 1;">
    </p>

    <p style="margin-left: 400px; margin-right: 50px; text-align: justify;">
    <?php if ($data->status_cetak == "Menggunakan Qrcode") : ?>
        
        <img style="width: 100px" src="<?= 'assets/qrcode/' . $data->qrcode ?>" alt="">
        <?php elseif($data->status_cetak == "Tanpa Qrcode") : ?>

        <?php endif; ?>
    </p>



<?php } ?>