<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class m_data extends CI_Model {

    function data($number,$offset){
		return $query = $this->db->get('peserta_toafl',$number,$offset)->result();		
	}
 
	function jumlah_data(){
		return $this->db->get('peserta_toafl')->num_rows();
	}

}

/* End of file m_data.php */
