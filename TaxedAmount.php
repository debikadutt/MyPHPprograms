<?php
/**
 *  Print TaxedAmount
 *
 *  Author: Debika Dutt debikadutt@gmail.com
 *  Date:   9/11/2018
 */
require_once('vendor/autoload.php');

class TaxedAmount {

	public function printNetAmount($amount, $tax) {

		$net = $amount - ($amount * ($tax/100));
		echo "$".number_format($net, 2);
	}
}
?>
