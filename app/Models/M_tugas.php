<?php

namespace App\Models;
use CodeIgniter\Model;

class M_tugas extends model
{
	public function Tampil($kamu){
		return $this->db->table($kamu)->get()->getResult();
	}
	public function hapus($table, $where){
		return $this->db->table($table)->delete($where);
	}
} 