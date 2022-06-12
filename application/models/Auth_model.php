<?php 
class Auth_model extends CI_Model 
{

	public function __construct()
	{
        parent::__construct();
	}

	function register($username,$password,$nama)
	{
		$data_user = array(
			'username'=>$username,
			'password'=>password_hash($password,PASSWORD_DEFAULT),
			'nama'=>$nama
		);
		$this->db->insert('tb_user',$data_user);
	}

	function login($username,$password)
	{
        $query = $this->db->get_where('admin',array('username'=>$username));
        if($query->num_rows() > 0)
        {
            $data_user = $query->row();
            if ( $password == $data_user->password) {
                $this->session->$username;
				
                return TRUE;
            } else {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
	}
	
    function cek_login()
    {
        if(empty($this->session->userdata('is_login')))
        {
			redirect('login');
		}
    }
}
?>