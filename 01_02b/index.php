<?php
// Use the Console / Terminal for this exercise! 
$number = rand(1,30);
$guess = null;
echo $number;
// Checks to see if guess is not equal to number 
while( $guess != $number ) {
  $guess = readline('Guess between 1 and 30: ');
}
if ( $number == $guess ) {
  echo "Yes! You guessed correctly. \n\n";
} else {
  echo "Alas. Your guess is incorrect. \n\n";
}

die();