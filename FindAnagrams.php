<?php
/**
 *  Print FizzBuzz
 *
 *  Author: Debika Dutt debikadutt@gmail.com
 *  Date:   9/11/2018
 */
require_once('vendor/autoload.php');

class FindAnagrams {

	public function isAnagram($word1, $word2) {

		if (strlen($word1) !== strlen($word2)) {
			return false;
		}

		// convert words to lower case and check
	    return(count_chars(strtolower($word1), 1) == count_chars(strtolower($word2), 1));
	}
}
?>
