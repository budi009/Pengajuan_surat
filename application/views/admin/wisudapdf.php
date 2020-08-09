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
    <!-- <img src="assets/img/logopoliwangi.png" style="position: absolute"; width="100px" height="auto" >
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
        </table> -->
    <?php


    for ($w = $jml_wisuda; $w <= $jml_wisuda; $w++) {

    ?>
        <br>
        <br> <?php
                                      
                                      foreach ($wisuda as $wis) {
                                      ?><br>
        <table border="1" style="width: 100%;">
            <tr>
                <td>
               
                    <table border="1" style="width: 100%;">
                        <tr>
                            <td>
                                <img style="width: 150px; height: 200px; margin-left: 50px;" src="<?= 'assets/img/daftar_wisuda/'.$wis->foto; ?>" alt="">
<!--  -->
                            </td>
                            
                            <td>

                                <a style="line-height: 1;margin-left: 20px; margin-right: 120px;">Nama</a> :  <?php echo $wis->nama ?><br>
                                <a style="line-height: 1;margin-left: 20px; margin-right: 127px;">NIM</a>  : <?php echo $wis->nim ?><br>
                                <a style="line-height: 1;margin-left: 20px; margin-right: 67px;">Jenis Kelamin</a> : <?php echo $wis->jns_kelamin ?><br>
                                <a style="line-height: 1;margin-left: 20px;">Tempat/Tanggal Lahir</a> : <?php echo $wis->tempat_lahir ?>, <?php echo $wis->tanggal_lahir ?><br>
                                <a style="line-height: 1;margin-left: 20px;">Program Studi</a> :  <?php echo $wis->prodi ?><br>
                                <a style="line-height: 1;margin-left: 20px;">Alamat</a> :  <?php echo $wis->alamat ?><br>
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
        
    
    <?php } ?>
  
</body>

</html>