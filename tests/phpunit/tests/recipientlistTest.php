<?php

require_once dirname( dirname( __FILE__ ) ) . '/includes/bootstrap.php';

class RecipientlistTest extends Rapidmail_TestCase {
	use Recipientlist;

	/**
	 * Testing POST parameters.
	 *
	 * @throws \APIAPI\Core\Exception\Invalid_Request_Exception
	 * @throws \APIAPI\Core\Exception\Module_Not_Registered_Exception
	 */
	public function test_POST() {
		$response = $this->create_recipientlist();

		$this->assertEquals( 201, $response->get_response_code() );

		$this->assertEquals( Data_Recipientlist::$name,  $response->get_param( 'name' ) );
		$this->assertEquals( Data_Recipientlist::$description,  $response->get_param( 'description' ) );
		$this->assertEquals( Data_Recipientlist::$unsubscribe_blacklist,  $response->get_param( 'unsubscribe_blacklist' ) );
		$this->assertEquals( Data_Recipientlist::$recipient_subscribe_email,  $response->get_param( 'recipient_subscribe_email' ) );
		$this->assertEquals( Data_Recipientlist::$default,  $response->get_param( 'default' ) );

		$this->delete_recipientlist();
	}

	/**
	 * Testing GET parameters.
	 *
	 * @throws \APIAPI\Core\Exception\Invalid_Request_Exception
	 * @throws \APIAPI\Core\Exception\Module_Not_Registered_Exception
	 */
	public function test_GET() {
		$this->create_recipientlist();

		$request = $this->apiapi->get_request_object( 'rapidmail', '/recipientlists', 'GET' );
		$response =  $this->apiapi->send_request( $request );

		$embedded = $response->get_param( '_embedded' );
		$recipientlists = $embedded[ 'recipientlists' ];

		// Find the created recipientlist
		foreach( $recipientlists AS $recipientlist ) {
			if( $recipientlist['id'] === $this->recipientlist_id ) {
				break;
			}
		}

		$this->assertEquals( Data_Recipientlist::$name, $recipientlist[ 'name' ] );

		$request = $this->apiapi->get_request_object( 'rapidmail', '/recipientlists/(?P<id>[\\d]+)', 'GET' );
		$request->set_param( 'id', $this->recipientlist_id );
		$response =  $this->apiapi->send_request( $request );

		$response->get_param( 'id' );

		$this->assertEquals( Data_Recipientlist::$name, $response->get_param( 'name' ) );

		$this->delete_recipientlist();
	}

	/**
	 * Testing DELETE parameters.
	 *
	 * @throws \APIAPI\Core\Exception\Invalid_Request_Exception
	 * @throws \APIAPI\Core\Exception\Module_Not_Registered_Exception
	 */
	public function test_DELETE() {
		$this->create_recipientlist();

		$response = $this->delete_recipientlist();
		$this->assertEquals(204, $response->get_response_code() );
	}

	/**
	 * Testing PATCH parameters.
	 *
	 * @throws \APIAPI\Core\Exception\Invalid_Request_Exception
	 * @throws \APIAPI\Core\Exception\Module_Not_Registered_Exception
	 */
	public function test_PATCH() {
		$this->create_recipientlist();

		$request = $this->apiapi->get_request_object( 'rapidmail', '/recipientlists/(?P<id>[\\d]+)', 'PATCH' );
		$request->set_param( 'id', $this->recipientlist_id );
		$request->set_param( 'name', 'A new list name' );
		$response =  $this->apiapi->send_request( $request );

		$this->assertEquals(200, $response->get_response_code() );
		$this->assertEquals('A new list name', $response->get_param( 'name' ) );

		$this->delete_recipientlist();
	}
}