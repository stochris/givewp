<?php

namespace Give\Vendor\PayPal\PayPalHttp;

/**
 * Class HttpRequest
 * @package PayPalHttp
 *
 * Request object that holds all the necessary information required by HTTPClient
 *
 * @see HttpClient
 */
class HttpRequest {

	/**
	 * @var string
	 */
	public $path;
	/**
	 * @var array | string
	 */
	public $body;
	/**
	 * @var string
	 */
	public $verb;
	/**
	 * @var array
	 */
	public $headers;
	function __construct( $path, $verb ) {
		$this->path    = $path;
		$this->verb    = $verb;
		$this->body    = null;
		$this->headers = [];
	}
}
