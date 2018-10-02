<?php

/**
 *  Perulangan kata Marlin booking
 */
class UlangMarlin
{
  function cetak()
  {
    foreach (range(1, 40) as $bilangan) {
      if ($bilangan % 3 != 0 && $bilangan % 5 != 0) {
        echo $bilangan . " ";
      } else if ($bilangan % 3 == 0) {
        echo "Marlin ";
      }
      if ($bilangan % 5 == 0) {
        echo "Booking ";
      }
    }
  }
}

$cetak = new UlangMarlin();
$cetak->cetak();
?>
