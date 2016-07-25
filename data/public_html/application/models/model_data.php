<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_data extends CI_Model {
	public function comment ($value)
	{
		
		$this->db->select('isi_comment,tanggal_comment,nama_user');
		$this->db->from('comment');
		$this->db->join('user', 'user.id_user = comment.id_user', 'left');
		$this->db->where('page', $value);
		$this->db->get()->result_object();

	}
	

}

/* End of file model_data.php */
/* Location: .//C/Users/CHECKER/AppData/Local/Temp/fz3temp-1/model_data.php */