<?php

class model_barang extend CI_model{
	public function tampil_data(){
		return $this->db->get('sayuran');
	}
}