<?php/*
session_start();

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
      header('location:supervisor/userlogin.php');
}else if (!isset($_SESSION['logged_in']) && $_SESSION['logged_in'] != true) {
      header('location:register.php');
}*/
?>
<!DOCTYPE html>
<!--
**********************************************************************************************************
    Copyright (c) 2017 .
**********************************************************************************************************  -->
<!-- 
Template Name: Industrial - Industry HTML Template
Version: 1.0.0
Author: udayraj
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]> -->
<html lang="en">
<!-- <![endif]-->
<!-- head -->

<!-- Mirrored from thegenius.co/industry-html/html/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Jul 2018 16:59:32 GMT -->
<head>
  <title>Register</title>
<meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta name="description" content="Industrial" />
<meta name="keywords" content="Industrial, html template,industry template,">
<meta name="author" content="udayraj" />
<meta name="MobileOptimized" content="320" />
<link rel="icon" type="image/icon" href="images/favicon/favicon.ico"> <!-- favicon-icon -->
<!-- theme style -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/> <!-- bootstrap css -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/> <!-- fontawesome css -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,500i,700,900" rel="stylesheet"> <!-- google font -->
<link rel="stylesheet" type="text/css" href="css/menumaker.css"> <!-- menu css -->
<link href="css/themify-icons.css" rel="stylesheet" type="text/css"/> <!-- themify icons css -->
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/> <!-- owl carousel css -->
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css"/> <!-- magnify popup css -->
<link href="css/style.css" rel="stylesheet" type="text/css"/> <!-- custom css -->
<!-- end theme style -->
</head>
<!-- end head -->
<!--body start-->
<body>
<!-- preloader --> 
  <div class="preloader">
    <div class="status">
      <div class="status-message">
      </div>
    </div>
  </div>
<!-- end preloader --> 
<!--  top bar -->
  
<!--  end top bar -->
<!--  navigation -->
<div class="nav-bar">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="logo">
          <a href="index.html"><img height="90" width="300" src="images/logo1.png" alt="logo"></a>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="row">
           <div class="col-sm-3">
            <div class="info-nav">
               <div class="info-nav-heading"></div>
              <div class="info-nav-dtl"><a href="tel:#"></a></div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="info-nav">
              <div class="info-nav-heading"></div>
              <div class="info-nav-dtl"><a href="mailto:#"></a></div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="info-nav">
              <div class="info-nav-heading"></div>
              <div class="info-nav-dtl"></div>
            </div>
          </div>
          <div class="col-sm-3">
             <a href="#" class="btn btn-default pull-right" data-toggle="modal" data-target="#request-model">Contact Supervisor</a>
          </div>
        </div>
      </div>
      <div class="col-sm-10 pad-0">
        <div class="navigation">
          <div id="cssmenu">
            <ul>
              <li ><a href="index.html">Home</a>

              </li>
              <li><a href="about-us.html">About Us</a>

              </li>
              <li ><a href="searchprojects.php">Search Projects</a>

              </li>
            <!--  <li><a href="#">Projects</a>
                <ul>
                  <li><a href="projects.html">Projects</a></li>
                  <li><a href="projects-details.html">Projects Details</a></li>
                </ul>
              </li>
              <li><a href="#">News</a>
                <ul>
                  <li><a href="news-grid.html">News Grid</a></li>
                  <li><a href="news-list.html">News List</a></li>
                  <li><a href="single-post.html">Single Post</a></li>
                </ul>
              </li>
              <li><a href="#">Shop</a>
                <ul>
                  <li><a href="shop.html">Shop</a></li>
                  <li><a href="single-product.html">Single Product</a></li>
                  <li><a href="cart.html">Cart</a></li>
                  <li><a href="checkout.html">Checkout</a></li>
                  <li><a href="my-account.html">My Account</a></li>
                </ul>
              </li> -->
              <li><a href="contact.html">Contact Us</a></li>
               <li><a href="#">Account</a>
      <ul class="dropdown">
        <li><a href="supervisor/userlogin.php">My Profile</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="register1.php">Register</a></li>
      </ul></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-2 pad-0">
        <div class="nav-right">
          <ul>
          <!--  <li class="download-btn">
              <a href="#"><i class="ti-download"></i>FYP Reports</a>
            </li> -->
            <li class="search-btn search-icon text-center scan1 scan2">
              <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
            </li>
          </ul>
        </div>
      </div>
     </div>
    <!-- search -->
    <div class="search">
      <div class="container">
        <input type="search" class="search-box" placeholder="Search"/>
        <a href="#" class="fa fa-times search-close"></a>
      </div>
    </div>
    <!-- end search -->
    <!-- request btn -->
    <div class="modal fade request-model" id="request-model" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h5 class="modal-title text-center">Get Contact Supervisor</h5>
          </div>
          <div class="modal-body request-model-body text-center">
            <form>
              <div class="form-group">
                <input type="text" class="form-control" id="name" placeholder="Enter Your Name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="Enter Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="subject" placeholder="Enter Subject">
              </div>
              <div class="form-group">
                <textarea id="message" name="message" rows="6" placeholder="Message"></textarea>
              </div>
              <button type="submit" class="btn btn-default">Submit Request</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- end request btn -->
  </div>
