<div class="content">
<!DOCTYPE html>
<html>
<head>
	<title>User Shopping Cart</title>

<style>
	table {
	border-collapse: collapse;
	width: 100%;
	}

	th, td {
	    text-align: center;
	    padding: 8px;
	}

	tr:nth-child(even){background-color: #f2f2f2}

	th {
	    background-color: #4CAF50;
	    color: white;
	}
</style>

</head>
<body>
<?php if (isset($this->session->userdata['logged_in'])) 
	{
		$username = ($this->session->userdata['logged_in']['username']);
		$type = ($this->session->userdata['logged_in']['type']);
		$id = ($this->session->userdata['logged_in']['id']);
	} else 
		{
			header("location: login");
		}
?>
						<div id="profile">
						<?php

						echo "Your Username Id is " . $id;
						
						echo "<br/>";
						?>
<center>
	<h3>Cart Infromation</h3>
	<?php echo anchor('users/user_panel','Continue Shopping')?>
	<br/>
	<br/>
	<?php echo form_open('users/update');?>
<table cellpadding="10" cellspacing="1" border="1">

<tr>
  <th>User_Id</th>
  <th>Option</th>
  <th>Product_Id</th>
  <th>Product_Image</th>
  <th>QTY</th>
  <th>Item_Name</th>
  <th>Item_Price</th>
  <th>Sub-Total</th>
</tr>

<?php $i = 1; ?>

<?php foreach ($this->cart->contents() as $items): ?>

	<?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

	<tr>
	  <!--PRINT USER_ID-->

	  <td align="center"><?php echo $id; ?></td>

	  <!--OPTION-->

	  <td align="center"><?php echo anchor('users/user_cart_delete/'.$items['rowid'],'DELETE') ?></td>

	  <!--PRODUCT_ID-->

	  <td align="center"><?php echo $items['id']; ?></td>

	  <!--PRODUCT_IMAGE-->

	  <td align="center"><img src= "<?php echo $items['image'] ;?>" width=150 height=70></td>

	  <!--QTY-->

	  <td align="center"><?php echo form_input(array('name' => 'qty'.$i, 'value' => $items['qty'], 'maxlength' => '3', 'size' => '1')); ?></td>

	  <!--ITEM_NAME-->

	  <td align="center">
		<?php echo $items['name']; ?>

			<?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

				<p>
					<?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

						<strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

					<?php endforeach; ?>
				</p>

			<?php endif; ?>

	  </td>

	  <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
	  <td style="text-align:right">$<?php echo $this->cart->format_number($items['subtotal']); ?></td>

	</tr>

<?php $i++; ?>

<?php endforeach; ?>
<tr>
  <td colspan="3"></td>
  <td class="right" align="center"><strong>Items no.</strong></td>
  <td class="right"><?php echo $this->cart->format_number($this->cart->total_items()); ?></td>
  <td colspan="1"> </td>
  <td class="right" align="center"><strong>Total</strong></td>
  <td class="right">$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
</tr>

</table>
<br/>
<p><?php echo form_submit('','Update your Cart'); ?></p>
<br/>
<td class="button11 button1"><a href="shipping">Shipping</a></td>
</center>
</body>
</html>
</div>