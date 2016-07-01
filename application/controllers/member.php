<?php 
class Member extends CI_CONTROLLER{
	public function __construct(){
		parent::__construct();
		$this->load->model("member_model","member");
		$this->load->helper(array('form', 'url'));
		$this->load->library("form_validation");
		$this->load->library("upload");
		

	}
	public function index(){
		$this->rs = $this->member->getall();
		$this->load->view("member/index",$this);
	}
	public function create(){

		$config = array(
			array(
					"field"=>"username",
					"label"=>"username",
					"rules"=>"required|callback_username_check"
				),
			array(
					"field"=>"password",
					"label"=>"password",
					"rules"=>"required"
				),
			array(
					"field"=>"fname",
					"label"=>"fistname",
					"rules"=>"required"
				),
			array(
					"field"=>"lname",
					"label"=>"surname",
					"rules"=>"required"
				),
			array(
					"field"=>"phone",
					"label"=>"telephone",
					"rules"=>"required"
				),
			array(
					"field"=>"email",
					"label"=>"email",
					"rules"=>"required|valid_email|callback_check_exists_email"
				),
			array(
					"field"=>"text",
					"label"=>"text",
					"rules"=>"required"
				)
			
		);
		$this->form_validation->set_rules($config);
		if($this->form_validation->run()==FALSE){
			$this->load->view("create/index");
		}
		else{
			if($_FILES['file_name']['name'] != ""){	
	            $config['upload_path'] ='images/flag';
	            $config['allowed_types'] = 'jpg|png'; 
	            $config['overwrite'] = false; 

	            $_FILES['file_name']['name'] =  uniqid().$_FILES['file_name']['name'];
	            $ext =pathinfo($_FILES['file_name']['name'], PATHINFO_EXTENSION);
	            $config['file_name']= $_FILES['file_name']['name']; 
	            $imgname = $config['file_name'];

	            $this->upload->initialize($config);
	            $this->load->library('upload', $config);    
            	if(!$this->upload->do_upload('file_name')){
	                $error = $this->upload->display_errors();
	                $data= array('error'=>$error,);
	                $this->load->view('error',$data);
	                return false;
                }
       	   	}
       	   	// $this->member->savecomment(array(
       	   	// 		"username"=>$this->input->post("username"),
       	   	// 		"beautiful"=>$this->input->post("beautiful"),
		       	  //  	"work"=>$this->input->post("work"),
		       	  //  	"code"=>$this->input->post("code"),
		       	  //  	"time"=>$this->input->post("time")
       	   	// 	));
			$this->member->saveuser(array(
					"username"=>$this->input->post("username"),
					"password"=>md5($this->input->post("password")),
					"fname"=>$this->input->post("fname"),
					"lname"=>$this->input->post("lname"),
					"phone"=>$this->input->post("phone"),
					"email"=>$this->input->post("email"),
					"text"=>$this->input->post("text"),
					"sdate"=>date('Y-m-d'),
					"upload"=>$imgname
				));		
			redirect("");
		}
		// if($_SERVER['REQUEST_METHOD']=="POST"){
		// 	$this->member->save(array(
		// 			"username"=>$this->input->post("username"),
		// 			"password"=>$this->input->post("password"),
		// 			"fname"=>$this->input->post("fname"),
		// 			"lname"=>$this->input->post("lname"),
		// 			"phone"=>$this->input->post("phone"),
		// 			"email"=>$this->input->post("email"),
		// 			"text"=>$this->input->post("text"),
		// 			"sdate"=>date('Y-m-d')
		// 		));
		// 	redirect("member"); 
		// }
		// $this->load->view("member/create");
	}
	public function update(){
		$id = $this->input->post("id");
		$config = array(
			array(
					"field"=>"email",
					"label"=>"email",
					"rules"=>"required|valid_email|callback_check_exists_email_edit[$id]"
				)
		);
		$this->form_validation->set_rules($config);

		if($this->form_validation->run()==FALSE){
			// echo "string";
			// exit();
			$this->r = $this->member->getone($id);
			$this->load->view("update/index",$this);
		}
		else{
			if($_FILES['file_name']['name'] != "")
         	{	

	            $config['upload_path'] ='images/flag';
	            $config['allowed_types'] = 'jpg|png'; 
	            $config['overwrite'] = false; 

	            $_FILES['file_name']['name'] =  uniqid().$_FILES['file_name']['name'];
	            $ext =pathinfo($_FILES['file_name']['name'], PATHINFO_EXTENSION);
	            $config['file_name']= $_FILES['file_name']['name']; 
	            $imgname = $config['file_name'];

	            $this->upload->initialize($config);
	            $this->load->library('upload', $config);    
            	if(!$this->upload->do_upload('file_name'))
                {
	                $error = $this->upload->display_errors();
	                $data= array('error'=>$error,);
	                $this->load->view('error',$data);
	                return false;
                }
                $this->member->update($id,array(
					"username"=>$this->input->post("username"),
					"password"=>md5($this->input->post("password")),
					"fname"=>$this->input->post("fname"),
					"lname"=>$this->input->post("lname"),
					"phone"=>$this->input->post("phone"),
					"email"=>$this->input->post("email"),
					"text"=>$this->input->post("text"),
					"edate"=>date('Y-m-d'),
					"upload"=>$imgname
				));
       	   	}
       	   	else{
			$this->member->update($id,array(
					"username"=>$this->input->post("username"),
					"password"=>md5($this->input->post("password")),
					"fname"=>$this->input->post("fname"),
					"lname"=>$this->input->post("lname"),
					"phone"=>$this->input->post("phone"),
					"email"=>$this->input->post("email"),
					"text"=>$this->input->post("text"),
					"edate"=>date('Y-m-d'),
					// "upload"=>$imgname
				));
       	   	 }
			$this->show();
		}
	}
	public function edit(){
		$id = $this->input->post("id");
		$username = $this->input->post("username");
		// echo $id;
		// exit();
		$config = array(
			array(
					"field"=>"email",
					"label"=>"email",
					"rules"=>"required|valid_email|callback_check_exists_email_edit[$id]"
				)
		);
		$this->form_validation->set_rules($config);
		if($this->form_validation->run()==FALSE){
			// echo $username;
			// exit();
			$this->r = $this->member->getone($username);
			$this->load->view("updateadmin/index",$this);
		}
		else{
			if($_FILES['file_name']['name'] != "")
         	{	
	            $config['upload_path'] ='images/flag';
	            $config['allowed_types'] = 'jpg|png'; 
	            $config['overwrite'] = false; 

	            $_FILES['file_name']['name'] =  uniqid().$_FILES['file_name']['name'];
	            $ext =pathinfo($_FILES['file_name']['name'], PATHINFO_EXTENSION);
	            $config['file_name']= $_FILES['file_name']['name']; 
	            $imgname = $config['file_name'];
	            
	            $this->upload->initialize($config);
	            $this->load->library('upload', $config);    
            	if(!$this->upload->do_upload('file_name'))
                {
	                $error = $this->upload->display_errors();
	                $data= array('error'=>$error,);
	                $this->load->view('error',$data);
	                return false;
                }
                $this->member->update($id,array(
						"username"=>$this->input->post("username"),
						"password"=>md5($this->input->post("password")),
						"fname"=>$this->input->post("fname"),
						"lname"=>$this->input->post("lname"),
						"phone"=>$this->input->post("phone"),
						"email"=>$this->input->post("email"),
						"text"=>$this->input->post("text"),
						"edate"=>date('Y-m-d'),
						"upload"=>$imgname
					));
       	   	} 
       	   	else{
				$this->member->update($id,array(
						"username"=>$this->input->post("username"),
						"password"=>md5($this->input->post("password")),
						"fname"=>$this->input->post("fname"),
						"lname"=>$this->input->post("lname"),
						"phone"=>$this->input->post("phone"),
						"email"=>$this->input->post("email"),
						"text"=>$this->input->post("text"),
						"edate"=>date('Y-m-d'),
						// "upload"=>$imgname
					));
			}
			$this->showone($username);	
		}
	}
	public function delete(){
		$id = $this->input->post("id");
		$this->db->where("id",$id)->delete("user");
		redirect("member/show");
	}

