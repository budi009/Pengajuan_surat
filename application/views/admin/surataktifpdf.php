<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiva="X-UA-Compatible" content="IE=edge">

        <title>Cetak Surat</title>

        <link rel="stylesheet" href="" >

        <style>
            .line-title{
                border: 0;
                border-style: inset;
                border-top: 1px solid #000;
            }
        </style>

</head>
   
    <body>
        <img src="assets/img/logopoliwangi.png" style="position: absolute"; width="100px" height="auto" >
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

        <!-- <table border="1" align="center">
            <tr style="">
                <td>
                    <span style=" line-height: 1.5; font-weight: bold; font-family: 'Times New Roman', Times, serif">
                    SURAT KETERANGAN AKTIF KULIAH
                    </span> <br>
                    
                </td>
            </tr>
            <tr style="text-align: center;" style="padding-top: 0%;">
                <td>
                <span>
                        Nomor : <?php echo $data->nomor_surat ?> /PL36/PK.05.00/2019
                    </span>
                </td>
            </tr>
        </table> -->
        <p style="text-align: center;">
        <span style="line-height: 1.3; font-weight: bold; font-family: 'Times New Roman', Times, serif; font-size: 14;">
                   <u>SURAT KETERANGAN AKTIF KULIAH</u>
                    </span> <br>
                    <span style="line-height: 1; font-family: 'Times New Roman', Times, serif; font-size: 12;">
                   Nomor : <?php echo $data->nomor_surat ?> /PL36/KM.00.00/2019
                </span> 
        </p>

        <p style="margin-left: 50px; margin-right: 50px; text-align: justify;">
            Yang bertanda tangan di bawah ini : <br style="line-height: 1;">
            <span style="margin-left: 40px;">
            <a style="margin-right: 100px">Nama</a> :
            </span> <br>
            <span style="margin-left: 40px;">
            <a style="margin-right: 110px">NIK</a> :
            </span> <br>
            <span style="margin-left: 40px;">
            <a style="margin-right: 90px">Jabatan</a> :
            </span>
        </p>

        <p style="margin-left: 50px; margin-right: 50px; text-align: justify;">
            Menerangkan dengan sebenarnya bahwa : <br style="line-height: 1;">
            <span style="margin-left: 40px;">
            <a style="margin-right: 100px">Nama</a> : <?php echo $data->nama ?>
            </span> <br>
            <span style="margin-left: 40px;">
            <a style="margin-right: 107px">NIM</a> :  <?php echo $data->nim ?>
            </span> <br>
            <span style="margin-left: 40px;">
            <a style="margin-right: 45px">Program Studi</a> : <?php echo $data->prodi_id ?>
            </span> <br>
            <span style="margin-left: 40px;">
            <a style="margin-right: 79px">Semester</a> : <?php echo $data->semester ?>
            </span> <br>
            <span style="margin-left: 40px;">
            <a style="margin-right: 30px">Tahun Angkatan</a> : <?php echo $data->th_angkatan ?>
            </span> <br>
            <span style="margin-left: 40px;">
            <a style="margin-right: 26px">Tahun Akademik</a> : <?php echo $data->th_akademik ?>
            </span>
        </p>

        <p style="margin-left: 50px; margin-right: 50px; text-align: justify;">
            dan wali anak tersebut : <br style="line-height: 1;">
            <span style="margin-left: 40px;">
            <a style="margin-right: 100px">Nama</a> : <?php echo $data->nama_ortu ?>
            </span> <br>
            <span style="margin-left: 40px;">
            <a style="margin-right: 75px">Pekerjaan</a> :  <?php echo $data->pekerjaan_ortu ?>
            </span> <br>
            <span style="margin-left: 40px;">
            <a style="margin-right: 113px">NIP</a> : <?php echo $data->nip_ortu ?>
            </span> <br>
            <span style="margin-left: 40px;">
            <a style="margin-right: 91px">Jabatan</a> : <?php echo $data->jabatan ?>
            </span> <br>
            <span style="margin-left: 40px;">
            <a style="margin-right: 89px">Instansi</a> : <?php echo $data->instansi ?>
            </span> <br>
            <span style="margin-left: 40px;">
            <a style="margin-right: 92px">Alamat</a> : <?php echo $data->alamat_ortu ?>
            </span>
        </p>

        <p style="margin-left: 50px; margin-right: 50px; text-align: justify;">
            Adalah benar-benar mahasiswa aktif Politeknik Negeri Banyuwangi terhitung mulai bulan
            ........... <?php echo $data->th_angkatan ?> s.d. sekarang masih aktif mengikuti kegiatan akademik dan perkuliahan.<br style="line-height: 1;">
        </p>

        <p style="margin-left: 50px; margin-right: 50px; text-align: justify;">
            Surat keterangna ini dipergunakan sebagai/keperluan <u><i><b><?php echo $data->keperluan?></b></i></u><br style="line-height: 1;">
        </p>

        <p style="margin-left: 50px; margin-right: 50px; text-align: justify;">
        Demikian surat ini di buat dengan sebenarnya, agar di gunakan sebagaimana mestinya. 
        <br style="line-height: 1;">
        </p><br>

        <p style="margin-left: 400px; margin-right: 50px; text-align: justify;">
        Banyuwangi, ............ 
        <br style="line-height: 1;">
        </p>
        
        <p style="margin-left: 400px; margin-right: 50px; text-align: justify;">
        A.n. Direktur <br>
        Jabatan Wadir
        <br style="line-height: 1;">
        </p>

        <p style="margin-left: 400px; margin-right: 50px; text-align: justify;">
        <!-- <?php 
      $qrCode = new Endroid\QrCode\QrCode($user['nama_user']);
      $qrCode->writeFile('assets/qrcode'.'/qrcode.jpg');
      ?> -->
      <img style="width: 100px" src="assets/qrcode/qrcode.jpg" alt="">
        
        </p>


        