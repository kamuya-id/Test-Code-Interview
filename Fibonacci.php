<?php

function fibonacci (int $jumlahBilangan) {

  $fibonacci = [];

  if ($jumlahBilangan < 0) {
    return $fibonacci;
  }

  for ($i = 0; $i < $jumlahBilangan; $i++) {
    if ($i < 2) {
      $bilangan = $i;
    } else {
      $bilangan = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
  
    array_push($fibonacci, $bilangan);
  }

  return $fibonacci;
}


echo implode(" ", fibonacci(5)) . '<br>';
echo implode(" ", fibonacci(8)) . '<br>';
echo implode(" ", fibonacci(10)) . '<br>';
echo implode(" ", fibonacci(13)) . '<br>';

echo "<hr>";

function fibonacciSolusi2 (int $jumlahBilangan) {
 
  $fibonacci = "";
  $satuBilanganSebelumnya = 0;
  $duaBilanganSebelumnya = 1;

  if ($jumlahBilangan < 0) {
    return $fibonacci;
  }

  for ($i = 0; $i < $jumlahBilangan; $i++) {
    if ($i < 1) {
      $bilangan = $i;
    } else {
      $bilangan = $satuBilanganSebelumnya + $duaBilanganSebelumnya;

      
      $duaBilanganSebelumnya = $satuBilanganSebelumnya;
      $satuBilanganSebelumnya = $bilangan;
    }
  
    
    $fibonacci .= "{$bilangan} ";
  }

  return $fibonacci;
}


echo fibonacciSolusi2(5) . '<br>';
echo fibonacciSolusi2(8) . '<br>';
echo fibonacciSolusi2(10) . '<br>';
echo fibonacciSolusi2(13) . '<br>';

echo "<hr>";

function fibonacciRekursif ($jumlah) {
  if ($jumlah >= 0 and $jumlah <= 1) {
    return $jumlah;
  }

  return fibonacciRekursif($jumlah - 1) + fibonacciRekursif($jumlah - 2);
}

echo fibonacciRekursif(0) . " ";
echo fibonacciRekursif(1) . " ";
echo fibonacciRekursif(2) . " ";
echo fibonacciRekursif(3) . " ";
echo fibonacciRekursif(4) . " ";
echo fibonacciRekursif(5) . " ";

echo "<br>";

for ($i = 0; $i < 10; $i++) {
  echo fibonacciRekursif($i) . ' ';
}