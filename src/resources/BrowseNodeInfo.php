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

namespace Apaapi\resources;

use Apaapi\lib\Resource;

/**
 * Apaapi <BrowseNodeInfo> : High level resource.
 * @see https://webservices.amazon.com/paapi5/documentation/browsenodeinfo.html
 */
final class BrowseNodeInfo extends Resource
{
	/**
	 * Set items.
	 */
	public function __construct()
	{
		$this->items = [
			'BrowseNodes',
			'BrowseNodes.Ancestor',
			'BrowseNodes.SalesRank',
			'WebsiteSalesRank'
		];
	}
}
