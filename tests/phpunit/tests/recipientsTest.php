<?php

require_once dirname( dirname( __FILE__ ) ) . '/includes/bootstrap.php';

class RecipientTests extends Rapidmail_TestCase {
	use Recipientlist, Recipient;

	/**
	 * Setups made before a test.
	 *
	 * - Recipient list and id
	 */
	public function setUp() {
		parent::setUp();

		$this->create_recipientlist();
	}

	/**
	 * Tearing down after a test.
	 *
	 * - Recipient list and id
	 */
	public function tearDown() {
		parent::tearDown();

		$this->delete_recipientlist();
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
		$response = $this->create_recipient();

		$this->assertEquals( 201, $response->get_response_code() );

		$this->assertEquals( Data_Recipient::$email,  $response->get_param( 'email' ) );
		$this->assertEquals( $this->recipientlist_id,  $response->get_param( 'recipientlist_id' ) );
		$this->assertEquals( Data_Recipient::$firstname,  $response->get_param( 'firstname' ) );
		$this->assertEquals( Data_Recipient::$lastname,  $response->get_param( 'lastname' ) );
		$this->assertEquals( Data_Recipient::$gender,  $response->get_param( 'gender' ) );
		$this->assertEquals( Data_Recipient::$title,  $response->get_param( 'title' ) );
		$this->assertEquals( Data_Recipient::$zip,  $response->get_param( 'zip' ) );
		// $this->assertEquals( Data_Recipient::$birthdate,  $response->get_param( 'birthdate' ) );
		$this->assertEquals( Data_Recipient::$foreign_id,  $response->get_param( 'foreign_id' ) );
		$this->assertEquals( Data_Recipient::$mailtype,  $response->get_param( 'mailtype' ) );
		$this->assertEquals( Data_Recipient::$extra1,  $response->get_param( 'extra1' ) );
		$this->assertEquals( Data_Recipient::$extra2,  $response->get_param( 'extra2' ) );
		$this->assertEquals( Data_Recipient::$extra3,  $response->get_param( 'extra3' ) );
		$this->assertEquals( Data_Recipient::$extra4,  $response->get_param( 'extra4' ) );
		$this->assertEquals( Data_Recipient::$extra5,  $response->get_param( 'extra5' ) );
		$this->assertEquals( Data_Recipient::$extra6,  $response->get_param( 'extra6' ) );
		$this->assertEquals( Data_Recipient::$extra7,  $response->get_param( 'extra7' ) );
		$this->assertEquals( Data_Recipient::$extra8,  $response->get_param( 'extra8' ) );
		$this->assertEquals( Data_Recipient::$extra9,  $response->get_param( 'extra9' ) );
		$this->assertEquals( Data_Recipient::$extra10,  $response->get_param( 'extra10' ) );
		// $this->assertEquals( Data_Recipient::$created_ip,  $response->get_param( 'created_ip' ) );
		// $this->assertEquals( Data_Recipient::$created_hostname,  $response->get_param( 'created_hostname' ) );
	}

	/**
	 * Test DELETE parameters.
	 *
	 * @throws \APIAPI\Core\Exception\Invalid_Request_Exception
	 * @throws \APIAPI\Core\Exception\Module_Not_Registered_Exception
	 */
	public function testDelete() {
		$this->create_recipient();
		$response = $this->delete_recipient();

		$this->assertEquals( 204, $response->get_response_code() );
	}

	/**
	 * Testing GET parameters.
	 *
	 * @throws \APIAPI\Core\Exception\Invalid_Request_Exception
	 * @throws \APIAPI\Core\Exception\Module_Not_Registered_Exception
	 */
	public function testGet() {
		$this->create_recipient();
		$request = $this->apiapi->get_request_object( 'rapidmail', '/recipients', 'GET' );
		$request->set_param( 'recipientlist_id', $this->recipientlist_id );
		$response = $this->apiapi->send_request( $request );

		$_embedded = $response->get_param( '_embedded' );

		$recipients = $_embedded['recipients'];
		$this->assertEquals( Data_Recipient::$email, $recipients[ 0 ]['email'] );

		$this->assertEquals( 200, $response->get_response_code() );
		$this->delete_recipient();
	}

	/**
	 * Testing PATCH parameters.
	 *
	 * @throws \APIAPI\Core\Exception\Invalid_Request_Exception
	 * @throws \APIAPI\Core\Exception\Module_Not_Registered_Exception
	 */
	public function testPatch() {
		$this->create_recipient();

		$request = $this->apiapi->get_request_object( 'rapidmail', '/recipients/(?P<id>[\\d]+)', 'PATCH' );
		$request->set_param( 'id', $this->recipient_id );
		$request->set_param( 'firstname', 'Jan' );

		$response = $this->apiapi->send_request( $request );
		$this->assertEquals( 200, $response->get_response_code() );
		$this->assertEquals( 'Jan', $response->get_param('firstname' ) );

		$this->delete_recipient();
	}
}