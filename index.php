
<?php
// https://youtu.be/F4OMwYwvkBg?si=iRxLMtYtM-cMOpti
// Arugument pass kora hoyasa.
function sum($num1,$num2){
  // Result ar maje veribal gula rakha hoyasa
  $result=$num1+$num2;
  // Pore result echo kore daowa hoyasa
 echo "Addition=".$result."<br>";

}
function sub($num1,$num2){
$result=$num1-$num2;
echo "Subtractipon=".$result."<br>";
}
function mul($num1,$num2){
  $result=$num1*$num2;
echo "Multification =".$result."<br>";
}
function div($num1,$num2){
  $result=$num1/$num2;
 echo "Devisition=".$result;
}
//ay jayga thaki ecca moto parameter pass kora hoyacsa 
sum(2,2);
sub(10,5);
mul(10,5);
div(10,5)
?>