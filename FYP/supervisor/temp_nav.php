<!DOCTYPE html>

<html lang="en">

<head>
  <title>Supervisor Panel - FYP Management System.</title>
  <meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta name="description" content="Industrial" />
<meta name="keywords" content="Industrial, html template,industry template,">
<meta name="author" content="MUHAMMAD BAQIR" />
<meta name="MobileOptimized" content="320" />
<link rel="icon" type="image/icon" href="..\images/favicon/iicon.ico"> <!-- favicon-icon -->
<!-- theme style -->
<link href="..\css/bootstrap.min.css" rel="stylesheet" type="text/css"/> <!-- bootstrap css -->
<link href="..\css/font-awesome.min.css" rel="stylesheet" type="text/css"/> <!-- fontawesome css -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,500i,700,900" rel="stylesheet"> <!-- google font -->
<link rel="stylesheet" type="text/css" href="..\css/menumaker.css"> <!-- menu css -->
<link href="..\css/themify-icons.css" rel="stylesheet" type="text/css"/> <!-- themify icons css -->
<link href="..\css/owl.carousel.css" rel="stylesheet" type="text/css"/> <!-- owl carousel css -->
<link href="..\css/magnific-popup.css" rel="stylesheet" type="text/css"/> <!-- magnify popup css -->
<link href="..\css/style.css" rel="stylesheet" type="text/css"/> <!-- custom css -->

<!-- end theme style -->
<style>
#tdprj{
  font-size:auto;
  overflow: hidden;
  padding: auto;
}
</style>

<script src="..\jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<!-- end head -->
<!--body start-->
<body>
<!-- preloader --> 
<div class="nav-bar">
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="logo">
          <a href="index.html"><img height="43" width="191" src="..\images/logo1.png" alt="logo"></a>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="row">
           
          <div class="col-sm-3 " style="float: right;">
             <a href="#" class="btn btn-default pull-right" style="border-radius: 7px;" data-toggle="modal" data-target="#request-model">Contact Supervisor</a>
          </div>
        </div>
      </div>
      <div class="col-sm-10 pad-0">
        <div class="navigation">
          <div id="cssmenu">
            <ul>
              <li ><a href="..\index.html">Home</a>
                
              </li>
              <li><a href="..\about-us.html">About Us</a>
               
              </li>
              <li ><a href="..\searchprojects.php">Search Projects</a>
                
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
              <li><a href="..\contact.html">Contact Us</a></li>
               <li><a href="#">Account</a>
      <ul class="dropdown">
        <li><a href="../login.php">My Profile</a></li>
        <li><a href="../login.php">Login/Register</a></li>
        
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
            <li class="search-btn search-icon text-center">
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
            <h5 class="modal-title text-center">Get Supervisor Advise</h5>
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
              <button type="submit" class="btn btn-default " style ="border-radius: 7px;">Submit Request</button>
            </form>
          </div>            
        </div>
      </div>
    </div>
    <!-- end request btn -->
  </div>
</div> 
<!--  end navigation -->
