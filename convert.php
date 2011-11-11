<?php

function to_binary($str) {
  $res = "";
  for ($i = 0; $i < strlen($str); ++$i) {
    $c = ord($str[$i]);
    for($p=7; $p >= 0; $p--) {
      $res .= ($c & (1 << $p)) ? "1" : "0";
    }
  }
  return $res; 
}
function from_binary($str) {
  $res = "";
  $p=7;
  $d=0;
  for ($i = 0; $i < strlen($str); ++$i) {
    $c = $str[$i];
    $d += (1 << $p) * ($c == '1');
    $p -= 1;
    if ($p < 0) {
      $p = 7;
      $res .= chr($d);
      $d = 0;
    }
  }
  return $res; 
}
