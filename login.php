<?php
	function auth($login, $passwd)
	{
		$file = unserialize(file_get_contents("./private/passwd.csv"));
		foreach($file as $k)
		{
			if ($login === $k[0] && hash('whirlpool', $passwd) === $k[1])
				return true;
		}
		return false;
	}
	function check_admin($login, $passwd)
	{
		$file = unserialize(file_get_contents("./private/passwd.csv"));
		foreach($file as $k)
		{
			if ($login == $k[0] && hash('whirlpool', $passwd) == $k[1])
			{
				if ($k[2] === true)
					return true;
			}
		}
		return false;
	}
    include 'head.php';
?>

<?php
if (!$_SESSION['logged_user'] || $_SESSION['logged_user'] === "")
{
    ?>
    <form action="login.php" method="POST" style="padding-top: 20%">
        Username: <input type="text" name="login" value=""/>
        <br /><br />
        Password: <input type="password" name="passwd" value=""/>
        <br />
        <input style="margin-top: 5px;" type="submit" name="submit" value="OK"/>
        <br /><br />
        <a href="create.php" style="background-color:lightgrey; color: black; border: solid #9d969d 1px; border-radius: 2px;">Or create account here</a>
    </form>
    <?php
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
		// header("Location: login.php");
	}
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
