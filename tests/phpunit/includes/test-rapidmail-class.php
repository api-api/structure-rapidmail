<?php

class Rapidmail_TestCase extends Structure_TestCase {
	/**
	 * @var \APIAPI\Core\APIAPI
	 */
	protected $apiapi;

	/**
	 * @var \APIAPI\Structure_Rapidmail\Structure_Rapidmail
	 */
	protected $api;

	protected function setUp() {

		$username = getenv( 'RAPIDMAIL_USER' );
		$password = getenv( 'RAPIDMAIL_PASSWORD' );

		$config = array(
			'transporter'            => 'curl',
			'rapidmail'                => array(
				'authentication_data' => array(
					'username'   => $username,
					'password'   => $password
				)
			)
		);

		$this->apiapi = apiapi( 'test-api', $config );
	}
}