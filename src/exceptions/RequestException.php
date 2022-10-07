<?php
/**
 * @author    : JIHAD SINNAOUR
 * @package   : Apaapi | Amazon Product Advertising API Library (v5)
 * @version   : 1.1.1
 * @copyright : (c) 2019 - 2022 Jihad Sinnaour <mail@jihadsinnaour.com>
 * @link      : https://jakiboy.github.io/apaapi/
 * @license   : MIT
 *
 * This file if a part of Apaapi Lib.
 */

namespace Apaapi\exceptions;

/**
 * Basic Apaapi Operation Exception Class
 */
final class RequestException extends MainException
{
	/**
	 * @access protected
	 * @var int $code
	 * @return string
	 */
	protected function getError($code)
	{
		switch ((int)$code) {
			case 1:
				return 'Invalid Request Locale';
				break;
		}
	}
}
