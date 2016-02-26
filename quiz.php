<?php

$answer1 = $_POST["question1"];
$answer2 = $_POST["question2"];
$answer3 = $_POST["question3"];
$answer4 = $_POST["question4"];
$answer5 = $_POST["question5"];

echo "<h1> Results </h1>";

echo "Question 1: What color is pikachu?<br>";
echo "You answered: " . $answer1 . "<br>";
echo "Correct answer: Yellow <br><br>";

echo "Question 2: What type is Quagsire?<br>";
echo "You answered: " . $answer2 . "<br>";
echo "Correct answer: Water/Ground <br><br>";

echo "Question 3: Which of the following is super effective on Bug type?<br>";
echo "You answered: " . $answer3 . "<br>";
echo "Correct answer: Rock <br><br>";

echo "Question 4: Which of the following is the Fire starter for the Johto region (gen. 2)?<br>";
echo "You answered: " . $answer4 . "<br>";
echo "Correct answer: Cyndaquil <br><br>";

echo "Question 5: What does the pokemon Lapras evolve into?<br>";
echo "You answered: " . $answer5 . "<br>";
echo "Correct answer: Does not evolve <br><br>";

$score = 0;
if($answer1 == "Yellow")
{
  $score++;
}
if($answer2 == "Water/Ground")
{
  $score++;
}
if($answer3 == "Rock")
{
  $score++;
}
if($answer4 == "Cyndaquil")
{
  $score++;
}
if($answer5 == "Does not evolve")
{
  $score++;
}

echo "You answered " . $score . " out of 5 questions correctly!<br><br>";
echo "Your score is: " . (($score/5)*100) . "%!";

?>
