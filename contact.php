<?php
include "header.php";
include "navtotal.php";
// include "navbar.php";
?>


<section class="jumbotron text-center" style="background-color: lavender">
    <div class="container" style="border: 1px solid #323741; border-radius: 30px">
        <h1 class="jumbotron-heading">PET CARE CONTACT</h1>
        <p class="lead text-muted mb-0" style="padding-bottom: 10px;">We would love to hear from you !</p>
    </div>
	
</section>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card" style="border-radius: 10px; margin-bottom: 30px">
                <div class="card-header" style="background-color: #323741;font-size: 17px; color: #fcc39b; border-top-right-radius: 10px; border-top-left-radius: 10px;"><i class="fas fa-envelope "></i> Contact us.
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="6" required></textarea>
                        </div>
                        <div class="mx-auto">
                        <button type="submit" class="btn text-right">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4">
            <div class="card bg-light mb-3" style="border-radius: 10px;">
                <div class="card-header text-uppercase" style="background-color: #323741;font-size: 17px; color: #fcc39b; border-top-right-radius: 10px; border-top-left-radius: 10px;"><i class="fas fa-home"></i> Address</div>
                <div class="card-body">
				<p><span class="glyphicon glyphicon-home"></span> Address: 175 Tay Son Street, Trung Liet Ward, Dong Da District, Ha Noi, Viet Nam.</p>
					<p><span class="glyphicon glyphicon-earphone"></span> Hotline: (04) 35632211</p>
					<p><span class="glyphicon glyphicon-earphone"></span> Fax: (04) 3563 3351</p>
					<p"><span class="glyphicon glyphicon-envelope"></span> Email: threefairies@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
include "footer.php"
?>
</body>

</html>