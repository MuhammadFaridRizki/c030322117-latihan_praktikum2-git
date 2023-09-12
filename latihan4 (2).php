<?php
/*
Ada seorang nasabah bank yang menabung di bank X dengan saldo awal Rp. 2.000.000,-.
Bank X menerapkan kebijakan bunga 3% perbulan dari saldo awal tabungan.
Hitunglah jumlah saldo akhir nasabah tersebut setelah 11 bulan.
Lengkapilah script berikut ini untuk mengerjakan kasus ini!
*/
$saldoAwal = 2000000;
$bunga = 0.03;
$bulan = 11;
$saldoAkhir = $saldoAwal*$bunga*$bulan+$saldoAwal;
echo "Saldo akhir setelah “.$bulan.”bulan adalah : Rp.$saldoAkhir,";
?>