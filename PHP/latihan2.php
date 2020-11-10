<?php
  $data = array("jeruk", "mangga", "nangka",
              "pepaya", "apel", "strawberry", "duku",
              "nanas", "durian", "jambu");

  for ($i=0; $i<9; $i++) {
    for ($j=0; $j<9-$i; $j++) {
      if ($data[$j] > $data[$j+1]) {
        $temp = $data[$j];
        $data[$j] = $data[$j+1];
        $data[$j+1] = $temp;
      }
    }
  }

  for ($i=0; $i<10; $i++) {
    echo "$data[$i]<br>";
  }
?>