</div>
<!--  end navigation -->
<!--  page banner -->
  <section id="page-banner" class="page-banner-main-block" style="background-image: url('images/bg/page-banner.jpg')"> 
    <h1 class="page-banner-heading text-center">Register</h1>
  </section> 
	<div class="container-fluid row1">
	<div class="container">
		 <div class="row">
			 <div class="col-lg-6 col-md-6 row1-col1">
				 <a href="register.php">STUDENT</a>
			 </div>
			 <div class="col-lg-6 col-md-6 row1-col2">
				 <a href="supervisor-register.php">SUPERVISOR</a>
			 </div>
	</div>
</div>
</div>
<!--  end page banner  -->
<!--  breadcrumb -->

<!-- end breadcrumb -->
<!-- about us  -->
       

<!-- end team  -->
<!--  footer -->
<footer id="footer" class="footer-main-block" style="background-image: url('images/bg/footer-bg.jpg')">
  <div class="footer-block">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="footer-about footer-widget">
            <h5 class="footer-heading">About Us</h5>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here,</p>     
            <a href="about-us.html" class="plain-btn">About More</a>     
          </div>            
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="footer-solutions footer-widget">
            <h5 class="footer-heading">Our Solutions</h5>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About US</a></li>
              <li><a href="#">Search Projects</a></li>
              <li><a href="#">Contact Us</a></li>
             
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="footer-news footer-widget">
            <h5 class="footer-heading">Latest News</h5>
            <ul>
              <li><a href="#">Here’s How Advanced Manufacture Is Transforming The Factory</a> - July 15, 2017</li>
              <li><a href="#">Here’s How Advanced Manufacture Is Transforming The Factory</a> - July 15, 2017</li>
            </ul>           
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="footer-contact footer-widget">
            <h5 class="footer-heading">Quick Contact</h5>
            <p>If you want to contact us about any issue, our support available to help you 8am-7pm Monday to Saturday.</p>
            <ul class="footer-address">
              <li><span>Address:</span> Hamdard University</li>
              <li><span>Call:</span> <a href="tel:#">021-36440111</a></li>
              <li><span>Email:</span> <a href="mailto:#">info@globalfyp.com</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>      
  </div>
  <div class="copyright" style="background-image: url('images/bg/copy-bg.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="copyright-text">
            <p>FYP Management System | &copy; 2022. | All Rights Reserved.</p>
          </div>
        </div>
        <div class="col-sm-6">
         
        </div>
      </div>
    </div>
  </div>
</footer>
<!--  end footer -->
<!-- jquery -->
<script type="text/javascript" src="js/jquery.min.js"></script> <!-- jquery library js -->
<script type="text/javascript" src="js/bootstrap.min.js"></script> <!-- bootstrap js -->
<script type="text/javascript" src="js/menumaker.js"></script> <!-- menumaker js -->
<script type="text/javascript" src="js/owl.carousel.js"></script> <!-- owl carousel js -->
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script> <!-- magnify popup js -->
<script type="text/javascript" src="js/jquery.elevatezoom.js"></script> <!-- product zoom js -->
<script type="text/javascript" src="js/jquery.ajaxchimp.js"></script> <!-- mail chimp js -->
<script type="text/javascript" src="js/smooth-scroll.js"></script> <!-- smooth scroll js -->
<script type="text/javascript" src="js/waypoints.min.js"></script> <!-- facts count js required for jquery.counterup.js file -->
<script type="text/javascript" src="js/jquery.counterup.js"></script> <!-- facts count js-->
<script type="text/javascript" src="js/price-slider.js"></script> <!-- price slider / filter js-->
<script type="text/javascript" src="js/theme.js"></script> <!-- custom js -->  
<!-- end jquery -->
</body>
<!--body end -->

<!-- Mirrored from thegenius.co/industry-html/html/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Jul 2018 16:59:34 GMT -->
</html>