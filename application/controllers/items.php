<?php
class Items extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
        $this->load->helper('url');
		$this->load->model('items_model');
	}

	public function index()
	{
		$data['items'] = $this->items_model->get_items();
		$data['title'] = 'Inventory Archive';

		$this->load->view('templates/header', $data);
		$this->load->view('items/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($slug)
	{
		$data['item'] = $this->items_model->get_items($slug);

		if (empty($data['item']))
		{
			show_404();
		}

		$data['title'] = $data['item']['title'];

		$this->load->view('templates/header', $data);
		$this->load->view('items/view', $data);
		$this->load->view('templates/footer');
	}

	public function create()
	{

		if($this->ion_auth->logged_in())
		{

			$this->load->helper('form');
			$this->load->library('form_validation');

			$data['title'] = 'Create a listing item';

			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('text', 'text', 'required');

			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('templates/header', $data);
				$this->load->view('items/create');
				$this->load->view('templates/footer');
			}
			else
			{
				$this->items_model->set_items();
				$this->load->view('items/success');
			}
		}
		else
		{
			redirect('/auth/login');
		}
	}
}