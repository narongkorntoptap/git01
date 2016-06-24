<?php  
	class Member_model extends CI_MODEL{
		public function __construct(){
			parent::__construct();


		}

		public function getall(){
			return $this->db->get("user")->result();
		}
		public function getone($id){
			return $this->db->where("id",$id)->get("user")->row();
		}
		public function savecomment($ar = array()){
			$this->db->insert("comment",$ar);
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