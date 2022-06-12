<?php
function check_Duplicate($arr, $name)
{
    foreach($arr as $k)
    {
        if ($k[0] === $name)
            return false;
    }
    return true;
}
if ($_POST['submit'] === "OK")
{
    if (!$_POST['passwd'] ||
    $_POST['passwd'] == "" || !$_POST['login'] || $_POST['login'] == "")
    {
        echo "Username or password missing.\n";
    }
    else
    {
        if (!file_exists("./private/"))
            mkdir("./private/");
        $file = array();
        $file = unserialize(file_get_contents("./private/passwd.csv"));
        if (!check_Duplicate($file, $_POST['login']))
        {
            echo "This username is already taken.\n";
        }
        else
        {
            $arr[] = $_POST['login'];
            $arr[] = hash("whirlpool", $_POST['passwd']);
            $arr[] = false;
            $file[] = $arr;
            $file = serialize($file);
            file_put_contents("./private/passwd.csv", $file);
            if ($_POST['submit'] === "OK")
                header('Location: login.php');
            else
                header('Location: manage_users.php');
        }
    }
}
else
    echo "Enter username and password.\n";
include 'head.php';
?>

<h2>Create a user</h2>
<p>If your account is created correctly, you will be redirected so you can log in and practice your password.</p>
<p>You won't be able to recover or change it, so make sure to remember it!</p>
<form action="create.php" method="POST" style="padding-top: 20%">
    Username: <input type="text" name="login" value=""/>
    <br /><br />
    Password: <input type="password" name="passwd" value=""/>
    <br />
    <input style="margin-top: 5px;" type="submit" name="submit" value="OK"/>
</form>

<?php
    include 'footer.php';
?>