


<?php
//access the global array called $_POST to get the values from the text fields



$answer1 = $_POST['M'];
$answer2 = $_POST['O'];
$answer3 = $_POST['N'];
$answer4 = $_POST['E'];
$answer5 = $_POST['Y'];

$totalCorrect = 0;
if ($answer1 == "human") { $totalCorrect++; }
if ($answer2 == "money") { $totalCorrect++; }
if ($answer3 == "money") { $totalCorrect++; }
if ($answer4 == "GTAV") { $totalCorrect++; }
if ($answer5 == "money") { $totalCorrect++; }

echo "1: What is evilest thing in the world?"."<br>";
echo "Your answer is: " .$answer1."<br>";
echo "The correct answer is: human"."<br><br>";

echo "2: What is the most powerful weapon?"."<br>";
echo "Your answer is: " .$answer2."<br>";
echo "The correct answer is: money"."<br><br>";

echo "3: What is the best food in the world?"."<br>";
echo "Your answer is: " .$answer3."<br>";
echo "The correct answer is: money"."<br><br>";

echo "4:Which one is the best game in the world?"."<br>";
echo "Your answer is: " .$answer4."<br>";
echo "The correct answer is: GTAV"."<br><br>";

echo "5:What is the best language?"."<br>";
echo "Your answer is: " .$answer5."<br>";
echo "The correct answer is: money"."<br><br>";

echo "Your score is ";
echo ($totalCorrect * 20),"%"

?>