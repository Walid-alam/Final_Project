<?php

class Cart_model extends CI_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function get_all_product(){
		$query=$this->db->select('product.*,manufacturer.*,categories.*')->join('manufacturer','product.m_name = manufacturer.m_name')->join('categories','product.category_name =categories.category_name')->get('product');
		return $query->result();

	}
	public function get_single_product($id)
	{
		$product=$this->db->where('p_id',$id)->get('product')->result();
		if($product)
		{
			return $product[0];
		}else
			echo "product not valid";
	}
	public function update_product($info)
	{
		$this->db->where('p_id',$info['p_id'])->update('product',array(
			'p_qty'=>$info['p_qty'],'p_price'=>$info['p_price'],'p_name'=>$info['p_name']
			));

	}
	public function delete_product_data($info)
	{
		$this->db->where('p_id',$info['p_id']);
		$this->db->delete('product');
		$this->db->order_by('UPPER(p_id)',"desc");
	}


	public function insert_cart($info)
		{
			$data=array(
			//'id'=>$info['id'],
			'p_name'=>$info['name'],
			'p_image'=>$info['image'],
			'p_qty'=>$info['qty'],
			'p_price'=>$info['price'],
			'p_description'=>$info['description'],
			'category_name'=>$info['category'],
			'm_name'=>$info['manufacturer']
			
			);

			$this->db->insert('product',$data);
		}
	public function insert_database($info)
	{
		$data=array(
			'u_id'=>$info['u_id'],
			'full_name'=>$info['full_name'],
			'email'=>$info['email'],
			'address'=>$info['address'],
			'mobile'=>$info['mobile'],
			'city'=>$info['city'],
			'country'=>$info['country']
			
			);

			$this->db->insert('shipping',$data);

	}
	public function insert_payment_database($info)
	{
		$data=array(
			'pay_type'=> $info['payment_type'],
			'status' => 'pending'
			);
		$this->db->insert('payment',$data);
		$query1 = $this->cart_model->get_shipping_info();

		$query2 = $this->cart_model->get_payment_info();

			if($query1 == true)
				{
					$data = array(
					'ship'=> $query1[0]->s_id
					);
					$this->session->set_userdata('shipping',$data);
				}
			if($query2 == true)
				{
					$data = array(
					'pay'=> $query2[0]->pay_id
												);
					$this->session->set_userdata('payment',$data);
				}
				
		$data=array(
			'u_id'=>$this->session->userdata['logged_in']['id'],
			'pay_id'=>$this->session->userdata['payment']['pay'],
			's_id'=>$this->session->userdata['shipping']['ship'],
			'o_total'=>$this->cart->total(),
			'o_status'=>'pending'
			);
		$this->db->insert('order',$data);


	}
	public function get_shipping_info()
	{
		$query=$this->db->query('select * from shipping;');
		return $query->result();

	}
	public function get_payment_info()
	{
		$query=$this->db->query('select * from payment;');
		return $query->result();
	}
	public function get_all_category()
	{
		$query = $this->db->query('select * from categories');
		return $query->result();
	}
	public function get_selected_category($id)
	{
		$query=$this->db->where('category_name',$id)->get('product');
		return $query->result();
		
	}
}
?>