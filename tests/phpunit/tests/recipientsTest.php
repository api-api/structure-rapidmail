<?php

require_once dirname( dirname( __FILE__ ) ) . '/includes/bootstrap.php';

class RecipientTests extends Rapidmail_TestCase {
	use Recipient_List;

	/**
	 * Recipient List ID.
	 *
	 * @var int $recipient_list_id
	 */
	private $recipient_list_id;

	/**
	 * Setting up test.
	 *
	 * - Recipient list and id
	 */
	public function setUp() {
		parent::setUp();
		$this->recipient_list_id = $this->create_recipient_list();
	}

	/**
	 * Tearing down test.
	 *
	 * - Recipient list and id
	 */
	public function tearDown() {
		parent::tearDown();
		$this->delete_recipient_list( $this->recipient_list_id );
	}

	/**
	 * Running tests.
	 */

	/**
	 * Testing POST parameters.
	 *
	 * @throws \APIAPI\Core\Exception\Invalid_Request_Exception
	 * @throws \APIAPI\Core\Exception\Module_Not_Registered_Exception
	 */
	public function testPost() {
		$request = $this->apiapi->get_request_object( 'rapidmail', '/recipients', 'POST' );
		$request->set_param( 'email', 'sven@awesome.ug' );
		$request->set_param( 'recipientlist_id', $this->recipient_list_id );
		$response = $this->apiapi->send_request( $request );

		$this->assertEquals( 201, $response->get_response_code() );
	}

	/**
	 * Testing GET parameters.
	 *
	 * @throws \APIAPI\Core\Exception\Invalid_Request_Exception
	 * @throws \APIAPI\Core\Exception\Module_Not_Registered_Exception
	 */
	public function testGet() {
		$request = $this->apiapi->get_request_object( 'rapidmail', '/recipients', 'GET' );
		$request->set_param( 'recipientlist_id', 1460 );
		$response = $this->apiapi->send_request( $request );

		$this->assertEquals( 200, $response->get_response_code() );
	}
}