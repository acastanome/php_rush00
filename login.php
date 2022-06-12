<?php
    include 'head.php';
?>

<?php
if (!$_SESSION['logged_user'] || $_SESSION['logged_user'] === "")
{
    ?>
    <form action="login.php" method="POST">
        Username: <input type="text" name="login" value=""/>
        <br />
        Password: <input type="password" name="passwd" value=""/>
        <br />
        <input type="submit" name="submit" value="OK"/>
        <br />
        <!-- <a href="create.php">Create account</a> -->
    </form>
    <?php
}
else
{
    ?>
    <!-- <p>This is the login.php page</p> -->
    <?php
    header("Location: index.php");
}
    ?>

<?php
    include 'footer.php';
?>


//ask for username and password, check if its admin
//give possibility to create account (check if exists)

<?php
	// include "auth.php";
	session_start();
	if (auth($_POST['login'], $_POST['passwd']))
	{
		if (check_admin($_POST['login'], $_POST['passwd']))
			$_SESSION['admin'] = true;
		else
			$_SESSION['admin'] = false;
		$_SESSION['logged_user'] = $_POST['login'];
		header("Location: index.php");
	}
	else
	{
		$_SESSION['logged_user'] = "";
		header("Location: index.php");
	}
?>

<?php
	function auth($login, $passwd)
	{
		$file = unserialize(file_get_contents("./private/passwd"));
		foreach($file as $k)
		{
			if ($login === $k[0] && hash("sha512", $passwd) === $k[1])
				return true;
		}
		return false;
	}
	function check_admin($login, $passwd)
	{
		$file = unserialize(file_get_contents("./private/passwd"));
		foreach($file as $k)
		{
			if ($login == $k[0] && hash("sha512", $passwd) == $k[1])
			{
				if ($k[2] === true)
					return true;
			}
		}
		return false;
	}
?>
*/