<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Load extends CI_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

	public function backbonejs() {

		$html = 'test script';

		return $html;
	}

}

?>