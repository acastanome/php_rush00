<?php
    // if ($category === "all")
    include 'head.php';
?>

<?php
$csv = array_map('str_getcsv', file('products.csv'));
foreach($csv as $k)
{
	$arr[] = "<div class=\"product\">\n\t<div class=\"name\"><p>".$k[0]."</p>\n\t<div class=\"image\"><img src=\"".$k[2]."\"></div>\n\t<diclass=\"price\">price: ".$k[1]."<diclass=>\n<form action=\"\method=\"post\">\n\t<input type=\"submit\" name=\"submit\" value=\"Add ".$k[0]." ".$k[1]." to cart\"/>\n</form>\n</div>";
}
// setcookie("category", "all", time() + 86400);

// foreach ($arr as $k)
// 	echo $k;

if ($_POST['submit'])
{
	if (!'cart.csv')
		file_put_contents("cart.csv", "");
	$arr0 = explode(' ', $_POST['submit']);
	// header();
	$arr2 = array("hello", "there");
	$arr2 = array($arr0[1], $arr0[2]);
	$fp = fopen("cart.csv", "a");
	fputcsv($fp, $arr2);
	fclose($fp);
}
foreach ($arr as $k)
	echo $k;
?>

<?php
    include 'footer.php';
?>

<!-- $arr[] = $_POST['login'];
            $arr[] = hash("whirlpool", $_POST['passwd']);
            $arr[] = false;
            $file[] = $arr;
            $file = serialize($file);
            file_put_contents("./private/passwd.csv", $file);


			$arr = explode(' ', $_POST['submit']);
	// $cart = array_map('str_getcsv', file('cart.csv'));
	// foreach($csv as $k)
	// {
	// 	if ($k[0] === $arr[1])
	// 	{
	// 		$cart[] = $k;
	// 		break ;
	// 	}
	// }
	$arr2 = array($arr[1], $arr[2]);
	$fp = fopen("cart.csv", "a");
	foreach ($arr2 as $fields)
	{
		fputcsv($fp, $fields);
	}
	fclose($fp);
	// $category = $_POST['category']; -->