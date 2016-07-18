<div class="content">
<center>

	<form method="post">
	<?php foreach ($category as $c_key){ ?>
	<tr>
		<a href='category_select?category_name=<?php echo $c_key->category_name?>'><td><input class='button11 button1' type='button' name='btn' value='<?php echo $c_key->category_name; ?>'></input></td></a>
	</tr>
	
	<?php }?>
	
	</form>
	<a href="<?php echo base_url()?>index.php/user_auth/logout" class="btn btn-danger button">Logout</a>
	<tr></tr>
	<br/>

	<td><a href="/Fahim/index.php/users/view_user_cart" class="btn btn-success">View Cart</a></td>

</center>
</div>