<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->load->driver('document');
		$data['parent_message']	= $this->document->get_name();
		$data['child_message']	= $this->document->invoice->save();
		$data['child_message']	.= '<br />';
		$data['child_message']	.= $this->document->pdf->save();
		$data['child_message']	.= '<br />';
		$data['child_message']	.= $this->document->xls->save();
		$data['child_message']	.= '<br />';
		$data['child_message']	.= $this->document->xml->save();

		$this->load->view('welcome_message', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
