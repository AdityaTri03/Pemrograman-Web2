<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelompok Genap</title>
</head>

<body>
    <form method="POST" action="">
        <table align="center" border="3" cellpadding="2" cellspacing="5">
            <tr align="center">
                <td>
                    <h2><b><u>Silahkan Masukkan Data</u></b></h2>
                </td>
            </tr>
            <tr>
                <td>
                    <table width="500px" border=0 cellpadding="0" cellspacing="10" align="center">
                        <tr>
                            <td>Wilayah</td>
                            <td> : </td>
                            <td>
                                <select name="wilayah" id="wilayah">
                                    <option value=""> ------------------------ Pilih Wilayah -----------------------</option>
                                    <option value="DKI Jakarta">DKI Jakarta</option>
                                    <option value="Jawa Barat">Jawa Barat</option>
                                    <option value="Banten">Banten</option>
                                    <option value="Jawa Tengah">Jawa Tengah</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Jumlah Positif</td>
                            <td> : </td>
                            <td><input type="text" name="positif" size="40"></td>
                        </tr>
                        <tr>
                            <td>Jumlah Dirawat</td>
                            <td> : </td>
                            <td><input type="text" name="dirawat" size="40"></td>
                        </tr>
                        <tr>
                            <td>Jumlah Sembuh</td>
                            <td> : </td>
                            <td><input type="text" name="sembuh" size="40"></td>
                        </tr>
                        <tr>
                            <td>Jumlah Meninggal</td>
                            <td> : </td>
                            <td><input type="text" name="meninggal" size="40"></td>
                        </tr>
                        <tr>
                            <td>Nama Operator</td>
                            <td> : </td>
                            <td><input type="text" name="operator" size="40"></td>
                        </tr>
                        <tr>
                            <td>Nim Mahasiswa</td>
                            <td> : </td>
                            <td><input type="text" name="nim" size="40"></td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center"><input type="submit" name="simpan" value="Simpan"></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>

    <?php
    date_default_timezone_set('Asia/Jakarta');
    if (isset($_POST['simpan'])) {
        $wilayah = $_POST['wilayah'];
        $positif = $_POST['positif'];
        $dirawat = $_POST['dirawat'];
        $sembuh = $_POST['sembuh'];
        $meninggal = $_POST['meninggal'];
        $operator = $_POST['operator'];
        $nim = $_POST['nim'];
        $waktu = date('d F Y H:i:s');

        $namafile = "data.txt";
        $file = fopen($namafile, "w");

        fprintf($file, "%60s %12s %10s", "", "", "Data Pemantaun Covid19 Wilayah " . $wilayah . "\n");
        fprintf($file, "%60s %20s %10s", "", "", "Per " . $waktu . "\n");
        fprintf($file, "%60s %14s %10s", "", "", $operator . " / " . $nim . "\n\n");
        fprintf($file, "%60s %10s", "", "--------------------------------------------------------------------\n");
        fprintf($file, "%60s |%10s     | %10s     | %10s     | %5s   |", "", "Positif", "Dirawat", "Sembuh", "   Meninggal");
        fprintf($file, "%-61s %10s", "\n", "--------------------------------------------------------------------\n");
        fprintf($file, "%60s |   %-10s  |     %-10s |     %-10s |     %-10s |", "", $positif, $dirawat, $sembuh, $meninggal);
        fprintf($file, "%-61s %10s", "\n", "--------------------------------------------------------------------");

        fclose($file);

        echo "<h1> Output : <a href=" . $namafile . ">" . $namafile . "</a></h1>";
    }
    ?>
</body>

</html>