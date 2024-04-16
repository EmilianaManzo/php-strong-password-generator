<?php 




function randomPass($n){
  // variabili dichiarate
  $minuscole = 'abcdefghijklmnopqrstuvwxyz';
  $maiuscole= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ' ;
  $numeri= '1234567890';
  $simboli = '!?&%$<>^+-*/()[]{}@#_=';
  $randpassword = '';
  // uniamo le stringhe delle variabili sopra dichiarate 
  $caratteri = $minuscole . $maiuscole . $numeri . $simboli ;
  for ($i=0; $i < $n ; $i++) { 
    $index = rand(0, strlen($caratteri) - 1);
    $randpassword .= $caratteri[$index];
  }

  return $randpassword;
}

?>