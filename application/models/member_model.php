<?php  
	class Member_model extends CI_MODEL{
		public function __construct(){
			parent::__construct();


		}

		public function getall(){
			return $this->db->get("user")->result();
		}
		public function getone($username){
			return $this->db->where("username",$username)->get("user")->row();
		}
		public function getonework($username){
			return $this->db->where("username",$username)->get("work")->row();
		}
		
		public function savecomment($ar = array()){
			$this->db->insert("comment",$ar);
		}
		public function savework($ar = array()){
			$this->db->insert("work",$ar);
		}
		public function saveuser($ar = array()){
			$this->db->insert("user",$ar);
		}

		public function update($id,$ar = array()){
			$this->db->where("id",$id)->update("user",$ar);
		}


		public function findeusername($username)
		{	
		    $rs = $this->db->where("username",$username)->count_all_results("user");
			if($rs==0){
				return TRUE;
			}
			return FALSE;
		}
		
		public function findemail($email){
			$rs = $this->db->where("email",$email)->count_all_results("user");
			if($rs==0){
				return TRUE;
			}
			return FALSE;
		}
		public function findemail_edit($email,$id){
			$rs = $this->db->where("email",$email)->where("id !=",$id)->count_all_results("user");
			if($rs==0){
				return TRUE;
			}
			return FALSE;
		}


	}
 ?>