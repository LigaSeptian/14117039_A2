<?php
  function Aritmatika ($bilangan1, $bilangan2, $operator) {
    echo "Hasil : ";

    if ($operator == "+") {
      echo $bilangan1 + $bilangan2;
    } else if ($operator == "-") {
      echo $bilangan1 - $bilangan2;
    } else if ($operator == "/") {
      echo $bilangan1 / $bilangan2;
    } else if ($operator == "*") {
      echo $bilangan1 * $bilangan2;
    } else if ($operator == "%") {
      echo $bilangan1 % $bilangan2;
    } else {
      echo "Salah memasukkan pilihan operator";
    }
  }

  $bilangan1 = 20;
  $bilangan2 = 5;

  echo "bilangan 1 = $bilangan1<br>";
  echo "bilangan 2 = $bilangan2<br><br>";

  echo "Berikut merupakan hasil dari setiap operasi<br><br>";

  echo "PENJUMLAHAN<br>";
  echo "Operator : +<br>";
  Aritmatika($bilangan1, $bilangan2, "+");
  echo "<br><br>";

  echo "PENGURANGAN<br>";
  echo "Operator : -<br>";
  Aritmatika($bilangan1, $bilangan2, "-");
  echo "<br><br>";

  echo "PERKALIAN<br>";
  echo "Operator : *<br>";
  Aritmatika($bilangan1, $bilangan2, "*");
  echo "<br><br>";

  echo "PEMBAGIAN<br>";
  echo "Operator : /<br>";
  Aritmatika($bilangan1, $bilangan2, "/");
  echo "<br><br>";

  echo "MODULUS<br>";
  echo "Operator : %<br>";
  Aritmatika($bilangan1, $bilangan2, "%");
  echo "<br><br>";
?>