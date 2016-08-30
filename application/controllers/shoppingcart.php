<?php
class ShoppingCart extends CI_Controller
{
	public function buy($id)
	{
		$this->load->view('template/header',array(
			'title' =>'Buy Product'
		));
		$product=$this->mproduct->find($id);
		print_r($product);
		$data = array(
               'id'      => $product->p_id,
               'image'   => $product->p_image,
               'qty'     => 1,
               'price'   => $product->p_price,
               'name'    => $product->p_name
            );
		
		$this->cart->insert($data);
		$this->load->view('cart');
		$this->load->view('template/footer');
	}
	
	public function delete($rowid)
	{
		$this->load->view('template/header',array(
			'title' =>'Delete Product'
		));
		$this->cart->update(array('rowid'=>$rowid,'qty'=>0));
		$this->load->view('cart');
		$this->load->view('template/footer');
	}
	public function update()
	{
		$i=1;
		foreach ($this->cart->contents() as $items)
		{
			
			$this->cart->update(array('rowid'=>$items['rowid'],'qty'=>$_POST['qty'.$i]));
			$i++;
			
		}
		$this->load->view('template/header',array(
			'title' =>'Update Cart'
		));

		$this->load->view('cart');
		$this->load->view('template/footer');
	}
	public function view_cart()
	{
		$this->load->view('template/header',array(
			'title' =>'View Cart'
		));
		$this->load->view('cart');
		$this->load->view('template/footer');
	}
	public function shipping()
	{
		foreach ($this->cart->contents() as $items)
		{
			$p_id = $items['id'];
			$p_name = $items['name'];
			$p_image = $items['image'];
			$p_qty = $items['qty'];
			$p_price = $items['price'];
			//echo $p_qty;
			
			$data=array(
				'u_id'=>$this->session->userdata('session_id'),
				'p_id'=>$p_id,
				'p_name'=>$p_name,
				'p_image'=>$p_image,
				'p_qty'=>$p_qty,
				'p_price'=>$p_price

				);
			$this->mproduct->update_cart($data);
			//update inventory form product
			//$this->mproduct->update_product($data);
		}
			
	{
		$this->load->view('template/header',array(
			'title' =>'Shipping Area'
		));
		$this->load->view('shipping_info');
		$this->load->view('template/footer');
	}
	}
	public function insert_shipping()
	{
			
		$user_id = ($this->session->userdata['logged_in']['id']);
		$full_name=($this->session->userdata['logged_in']['username']);
		$email=($this->session->userdata['logged_in']['email']);
		$address=($this->session->userdata['logged_in']['address']);
		$mobile=($this->session->userdata['logged_in']['mobile']);
		$city=($this->session->userdata['logged_in']['city']);
		$country=($this->session->userdata['logged_in']['country']);
		

		$this->cart_model->insert_database(array(
			'u_id'=>$user_id,
			'full_name'=>$full_name,
			'email'=>$email,
			'address'=>$address,
			'mobile'=>$mobile,
			'city'=>$city,
			'country'=>$country
			));
		redirect('/ShoppingCart/payment', true);
	}
	public function payment()
	{
		$this->load->view('template/header',array(
			'title' =>'Payment Section'
		));
		$this->load->view('payment_info');
		

		
		$this->load->view('template/footer');
	}
	public function insert_payment()
	{
		$this->load->view('template/header',array(
			'title' =>'Order Section'
		));
		if(isset($_POST['order_btn']))
		{
			if (isset($_POST['radio'])) 
			{
				//echo "you have selected :".$_POST['radio'];
				$payment=$this->input->post('radio');
				$this->cart_model->insert_payment_database(array(
					'payment_type'=> $payment

					));
			}
			$this->load->view('order_place');
			$this->cart->destroy();
			$this->load->view('template/footer');


		}
		
	}


}
?>










