<?php

namespace LootSpace369\SecurityEncode;

function arrayRep(array $array) {
  foreach ($array as $key => $value) {
    if (is_array($value)) {
        arrayRep($value);
    } else {
        return $key;
    }
  }
  return null;
}

class encode {

  public $handle;

  public function __construct(string|array $needHandle) {
    $this->handle = $needHandle;
  }
  
  public function run(): string {
    $needHandle = $this->handle;
    if(is_array($needHandle))arrayRep($needHandle);
    $alphas = array_merge(range('A', 'Z'), range('a', 'z'));
    $len = strlen($needHandle);
    $analysis = [];
    $c = 0;
    foreach ($alphas as $str) {
      $c++;
      $analysis[$str] = $len + $c;
    }
    foreach ($analysis as $key => $value) {
      $needHandle = str_replace($key, $value, $needHandle);
    }
    
    return $needHandle;
  }
}
