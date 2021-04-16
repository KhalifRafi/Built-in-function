<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    h1, table{
        text-align: center;
    }
    table{
        width: 100%;
    }
    </style>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <p>Jumlah Data : 4</p>
    <?php

    $namaFile = "datamhs.txt";
    $myfile = fopen($namaFile, "r") or die ("Tidak bisa buka file!");
    $pecahFile = explode("|", fread($myfile, filesize($namaFile)));
    $nimSatu = $pecahFile[0];
    $namaSatu = $pecahFile[1];
    $tanggalLhrSatu = $pecahFile[2];
    $tempatLhrSatu = $pecahFile[3];
    $pecahTanggalSatu = explode("-", $tanggalLhrSatu);
    $tahunLahirSatu = $pecahTanggalSatu[0];
    $usiaSatu = 2021 - $tahunLahirSatu;
    
    
    $nimDua = $pecahFile[4];
    $namaDua = $pecahFile[5];
    $tanggalLhrDua = $pecahFile[6];
    $tempatLhrDua = $pecahFile[7];
    $pecahTanggalDua = explode("-", $tanggalLhrDua);
    $tahunLahirDua = $pecahTanggalDua[0];
    $usiaDua = 2021 - $tahunLahirDua;


    $nimTiga = $pecahFile[8];
    $namaTiga = $pecahFile[9];
    $tanggalLhrTiga = $pecahFile[10];
    $tempatLhrTiga = $pecahFile[11];
    $pecahTanggalTiga = explode("-", $tanggalLhrTiga);
    $tahunLahirTiga = $pecahTanggalTiga[0];
    $usiaTiga = 2021 - $tahunLahirTiga;
    

    $nimEmpat = $pecahFile[12];
    $namaEmpat = $pecahFile[13];
    $tanggalLhrEmpat = $pecahFile[14];
    $tempatLhrEmpat = $pecahFile[15];
    $pecahTanggalEmpat = explode("-", $tanggalLhrEmpat);
    $tahunLahirEmpat = $pecahTanggalEmpat[0];
    $usiaEmpat = 2021 - $tahunLahirEmpat;    
    
    fclose($myfile);

    echo "<table border='1' cellspacing='0' cellpadding='10'>";
        echo "<tr>";
            echo "<th>NO</th>";
            echo "<th>NIM</th>";
            echo "<th>NamaMhs</th>";
            echo "<th>Tanggal Lahir</th>";
            echo "<th>Tempat Lahir</th>";
            echo "<th>Usia(Tahun)</th>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>1</td>";
            echo "<td>$nimSatu</td>";
            echo "<td>$namaSatu</td>";
            echo "<td>$tanggalLhrSatu</td>";
            echo "<td>$tempatLhrSatu</td>";
            echo "<td>$usiaSatu Tahun</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>2</td>";
            echo "<td>$nimDua</td>";
            echo "<td>$namaDua</td>";
            echo "<td>$tanggalLhrDua</td>";
            echo "<td>$tempatLhrDua</td>";
            echo "<td>$usiaDua Tahun</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>3</td>";
            echo "<td>$nimTiga</td>";
            echo "<td>$namaTiga</td>";
            echo "<td>$tanggalLhrTiga</td>";
            echo "<td>$tempatLhrTiga</td>";
            echo "<td>$usiaTiga Tahun</td>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>4</td>";
            echo "<td>$nimEmpat</td>";
            echo "<td>$namaEmpat</td>";
            echo "<td>$tanggalLhrEmpat</td>";
            echo "<td>$tempatLhrEmpat</td>";
            echo "<td>$usiaEmpat Tahun</td>";
        echo "</tr>";    
    echo "</table>";
    ?>
</body>
</html>