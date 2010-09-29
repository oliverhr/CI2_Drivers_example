<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Document_xls extends CI_Driver implements IDocument {

	private $extension;

	function __construct()
	{
		$this->extension = '.xls';
	}

	public function save()
	{
		return $this->get_name() . $this->extension;
	}

} // End of class Document_invoice

// End of file application/libraries/Document/drivers/Document_invoice.php
