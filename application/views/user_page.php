<div class="content"
<!DOCTYPE html>
<html>

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

	} else 
		{
			header("location: login");
		}
?>
<head>
	<title></title>
</head>
<center>
<body>
<?php 
	echo "welcome <b>".$username."</b>";
	echo "<br/>";
	echo "<br/>";
	echo "Your type is <b>".$type."</b>";
	echo "<br/>";
	echo "<br/>";
	echo "Your id is <b>".$id."</b>";
	echo "<br/>";
	echo "<br/>";
	echo "Your email is <b>".$email."</b>";
	echo "<br/>";
	echo "<br/>";
	echo "Your mobile is <b>".$mobile."</b>";
?>

<br/>
<br/>
<a href="<?php echo base_url()?>index.php/users/user_panel" class='btn btn-success'>Click Here To Go User Panel</a>
</body>
</center>
</html>
</div>