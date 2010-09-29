<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Document_invoice extends CI_Driver {

	private $format;

	function Document_invoice()
	{
		//
	}

	public function save()
	{
		return $this->get_name() . $this->extension;
	}

} // End of class Document_invoice

// End of file application/libraries/Document/drivers/Document_invoice.php
