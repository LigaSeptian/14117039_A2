<?php
  for ($i=1; $i<=50; $i++) {
    if (Prima($i)) {
      echo "$i<br>";
    }
  }

  function Prima ($bilangan) {
    $prima = true;

    for ($i=2; $i<$bilangan; $i++) {
      if ($bilangan%$i == 0) {
        $prima = false;
      }
    }

    if ($prima) {
      return true;
    } else {
      return false;
    }
  }
?>