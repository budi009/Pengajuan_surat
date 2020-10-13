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

        <p style="margin-left: 50px; margin-right: 20px; text-align: justify;">
        

        
            <!-- <span style="margin-left: 10px;">
                <a style="margin-right: 40px; font-size: 12;">Nomor</a> : <?php echo $data->nomor_surat ?> /PL36/PK.01.06/2019 <a style="font-size: 12;margin-left: 125px;">Banyuwangi,</a>
            </span> <br> -->
            <span style="margin-left: 10px; ">
                <a style="margin-right: 23px;font-size: 12;">Lampiran</a> : -
            </span> <br>
            <span style="margin-left: 10px;">
                <a style="margin-right: 40px;font-size: 12;">Perihal</a> : <a style="font-size: 12;">Permohonan Cuti</a>
            </span>
            
            <br>
            <br>
            <br>
            <span style="margin-left: 10px;">
                <a style="margin-right: 40px;font-size: 12;">Kepada Yth. Direktur Politeknik Negeri Banyuwangi </a><br>
            </span>
            <span style="margin-left: 10px;">
                <a style="margin-right: 40px;font-size: 12;">Di </a><br>
                
            </span>
            <span style="margin-left: 10px;">
                
                <a style="margin-right: 40px;font-size: 12;">Banyuwangi </a><br>
                <br>
                 
            </span>
            
            <br>
            
            <span style="margin-left: 10px;">
                <a style="margin-right: 40px;font-size: 12;">
                Bersama ini, kami mahasiswa Politeknik Negeri Banyuwangi dengan ini mengajukan cuti 
               
                 
                 </a><br>
            </span>
            <span style="margin-left: 10px;">
                
                <a style="margin-right: 40px;font-size: 12;">
                Akademik selama <?php echo $data->lama_cuti ?> semester, terhitung mulai semester <?php echo $data->mulai_cuti ?> sampai dengan semester <?php echo $data->batas_cuti ?>
                 </a><br>
                
                 
            </span>
            <span style="margin-left: 10px;">
                
                <a style="margin-right: 40px;font-size: 12;">
                Kami mengajukan berhenti sementara dikarenakan <b><?php echo $data->alasan ?></b>
                 </a><br>
                
                 
            </span>
            <br>
            <!-- <span style="margin-left: 10px;">
                
                <a style="margin-right: 40px;font-size: 12;">
...............................................................................................................................................
                </a><br>
                 
            </span>
            <span style="margin-left: 10px;">
                
                <a style="margin-right: 40px;font-size: 12;">
...............................................................................................................................................
                </a><br>
                 
            </span> -->
            <span style="margin-left: 10px; ">
                <a style="margin-right: 10px;font-size: 12;">Adapun Biodata kami adalah sebagai berikut</a> :
            </span> <br>
            <span style="margin-left: 10px;">
                <a style="margin-right: 65px;font-size: 12;">Nama</a> : <?php echo $data->nama_user ?>
            </span>
            <br>
            <span style="margin-left: 10px;">
                <a style="margin-right: 72px;font-size: 12;">NIM</a> : <?php echo $data->nim ?>
            </span>
            <br>
            <span style="margin-left: 10px;">
                <a style="margin-right: 10px;font-size: 12;">Program Studi</a> : <?php echo $data->nama_prodi ?>
            </span>
            <br>
            <span style="margin-left: 10px;">
                <a style="margin-right: 44px;font-size: 12;">Semester</a> : <?php echo $data->semester ?>
            </span>
            <br>
            
            <span style="margin-left: 10px;">
                <a style="margin-right: 44px;font-size: 12;">Cuti akademik ini kami lakukan atas kemauan sendiri dan tanpa paksaan dari pihak manapun</a>  
            </span>
            <br>
            <br>
            <span style="margin-left: 365px;">
                <a style="margin-right: 44px;font-size: 12;">Banyuwangi,...............................</a>  
            </span>
            <br>
            <br>
            <span style="margin-left: 10px;">
                <a style="margin-right: 290px;font-size: 12;">Menyetujui,</a>  
                <a style="margin-right: 44px;font-size: 12;">Hormat Kami,</a>  
            </span>
            
            <br>
            <br>
            <span style="margin-left: 10px;">
                <a style="margin-right: 260px;font-size: 12;">Orang Tua</a>  
                <a style="margin-right: 44px;font-size: 12;">materai Rp.6000</a>  
            </span>
            
            <br>
            <br>
            <span style="margin-left: 10px;">
                <a style="margin-right: 200px;font-size: 12;">(.........................................)</a>  
                <a style="margin-right: 44px;font-size: 12;">(..........................................)</a>  
            </span>
            
            <br>
            <span style="margin-left: 390px;">
                
                <a style="margin-right: 44px;font-size: 12;">NIM.</a>  
            </span>
            
            <br>
            <span style="margin-left: 260px;">
                
                <b style="margin-right: 44px;font-size: 12;">Mengetahui,</b>  
            </span>
            
            <br>
            <br>
            <span style="margin-left: 10px;">
                <a style="margin-right: 190px;font-size: 12;">Koordinator Program Studi,</a>  
                <a style="margin-right: 44px;font-size: 12;">Dosen Wali,</a>  
            </span>
            <br>
            <br>
            <br>
            <br>
            <span style="margin-left: 10px;">
                <a style="margin-right: 200px;font-size: 12;">(.........................................)</a>  
                <a style="margin-right: 44px;font-size: 12;">(..........................................)</a>  
            </span>
            <br>
            <span style="margin-left: 10px;">
                <a style="margin-right: 315px;font-size: 12;">NIP/NIK.</a>  
                <a style="margin-right: 44px;font-size: 12;">NIP/NIK.</a>  
            </span>
            <br>
            <br>

            <span style="margin-left: 250px;">
                
                <a style="margin-right: 44px;font-size: 12;">Kabag. Akademik,</a>  
            </span>
            <br>
            <br>
            <br>
            <br>
            
            <span style="margin-left: 230px;">
                
                <a style="margin-right: 44px;font-size: 12;">(........................................)</a>  
            </span>
            <br>
            <span style="margin-left: 230px;">
                
                <a style="margin-right: 44px;font-size: 12;">NIP/NIK.</a>  
            </span>
            <br>
    </p>

    <?php endforeach; ?>