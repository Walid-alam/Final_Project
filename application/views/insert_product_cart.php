<div class="content">
	<center>
		<table class="table">
		<form action="/Fahim/index.php/users/insert_product" method="post">
			<!--<tr>
				<td>PRODUCT ID</td>
				<td><input type="text" name="p_id" /></td>
			</tr>-->
			<tr>
				<td>PRODUCT NAME</td>
				<td><input type="text" name="p_name" /></td>
			</tr>

			<tr>
				<td>PRODUCT IMAGE</td>
				<td><input type="text" name="p_image" /></td>
			</tr>
			<tr>
				<td>PRODUCT QUANTITY</td>
				<td><input type="text" name="p_qty" /></td>
			</tr>
			<tr>
				<td>PRODUCT PRICE</td>
				<td><input type="text" name="p_price" /></td>
			</tr>
			<tr>
				<td>PRODUCT DESCRIPTION</td>
				<td><input type="text" name="p_description" /></td>
			</tr>
			<tr>
				<td>CATEGORY</td>
				<td>
					<select name="category">
						<option default value="CHOOSE OPTION">CHOOSE OPTION</option>
						<option value="ELECTRONIC GADGET">ELECTRONIC GADGET</option>
						<option value="FASHION FOR MEN">MEN</option>
						<option value="FASHION FOR WOMEN">WOMEN</option>
						<option value="ACCESORIES-MEN">ACCESORIES FOR MEN</option>
						<option value="ACCESORIES-WOMEN">ACCSORIES FOR WOMEN</option>
					</select>
				</td>
			</tr>

			<tr>
				<td>MANUFACTURER</td>
				<td>
					<select name="manufacturer">
						<option default value="CHOOSE OPTION">CHOOSE OPTION</option>
						<option value="Cats Eye">CATS EYE</option>
						<option value="Le Reve">LE REVE</option>
						<option value="Mountain">MOUNTAIN BAG</option>
						<option value="Samsung">SAMSUNG</option>
						<option value="Nike">NIKE</option>
					</select>
				</td>
			</tr>
			<td></td>
				<td><input type="submit" class="btn btn-success" value="ADD"></td>
		</form>
		</table>
	</center>
</div>