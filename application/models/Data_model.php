<?php defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );

class Data_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function tiket_get()
	{
		$q = 'SELECT a.id, a.tiket_time, a.tiket_close, a.username, a.telepon,
							d.name as nama_institusi,
							e.tipe_app as nama_aplikasi,
							c.tipe_kategori as kategori_helpdesk, 
							f.jalur,
							a.deskripsi,
							b.kategori as status_tiket
				FROM tiket a 
				INNER JOIN status_tiket b ON b.id = a.status_id
				INNER JOIN kategori c ON c.id = a.kategori_id
				INNER JOIN institusi d ON d.id = a.institusi_id
				INNER JOIN aplikasi e ON e.id = a.aplikasi_id
				INNER JOIN jalur_helpdesk f ON f.id = a.jalur_helpdesk_id
				ORDER BY a.id DESC';

		return $this->db->query( $q )->result();	
	}

	public function institusi_get()
	{
		$q = 'SELECT * FROM institusi';
		return $this->db->query( $q )->result();	
	}

	public function aplikasi_get()
	{
		$q = 'SELECT * FROM aplikasi';
		return $this->db->query( $q )->result();	
	}

	public function kategori_get()
	{
		$q = 'SELECT * FROM kategori';
		return $this->db->query( $q )->result();	
	}

	public function jalur_helpdesk_get()
	{
		$q = 'SELECT * FROM jalur_helpdesk';
		return $this->db->query( $q )->result();	
	}

	public function status_tiket_get()
	{
		$q = 'SELECT * FROM status_tiket';
		return $this->db->query( $q )->result();	
	}

	public function tiket_save()
	{
		$tiket_close = ( $this->input->post('status_tiket') == 1 ? date("Y-m-d H:i:s") : NULL );
		$q = "INSERT INTO tiket ( username, telepon, institusi_id, aplikasi_id, kategori_id, jalur_helpdesk_id, deskripsi, status_id, tiket_time, tiket_close ) 
					VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW(), ? )";

		return $this->db->query( $q, array( $this->input->post('username'), 
											$this->input->post('telepon'),
											$this->input->post('institusi'),
											$this->input->post('aplikasi'),
											$this->input->post('kategori'),
											$this->input->post('jalur_helpdesk'),
											$this->input->post('deskripsi'),											
											$this->input->post('status_tiket'),
											$tiket_close

					) );
		

	
	}


}