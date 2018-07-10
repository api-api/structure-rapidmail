<?php

require_once dirname( dirname( __FILE__ ) ) . '/includes/bootstrap.php';

class RecipientTests extends Rapidmail_TestCase {
	private $recipient_list_id;

	/**
	 * Setting up test.
	 *
	 * - Recipientlist and ID
	 */
	public function setUp() {
		parent::setUp();
		$this->recipient_list_id = $this->create_recipient_list();
	}

	/**
	 * Tearing down test.
	 *
	 * - Recipientlist and ID
	 */
	public function tearDown() {
		parent::tearDown();
		$this->delete_recipient_list( $this->recipient_list_id );
	}

	/**
	 * Creating recipient list.
	 *
	 * @return int $id The ID of the recipient list.
	 * @throws \APIAPI\Core\Exception\Invalid_Request_Exception
	 * @throws \APIAPI\Core\Exception\Module_Not_Registered_Exception
	 */
	private function create_recipient_list() {
		$request = $this->apiapi->get_request_object( 'rapidmail', '/recipientlists', 'POST' );
		$request->set_param('name', 'Test List' );
		$response = $this->apiapi->send_request( $request );

		$id = $response->get_param('id' );

		return $id;
	}

	/**
	 * Deleting recipient list.
	 *
	 * @param int $recipient_list_id Recipient list id.
	 *
	 * @return \APIAPI\Core\Request\Route_Response
	 * @throws \APIAPI\Core\Exception\Invalid_Request_Exception
	 * @throws \APIAPI\Core\Exception\Module_Not_Registered_Exception
	 */
	private function delete_recipient_list( $recipient_list_id ) {
		$request = $this->apiapi->get_request_object( 'rapidmail', '/recipientlists/(?P<id>[\\d]+)', 'DELETE' );
		$request->set_param( 'id', $recipient_list_id );
		return $this->apiapi->send_request( $request );
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