<?php

	Class okrs_model extends CI_model{
		public $code;
		public $obj_name;
		public $level;
		public $info;
		function __consturct(){
			parent::__consturct();

			$this->load->database('okrsdata');
		}
		function index(){

			echo "model";
		}
		function list_okrs(){
			$query = $this->db->get('okrs');
			return $query->result();

			}
		function insert(){
			$query = "INSERT INTO okrs
                (code,obj_name,level,info) VALUE (?,?,?,?)";
			$this->db->query($query, array($this->code,$this->obj_name,$this->level,$this->info) );
			return $query;
		}
		function delete(){
			
			$sql = "DELETE FROM okrs
			WHERE code=?";
			$query = $this->db->query($sql, array($this->code));
			return $query;
		}
		function edit(){
			$sql = "UPDATE okrs
				SET obj_name = ?
					, level = ?
					, info = ?
				WHERE code= ?";
	   $query = $this->db->query($sql, array($this->obj_name,$this->level,$this->info,$this->code) );
	   return $query;
		}
}
 ?>