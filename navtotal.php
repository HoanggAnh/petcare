<?php
include "header.php";
// include "navh.php";
// include "navbar.php";
?>


<style>/*
** Style Simple Ecommerce Theme for Bootstrap 4
** Created by T-PHP https://t-php.fr/43-theme-ecommerce-bootstrap-4.html
*/
.bloc_left_price {
    color: #c01508;
    text-align: center;
    font-weight: bold;
    font-size: 150%;
}
.category_block li:hover {
    background-color: #007bff;
}
.category_block li:hover a {
    color: #ffffff;
}
.category_block li a {
    color: #343a40;
}
.add_to_cart_block .price {
    color: #c01508;
    text-align: center;
    font-weight: bold;
    font-size: 200%;
    margin-bottom: 0;
}
.add_to_cart_block .price_discounted {
    color: #343a40;
    text-align: center;
    text-decoration: line-through;
    font-size: 140%;
}
.product_rassurance {
    padding: 10px;
    margin-top: 15px;
    background: #ffffff;
    border: 1px solid #6c757d;
    color: #6c757d;
}
.product_rassurance .list-inline {
    margin-bottom: 0;
    text-transform: uppercase;
    text-align: center;
}
.product_rassurance .list-inline li:hover {
    color: #343a40;
}
.reviews_product .fa-star {
    color: gold;
}
.pagination {
    margin-top: 20px;
}
footer {
    background: #343a40;
    padding: 40px;
}
footer a {
    color: #f8f9fa!important
}
</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php" style="font-size: 30px; margin-top: 5px; margin-bottom:13px"><i class="fas fa-paw" style="color: #fcc39b"></i><span style="color: lavender;"> Pet</span><span style="color: #f19c79;">Care</span></a>
        

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault" style="padding: 0;">
            <ul class="navbar-nav m-auto" style="padding: 0;">
			<li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-display="static" aria-expanded="false" href="index.php" style="color:#fcc39b; font-size: 15px;"><i class="fas fa-home fa-lg mb-1"></i>  Home</a></li>
                <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style="color:#fcc39b; font-size: 15px;"><i class="fas fa-book fa-lg mb-1"></i>  Products</a>
        <div class="dropdown-menu">
              <div class="dropdown-inner">
                <ul>
                  <?php
                  //lay id nha san xuat
                  require 'inc/config.php';
                  $laydanhsachnhasx = "SELECT ID as manhasx,Ten from nhaxuatban";
                  $rstennhasx = $conn->query($laydanhsachnhasx);
                  if ($rstennhasx->num_rows > 0) {
                    // output data of each row
                    while ($row = $rstennhasx->fetch_assoc()) {

                  ?>
                      <li><a href="category.php?manhasx=<?php echo $row["manhasx"] ?>"><?php echo $row["Ten"] ?></a></li>
                  <?php
                    }
                  }
                  ?>
                  </div>
            </div>
        </li>
                <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-display="static" aria-expanded="false" href="cart.php" style="color:#fcc39b; font-size: 15px;"> <i class="fas fa-shopping-cart fa-lg mb-1"></i>  Cart</a>
        </li>
        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-display="static" aria-expanded="false" href="contact.php" style="color:#fcc39b; font-size: 15px;"><i class="fas fa-envelope fa-lg mb-1"></i>  Contact</a>
        </li>
        
		    </ul> 

				<ul class="navbar-nav ms-auto d-flex flex-row mt-3 mt-lg-0" style="margin-left: 70px !important">
                <form class="form-search d-flex input-group w-auto ms-lg-3 my-3 my-lg-0" method="GET" action="search.php" >
                  <input type="text" style=" border-radius: 10px; height: 30px; padding-right: 30px; margin-top: 10px; margin-left: 40px" class="input-medium search-query" name="txttimkiem" placeholder="  Search..." required>
                  <button style="background-color: #323741; width: 40px; border-radius: 10px; height: 30px; margin-top: 10px; margin-left: 10px" type="submit" name="tk"  data-mdb-ripple-color="dark"><i class="fas fa-search"></i></button>
                </form>


				<div id="cart"><a href="cart.php" style="margin-left: 15px; font-size: 16px; margin-right: 20px"><i class="fas fa-shopping-cart fa-lg mb-2" style="margin-top: 15px"></i>(<?php
			$ok=1;
			 if(isset($_SESSION['cart']))
			 {
				 foreach($_SESSION['cart'] as $key => $value)
				 {
					 if(isset($key))
					 {
						$ok=2;
					 }
				 }
			 }
			
			 if($ok == 2)
			 {
				echo count($_SESSION['cart']);
			 }
			else
			{
				echo   "0";
			}
			
			
			?>)</a></div>

            <?php
                // require "login.php";
                if (!isset($_SESSION['txtus'])) // If session is not set then redirect to Login Page
                {
                    printf(' <li class="nav-item"><a class="nav-link active" href="account.php" style="margin-left: 15px; font-size: 16px; color: #fcc39b"><i class="fas fa-sign-in-alt"></i> Login</a></li>');
                } else {
                    echo '<li class="nav-item"><span style="color: #fcc39b"><b>' . $_SESSION['HoTen'] . '</b></span></li>';
                    echo '<li class="nav-item"><a class="nav-link active" href="logout.php"> Log Out</a></li>';
                }
                ?>
			</div>
            </ul>
        </div>
    </div>
</nav>