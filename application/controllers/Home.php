<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library( 'form_validation' );
		$this->load->model( 'Data_model', 'model' );		
	}

	public function index()
	{
		$data = array(
				'controller'	=> 'home',	
				'title_view' 	=> 'Tiket',
				'sidebar_view' 	=> $this->load->view( 'sidebar', '', TRUE ),
				'table_header'	=> array( 'Start Time', 'Closing Time', 'User', 'Institusi', 'Aplikasi', 'Kategori', 'Jalur', 'Status' ),
				'data'			=> $this->model->tiket_get(),	
									
			);

		$data['data_institusi'] = $this->model->institusi_get();
		$data['data_aplikasi']	= $this->model->aplikasi_get();
		$data['data_kategori']	= $this->model->kategori_get();
		$data['data_jalur_helpdesk']	= $this->model->jalur_helpdesk_get();
		$data['data_status_tiket']	= $this->model->status_tiket_get();

		$data['content_view'] 	= $this->load->view( 'data/tiket_view', $data, TRUE );
		$data['add_view'] 		= $this->load->view( 'form/tiket', $data, TRUE );
		$data['delete_view']  	= $this->load->view( 'form/dialog_delete', $data, TRUE );
		
		

		$this->load->view('header');	
		$this->load->view('home', $data );
		$this->load->view('footer');
	}

	public function save()
	{
		//echo 'username: ' . $this->input->post('telepon');
		return $this->model->tiket_save();
	}

	
}
