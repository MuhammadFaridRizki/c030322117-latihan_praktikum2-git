<?php
  define ("phi", 3.14);
  $jari2 = 10;
  $garisPelukis = 15;
  //Menghitung Luas Alas Kerucut
  $luasAlas = phi*$jari2*$jari2;
    echo "<h3>Menghitung luas alas</h3>";
    echo "Luas alas dengan jari-jarinya $jari2 cm adalah $luasAlas cm<sup>2</sup> <br>";
  //Menghitung Luas Permukaan Kerucut
    $luasPermukaan = phi*$jari2*$jari2+phi*$jari2*$garisPelukis;
  echo "<h3>Menghitung luas Permukaan </h3>";
  echo "Luas alas dengan jari-jarinya $jari2 cm dan garis pelukisnya
  $garisPelukis cm adalah $luasPermukaan cm<sup>2</sup> <br>";
?>
