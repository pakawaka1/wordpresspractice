<?php get_header(); ?>

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

  $a = 6;
  
  if ($a % 3 == 0) {
    echo "number is a multiple of 3";
  } else if ($a % 4 == 0) {
    echo "number is multiple of 4";
  } else if ($a % 5 == 0) {
    echo "number is a multiple of 5";
  } else {
    echo "number is not a multiple of 3, 4, or 5";
  }

  
?>

<?php get_footer(); ?>
