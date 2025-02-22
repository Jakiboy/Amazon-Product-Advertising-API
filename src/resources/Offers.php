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
 * Apaapi <Offers> : High level resource.
 * @see https://webservices.amazon.com/paapi5/documentation/offers.html
 */
final class Offers extends Resource
{
	/**
	 * Set items.
	 */
	public function __construct()
	{
		$this->items = [
			'Listings.Availability.MaxOrderQuantity',
			'Listings.Availability.Message',
			'Listings.Availability.MinOrderQuantity',
			'Listings.Availability.Type',
			'Listings.Condition',
			'Listings.Condition.ConditionNote',
			'Listings.Condition.SubCondition',
			'Listings.DeliveryInfo.IsAmazonFulfilled',
			'Listings.DeliveryInfo.IsFreeShippingEligible',
			'Listings.DeliveryInfo.IsPrimeEligible',
			'Listings.DeliveryInfo.ShippingCharges',
			'Listings.IsBuyBoxWinner',
			'Listings.LoyaltyPoints.Points',
			'Listings.MerchantInfo',
			'Listings.Price',
			'Listings.ProgramEligibility.IsPrimeExclusive',
			'Listings.ProgramEligibility.IsPrimePantry',
			'Listings.Promotions',
			'Listings.SavingBasis',
			'Summaries.HighestPrice',
			'Summaries.LowestPrice',
			'Summaries.OfferCount'
		];
	}
}
