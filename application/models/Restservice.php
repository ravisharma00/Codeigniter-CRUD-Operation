<?php
class Restservice extends CI_Model
{
		protected $_table = 'student';
		protected $primary_key = 'id';
		protected $return_type = 'array';

	public function student_get($id){
		$this->db->select('*');
		$this->db->from('student');
	    $this->db->where('id',$id);
	    return $this->db->get()->row();

	}
	public function students_get(){
		$this->db->select('*');
		$this->db->from('student');
		return $this->db->get()->result();
	}
	public function student_post($data){
		$this->db->from('student');
		$this->db->insert('student',$data);
	}
}
