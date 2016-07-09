<center>

<style>
	table 
	{
	    border-collapse: collapse;
	    width: 100%;
	}

th, td 
	{
	    text-align: center;
	    padding: 8px;
	}

tr:nth-child(even)
{
	background-color: #f2f2f2
}

th 
	{
	    background-color: #ff3300;
	    color: white;
	}
</style>
<div class="content">
	<table border="1" cellpadding="10" cellspacing="2">
	<tr>

		<th>Cat_Name</th>

		<th>Image</th>

		<th>Name</th>

		<th>Qty</th>

		<th>Description</th>

		<th>Price</th>

		<th>Manufacturer</th>

		<th>Option</th>

	</tr>
	

		<?php foreach ($n as $c_key){ ?>

	<tr>

        
		<td><?php echo $c_key->category_name; ?></td>

		<td><img src= "<?php echo $c_key->p_image;?>" width=150 height=100></td>
        
		<td><?php echo $c_key->p_name; ?></td>

		<td><?php echo $c_key->p_qty; ?></td>

		<td><?php echo $c_key->p_description; ?></td>

		<td><?php echo $c_key->p_price; ?></td>

		<td><?php echo $c_key->m_name; ?></td>

		<td><a href="buy_user/<?php echo $c_key->p_id ?>"><img src="/Fahim/assets/images/cart1.png" alt="nothing to show" height="50px" width="70px"></td>


	</tr>
	
	<?php }?>
</table>
	
</center>
</div>