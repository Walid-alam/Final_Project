<div class="content">

<center><h2>CRUD Application</h2> </center>
<table class="table">

<tr>

<th>Id</th>

<th>User Name</th>

<th>Email</th>

<th>Mobile</th>

<th>Address</th>

<th>Option</th>

<th>Option</th>

</tr>

<?php foreach ($user_list as $u_key){ ?>

<tr>

<td><?php echo $u_key->u_id; ?></td>

<td><?php echo $u_key->u_name; ?></td>

<td><?php echo $u_key->u_email; ?></td>

<td><?php echo $u_key->u_mobile; ?></td>

<td><?php echo $u_key->u_address; ?></td>



<td><a href="/Fahim/index.php/users/edit/<?php echo $u_key->u_id; ?>" class="btn btn-info"  onclick="return confirm('Are you sure  to Edit?')">Edit</a></td>
<td><a href="/Fahim/index.php/users/delete/<?php echo $u_key->u_id; ?>" class="btn btn-danger"onclick="return confirm('Are you sure  to Delete?')">Delete</a>
</td>
</tr>

<?php }?>

</table>
	<center>
	<?php echo $this->pagination->create_links();?>
	</center>
</div>
	</div>


</div>
<center>
<tr>
	<td><a href="/Fahim/index.php/users/insert/" class="btn btn-info">Insert New User</a></td>
</tr>
<br/>
<br/>
<tr>
	<td><a href="/Fahim/index.php/shoppingcart/view_cart" class="btn btn-success">View Cart</a></td>
</tr>
<br/>
<br/>
<a href="<?php echo base_url()?>index.php/user_auth/logout" class="btn btn-danger button">Logout</a>
<br/>
<br/>
<a href="<?php echo base_url()?>index.php/users/order_status" class="btn btn-info">See Order Status</a>
</center>
</div>