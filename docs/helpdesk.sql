SELECT a.id, a.tiket_time, a.tiket_close, a.username, a.telepon,
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
