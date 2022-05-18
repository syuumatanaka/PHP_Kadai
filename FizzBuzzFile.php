<?php
$text= __DIR__ . "/FizzBuzzFile.txt";

for($i=1;$i<=100;$i++){
  
 if ($i%3===0&&$i%5===0){
    file_put_contents($text, "Fizz Bizz \n", FILE_APPEND | LOCK_EX);
  
   }elseif($i%3===0){
    file_put_contents($text, "Fizz \n", FILE_APPEND | LOCK_EX); 
   
  }
  elseif($i%5===0){
  file_put_contents($text, "Bizz \n", FILE_APPEND | LOCK_EX);
  
  }
  
  else{
     file_put_contents($text, "{$i} \n", FILE_APPEND | LOCK_EX);
}
}


?>
