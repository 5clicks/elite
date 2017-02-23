<?php
class Publik_model extends CI_Model {
	
	function getLatestPictures(){
		
		$this->db->where('type','image');
		$this->db->order_by('id', 'DESC');
		$query=$this->db->get('media');
		return $query->result_array();
	}

	function getLatestVideos(){
		
		$this->db->where('type','video');
		$this->db->order_by('id', 'DESC');
		$query=$this->db->get('media');
		return $query->result_array();
	}

	function getLatestPicturesVideos(){
		
		$this->db->where('type','video');
		$this->db->or_where('type','image');
		$this->db->order_by('id', 'DESC');
		$query=$this->db->get('media');
		return $query->result_array();
	}

	function getLatestAudios(){
		
		$this->db->where('type','audio');
		$this->db->order_by('id', 'DESC');
		$this->db->limit('10');
		$query=$this->db->get('media');
		return $query->result_array();
	}
	function getLatestScholarship(){
		$this->db->order_by('id','DESC');
		$query=$this->db->get('scholarships');
		return $query->result_array();
	}

}
?>