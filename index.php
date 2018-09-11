<?php
/**
 *  Bluetent Coding Challenge
 *
 *  Author: Debika Dutt debika5017@gmail.com
 *  Date:   9/11/2018
 */

require "FizzBuzz.php";
require "TaxedAmount.php";
require "FindAnagrams.php";

$fizz_buzz = new FizzBuzz();
$tax_amount = new TaxedAmount();
$find_anagrams = new FindAnagrams();

echo '<html><h2>QUESTION 1:</h2></html>';
$fizz_buzz->printFizzBuzz(100);
echo '<html></br></html>';
echo '<html><h2>QUESTION 2:</h2></html>';

$amount = 1000;
$tax = 10;
echo 'The amount is : <h3>$' . number_format($amount, 2) . '</h3> and tax is <h3>' . $tax . '%</h3>';
echo 'The net amount after tax is: <h3>';
$tax_amount->printNetAmount($amount, $tax);
echo '<html></h3></br></html>';
echo '<html><h2>QUESTION 3:</h2></html>';
$word1 = 'petal';
$word2 = 'letap';
echo 'The words are : <h3>' . $word1 . '</h3> and <h3>' . $word2 . '</h3>';
echo '<html></br></br></html>';
$result = $find_anagrams->isAnagram($word1, $word2);

if ($result) {
	echo 'Words are anagrams';
} else {
	echo 'Words are not anagrams';
}

?>
