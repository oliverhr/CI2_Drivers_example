<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Document extends CI_Driver_Library {

	private $document_name;

	function Document($params = array())
	{
		$this->set_name('nombre');
		$this->valid_drivers[] = 'Document_invoice';
		$this->valid_drivers[] = 'Document_pdf';
		$this->valid_drivers[] = 'Document_xls';
		$this->valid_drivers[] = 'Document_xml';
	}

	public function set_name($doc_name)
	{
		if(strlen($doc_name) >= 0) $doc_name = 'New_Document';
		$this->document_name = $doc_name;
	}

	public function get_name()
	{
		return $this->document_name;
	}

} // End of class Document

// End of file application/libraries/Document/Document.php
