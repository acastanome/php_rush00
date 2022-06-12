<?php
    // if ($category === "all")
    include 'head.php';
?>

<?php
$csv = array_map('str_getcsv', file('products.csv'));
foreach($csv as $k)
{
	$arr[] = "<div class=\"product\">\n\t<div class=\"name\"><p>".$k[0]."</p>\n\t<div class=\"image\"><img src=\"".$k[2]."\"></div>\n\t<diclass=\"price\">price: ".$k[1]."<diclass=>\n<form action=\"\method=\"post\">\n\t<input type=\"submit\" name=\"submit\" value=\"Add ".$k[0]." to cart\"/>\n</form>\n</div>";
}
setcookie("category", "all", time() + 86400);

foreach ($arr as $k)
	echo $k;
	
if ($_POST['submit'])
{
	$arr = explode(' ', $_POST['submit']);
	$cart = array_map('str_getcsv', file('cart.csv'));
	foreach($csv as $k)
	{
		if ($k[0] === $arr[1])
		{
			$cart[] = $k;
			break ;
		}
	}
	$fp = fopen("cart.csv", "w");
	foreach ($cart as $fields)
	{
		fputcsv($fp, $fields);
	}
	fclose($fp);
	$category = $_POST['category'];
}
?>

<?php
    include 'footer.php';
?>