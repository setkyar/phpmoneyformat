<?php namespace SetKyar\MoneyFormat;

/**
* 
* @author Set Kyar Wa Lar
*/
class MoneyFormat
{
	/**
	 * undocumented function
	 *
	 * @author Set Kyar Wa Lar
	 **/
	public function Format($price = '', $sing = '') {
		return $sing .' '. number_format($price);
	}
}