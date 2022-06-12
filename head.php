 <?php
  session_start();
  // basket creation stuff
?> 

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="index.css" />
    <title>First Plant Shop</title>
  </head>
  <body>
    <h1>PLANT MARKET</h1>
    <nav>
      <div class="dropdown" id="out">
        <button class="dropbtn">
          <a href="index.php">Home</a>
        </button>
      </div>
      <div class="dropdown" id="out">
        <button class="dropbtn">
          <a href="product_page.php">Products</a>
        </button>
        <div class="dropdown-content" id="out1">
          <a href="product_page_inside.php">Inside plants</a>
          <a href="product_page_outside.php">Outside plants</a>
          <a href="product_page.php">All</a>
        </div>
      </div>
      <div class="dropdown" id="out">
        <button class="dropbtn">
        <a href="cart.php">Cart</a>
        </button>
      </div>

      <?php
      if (!$_SESSION['logged_user'] || $_SESSION['logged_user'] === "")
      {
      ?>
      <div class="dropdown" id="out" style="float: right;">
        <button class="dropbtn">
          <a href="login.php">Log in</a>
        </button>
      </div>
      <?php
      }
      else
      {
      ?>
      <div class="dropdown" id="out" style="float: right;">
        <button class="dropbtn">
          <a href="logout.php">Log out</a>
        </button>
      </div>
          <!-- <div class="dropdown" id="out" style="float: right;">
            <button class="dropbtn">Logged usr</button>
            <div class="dropdown-content" id="out1">
                <a href="https://www.youtube.com/watch?v=_7xMfIp-irg" target="_blank">My profile</a>
                <a href="https://www.youtube.com/watch?v=_7xMfIp-irg" target="_blank">Settings</a>
                <a href="https://www.youtube.com/watch?v=_7xMfIp-irg" target="_blank">Logout</a>
            </div>
          </div> -->
      <?php
      }
      ?>

      <?php
      if ($_SESSION['admin'] === true)
      {
      ?>
      <div class="dropdown" id="out" style="float: right;">
        <button class="dropbtn">Admin
          <!-- <a href="login.php">Admin</a> -->
        </button>
        <div class="dropdown-content" id="out1">
         <a href="view_orders.php">View orders</a>
         <a href="modify_products.php">Modify products</a>
         <a href="manage_users.php">Manage users</a>
         <a href="install.php">Reset webstore</a>
        </div>
      </div>
      <?php
      }
      ?>
    </nav>
    <!-- </body>
    </html> -->