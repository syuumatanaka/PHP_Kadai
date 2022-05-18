<?php

function fizzBuzz(int $max){

    for($i = 1; $i <= $max; ++$i) {

   if($i%3===0&&$i%5===0){
   $s="Fizz Bizz ";

   }
   elseif($i%3===0){
     $s="Fizz \n";

  }
  elseif($i%5===0){
   $s="Bizz ";

  }

  else{
      $s="{$i}";
}

  echo "{$s}";
    }

}
fizzBuzz(50);
?>