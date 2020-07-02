<?php

namespace Give\Vendor\PayPal\PayPalHttp\Serializer;

use Give\Vendor\PayPal\PayPalHttp\HttpRequest;
use Give\Vendor\PayPal\PayPalHttp\Serializer;
/**
 * Class Text
 * @package PayPalHttp\Serializer
 *
 * Serializer for Text content types.
 */
class Text implements \Give\Vendor\PayPal\PayPalHttp\Serializer {

	public function contentType() {
		return '/^text\\/.*/';
	}
	public function encode( \Give\Vendor\PayPal\PayPalHttp\HttpRequest $request ) {
		$body = $request->body;
		if ( \is_string( $body ) ) {
			return $body;
		}
		if ( \is_array( $body ) ) {
			return \json_encode( $body );
		}
		return \implode( ' ', $body );
	}
	public function decode( $data ) {
		return $data;
	}
}
