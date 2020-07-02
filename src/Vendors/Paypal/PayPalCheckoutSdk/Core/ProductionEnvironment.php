<?php

namespace Give\Vendor\PayPal\PayPalCheckoutSdk\Core;

class ProductionEnvironment extends \Give\Vendor\PayPal\PayPalCheckoutSdk\Core\PayPalEnvironment {

	public function __construct( $clientId, $clientSecret ) {
		parent::__construct( $clientId, $clientSecret );
	}
	public function baseUrl() {
		return 'https://api.paypal.com';
	}
}
