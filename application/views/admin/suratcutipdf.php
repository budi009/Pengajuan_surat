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

    
        <table align="center">
            <tr>
                <td>
                    <span style=" line-height: 1.5; font-weight: bold; font-family: 'Times New Roman', Times, serif">
                    SURAT CUTI AKADEMIK
                    </span> <br>
                    <span>
                        Nomor : <?php echo $data->nomor_surat ?> /PL36/PK.05.00/2019
                    </span>
                </td>
            </tr>
        </table>

        <p style="margin-left: 50px; margin-right: 50px; text-align: justify">
            Menunjuk surat saudara perihal ijin Cuti Akademik, maka sesuai dengan peraturan yang berlaku, 
            Direktur politeknik Negeri Bnyuwangi dengan ini memberikan Ijin Cuti Akademik kepada mahasiswa :
        </p>

        <br>
        <table style="margin-left: 100px">
            <tr>
                <td>
                    <a style="margin-right: 208px">Nama</a> :
                </td>
                <td>
                    <?php echo $data->nama ?>  
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
                <a style="margin-right: 197px">Jurusan</a> :
                </td>
                <td>
                    - 
                </td>
            </tr>
            <tr>
                <td>
                <a style="margin-right: 154px">Program Studi</a> :
                </td>
                <td>
                    <?php echo $data->prodi_id ?> 
                </td>
            </tr>
            <tr>
                <td>
                <a style="margin-right: 120px">Berhenti Sementara</a> :
                </td>
                <td>
                    Cuti
                </td>
            </tr>
            <tr>
                <td>
                <a style="margin-right: 10px">Prestasi akademik yang telah dicapai</a> :
                </td>
                <td>
                    -
                </td>
            </tr>
            <tr>
                <td>
                    <a style="margin-right: 86px">Index Prestasi Kumulatif</a> :
                </td>
                <td>
                    - 
                </td>
            </tr>
            <tr>
                <td>
                    <a style="margin-right: 87px">Sampai dengan semester</a> :
                </td>
                <td>
                    <?php echo $data->batas_cuti ?> 
                </td>
            </tr>
        </table>

        <!-- <?php 
      $qrCode = new Endroid\QrCode\QrCode('BudiRahmawan1234');
      $qrCode->writeFile('assets/qrcode'.'/qrcode.jpg');
      ?>
      <img style="width: 100px" src="assets/qrcode/qrcode.png" alt=""> -->
        

    </body>

</html>



