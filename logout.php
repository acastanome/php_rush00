<?php
include 'head.php';

if ($_SESSION['logged_user'])
{
	$_SESSION['admin'] = false;
    $_SESSION['logged_user'] = "";
	header("Location: login.php");

}
?>

<?php
    include 'footer.php';
?>
