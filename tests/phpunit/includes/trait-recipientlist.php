<?php

/**
 * Trait Recipientlist.
 *
 * @var \APIAPI\Core\APIAPI $apiapi
 */
trait Recipientlist {
	/**
	 * @var \APIAPI\Core\APIAPI
	 */
	protected $apiapi;

	/**
	 * Created recipientlist id
	 *
	 * @var int $recipientlist_id
	 */
	protected $recipientlist_id;

	/**
	 * Creating recipient list.
	 *
	 * @return \APIAPI\Core\Request\Route_Response
	 * @throws \APIAPI\Core\Exception\Invalid_Request_Exception
	 * @throws \APIAPI\Core\Exception\Module_Not_Registered_Exception
	 */
	protected function create_recipientlist() {
		$request = $this->apiapi->get_request_object( 'rapidmail', '/recipientlists', 'POST' );

		$request->set_param( 'name', Data_Recipientlist::$name );
		$request->set_param( 'description', Data_Recipientlist::$description );
		$request->set_param( 'unsubscribe_blacklist', Data_Recipientlist::$unsubscribe_blacklist );
		$request->set_param( 'recipient_subscribe_email', Data_Recipientlist::$recipient_subscribe_email );

		/*
		$request->set_param( 'subscribe_confirmation_email_from', Data_Recipientlist::$subscribe_confirmation_email_from );
		$request->set_param( 'subscribe_confirmation_email_subject', Data_Recipientlist::$subscribe_confirmation_email_subject );
		$request->set_param( 'subscribe_confirmation_email_from_name', Data_Recipientlist::$subscribe_confirmation_email_from_name );
		$request->set_param( 'subscribe_confirmation_email_body', Data_Recipientlist::$subscribe_confirmation_email_body );
		$request->set_param( 'subscribe_confirmation_email_body_html', Data_Recipientlist::$subscribe_confirmation_email_body_html );
		$request->set_param( 'subscribe_confirmation_welcome_email_from', Data_Recipientlist::$subscribe_confirmation_welcome_email_from );
		$request->set_param( 'subscribe_confirmation_welcome_email_from_name', Data_Recipientlist::$subscribe_confirmation_welcome_email_from_name );
		$request->set_param( 'subscribe_confirmation_welcome_email_subject', Data_Recipientlist::$subscribe_confirmation_welcome_email_subject );
		$request->set_param( 'subscribe_confirmation_welcome_email_body', Data_Recipientlist::$subscribe_confirmation_welcome_email_body );
		$request->set_param( 'subscribe_confirmation_welcome_email_body_html', Data_Recipientlist::$subscribe_confirmation_welcome_email_body_html );
		$request->set_param( 'unsubscribe_confirmation_email_from', Data_Recipientlist::$unsubscribe_confirmation_email_from );
		$request->set_param( 'unsubscribe_confirmation_email_from_name', Data_Recipientlist::$unsubscribe_confirmation_email_from_name );
		$request->set_param( 'unsubscribe_confirmation_email_subject', Data_Recipientlist::$unsubscribe_confirmation_email_subject );
		$request->set_param( 'unsubscribe_confirmation_email_body', Data_Recipientlist::$unsubscribe_confirmation_email_body );
		$request->set_param( 'unsubscribe_confirmation_email_body_html', Data_Recipientlist::$unsubscribe_confirmation_email_body_html );
		$request->set_param( 'unsubscribe_confirmation_goodbye_email_from', Data_Recipientlist::$unsubscribe_confirmation_goodbye_email_from );
		$request->set_param( 'unsubscribe_confirmation_goodbye_email_from_name', Data_Recipientlist::$unsubscribe_confirmation_goodbye_email_from );
		$request->set_param( 'unsubscribe_confirmation_goodbye_email_subject', Data_Recipientlist::$unsubscribe_confirmation_goodbye_email_subject );
		$request->set_param( 'unsubscribe_confirmation_goodbye_email_body', Data_Recipientlist::$unsubscribe_confirmation_goodbye_email_body );
		$request->set_param( 'unsubscribe_confirmation_goodbye_email_body_html', Data_Recipientlist::$unsubscribe_confirmation_goodbye_email_body_html );
		$request->set_param( 'default', Data_Recipientlist::$default );
		*/

		$response =  $this->apiapi->send_request( $request );

		$this->recipientlist_id = $response->get_param( 'id' );

		return $response;
	}

	/**
	 * Deleting recipient list.
	 *
	 * @return \APIAPI\Core\Request\Route_Response
	 * @throws \APIAPI\Core\Exception\Invalid_Request_Exception
	 * @throws \APIAPI\Core\Exception\Module_Not_Registered_Exception
	 */
	protected function delete_recipientlist() {
		$request = $this->apiapi->get_request_object( 'rapidmail', '/recipientlists/(?P<id>[\\d]+)', 'DELETE' );
		$request->set_param( 'id',  $this->recipientlist_id  );
		return $this->apiapi->send_request( $request );
	}
}