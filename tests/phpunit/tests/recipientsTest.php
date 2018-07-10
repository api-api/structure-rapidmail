<?php

require_once dirname( dirname( __FILE__ ) ) . '/includes/bootstrap.php';

class RecipientTests extends Rapidmail_TestCase {
	use Recipient_List;

	/**
	 * Recipient List ID.
	 *
	 * @var int $recipientlist_id
	 */
	private $recipientlist_id;

	/**
	 * Recipient List ID.
	 *
	 * @var int $recipientlist_id
	 */
	private $recipient_id;

	/**
	 * Setting up test.
	 *
	 * - Recipient list and id
	 */
	public function setUp() {
		parent::setUp();
		$this->recipientlist_id = $this->create_recipientlist();
	}

	/**
	 * Tearing down test.
	 *
	 * - Recipient list and id
	 */
	public function tearDown() {
		parent::tearDown();
		$this->delete_recipientlist( $this->recipientlist_id );
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

		$request->set_param( 'email', 'test1@awesome.ug' );
		$request->set_param( 'recipientlist_id', $this->recipientlist_id );
		$request->set_param( 'firstname', 'Jon' );
		$request->set_param( 'lastname', 'Doe' );
		$request->set_param( 'gender', 'male' );
		$request->set_param( 'title', 'Dr.' );
		$request->set_param( 'zip', '55555' );
		//$request->set_param( 'birthdate', '1974-01-01T00:00:00.000Z' ); // @todo Not working despite correct name and value.
		$request->set_param( 'foreign_id', 12345 );
		$request->set_param( 'mailtype', 'html' );
		$request->set_param( 'extra1', 'Value of extra1' );
		$request->set_param( 'extra2', 'Value of extra2' );
		$request->set_param( 'extra3', 'Value of extra3' );
		$request->set_param( 'extra4', 'Value of extra4' );
		$request->set_param( 'extra5', 'Value of extra5' );
		$request->set_param( 'extra6', 'Value of extra6' );
		$request->set_param( 'extra7', 'Value of extra7' );
		$request->set_param( 'extra8', 'Value of extra8' );
		$request->set_param( 'extra9', 'Value of extra9' );
		$request->set_param( 'extra10', 'Value of extra10' );
		$request->set_param( 'extrabig1', 'Value of extrabig1' );
		$request->set_param( 'extrabig2', 'Value of extrabig2' );
		$request->set_param( 'extrabig3', 'Value of extrabig3' );
		$request->set_param( 'extrabig4', 'Value of extrabig4' );
		$request->set_param( 'extrabig5', 'Value of extrabig5' );
		$request->set_param( 'extrabig6', 'Value of extrabig6' );
		$request->set_param( 'extrabig7', 'Value of extrabig7' );
		$request->set_param( 'extrabig8', 'Value of extrabig8' );
		$request->set_param( 'extrabig9', 'Value of extrabig9' );
		$request->set_param( 'extrabig10', 'Value of extrabig10' );
		$request->set_param( 'created_ip', '127.0.0.1' );
		// $request->set_param( 'created_hostname', 'host.mysite.de' ); // @todo Not working despite correct name and value.

		$response = $this->apiapi->send_request( $request );
		$this->assertEquals( 201, $response->get_response_code() );

		$this->assertEquals( 'test1@awesome.ug',  $response->get_param( 'email' ) );
		$this->assertEquals( $this->recipientlist_id,  $response->get_param( 'recipientlist_id' ) );
		$this->assertEquals( 'Jon',  $response->get_param( 'firstname' ) );
		$this->assertEquals( 'Doe',  $response->get_param( 'lastname' ) );
		$this->assertEquals( 'male',  $response->get_param( 'gender' ) );
		$this->assertEquals( 'Dr.',  $response->get_param( 'title' ) );
		$this->assertEquals( '55555',  $response->get_param( 'zip' ) );
		// $this->assertEquals( '1974-01-01T00:00:00.000Z',  $response->get_param( 'birthdate' ) );
		$this->assertEquals( '12345',  $response->get_param( 'foreign_id' ) );
		$this->assertEquals( 'html',  $response->get_param( 'mailtype' ) );
		$this->assertEquals( 'Value of extra1',  $response->get_param( 'extra1' ) );
		$this->assertEquals( 'Value of extra2',  $response->get_param( 'extra2' ) );
		$this->assertEquals( 'Value of extra3',  $response->get_param( 'extra3' ) );
		$this->assertEquals( 'Value of extra4',  $response->get_param( 'extra4' ) );
		$this->assertEquals( 'Value of extra5',  $response->get_param( 'extra5' ) );
		$this->assertEquals( 'Value of extra6',  $response->get_param( 'extra6' ) );
		$this->assertEquals( 'Value of extra7',  $response->get_param( 'extra7' ) );
		$this->assertEquals( 'Value of extra8',  $response->get_param( 'extra8' ) );
		$this->assertEquals( 'Value of extra9',  $response->get_param( 'extra9' ) );
		$this->assertEquals( 'Value of extra10',  $response->get_param( 'extra10' ) );
		$this->assertEquals( '127.0.0.1',  $response->get_param( 'created_ip' ) );
		// $this->assertEquals( 'host.mysite.de',  $response->get_param( 'created_hostname' ) );

		$this->recipient_id = $response->get_param( 'id' );
	}

	/**
	 * Testing GET parameters.
	 *
	 * @throws \APIAPI\Core\Exception\Invalid_Request_Exception
	 * @throws \APIAPI\Core\Exception\Module_Not_Registered_Exception
	 */
	public function testGet() {
		$request = $this->apiapi->get_request_object( 'rapidmail', '/recipients', 'GET' );
		$request->set_param( 'recipientlist_id', $this->recipientlist_id );
		$response = $this->apiapi->send_request( $request );

		$this->assertEquals( 200, $response->get_response_code() );
	}
}