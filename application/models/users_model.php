<?php

class Users_model extends CI_Model{


	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_all_users(){
		$query=$this->db->get('user');
		return $query->result();
	}
	
	public function get_single_user($userid)
	{
		$user = $this->db->where('u_id', $userid)->get('user')->result();
		if($user) {
			return $user[0];
		} else {
			echo("user not valid");
		}

	}

	public function update_user_data($info)
	{
		$this->db->where('u_id', $info['id'])->update('user', array(
			'u_name' => $info['u_name'] ,'u_email'=>$info['u_email'] ,'u_password'=>$info['u_password'] ,'u_mobile'=>$info['u_mobile'],'u_address'=>$info['u_address']
		));
	}
	public function delete_user_data($info)
	{
		$this->db->where('u_id',$info['u_id']);
		$this->db->delete('user');
	}
	public function insert_database($info)
	{
		$data=array(
			//'id'=>$info['u_id'],
			'u_name'=>$info['u_name'],
			'u_email'=>$info['u_email'],
			'u_password'=>$info['u_password'],
			'u_mobile'=>$info['u_mobile'],
			'u_address'=>$info['u_address'],
			'u_type'=>'user',
			'City'=>$info['City'],
			'Country'=>$info['Country']
			
			);
		$this->db->insert('user',$data);
	}
	public function insert_category($info)
	{
		$data=array(
			'category_name'=>$info['name'],
			'status'=>1,
			'category_size'=>$info['size']
			);
		$this->db->insert('categories',$data);
	}
	public function get_man_category()
	{
		$man=$this->db->where('category_name','FASHION FOR MEN')->get('product');
		return $man->result();
	}
	public function get_man_acc_category()
	{
		$man=$this->db->where('category_name','ACCESORIES-MEN')->get('product');
		return $man->result();
	}
	public function get_woman_category()
	{
		$man=$this->db->where('category_name','FASHION FOR WOMEN')->get('product');
		return $man->result();
	}
	public function get_woman_acc_category()
	{
		$man=$this->db->where('category_name','ACCESORIES-WOMEN')->get('product');
		return $man->result();
	}
	public function get_gadget_category()
	{
		$man=$this->db->where('category_name','ELECTRONIC GADGET')->get('product');
		return $man->result();
	}
	public function get_all_order()
	{
		//$query = $this->db->get('order');
		//return $query->result();
	$this->db->select("*");
    $this->db->from("order");
    $this->db->order_by("o_date", "desc");
    $query = $this->db->get();
    return $query->result();
	}
	public function get_single_order($id)
	{
		$order = $this->db->where('u_id', $id)->get('order')->result();
		if($order) {
			return $order[0];
			
		} else {
			echo("user not valid");
		}
		

	}
	public function update_order($id)
	{
		$this->db->where('u_id',$id)->update('order',array(
			'o_status'=>'Approved'
			));
	}
	public function get_result($r)
	{
		$this->db->like('category_name',$r);
		$this->db->or_like('m_name',$r);
		$this->db->or_like('p_name',$r);
		$query = $this->db->get('product');
		return $query->result();
		$this->db->reconnect();
	}





	
}
?>