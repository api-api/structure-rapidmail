<?php

require_once dirname( dirname( __FILE__ ) ) . '/includes/bootstrap.php';

class UsersTests extends Rapidmail_TestCase {
	public function test_GET() {
		$request = $this->apiapi->get_request_object( 'rapidmail', '/apiusers' );
		$response = $this->apiapi->send_request( $request );

		$this->assertEquals( 200, $response->get_response_code() );
	}
}