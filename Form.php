<html>
<head>
<link = "stylesheet" href = "FormPHP.css">
<title>Thank You For Registering <?php $frstnm ; ?></title>
</head>
<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<?php
$frstnm = $_POST['frstnm'];
$pswrd = $_POST['pswrd'];
$srnm = $_POST['srnm'];
?>
<h2 align="center">Thank You For Registering <?php echo $frstnm ; ?>!</h2>
<p><?php echo $frstnm ; ?> you now have unlimited access to the members area!
<p>Here are your login details:
<br>
<b>Username:</b>
<?php echo $srnm ; ?>
<br>
<b>Password:</b><?php echo $pswrd ; ?> 
</body>
</html>

