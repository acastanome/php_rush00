<?php
    session_start();
    if (file_exists("products.csv"))
        unlink("products.csv");
    if (file_exists("basket.csv"))
        unlink("basket.csv");
    if (file_exists("orders.csv"))
        unlink("orders.csv");
    $arr = "cactus,7€,./rushimgs/falsechristmascactus.jpg,1,0\norchid,9€,./rushimgs/orchid.png,1,0\nmonstera,15€,./rushimgs/monstera.jpg,1,0\nviolet,6€,./rushimgs/violet.jpg,0,1\ngeranium,6€,./rushimgs/geranium.jpg,1,1\n";
    file_put_contents("products.csv", $arr);
    if (file_exists("./private/passwd.csv"))
        unlink("./private/passwd.csv");
    file_put_contents("./private/passwd.csv", "");
    file_put_contents("./cart.csv", "");
    $passwd_file = unserialize(file_get_contents("./private/passwd.csv"));
    $root[] = "root";
    $root[] = hash("whirlpool", "root");
    $root[] = true;
    $passwd_file[] = $root;
    file_put_contents("./private/passwd.csv", serialize($passwd_file));
    $_SESSION['logged_user'] = "";
    $_SESSION['admin'] = false;
    header('Location: index.php');
?>
