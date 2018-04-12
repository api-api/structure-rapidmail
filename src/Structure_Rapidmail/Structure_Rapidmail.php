<?php
/**
 * Structure_Rapidmail class
 *
 * @package APIAPI\Structure_Billomat
 * @since   1.0.0
 */

namespace APIAPI\Structure_Rapidmail;

use APIAPI\Core\Structures\Structure;
use APIAPI\Core\Request\Method;

if ( ! class_exists( 'APIAPI\Structure_Rapidmail\Structure_Rapidmail' ) ) {

	/**
	 * Structure implementation for Rapidmail.
	 *
	 * @since 1.0.0
	 */
	class Structure_Rapidmail extends Structure {
		/**
		 * Sets up the API structure.
		 * This method should populate the routes array, and can also be used to
		 * handle further initialization functionality, like setting the authenticator
		 * class and default authentication data.
		 *
		 * @since 1.0.0
		 */
		protected function setup() {
			$this->title         = 'Rapidmail API';

			$this->description   = 'Allows to access and manage the data in your Rapidmail account.';
			$this->base_uri      = 'https://apiv3.emailsys.net/v1/';

			$this->authenticator = 'basic';

			$this->routes['/apiusers'] = array(
				'methods' => array(
					Method::GET  => array(
						'description'          => 'Get Token',
						'needs_authentication' => true,
						'request_data_type'    => 'json',
						'params'               => array(
							'page'        => array(
								'description' => 'Pagenumber',
								'type'        => 'integer',
							)
						)
					),
					Method::POST => array(
						'description'          => 'Creates a Rapidmail user',
						'needs_authentication' => true,
						'request_data_type'    => 'json',
						'params'          => array(
							'id'    => array(
								'description' => 'User Id',
								'type'        => 'integer'
							),
							'username'    => array(
								'description' => 'Username',
								'type'        => 'string'
							),
							'password'    => array(
								'description' => 'Password',
								'type'        => 'string'
							),

						)
					)
				)
			);
		}
	}
}
