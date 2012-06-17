<?php

class Pages extends CI_Controller {

	protected $section = 'pages';

	public function index()
	{
		$this->view('index');
	}

	public function view($page = 'index')
	{
		if (!file_exists('application/views/'.$this->section.'/'.$page.'.php'))
		{
			// Page does not exist
			show_404();
		}
		
		$data['section'] = $this->section;
		$data['title'] = ucfirst($page); // Capitalize the first letter
		if (strcasecmp($data['title'], 'index') == 0)
		{
			$data['title'] = ucfirst($this->section);
		}
		
		$this->load->view('templates/header', $data);
		$this->load->view($this->section.'/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}
}