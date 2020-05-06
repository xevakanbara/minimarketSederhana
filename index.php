<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minimarket Sederhana</title>
</head>

<body>
    <?php
    // fungsi tampilan tanggal
    $english_day = getdate();
    if ($english_day[hours] <= 10) {
        $ucapan = "selamat pagi";
    } elseif ($english_day[hours] <= 18) {
        $ucapan = "selamat siang";
    } else {
        $ucapan = "selamat malam";
    }
    $message = date("d M Y") . ", " . date("h:i") . ", " .
        $ucapan;

    // daftar jumlah barang
    $jum_barang = array(12, 10, 12, 1, 2);

    // daftar harga barang
    $harga_barang = array(500000, 25000, 25000, 7500, 15000);

    // total harga per unit setelah di diskon
    for ($i = 0; $i < 5; $i++) {
        if ($jum_barang[$i] >= 12) {
            $bayar[$i] = $jum_barang[$i] * $harga_barang[$i];
            $diskon = ($bayar[$i] * 15) / 100;
            $total[$i] = $bayar[$i] - $diskon;
        } elseif ($jum_barang[$i] >= 10) {
            $bayar[$i] = $jum_barang[$i] * $harga_barang[$i];
            $diskon = ($bayar[$i] * 10) / 100;
            $total[$i] = $bayar[$i] - $diskon;
        } else {
            $total[$i] = $jum_barang[$i] * $harga_barang[$i];
        }
    }

    // total harga yang harus dibayar
    $bayar = 0;
    for ($d = 0; $d < 5; $d++) {
        $bayar = $bayar + $total[$d];
    }

    // harga yang kena pajak
    if ($bayar < 5000000) {
        $tax = 10;
        $bayar_pajak = ($bayar * 10) / 100;
        $bayar_baru = $bayar - $bayar_pajak;
    } else {
        $tax = 0;
        $bayar_baru = $bayar;
    }
    ?>
    <table width="618" border="1">
        <tr>
            <td colspan="5">
                <div align="center"><strong>MINIMARKET AMIKOM YOGYAKARTA</strong></div>
            </td>
        </tr>
        <tr>
            <td colspan="5">
                <font color "red">
                    <?
                    echo $message;
                    ?>
            </td>
        </tr>
        <tr>
            <td width="43"><strong>NO</strong></td>
            <td width="132"><strong>BARANG</strong></td>
            <td width="111"><strong>JUMLAH</strong></td>
            <td width="117"><strong>HARGA</strong></td>
            <td width="181"><strong>SUB TOTAL</strong></td>
        </tr>
        <tr>
            <td>1</td>
            <td>Printer</td>
            <td align="right"><? print $jum_barang[0]; ?></td>
            <td align="right"><? print $harga_barang[0]; ?></td>
            <td align="right"><? print $total[0]; ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Mouse</td>
            <td align="right"><? print $jum_barang[1]; ?></td>
            <td align="right"><? print $harga_barang[1]; ?></td>
            <td align="right"><? print $total[1]; ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Keyboard</td>
            <td align="right"><? print $jum_barang[2]; ?></td>
            <td align="right"><? print $harga_barang[2]; ?></td>
            <td align="right"><? print $total[2]; ?></td>
        </tr>
        <tr>
            <td>4</td>
            <td>Gula Pasir</td>
            <td align="right"><? print $jum_barang[3]; ?></td>
            <td align="right"><? print $harga_barang[3]; ?></td>
            <td align="right"><? print $total[3]; ?></td>
        </tr>
        <tr>
            <td>5</td>
            <td>Sabun Cuci</td>
            <td align="right"><? print $jum_barang[4]; ?></td>
            <td align="right"><? print $harga_barang[4]; ?></td>
            <td align="right"><? print $total[4]; ?></td>
        </tr>
        <tr>
            <td colspan="4">Total</td>
            <td align="right"><? print $bayar; ?></td>
        </tr>
        <tr>
            <td colspan="4">Total yang dibayar</td>
            <td align="right"><? print $bayar_baru; ?></td>
        </tr>
        <tr>
            <td colspan="5">
                <center>kami menyediakan segala macam kebutuhan Anda</center>
            </td>
        </tr>
    </table>
</body>

</html>
