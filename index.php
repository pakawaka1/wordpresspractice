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



// ROUND NUMBER FUNCTION - USING THE AREA OF CIRCLE

// $radius = 5;
// $area = pi()*pow($radius, 2);
// $rounded = round($area, 2);

// echo "The area is " . $rounded . ".";
 

//date timezone function

// date_default_timezone_set('America/Tijuana');

// echo "The year is " . date("Y");
// echo "<br>";
// echo "Today is " . date('l');
// echo '<br>';
// echo "The time is " . date('g:ia');


// date_default_timezone_set('America/Tijuana');

// echo date('l jS F Y');
// echo "<br>";
// echo "Today is " . date('l') . '.';
// echo "<br>";
// echo date('l d F, Y');
// echo "<br>";
// echo date('Y/m/d');
// echo "<br>";
// echo date('l jS F Y, g:ia');
// echo '<br>';

// if (date('L') == 1) {
//   echo date('Y') . ' is a leap year.';
// } else {
//   echo date('Y') . '  is not a leap year.';
// };

// echo '<br>';
// echo '<br>';
// 

//     <form action="" method="post">
//         <input type="text" name="surname">
//         Male<input type="radio" name="gender" value="Male">
//         Female<input type="radio" name="gender" value="Female">
//         Submit<input type="submit" name="Submit">

//     </form>
// <?php

//   $surname = $_POST['surname'];
//   $gender = $_POST['gender'];

//   echo 'Your surname is ' . $surname . ' and your gender is ' . $gender . '.';



// 

// temperature conversion

// <form action="" method="post">
//         <input type="number" name="temperature">
//         Celsius<input type="radio" name="celsius" value="celsius">
//         Fahrenheit<input type="radio" name="fahrenheit" value="fahrenheit">
//         Submit<input type="submit" name="submit" value="CONVERT">

//     </form>
// <?php

  // $temp = $_POST['temperature'];
  // $celsius = $_POST['celsius'];
  // $fahrenheit = $_POST['fahrenheit'];

  // if ($celsius) {
  //   $convert = ($temp * 9 / 5 + 32);
  //   echo 'Your temperature of ' . $temp . ' degrees Celsius is also ' . $convert . ' degrees Fahrenheit';
  // } else {
  //   $convert1 = (($temp - 32) * 5/9);
  //   echo 'Your temperature of ' . $temp . ' degrees Fahrenheit is also ' . $convert1 . '  degrees Celsius';
  // }

  // if(isset($_POST['submit'])) {
  //   $temp = $_POST['temperature'];
  //   $units = $_POST['units'];

  //   if ($units == "celsius") {
  //     $result = ($temp * 9 / 5 + 32);
  //   } else {
  //     $result = (($temp - 32) * 5/9);
  //   }

  //   echo 'The converted temperature is ' . $result . '.';
  // }

  // ?>


<!-- Word and Sentence Count -->

<!-- <form action="" method="post">
  <input type="text" name="sentence">
  Submit<input type="submit" name="submit" value="Find Count">
</form> -->




 <?php 

    // if(isset($_POST['submit'])) {
    //   $sentence = $_POST['sentence'];
    //   $length = strlen($sentence);    
    //   $words = str_word_count($sentence);

    //   echo "There are " . $length . " characters " . " and " . $words . " words in the sentence " . $sentence . ".";
    //   }

    // $sentence = "This is a sentence.";

    // $length = strlen($sentence);

    // $words = str_word_count($sentence);

    // echo "The length of the string is " . $length;
    // echo "<br>";
    // echo "The word count of this sentence is " . $words;


    // String Replacement 

    // $string = "John|Paul|Ringo|George";

    // $newString = str_replace('|', ', ', $string);

    // echo $newString;

    // String Randomizing

        // $string = "I am a leveler.";

        // $newString = str_shuffle($string);

        // echo $newString;

    // String decoding

    
      // $decode = "Rafher gung lbh orpbzr snzvyvne jvgu cuc shapgvbaf nf gurl ner rkgerzryl hfrshy.";

    
      // $encoded = str_rot13($decode);


      // echo $encoded;
?>

   <?php

     //  echo "This is Sam's apple! <br>";
     //  echo "Sam said, \"Hello, Colin. How's your new PHP course going?\" <br>";

    //   echo "Sam's mother ordered a new book called \"A Day in My Life\" from her local bookstore.";
    

    // // Arrays Practice
    
    // $names = array('Mary', 'James', 'Joseph', 'SLayer');
    
    // echo "<pre>";
    // print_r($names);

    // $cities = ['London', 'Paris', 'London'];

    // print_r($cities);

    // $mixed = [5, 'mixed', "John", -3];

    // print_r($mixed);

    // //  Looping through Arrays

    // $names = array('Mary', 'James', 'Joseph', 'SLayer');

    // echo "<ol>";

    // foreach($names as $name) {
    //   echo "<li>" . $name . "</li>";
    // }

    // echo "</ol>";

    // How to Split a String and Place Into An Array in PHP

    // $word = "Christmas";

    // $letter= str_split($word, 2);  //sprit into sections of 2

    // $letters = str_split($word, 3);  //sprit into sections of 3

    // $letterss = str_split($word, 4);  //sprit into sections of 4



    // echo "<pre>";
    // print_r ($letter);
    // print_r ($letters);
    // print_r ($letterss);
  ?>

<!-- ISBN Number Check Form -->

