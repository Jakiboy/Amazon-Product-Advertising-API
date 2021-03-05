<?php
/**
 * @author    : JIHAD SINNAOUR
 * @package   : Apaapi
 * @version   : 1.0.8
 * @copyright : (c) 2019 - 2021 Jihad Sinnaour <mail@jihadsinnaour.com>
 * @link      : https://jakiboy.github.io/apaapi/
 * @license   : MIT
 *
 * This file if a part of Apaapi Lib
 */

namespace Apaapi\exceptions;

/**
 * Basic Apaapi Operation Exception Class
 */
final class ResponseTypeException extends MainException
{
	/**
	 * @access protected
	 * @var int $code
	 * @return string
	 */
	protected function getError($code)
	{
		$code = intval($code);
		switch ($code) {
			case 1:
				return 'Invalid Response Type Format [Object/Array/Serialized]';
				break;
		}
	}
}
