<?php

trait Recipient_List {
	/**
	 * Creating recipient list.
	 *
	 * @return int $id The ID of the recipient list.
	 * @throws \APIAPI\Core\Exception\Invalid_Request_Exception
	 * @throws \APIAPI\Core\Exception\Module_Not_Registered_Exception
	 */
	protected function create_recipientlist() {
		$request = $this->apiapi->get_request_object( 'rapidmail', '/recipientlists', 'POST' );
		$request->set_param('name', 'Test List' );
		$response = $this->apiapi->send_request( $request );

		$id = $response->get_param('id' );

		return $id;
	}

	/**
	 * Deleting recipient list.
	 *
	 * @param int $recipientlist_id Recipient list id.
	 *
	 * @return \APIAPI\Core\Request\Route_Response
	 * @throws \APIAPI\Core\Exception\Invalid_Request_Exception
	 * @throws \APIAPI\Core\Exception\Module_Not_Registered_Exception
	 */
	protected function delete_recipientlist( $recipientlist_id ) {
		$request = $this->apiapi->get_request_object( 'rapidmail', '/recipientlists/(?P<id>[\\d]+)', 'DELETE' );
		$request->set_param( 'id', $recipientlist_id );
		return $this->apiapi->send_request( $request );
	}
}