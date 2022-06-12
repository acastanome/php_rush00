<?php
    // $csv = array_map('str_getcsv', file('products.csv'));
    // if ($category === "all")
    include 'head.php';
?>
<p>This is the product_page.php page</p>

<!-- <div class="categ_panel">
	<h2>Browse by category</h2>
	<form action="product_page.php" method="POST">
		<div class="categ_pic">
			<img src="./rushimgs/inside.jpg" alt="inside img"/><br/>
			<input type="submit" name="category" value="inside"/>
		</div>
        <br />
		<div class="categ_pic">
			<img src="./rushimgs/outside.jpg" alt="outside img"/><br/>
			<input type="submit" name="category" value="outside"/>
		</div>
        <br />
		<div class="categ_pic">
			<img src="./rushimgs/all.jpg" alt="all img"/><br/>
			<input type="submit" name="category" value="all"/>
		</div>
	</form>
</div>
<div class="clear"></div>
    <br /> -->

    <div class="categ_panel">
	<h2>Inside Plants</h2>
	<!-- <form action="product_page.php" method="POST"> -->
		<div class="categ_pic">
			<img src="./rushimgs/falsechristmascactus.jpg" alt="cactus img"/><br/>
			<!-- <input type="submit" name="category" value="inside"/> -->
		</div>
        <br />
		<div class="categ_pic">
			<img src="./rushimgs/orchid.png" alt="orchid img"/><br/>
			<!-- <input type="submit" name="category" value="outside"/> -->
		</div>
        <br />
        <div class="categ_pic">
            <img src="./rushimgs/monstera.jpg" alt="monstera img"/><br/>
			<!-- <input type="submit" name="category" value="inside"/> -->
		</div>
        <br />
        <div class="categ_pic">
			<img src="./rushimgs/geranium.jpg" alt="geranium img"/><br/>
			<!-- <input type="submit" name="category" value="inside"/> -->
		</div>
	<!-- </form> -->
    </div>

    <div class="categ_panel">
	<h2>Outside Plants</h2>
	<!-- <form action="product_page.php" method="POST"> -->
		<div class="categ_pic">
			<img src="./rushimgs/violet.jpg" alt="violet img"/><br/>
			<!-- <input type="submit" name="category" value="outside"/> -->
		</div>
        <br />
		<div class="categ_pic">
			<img src="./rushimgs/pinetree.jpg" alt="pine tree img"/><br/>
			<!-- <input type="submit" name="category" value="outside"/> -->
		</div>
        <br />
        <div class="categ_pic">
			<img src="./rushimgs/geranium.jpg" alt="geranium img"/><br/>
			<!-- <input type="submit" name="category" value="inside"/> -->
		</div>
	<!-- </form> -->
    </div>

    <div class="categ_panel">
	<h2>All Plants</h2>
	<!-- <form action="product_page.php" method="POST"> -->
    <div class="categ_pic">
			<img src="./rushimgs/falsechristmascactus.jpg" alt="cactus img"/><br/>
			<!-- <input type="submit" name="category" value="inside"/> -->
		</div>
        <br />
		<div class="categ_pic">
			<img src="./rushimgs/orchid.png" alt="orchid img"/><br/>
			<!-- <input type="submit" name="category" value="outside"/> -->
		</div>
        <br />
        <div class="categ_pic">
            <img src="./rushimgs/monstera.jpg" alt="monstera img"/><br/>
			<!-- <input type="submit" name="category" value="inside"/> -->
		</div>
        <br />
        <div class="categ_pic">
			<img src="./rushimgs/geranium.jpg" alt="geranium img"/><br/>
			<!-- <input type="submit" name="category" value="inside"/> -->
		</div>
        <div class="categ_pic">
			<img src="./rushimgs/violet.jpg" alt="violet img"/><br/>
			<!-- <input type="submit" name="category" value="outside"/> -->
		</div>
        <br />
		<div class="categ_pic">
			<img src="./rushimgs/pinetree.jpg" alt="pine tree img"/><br/>
			<!-- <input type="submit" name="category" value="outside"/> -->
		</div>

	<!-- </form> -->
    </div>
<div class="clear"></div>
    <br />

<?php
    include 'footer.php';
?>
