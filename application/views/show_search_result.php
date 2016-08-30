<div class="content">
<center><h2>User Search Result</h2> </center>
<table class="table" >

<tr>

<th>Prouct Name</th>

<th>Image</th>

<th>Description</th>

<th>Price</th>

<th>Manufacturer</th>


</tr>

<?php foreach ($a as $r){ ?>

<tr>

<td><?php echo $r->p_name; ?></td>

<td><a href='/Fahim/index.php/users/product_info?product_id=<?php echo $r->p_id ?>'><img src= "<?php echo $r->p_image ;?>"width=150 height=100></td>

<td><?php echo $r->p_description; ?></td>

<td><?php echo $r->p_price; ?></td>

<td><?php echo $r->m_name; ?></td>

</tr>

<?php }?>
</table>

</div>