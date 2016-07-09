<div class="content">

<table class="table">

<tr>

<th>Order Id</th>

<th>User Id</th>

<th>Pay Id</th>

<th>Shipping Id</th>

<th>Total</th>

<th>Status</th>

<th>Date</th>

<th>Option</th>

<th>Option</th>

</tr>

<?php foreach ($order as $o){ ?>

<tr>

<td><?php echo $o->o_id; ?></td>

<td><?php echo $o->u_id; ?></td>

<td><?php echo $o->pay_id; ?></td>

<td><?php echo $o->s_id; ?></td>

<td><?php echo $o->o_total; ?></td>

<td><?php echo $o->o_status; ?></td>

<td><?php echo $o->o_date; ?></td>

<td><a href="/Fahim/index.php/users/update_order/<?php echo $o->u_id; ?>" class="btn btn-success" onclick="return confirm('Are you sure  to Approve?')">Approve</a></td>

<td><a href="/Fahim/index.php/users/" class="btn btn-danger">Cancel</a></td>

</tr>

<?php }?>

</table>
</div>