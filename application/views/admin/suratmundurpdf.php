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
<?php foreach ($datas as $data) : ?>

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
    
    <p style="text-align: center;">
            <span style="line-height: 1.3; font-weight: bold; font-family: 'Times New Roman', Times, serif; font-size: 14;">
                SURAT PENGUNDURAN DIRI MAHASISWA
            </span> <br>
            <span style="line-height: 1; font-family: 'Times New Roman', Times, serif; font-size: 14;">
                Nomor : <?php echo $data->nomor_surat ?> /PL36/KM.00.04/2019
            </span>
        </p>

        <p style="margin-left: 50px; margin-right: 50px; text-align: justify">
            Menindaklanjuti surat saudara perihal Surat Permohonana Pengunduran Diri dan <?php echo $data->alasan ?>
            ,maka sesuai dengan peraturan yang berlaku, Direktur Politeknik Negeri Banyuwangi dengan ini memberikan IjinPengunduran Diri dan
            <?php echo $data->alasan ?> kepada mahasiswa :
        </p>

        <br>
        <table style="margin-left: 100px">
            <tr>
                <td>
                    <a style="margin-right: 208px">Nama</a> :
                </td>
                <td>
                    <?php echo $data->nama_user ?>
                </td>
            </tr>
            <tr>
                <td>
                    <a style="margin-right: 215px">NIM</a> :
                </td>
                <td>
                    <?php echo $data->nim ?>
                </td>
            </tr>
            
            <tr>
                <td>
                    <a style="margin-right: 154px">Program Studi</a> :
                </td>
                <td>
                    <?php echo $data->nama_prodi ?>
                </td>
            </tr>
            <tr>
                <td>
                    <a style="margin-right: 39px">Semester yang Telah di Tempuh</a> :
                </td>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td>
                    <a style="margin-right: 163px">IPK Terakhir</a> :
                </td>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td>
                    <a style="margin-right: 86px">Alasan Pengunduran Diri</a> :
                </td>
                <td>
                <?php echo $data->alasan ?>
                </td>
            </tr>
            
        </table>

       <br>
       <br>
        <p style="margin-left: 50px; margin-right: 50px; text-align: justify">
            Demikian surat ijin pengunduran diri diberika untuk dapat dipergunakan sebagimana mestinya
        </p>

        <p style="margin-left: 400px; margin-right: 50px; text-align: justify;">
            Banyuwangi, <?php echo date('d-m-Y', strtotime($data->tanggal_validasi)) ?>
            <br style="line-height: 1;">
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




    </body>
<?php endforeach; ?>
   
           
          