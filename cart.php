<?php
include 'head.php';
$cart = array_map('str_getcsv', file('cart.csv'));
$cart_header = "cart";
foreach($cart as $k)
{
	$cart_name[] = $k[0]. ": ".$k[1];
	$total += (float)$k[1];
}
$cart_name = array_count_values($cart_name);
foreach ($cart_name as $key => $value)
{
	$arr[] = "<div class=\"name\"><p>".$value. " x ".$key."</p></div>";
}
if ($_POST['submit'] === "validate")
{
	$cart_header = "Order validated, thank you for your order!";
	foreach($cart as $k)
	{
		$order_row .= implode(',', $k) . ",";
	}
	$order_row .= "\n";
	file_put_contents("orders.csv", $order_row, FILE_APPEND);
	unlink("cart.csv");
}
// if ($_POST['submit'] === "clear")
// {
// 	unlink("cart.csv");
// 	header('Location: index.php');
// }
?>

<p>Here you would see the cart</p>

<div class="basket">
	<?php
	if ($basket_header === "BASKET" && $total)
	{
		foreach ($arr as $k)
			echo $k;
		echo "<h2>total cost:</h2>";
		echo $total."€";
		?>
		<form action="" method="post">
		<?php
		if ($_SESSION['logged_user'] != "")
		{
			?>
				<br/><input type="submit" name="submit" value="validate"/>
			<?php
		}
		?>
			<br/><input type="submit" name="submit" value="clear"/>
		</form>
		<?php
	}
	?>
</div>

<?php
    include 'footer.php';
?>