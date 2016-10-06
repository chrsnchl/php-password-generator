<?php
if($_POST['pw']):
	$length = $_POST['pw'];
endif;

$characters = 'abcdefghijklmnopqrstuvwxyz!@#$%^&*';
$characters_length = strlen($characters);
$password = '';

for($i = 0; $i < $length; $i++) {
	$password .= $characters[rand(0, $characters_length - 1)];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Generate Password</title>
</head>
<body>

<?php
if($password):
	echo $password;
endif;
?>

<form method='post'>
<label>How long will your password be?
<input type='number' name='pw'>
</label>
<input type='submit'>
</form>
	
</body>
</html>
