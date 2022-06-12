<?php
    session_start();
    if (file_exists("products.csv"))
        unlink("products.csv");
    if (file_exists("basket.csv"))
        unlink("basket.csv");
    if (file_exists("orders.csv"))
        unlink("orders.csv");
    $arr = "false christmas cactus,7€,./rushimgs/falsechristmascactus.jpg,1,0\norchid,9€,./rushimgs/orchid.png,1,0\nmonstera,15€,./rushimgs/monstera.jpg,1,0\nviolet,6€,./rushimgs/violet.jpg,0,1\npine tree,15€,pinetree.jpg,0,1\ngeranium,6€,./rushimgs/geranium.jpg,1,1\n";
    file_put_contents("products.csv", $arr);
    if (file_exists("./private/passwd"))
        unlink("./private/passwd");
    $passwd_file = unserialize(file_get_contents("./private/passwd"));
    $root[] = "root";
    $root[] = hash("whirlpool", "root");
    $root[] = true;
    $passwd_file[] = $root;
    file_put_contents("./private/passwd", serialize($passwd_file));
    $_SESSION['logged_user'] = "";
    header('Location: index.php');
?>
