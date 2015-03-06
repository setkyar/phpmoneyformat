<?php namespace SetKyar\MoneyFormat;

/**
* 
* @author Set Kyar Wa Lar
*/
class MoneyFormat
{
	/**
	 * Format money with number_format
	 * @param $price is price ammount & $sign is money sing
	 * @author Set Kyar Wa Lar
	 **/
	public function Format($price = '', $sing = '') {
		return $sing .' '. number_format($price);
	}

	
}