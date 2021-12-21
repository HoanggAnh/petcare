<?php
include 'header.php';
?>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #323741; margin: 0 auto; color:#fcc39b; font-size: 17px">
        <div class="container-fluid">
        <a href="#" style="color:#fcc39b; padding-left: 10px"><div class="top_bar_icon"><i class="fas fa-phone-square"></i> +91 9823 132 111</div></a>

            <ul class="top-link navbar-nav ms-auto mb-2 mb-1g-0" style="margin-bottom:0 !important">
                <?php
                // require "login.php";
                if (!isset($_SESSION['txtus'])) // If session is not set then redirect to Login Page
                {
                    printf(' <li class="nav-item"><a class="nav-link active" href="account.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>
										<li class="nav-item"><a class="nav-link active" href="contact.php"><i class="fas fa-envelope"></i> Contact</a></li>');
                } else {
                    echo '<li class="nav-item" style:"color: lavender"><span class="glyphicon glyphicon-user"></span>';
                    echo '<span style="color:lavender"><b>' . $_SESSION['HoTen'] . '</b></span></li>';
                    echo '<li class="nav-item"><a class="nav-link active" href="logout.php"> Log Out</a></li>';
                }
                ?>
            </ul>
        </div>
        </div>
    </nav>

 