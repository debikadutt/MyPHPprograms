<?php
/**
 *  Print FizzBuzz
 *
 *  Author: Debika Dutt debika5017@gmail.com
 *  Date:   9/11/2018
 */
require_once('vendor/autoload.php');

class FizzBuzz {

	public function printFizzBuzz($n) {

		for ($i = 1; $i <= $n; $i++) {
			if ($i % 3 == 0 && $i % 5 == 0) {
				echo "<html>FizzBuzz</br></html>";
			} else if ($i % 3 == 0) {
				echo "<html>Fizz</br></html>";
			} else if ($i % 5 == 0) {
				echo "<html>Buzz</br></html>";
			} else {
				echo $i;
				echo "<html></br></html>";
			}
		}
	}
}
?>
