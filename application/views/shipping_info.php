<div class="content">
<center>

		<form action="/Fahim/index.php/shoppingcart/insert_shipping" method="post">
		<table border="0">
		<tr>
		<td><input type="text" name="s_id" style="display: none;"></input></td>
		</tr>
		<br/>
		<br/>
		
		<tr>
		<td>FULL NAME</td>
			<td><input type="text" name='fname' placeholder="Full Name"></input></td>
		</tr>
		<br/>
		<br/>

		<tr>
		<td>EMAIL</td>
		<td><input type="text" name='email' placeholder="Enter Email"></input></td>
		</tr>
		<br/>
		<br/>

		<tr>
		<td>ADDRESS</td>
		<td><input type="text" name='address' placeholder="Address"></input></td>
		</tr>
		<br/>
		<br/>

		<tr>
		<td>MOBILE</td>
		<td><input type="text" name='mobile' placeholder="Mobile No."></input></td>
		</tr>
		<br/>
		<br/>

		<tr>
		<td>CITY</td>
		<td><input type="text" name='city' placeholder="city"></input></td>
		</tr>
		<br/>
		<br/>

		<tr>
		<td>COUNTRY</td>
			<td>
				<select name="country">
					<option value="default selected">CHOOSE YOUR COUNTRY</option>
					<option value="BANGLADESH">BANGLADESH</option>
					<option value="AMERICA">AMERICA</option>
					<option value="INDIA">INDIA</option>
					<option value="PAKISTAN">PAKISTAN</option>
				
				</select>
			</td>
		</tr>
		</table>
		
			<br>
			<br>
			<button type="submit" class="btn btn-success">Save Shipping Info</button>
		</form>
		<br/>
		<br/>
		<tr>
			<td><a href="/Fahim/index.php/shoppingcart/view_cart" class="btn btn-success">View Cart</a></td>
		</tr>

</center>
</div>