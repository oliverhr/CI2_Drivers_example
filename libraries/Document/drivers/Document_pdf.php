<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

require_once('IDocument.php');

class Document_pdf extends CI_Driver implements IDocument {

	private $extension;

	function Document_pdf()
	{
		$this->extension = '.pdf';
	}

	public function save()
	{
		return $this->get_name() . $this->extension;
	}

} // End of class Document_invoice

// End of file application/libraries/Document/drivers/Document_invoice.php