	public function edit_id(){
		$id = $this->input->post("id");
		$this->edit($id);
	}
	
	public function check_exists_email($email){
		$check = $this->member->findemail($email);
		if($check){
			return TRUE;
		}
		else{
			$this->form_validation->set_message("check_exists_email","เมล์ซ้ำนาจาาาา");
			return FALSE;
		}
	}
	public function username_check($username){
		// echo $username;
		$check = $this->member->findeusername($username);
		if($check){
			return TRUE;
		}
		else{
			$this->form_validation->set_message("username_check","username มีแล้วนาจาาา");
			return FALSE;
		}
	}

	public function check_exists_email_edit($email,$id){
		// echo "email".$email." ";
		// echo "id".$id;

		$check = $this->member->findemail_edit($email,$id);
		
		if($check){
			return TRUE;
		}
		else{
			$this->form_validation->set_message("check_exists_email_edit","เมล์ซ้ำนาจาาาา");
			return FALSE;
		}
	}

	public function login(){
		if($_SERVER['REQUEST_METHOD']=="POST"){
			$username = $this->input->post("username");
			$password = $this->input->post("password");
			if($username=="admin"&&$password=="admin"){
				$this->show();
			}
			else{
			// echo $username;
			// echo $password;
				$this->r = $this->db->where("username",$username)->get("user")->row();
				if($this->r->id==''){
					redirect("member/login");
				}
				else{
					$this->showone($this->r->username);
				}
			}
		}
		else{
			$this->load->view("login/index");
		}
	}
	public function show(){
		$this->rs = $this->member->getall();
		$this->r = $this->db->get("comment")->result();
		$this->load->view("show/index",$this);

	}
	public function showone($username){
		// echo $username;
		// exit();
		$this->r = $this->member->getone($username);
		$this->rs = $this->member->getonework($username);
		$this->load->view("showone/index",$this);
	}
	public function comment(){
		$id = $this->input->post("id");
		$username = $this->input->post("username");
		$this->r = $this->db->where("id",$id)->where("username",$username)->get("user")->row();
		$this->rs = $this->db->where("username",$username)->get("comment")->row();
		$this->load->view("comment/index",$this);
	}
	public function commentusershow(){
		$username = $this->input->post("username");
		$this->rs = $this->db->where("username",$username)->get("user")->row();
		$this->load->view("commentuser/index",$this);
	}
	public function commentuser(){
		$username = $this->input->post("username");
		$id = $this->input->post("id");

		$config = array(
			array(
					"field"=>"beautiful",
					"label"=>"ความสวยงาม",
					"rules"=>"required"
				),
			array(
					"field"=>"work",
					"label"=>"การใช้งาน",
					"rules"=>"required"
				),
			array(
					"field"=>"code",
					"label"=>"อธิบายโค้ด",
					"rules"=>"required"
				),
			array(
					"field"=>"time",
					"label"=>"ระยะเวลา",
					"rules"=>"required"
				)

		);

		

		$this->form_validation->set_rules($config);
		if($this->form_validation->run()==FALSE){
			$this->rs = $this->member->getone($id);
			$this->load->view("commentuser/index",$this);
		}
		else{	  
			$this->member->savecomment(array(
       	   			"username"=>$username,
       	   			"beautiful"=>$this->input->post("beautiful"),
		       	   	"work"=>$this->input->post("work"),
		       	   	"code"=>$this->input->post("code"),
		       	   	"time"=>$this->input->post("time")
       	   		));
			$this->member->update($id,array(
						"username"=>$this->input->post("username"),
						"password"=>md5($this->input->post("password")),
						"fname"=>$this->input->post("fname"),
						"lname"=>$this->input->post("lname"),
						"phone"=>$this->input->post("phone"),
						"email"=>$this->input->post("email"),
						"text"=>$this->input->post("text"),
						"sdate"=>$this->input->post("sdate"),
						"edate"=>$this->input->post("edate"),
						"upload"=>$this->input->post("upload"),
						"comment"=>"1"
					));
			$this->showone($id);
		}
		
	}


