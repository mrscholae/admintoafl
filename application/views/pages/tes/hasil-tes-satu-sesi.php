<?php
    function tgl_indo($tgl){
        $data = explode("-", $tgl);
        $hari = $data[0];
        $bulan = $data[1];
        $tahun = $data[2];

        if($bulan == "01") $bulan = "Januari";
        if($bulan == "02") $bulan = "Februari";
        if($bulan == "03") $bulan = "Maret";
        if($bulan == "04") $bulan = "April";
        if($bulan == "05") $bulan = "Mei";
        if($bulan == "06") $bulan = "Juni";
        if($bulan == "07") $bulan = "Juli";
        if($bulan == "08") $bulan = "Agustus";
        if($bulan == "09") $bulan = "September";
        if($bulan == "10") $bulan = "Oktober";
        if($bulan == "11") $bulan = "November";
        if($bulan == "12") $bulan = "Desember";

        return $hari . " " . $bulan . " " . $tahun;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1 style="border-collapse: collapse">
        <thead>
            <tr>
                <th style="padding: 10px">No</th>
                <th style="padding: 10px">Nama Lengkap</th>
                <th style="padding: 10px">TTL</th>
                <th style="padding: 10px">Alamat</th>
                <th style="padding: 10px">Alamat Pengiriman</th>
                <th style="padding: 10px">No Whatsapp</th>
                <th style="padding: 10px">Email</th>
                <th style="padding: 10px">Jumlah Benar</th>
                <th style="padding: 10px">SKOR</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $no = $this->uri->segment('4') + 1;
                foreach ($respon as $i => $respon) :?>
                <tr>
                    <td style="padding: 10px"><?= $no++?></td>
                    <td style="padding: 10px"><?= ucwords(strtolower($respon['nama']))?></td>
                    <td style="padding: 10px"><?= ucwords(strtolower($respon['t4_lahir'])) . ", " . tgl_indo(date("d-m-Y", strtotime($respon['tgl_lahir'])))?></td>
                    <td style="padding: 10px"><?= ucwords(strtolower($respon['alamat']))?></td>
                    <td style="padding: 10px"><?= ucwords(strtolower($respon['alamat_pengiriman']))?></td>
                    <td style="padding: 10px"><?= $respon['no_wa']?></td>
                    <td style="padding: 10px"><?= $respon['email']?></td>
                    
                    <td style="padding: 10px"><center><?= $respon['nilai_istima']?></center></td>
                    <td style="padding: 10px"><center><?= $respon['nilai_istima'] * 2?></center></td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    <?php 
	    echo $this->pagination->create_links();
	?>
</body>
</html>