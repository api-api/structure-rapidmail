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