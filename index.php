<?php
$password = '';
$status = '';
if(isset($_POST['password'])) {
	$password = $_POST['password'];
	include_once('classes/strongpass.php');
	$strongpass = new strongpass();
	$response = $strongpass->check($password);

	if($response != 'OK') {
		$status = $response;
	} else {
		$status = "Password is strong :)";
	}
}
?>


<h2>Class strong password demo</h2>
<form action="index.php" method="post">
	<input name="password" type="password" value="<?php echo $password; ?>">
	<input type="submit" value="Check Password Strength">
</form>

<h3><?php echo $status; ?></h3>