<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends MY_Controller {

	public function index()
	{
		$this->output('report_view');
	}
}
