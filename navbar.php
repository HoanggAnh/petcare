<main style="background-color: white">

  <nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
      <a href="index.php" style="padding-left: 50px"> <img src="images/Pet Care Logo.png" alt="" class="img-fluid logo"></a>
     <!-- NAVBAR -->
      

              <!-- Right links -->

              <ul class="navbar-nav ms-auto d-flex flex-row mt-3 mt-lg-0" style="width: 1000px">
                <form class="form-search d-flex input-group w-auto ms-lg-3 my-3 my-lg-0" method="GET" action="search.php" style="margin-left: 100px !important">
                  <input type="text" style="border:1px solid black  !important; padding: 0; max-width: 1000px; padding-right: 200px" class="input-medium search-query" name="txttimkiem" placeholder="  Search..." required>
                  <button style="height:50px; background-color: #323741; width: 40px; border: none" type="submit" name="tk"  data-mdb-ripple-color="dark"><i class="fas fa-search"></i></button>
                </form>

                <!-- <li class="nav-item text-center mx-2 mx-lg-1">
                  <a class="nav-link" href="#!">
                    <div>
                      <i class="fas fa-shopping-cart fa-lg mb-2"></i>
                      <span class="badge rounded-pill badge-notification bg-dark">10</span>
                    </div>
                  </a>
                </li> -->

                <div class="nav-item text-center mx-2 mx-lg-1">
				<div id="cart"><a style="padding-left: 250px; font-size: 20px"  href="cart.php"><i class="fas fa-shopping-cart fa-lg mb-2" style="margin-top: 15px"></i>(<?php
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
			</div>
		</div>

              </ul>
              <!-- Right links -->
            </div>
            <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->


  

