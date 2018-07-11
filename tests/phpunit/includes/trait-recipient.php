<?php
/**
 * Trait Recipient.
 */
trait Recipient {
	/**
	 * @var \APIAPI\Core\APIAPI
	 */
	protected $apiapi;

	/**
	 * Created recipient id
	 *
	 * @var int $recipient_id
	 */
	protected $recipient_id;

	/**
	 * Created recipientlist id
	 *
	 * @var int $recipientlist_id
	 */
	protected $recipientlist_id;

	/**
	 * Create Recipient.
	 *
	 * @return \APIAPI\Core\Request\Route_Response
	 * @throws \APIAPI\Core\Exception\Invalid_Request_Exception
	 * @throws \APIAPI\Core\Exception\Module_Not_Registered_Exception
	 */
	protected function create_recipient() {
		$request = $this->apiapi->get_request_object( 'rapidmail', '/recipients', 'POST' );
		$request->set_header( 'Accept', 'application/json' );

		$request->set_param( 'email', Data_Recipient::$email);
		$request->set_param( 'recipientlist_id', $this->recipientlist_id );
		$request->set_param( 'firstname', Data_Recipient::$firstname );
		$request->set_param( 'lastname', Data_Recipient::$lastname );
		$request->set_param( 'gender', Data_Recipient::$gender );
		$request->set_param( 'title', Data_Recipient::$title );
		$request->set_param( 'zip', Data_Recipient::$zip );
		// $request->set_param( 'birthdate', Data_Recipient::$birthdate ); // @todo Not working despite correct name and value.
		$request->set_param( 'foreign_id', Data_Recipient::$foreign_id );
		$request->set_param( 'mailtype', Data_Recipient::$mailtype );
		$request->set_param( 'extra1', Data_Recipient::$extra1 );
		$request->set_param( 'extra2', Data_Recipient::$extra2 );
		$request->set_param( 'extra3', Data_Recipient::$extra3 );
		$request->set_param( 'extra4', Data_Recipient::$extra4 );
		$request->set_param( 'extra5', Data_Recipient::$extra5 );
		$request->set_param( 'extra6', Data_Recipient::$extra6 );
		$request->set_param( 'extra7', Data_Recipient::$extra7 );
		$request->set_param( 'extra8', Data_Recipient::$extra8 );
		$request->set_param( 'extra9', Data_Recipient::$extra9 );
		$request->set_param( 'extra10', Data_Recipient::$extra10 );
		$request->set_param( 'extrabig1', Data_Recipient::$extrabig1 );
		$request->set_param( 'extrabig2', Data_Recipient::$extrabig2 );
		$request->set_param( 'extrabig3', Data_Recipient::$extrabig3 );
		$request->set_param( 'extrabig4', Data_Recipient::$extrabig4 );
		$request->set_param( 'extrabig5', Data_Recipient::$extrabig5 );
		$request->set_param( 'extrabig6', Data_Recipient::$extrabig6 );
		$request->set_param( 'extrabig7', Data_Recipient::$extrabig7 );
		$request->set_param( 'extrabig8', Data_Recipient::$extrabig8 );
		$request->set_param( 'extrabig9', Data_Recipient::$extrabig9 );
		$request->set_param( 'extrabig10', Data_Recipient::$extrabig10 );
		// $request->set_param( 'created_ip', Data_Recipient::$created_ip ); // @todo Not working despite correct name and value.
		// $request->set_param( 'created_hostname', 'host.mysite.de' ); // @todo Not working despite correct name and value.

		$response = $this->apiapi->send_request( $request );

		$this->recipient_id = $response->get_param( 'id'  );

		return $response;
	}

	/**
	 * @return \APIAPI\Core\Request\Route_Response
	 * @throws \APIAPI\Core\Exception\Invalid_Request_Exception
	 * @throws \APIAPI\Core\Exception\Module_Not_Registered_Exception
	 */
	protected function delete_recipient() {
		$request = $this->apiapi->get_request_object( 'rapidmail', '/recipients/(?P<id>[\\d]+)', 'DELETE' );
		$request->set_param( 'id',  $this->recipient_id  );
		return $this->apiapi->send_request( $request );
	}
}