<!-- <form action="isbn-process-php" method="post">
    <input type="text" name="isbn">
    Submit<input type="submit" name="submit" value="Check ISBN">
</form>  -->


<?php

// // check if form submitted

// if(isset($_POST['submit'])) {

//   // post assign variables

//   $isbn = $_POST['isbn'];

//   //  total, incrementor

//   $total = 0;
//   $i = 1;

//   // split the string

//   $digits = str_split($isbn);

//   // loop through the array

//   foreach($digits as $digit) {

//     // update total = digit * 1, 2, 3, etc.
//     $total += $digit * $i;
//     $i++;
//     var_dump($digit);
//   }
//   // check if divisible by 11
//   if($total % 11 == 0) {
//     echo "This ISBN is valid";
//   } else {
//     echo "This ISBN IS NO BUENO!";
//   }
// }
//   // echo message
// 
?>



<?php

// // Bad Word Replacement

// // Start with the string 

// $string = "I love this website but feel that the stupid fucking comments are detracting from the user experience. The person who wrote this must be fucking stupid.";

// // create the array of badwords you want to replace

// $badWords = array("shit", "fuck", "stupid");

// // loop through the array 

// foreach($badWords as $badWord){

//   // replace the $badwords in the array with asterisks

//   $string = str_replace($badWord, "********", $string);
// }

// // print the edited string 
// echo $string;

?>
<?php

// Sorting data in an array in PHP

// $words = ['Shit', 'Piss', 'Smegma', 'Fuck'];

// sort($words);

// echo "<ol>";

// foreach($words as $word) {
//   echo "<li>" . $word . "</li>";
// }


// echo "</ol>";


//  Exploding and Imploding Strings 

// $string = 'John, Sally, Ben, Jerry, Ice Cream';

// $names = explode(', ', $string);

// echo '<pre>';
// print_r($names);

// $imploded = implode('|', $names);

// echo '<pre>';
// print_r($imploded);

// Adding Elements to an Array

// $cities = ['Paris', 'London', 'New York'];

// echo '<pre>';
// print_r($cities);

// array_push($cities,'Los Angeles', 'San Francisco'); //push moves the items to the end of the array

// print_r($cities);

// array_unshift($cities, 'Amsterdam', 'Dublin'); //unshift moves the new items to the front of the array

// print_r($cities);

// PRACTICE 

// $cities = ["London", "Paris", "Amsterdam", "New York", "Berlin", "Brisbane"];
// sort($cities);

// echo "<ol>";

// foreach($cities as $city) {
//   echo "<li>" . $city . "</li>";
// }

// echo "</ol>";
// array_push($cities, "Sydney", "Helsinki", "Beijing", "Dublin", "Rome" );


// sort($cities);

// echo "<ol>";


// foreach($cities as $city) {
//   echo "<li>" . $city . "</li>";
// }


// echo "</ol>";

// Removing an element from the beginning/end of an array


// $cities = ["London", "Paris", "Amsterdam", "New York", "Berlin", "Brisbane"];

// $lastCity = array_pop($cities); // removes the last element from the array 

// echo $lastCity;

// echo '<br>';


// echo '<ol>';

// foreach($cities as $city) {
//   echo "<li>" . $city . "</li>";
// }

// echo '</ol>';

// echo '<br>';

// sort($cities);


// $firstcity = array_shift($cities); // removes the first element from the array 


// echo '<ol>';

// foreach($cities as $city) {
//   echo "<li>" . $city . "</li>";
// }

// echo '</ol>';

// echo '<br>';

// //splitting an array

// $cities = ["London", "Paris", "Amsterdam", "New York", "Berlin", "Brisbane"];

// $result = array_slice($cities, 2);  //removes the first two elements of array

// echo '<pre>';
// print_r($result);

// $result = array_slice($cities, 0, 4); // only adds for the first 4 values of the array

// echo '<pre>';
// print_r($result);


// $result = array_slice($cities, -3, 3); // prints the last three elements of an arrayccc

// echo '<pre>';
// print_r($result);

// ASSOCIATIVE ARRAYS

// $capitals = array(
//   "Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels",
//   "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris",
//   "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin",
//   "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam",
//   "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm", "United
// Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius", "Czech
// Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest",
//   "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna",
//   "Poland" => "Warsaw"
// );

// asort($capitals);

// foreach ($capitals as $country => $city) {
//   echo 'The capital city of ' . $country . ' is ' . $city . '<br>';
// }

// FUNCTIONS

// function hello()
// {
//   echo "Hello World!";
// };

// hello();

// function multiply($number1, $number2)
// {
//   $result = $number1 * $number2;
//   echo $result;
// };

// multiply(12, 5);

// echo '<br>';

// multiply(13, 324234);

// REMEMBER YOU ONLY CAN RETURN A SINGLE VALUE FROM A FUNCTION

// function uppercase($name1, $name2)
// {
//   $result1 = strtolower($name1);
//   $result2 = strtolower($name2);
//   return $result1;
//   return $result2;

// }

// echo uppercase("Smith", "Jones");

// BUT HERE WE CAN RETURN MORE THAN ONE VALUE IN A FUNCTION

function calculate($number1, $number2)
{
  $add = $number1 + $number2;
  $subtract = $number1 - $number2;
  return array($add, $subtract);
}

$results = calculate(10, 3);

echo $results[0];
echo '<br>';
echo $results[1];