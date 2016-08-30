<div class="content">
<?php
	if (isset($this->session->userdata['logged_in'])) 
	{
		$username = ($this->session->userdata['logged_in']['username']);
		$type = ($this->session->userdata['logged_in']['type']);
		$id = ($this->session->userdata['logged_in']['id']);
		$email = ($this->session->userdata['logged_in']['email']);
		$address = ($this->session->userdata['logged_in']['address']);
		$mobile = ($this->session->userdata['logged_in']['mobile']);
		$city = ($this->session->userdata['logged_in']['city']);
		$country = ($this->session->userdata['logged_in']['country']);
	}
		?>
<center>

		<form action="/Fahim/index.php/shoppingcart/insert_shipping" method="post">

		<div class="form-group">
		<div>
			<input type="text" name="s_id" style="display: none;">

		</div>
		
		<div>
		
			<label>FULL NAME</label>
			<label><?php  echo $username; ?></label>
			<!--<input class="form-control" type="text" name='fname' placeholder="Full Name">-->
		</div>

		<div>
			<label>EMAIL</label>
			<label><?php  echo $email; ?></label>
			<!--<input class="form-control" type="text" name='email' placeholder="Enter Email">-->
		</div>

		<div>

			<label>ADDRESS</label>
			<label><?php  echo $address; ?></label>
			<!--<input class="form-control" type="text" name='address' placeholder="Address">-->
		
		</div>

		<div>
			<label>MOBILE</label>
			<label><?php  echo $mobile; ?></label>
			<!--<input class="form-control" type="text" name='mobile' placeholder="Mobile No.">-->
		
		</div>

		<div>

			<label>CITY</label>
			<label><?php  echo $city; ?></label>

			<!--<input class="form-control" type="text" name='city' placeholder="city">-->
		
		</div>

		<div>
		<label>COUNTRY</label>
		<label><?php  echo $country; ?></label>
				<!--<select class="form-control" name="country">
					<option value="default selected">CHOOSE YOUR COUNTRY</option>
					<option value="BANGLADESH">BANGLADESH</option>
					<option value="AMERICA">AMERICA</option>
					<option value="INDIA">INDIA</option>
					<option value="PAKISTAN">PAKISTAN</option>
				
				</select>-->
		</div>
		</div>
			<button type="submit" class="btn btn-success">Save Shipping Info</button>
		</form>
			<a href="/Fahim/index.php/shoppingcart/view_cart" class="btn btn-success">View Cart</a>

</center>
</div>