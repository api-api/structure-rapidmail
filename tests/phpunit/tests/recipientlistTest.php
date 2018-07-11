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
	public function testPost() {
		$response = $this->create_recipientlist();

		$this->assertEquals( 201, $response->get_response_code() );

		$this->assertEquals( Data_Recipientlist::$name,  $response->get_param( 'name' ) );
		$this->assertEquals( Data_Recipientlist::$description,  $response->get_param( 'description' ) );
		$this->assertEquals( Data_Recipientlist::$unsubscribe_blacklist,  $response->get_param( 'unsubscribe_blacklist' ) );
		$this->assertEquals( Data_Recipientlist::$recipient_subscribe_email,  $response->get_param( 'recipient_subscribe_email' ) );
		$this->assertEquals( Data_Recipientlist::$default,  $response->get_param( 'default' ) );
	}
}