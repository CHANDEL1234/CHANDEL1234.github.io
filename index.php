<?php
session_start();
if(!isset($_SESSION['uname'])){
    header('Location: login.php');
}
$uname=$_SESSION['uname'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rent laptop</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="1.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <nav id="navbar">
        <div id="logo">
            <img src="images/icons8-laptop-96.png" alt="laptop.com">
        </div>
        <ul>
            <li class="item"><a href="#home">Home</a></li>
            
            
           
            
            
            <li class="item"><a href="aboutUs.html">About us</a></li>
            <li class="item"><a href="contact2.html">Contact Us</a></li>
        </ul>
        <div class="dropdown">
            <button class="dropbtn"><img src="images/icons8-toggl-app-64.png" alt=""></button>
            <div class="dropdown-content">
                <?php 
                if( isset($_SESSION['uname'])){
                    echo"<a href='logout.php'><img src='images/icons8-login-64.png' alt=''>logout</a>";
                    echo"<a href='profile.php'><img src='images\icons8-futurama-bender-64.png' alt=''>$uname</a>";
                   
                }
                else{
                    echo'<a href="login.html"><img src="images/icons8-logout-64.png" alt="">login</a>';
                }?>
            
             
            </div>
          </div>
        
    </nav>
    <div class="chatbox-wrapper">
		<div class="chatbox-toggle">
			<i class='bx bx-message-square-dots'></i>
		</div>
		<div class="chatbox-message-wrapper">
			<div class="chatbox-message-header">
				<div class="chatbox-message-profile">
					<img src="images/ultron.jpg" height="110px">
					<div>
						<h4 class="chatbox-message-name">The Botfather</h4>
						<p class="chatbox-message-status">online</p>
					</div>
				</div>
				<div class="chatbox-message-dropdown">
					<i class='bx bx-dots-vertical-rounded chatbox-message-dropdown-toggle'></i>
					<ul class="chatbox-message-dropdown-menu">
						<li>
							<a href="#">Search</a>
						</li>
						<li>
							<a href="#">Report</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="chatbox-message-content">
				<h4 class="chatbox-message-no-message">
                    This is Botfather! I am here to assist you with any questions or information you need. How may I help you today?</h4>
				
			</div>
			<div class="chatbox-message-bottom">
				<form action="#" class="chatbox-message-form">
					<textarea rows="1" placeholder="Type message..." class="chatbox-message-input"></textarea>
					<button type="submit" class="chatbox-message-submit"><i class='bx bx-send' ></i></button>
				</form>
			</div>
		</div>
	</div>
	

	<script src="index.js"></script>

    <section id="home">
        <h3 class="h-primary">Deals</h3>
        <h1>Buy best laptops </h1>
        <h2>70% off </h2>
        <button class="btn">Order Now</button>
    </section>


    <section id="products" class="section-p1">
        <h2 id="best_product">Best Products</h2>
        <div class="pro-container">
            <div class="pro">
                <img src="images/product1.jpg" alt="product-1">
                <div class="description">
                    <span>HP</span>
                    <h5>HP Laptop 15s-fq5007TU</h5>
                    <h4>₹46,999</h4>
                </div>
                <a href="product2.html"><button class="Details-btn">Details</button></a>

            </div>
            <div class="pro">
                <img src="images/product2.jpg" alt="product-1">
                <div class="description">
                    <span>HP</span>
                    <h5>OMEN by HP Gaming Laptop 16 (40.9 cm) b1351TX</h5>
                    <h4>₹96,999</h4>
                </div>
                <a href="product.html"><button class="Details-btn">Details</button></a>

            </div>
            <div class="pro">
                <img src="images/product3.jpg" alt="product-1">
                <div class="description">
                    <span>HP</span>
                    <h5>HP ENVY x360 2-in-1 Laptop 13-bf0085TU</h5>
                    <h4>₹86,999</h4>
                </div>
                <a href="product3.html"><button class="Details-btn">Details</button></a>

            </div>

        </div>









    </section>
    <section id="banner">
        <div class="deals1">
            <img src="images/accessories_image.avif" alt="" height="104" width="104">
            <div class="deal">
                <h1>Accessories</h1>
                <h3 class="shopnow"><a href="#" class="">Shop now</a></h3>
            </div>


        </div>
        <div class="deals1">
            <img src="images/omen.webp" alt="">
            <div class="deal">
                <h1>Gaming Deals</h1>
                <h3 class="shopnow"><a href="#" class="">Shop now</a></h3>
            </div>


        </div>

        <div class="deals1">
            <img src="images/generic-laptops-img.avif" alt="" height="104" width="104">
            <div class="deal">
                <h1>Bussiness Deals</h1>
                <h3 class="shopnow"><a href="#" class="">Shop now</a></h3>
            </div>


        </div>



    </section>
   


    <section id="payment">
        <span class="flag"><img src="images/india-flag-icon.png" alt="" height="20px" width="30px"></span> &nbsp; &nbsp; India | Order by phone 1-(1800)-108-3453<span></span>
        <br><br>
        <hr>
        <br>
        <div id="#pays">
        <span><a href=""><img src="images/visa.gif" alt=""></a><a href=""><img src="images/paytm.gif" alt=""></a><a href="#"><img src="images/master.gif" alt=""></a><a href="#"><img src="images/MicrosoftTeams-image_2_.avif" alt=""></a> <a href=""><img src="images/mobikwik.gif" alt=""></a><a href=""><img src="images/cashcare.gif" alt=""></a><a href="#"><img src="images/cod.gif" alt=""></a></span>
        <br><br><br><br></div>


    </section>

    <footer id="footer">
        <div class="left">
            
            <P>Consumer Customers</P>
            <p>1800 108 9979</p>
            <p>Business Customers</p>
            <p>1800 108 6767</p>
            <p>Mon-Fri 9am-7pm</p>
            <p>(excl. public holiday)</p>

        </div>
        <div class="center">
            
            <P>About us</P>
            <p>Technical Support</p>
           
            <p>Terms & Conditions</p>
            <p>FAQs</p>
            <p>Contact Us</p>
            
            <P>product Review</P>
        </div>
        <div class="right">
            
            <p>My Account</p>
            <p>Track My Order</p>
            
            <p>Tech Takes</p>
            <p>Sustainable Impact</p>
        </div>
        <div class="social_media">
            <span><img src="images/icons8-instagram-48.png" alt=""></span><span><img src="images/icons8-facebook-48.png" alt=""></span><span><img src="images/icons8-twitter-48.png" alt=""></span>
        </div>
    </footer>
</body>

</html>