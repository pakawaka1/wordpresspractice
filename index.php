<!-- <?php get_header(); ?> -->

<div>
  <h1>
    PHP Practice
  </h1>
</div>

<?php 

  // Numberic Equations

  // $number1 = 20;
  // $number2 = 35;

  // $answer = $number2 / $number1;

  // echo $answer;
  
  // $length = 10;
  // $width = 5;

  // $rectangle = $length * $width;

  // echo $rectangle;


////////////////////////////////////////////////////////////////////////////////

  // String concatenation 

  // $first = "John";
  // $middle = "Henry";
  // $last = "Smith";
  // $age = 42;
   
  // echo $first . " " . $middle . " " . $last . " " . "is" . " " . $age . " " ."years" . " " . "old.";

  // Sentence concatenation

  // $sentence2 = "The smelly old man ";
  // $sentence2 .= "jumped over the lazy dog.";

  // echo $sentence2;

  // $i = 0;
  
  // echo $i . "<br>";

  // $i = $i + 1;

  // echo $i . "<br>";

  // $i = $i + 1;

  // echo $i . "<br>";



  // If Statements

  // $a = 6;
  
  // if ($a % 3 == 0) {
  //   echo "number is a multiple of 3";
  // } else if ($a % 4 == 0) {
  //   echo "number is multiple of 4";
  // } else if ($a % 5 == 0) {
  //   echo "number is a multiple of 5";
  // } else {
  //   echo "number is not a multiple of 3, 4, or 5";
  // }


// For Loops

// for($i = 1; $i <= 10; $i++) {
//   echo $i . "<br>";
// }

// for($i = 2; $i <= 20; $i+=2) {
//   echo $i . "<br>";
// }



// for($i = 1; $i <= 100; $i++) {
//   if ($i % 3 == 0 && $i % 5 == 0) {
//     echo "FIZZ BUZZ <br>";
//     "<br>";
//   } else if ($i % 3 == 0) {
//     echo "FIZZ <br>";
//     "<br>";
//   } else if ($i % 5 == 0) {
//     echo "BUZZ <br>";
//   } else {
//     echo $i . "<br>";
//   }
// }
// While loops

// $i = 2;

// while ($i <= 10) {
//   echo $i . "<br>";
//   $i++;
// }

// while ($i <= 60) {
//   echo $i . "<br>";
//   $i+=6;

// RANDOM NUMBER GENERATOR

//  $randomNumber= rand(1, 100);

//  echo $randomNumber;


// $heads = 0;
// $tails = 0;

// for ($i = 1; $i <= 100; $i++) {
//   $r = rand(1, 2);
//   if ($r == 2) {
//     echo "Tails, I win!<br>";
//     $tails++;
//   } else {
//     echo "Heads, I win Punk!<br>";
//     $heads++;
//   }
// }

// echo "There were " . $tails . "tails and " . $heads . ".";



// ROUND NUMBER FUNCTION

$radius = 75;
$area = pi()*pow($radius, 2);
$rounded = round($area, 2);

echo "The area is " . $rounded . ".";
 