	public function work(){
		$username = $this->input->post("username");
		$this->rs = $this->db->where("username",$username)->get("user")->row();
		$this->load->view("input_diary/input",$this);
	}

	public function creatework(){
		$username = $this->input->post("username");
		$id = $this->input->post("id");

		$config = array(
			array(
					"field"=>"stime",
					"label"=>"เวลาเริ่มทำงาน",
					"rules"=>"required"
				),
			array(
					"field"=>"etime",
					"label"=>"เวลาเลิกงาน",
					"rules"=>"required"
				),
			array(
					"field"=>"inmoney",
					"label"=>"รายรับ",
					"rules"=>"required"
				),
			array(
					"field"=>"outmoney",
					"label"=>"รายจ่าย",
					"rules"=>"required"
				),
			array(
					"field"=>"des",
					"label"=>"ลายละเอียด",
					"rules"=>"required"
				)
		);

	
		$this->form_validation->set_rules($config);
		if($this->form_validation->run()==FALSE){
			// echo "string";
			// exit();
			$this->rs = $this->member->getone($id);
			// echo "<pre>";
			// print_r($this->rs);
			// exit();
			$this->load->view("input_diary/input",$this);
		}
		else{
			$date1 = date('Y-m-d');
			$date2 = date_create($date1);
			$y = date_format($date2,'Y');
			$m = date_format($date2,'m');
			$d = date_format($date2,'d');	
			// echo $y;
			// echo $m;
			// echo $d;  
			// exit();
			$this->member->savework(array(
       	   			"username"=>$username,
       	   			"year"=>$y,
       	   			"month"=>$m,
       	   			"day"=>$d,
		       	   	"stime"=>$this->input->post("stime"),
		       	   	"etime"=>$this->input->post("etime"),
		       	   	"inmoney"=>$this->input->post("inmoney"),
		       	   	"outmoney"=>$this->input->post("outmoney"),
		       	   	"des"=>$this->input->post("des")
       	   		));
			$this->member->update($id,array(
						"username"=>$this->input->post("username"),
						"password"=>md5($this->input->post("password")),
						"fname"=>$this->input->post("fname"),
						"lname"=>$this->input->post("lname"),
						"phone"=>$this->input->post("phone"),
						"email"=>$this->input->post("email"),
						"text"=>$this->input->post("text"),
						"sdate"=>$this->input->post("sdate"),
						"edate"=>$this->input->post("edate"),
						"upload"=>$this->input->post("upload"),
						"comment"=>"1",
						"work"=>"1"
					));
			$this->showone($username);
		}
		
	}
	public function worktime(){
		$year = $this->input->post("year");
		$month = $this->input->post("month");
		$username = $this->input->post("username");
		// echo $username;
		// echo $year;
		// echo $month;
		// exit();
		$this->r = $this->member->getone($username);
		$this->rs = $this->member->getoneworktime($username,$year,$month);
		$this->load->view("showonetime/index",$this);

	}

	public function resultall()
	{

		$username = $this->input->post("username");
		$this->rs = $this->db->where("username",$username)->get("work")->result();

		$this->load->view("resul/index",$this);

	}


}
 ?>