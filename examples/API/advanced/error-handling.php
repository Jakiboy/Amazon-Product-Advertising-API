<?php
/**
 * @author    : Jakiboy
 * @package   : Amazon Product Advertising API Library (v5)
 * @version   : 1.3.x
 * @copyright : (c) 2019 - 2025 Jihad Sinnaour <mail@jihadsinnaour.com>
 * @link      : https://jakiboy.github.io/apaapi/
 * @license   : MIT
 *
 * This file if a part of Apaapi Lib.
 */

declare(strict_types=1);

include '../../src/Autoloader.php';
\apaapi\Autoloader::init();

use Apaapi\operations\SearchItems;
use Apaapi\lib\Request;
use Apaapi\lib\Response;

// Set operation
$operation = new SearchItems();
$operation->setPartnerTag('_TAG_')->setKeywords('_KEYWORDS_');

// Prapere request
$request = new Request('_KEY_', '_SECRET_');
$request->setLocale('_LOCALE_')->setPayload($operation);

// Get response
$response = new Response($request);
$data = $response->get(); // Array

// Handle response error
if ( $response->hasError() ) {
	echo $response->getError(); // String
}
var_dump($data);

// Any PR is welcome!
