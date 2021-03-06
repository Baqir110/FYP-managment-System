

<!DOCTYPE html>

<html lang="en"><head>
<title>FYP Management System</title>
<meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta name="description" content="Industrial" />
<meta name="keywords" content="Industrial, html template, industry template,">
<meta name="author" content="udayraj" />
<meta name="MobileOptimized" content="320" />
<link rel="icon" type="image/icon" href="images/favicon/1.ico">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script language="JavaScript" src="scripts/gen_validatorv31.js" type="text/javascript"></script>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><!-- favicon-icon -->
<!-- theme style -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/> <!-- bootstrap css -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/> <!-- fontawesome css -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,500i,700,900" rel="stylesheet"> <!-- google font -->
<link rel="stylesheet" type="text/css" href="css/menumaker.css"> <!-- menu css -->
<link href="css/themify-icons.css" rel="stylesheet" type="text/css"/> <!-- themify icons css -->
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/> <!-- owl carousel css -->
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css"/> <!-- magnify popup css -->
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link href="css/sty.css" rel="stylesheet" type="text/css"/> <!-- custom css -->

<style>
  .table, th, td {
    border: 2px solid #ECC53F !important;
}
</style>
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
            <a href="index.html"><img height="50" width="250" src="images/logo1.png" alt="logo" style="background-size: cover;"></a>
          </div>
        </div>
		  
	   <div class="col-sm-8 "  >
          <div class="row">
			  
    	      <div class="col-sm-3" style="float:left;" >			  	
				  
    	       <!--	<a href="#" class="btn btn-default pull-right" style="border-radius:7px;"data-toggle="modal" data-target="#request-model">Contact Supervisor</a>-->
    	      </div>
			  <div class="col-sm-3 prof" style="float:right;" >
	<a href="login.php" class="btn btn-default pull-right" style ="border-radius:7px";>My Profile</a></div>
          </div>
        </div>
		  
        <div class="col-sm-10 pad-0">
          <div class="navigation">
            <div id="cssmenu">
              <ul>
                <li class="active"><a href="index.php">Home</a>

                </li>
                <li><a href="about-us.html">About Us</a>

                </li>
                <li><a href="searchprojects.php">Search Projects</a>

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
        <li><a href="login.php"> My Profile</a></li>
        <li><a href="login.php">Login/Register</a></li>
        
      </ul></li>
				  
                
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-2 pad-0">
          <div class="nav-right" style="padding-bottom">
            <ul>
             <!-- <li class="download-btn">
                <a href="#"><i class="ti-download"></i>FYP Reports</a>
              </li>
              -->
              <li class="search-btn search-icon text-center scan1">
                <a href="#"><i class="fa fa-angle-right fa-search ser" aria-hidden="true"></i></a>
              </li>
            </ul>
          </div>
        </div>
     	</div>
      <!-- search -->
      <div class="search">
        <div class="container">
          <input type="search" class="search-box" placeholder="Search"/><button>search</button>
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
              <h5 class="modal-title text-center">Contact Supervisor</h5>
            </div>
            <div class="modal-body request-model-body text-center">
              <form action="https://formsubmit.co/hzindabad44@gmail.com" method="POST">
     <input type="text" name="name" class="randon12" placeholder="Name" required>
     <input type="email" name="email" class="randon12" placeholder="Email Address" required>
				  <textarea id="message" class="randon1" name="message" placeholder="enter text"></textarea>
	<input type="hidden" name="_next" value="http://localhost/php/contact-form-thank-you.html">
				  <input type="hidden" name="_captcha" value="false">
     <button type="submit" class="randon2">Send</button>
</form>
           
			 
          </div>
        </div>
      </div>
      <!-- end request btn -->
    </div>
  </div>
<!--  end navigation -->
<!-- counter  -->
  <section id="counter" class="counter-main-block">
    <div class="parallax" style="background-image: url('images/bg/counter-bg.jpg')">
      <div class="overlay-bg" style="background-image: url('images/bg/facts-bg.jpg')"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="counter-section">
              <h2 class="counter-heading"><span> <br> Find The Progress of </span> <br> The Projects </h2>
            </div>
          </div>
            <div class="col-md-3 col-sm-4">
              <div class="counter-block">
                <h1 class="counter-number counter"><?php
                include 'connection.php';
                $sql ="SELECT * FROM `tbl_projects` WHERE type='Completed'";
                $result = $con->query($sql);
                $count =0;
                if($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
                        $count++;
                    }
                }
                echo $count;


                ?></h1>
                <h6 class="counter-text">completed Projects</h6>
              </div>
            </div>
            <div class="col-md-2 col-sm-4">
              <div class="counter-block">
                <h1 class="counter-number counter"><?php

                $sql ="SELECT * FROM `tbl_projects` WHERE type='On Going'";
                $result = $con->query($sql);
                $count =0;
                if($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
                        $count++;
                    }
                }
                echo $count;


                ?></h1>
                <h6 class="counter-text">Ongoing Projects</h6>
              </div>
            </div>
            <div class="col-md-3 col-sm-4">
              <div class="counter-block">
                <h1 class="counter-number counter">
                <?php

                $sql ="SELECT * FROM tbl_student WHERE approve=1";
                $result = $con->query($sql);
                $count =0;
                if($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
                        $count++;
                    }
                }
                $sql ="SELECT * FROM tbl_supervisor WHERE approve=1";
                $result = $con->query($sql);

                if($result->num_rows>0){
                    while($row = $result->fetch_assoc()){
                        $count++;
                    }
                }
                echo $count;


                ?>
                </h1>

                <h6 class="counter-text">No. of Users</h6>
              </div>
        </div>
      </div>
    </div>
  </section>
<!-- end counter  -->
<!--  slider -->
  <section id="home-slider" class="home-slider">
    <div class="item home-slider-bg" style="background-image: url('images/bg/e dark.png'); height: 550; width: 1920; ">
      <div class="container">
        <div class="slider-dtl top-effect">
          <h1 class="slider-heading">Building Up <span> Your Vision,</span>Towards Future</h1>
          <h5 class="slider-sub-heading">Get Ideas Regarding Your Project</h5>

        </div>
      </div>
    </div>
    <div class="item home-slider-bg" style="background-image: url('images/bg/laptop.png'); height: 550; width: 1920;">
      <div class="container">
        <div class="slider-dtl left-effect">
                   <h1 class="slider-heading">Building Up <span> Your Vision,</span>Towards Future</h1>
          <h5 class="slider-sub-heading">Platform For Students Globally
            </h5>

        </div>
      </div>
    </div>
  </section>
<!--  end slider -->
<!-- solutions  -->
<section id="about" class="about-main-block">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6">
        <div class="about-block">
          <h3 class="about-heading">About Us</h3>
          <p>Engineers can put upload their projects and track the progress and contact with the supervisor arrange meetings <etc class=""></etc></p>
          <p>Our Self learning project kits help students learn practical software, electronics and mechanical development by providing all necessary materials needed to make it themselves with detailed video tutorials and learning documents in one single kit. Apart from this nevonprojects provides free projects ideas and innovative concepts to boost student creativity and enthusiasm towards technology.</p>
          <a href="about-us.html" class="plain-btn">About More</a>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="about-features-block">
          <div class="row">
            <div class="col-xs-3">
              <div class="about-features-icon">
                <span class="ti-world"></span>
              </div>
            </div>
             <div class="col-xs-9">
              <div class="about-features-dtl">
                <h6 class="about-features-heading">Contact Supervisor</h6>
                <p>Get the best advise for your FYP and other projects.</p>
              </div>
            </div>
          </div>
        </div>
         <div class="about-features-block">
          <div class="row">
            <div class="col-xs-3">
              <div class="about-features-icon">
                <span class="ti-medall"></span>
              </div>
            </div>
             <div class="col-xs-9">
              <div class="about-features-dtl">
                <h6 class="about-features-heading">Deliverables Management</h6>
                <p>Manage the deliverables of FYP as per defined in presenation.</p>
              </div>
            </div>
          </div>
        </div>
         <div class="about-features-block">
          <div class="row">
            <div class="col-xs-3">
              <div class="about-features-icon">
                <span class="ti-truck"></span>
              </div>
            </div>
             <div class="col-xs-9">
              <div class="about-features-dtl">
                <h6 class="about-features-heading">Online Status Check</h6>
                <p>Check status of on going Fyps and their completion time.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 hidden-sm">
        <div class="about-img">
          <img src="images/about/about-img.jpg" class="img-responsive" alt="about">
        </div>
      </div>
    </div>
  </div>
</section>


  <div  class="container-fluid">
    <center><h2 style="color: #ECC53F;"><b>Lates Projects</b></h2></center>
  </div>
  <div style="margin-top:10px; " class="container">
    <center><h2 style="color: #ECC53F;">FYP Summary</h2></center>

    <table style="margin-top:30px;" class="table table-bordered">
      <thead>
        <tr>
          <th style="color:green" >S.No</th>
          <th style="color:green">Project Name And Deatil</th>
          <th style="color:green">Prgramme</th>
          <th style="color:green">Share</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>01</td>
          <td><a href="#"> HU Cloud Using ARM Board</a></td>
          <td>BS CS</td>
          <td><a href="#" class="fa fa-facebook"></a>
  <a href="#" class="fa fa-twitter"></a>
  <a href="#" class="fa fa-google"></a>
  <a href="#" class="fa fa-linkedin"></a></td>
        </tr>
        <tr>
          <td>02</td>
          <td><a href="#">Electric Power Supply</a> </td>
          <td>BE EE</td>
         <td><a href="#" class="fa fa-facebook"></a>
  <a href="#" class="fa fa-twitter"></a>
  <a href="#" class="fa fa-google"></a>
  <a href="#" class="fa fa-linkedin"></a></td>

        </tr>
         <tr>
          <td>03</td>
          <td><a href="#">Audit Energy</a></td>
          <td>BE Energy</td>
         <td><a href="#" class="fa fa-facebook"></a>
  <a href="#" class="fa fa-twitter"></a>
  <a href="#" class="fa fa-google"></a>
  <a href="#" class="fa fa-linkedin"></a></td>

        </tr>
      </tbody>
    </table>
  </div>

  <div class="container-fluid">
    <center><h2 style="color: #ECC53F;"><b>Completed Projects</b></h2></center>
  </div>
  <div  style="margin-top:10px; " class="container">
    <center><h2 style="color: #ECC53F;">Details</h2></center>

    <table style="margin-top:30px; "class="table table-bordered">
      <thead>
        <tr>
          <th style="color:green" >S.No</th>
          <th style="color:green">Project Name And Deatil</th>
          <th style="color:green">Prgramme</th>
          <th style="color:green">Share</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>01</td>
          <td><a href="#">HU Cloud Using ARM Board</a></td>
          <td>BS CS</td>
          <td><a href="#" class="fa fa-facebook"></a>
  <a href="#" class="fa fa-twitter"></a>
  <a href="#" class="fa fa-google"></a>
  <a href="#" class="fa fa-linkedin"></a></td>
        </tr>
        <tr>
          <td>02</td>
          <td><a href="#"> Power Supply</a></td>
          <td>BE EE</td>
         <td><a href="#" class="fa fa-facebook"></a>
  <a href="#" class="fa fa-twitter"></a>
  <a href="#" class="fa fa-google"></a>
  <a href="#" class="fa fa-linkedin"></a></td>

        </tr>
         <tr>
          <td>03</td>
          <td><a href="3">Audit Energy</a></td>
          <td>BE Energy</td>
         <td><a href="#" class="fa fa-facebook"></a>
  <a href="#" class="fa fa-twitter"></a>
  <a href="#" class="fa fa-google"></a>
  <a href="#" class="fa fa-linkedin"></a></td>

        </tr>
      </tbody>
    </table>
  </div>
<!-- end solutions  -->
<!-- featured product  -->
  <section id="featured" class="featured-main-block">
    <div class="section">
      <div class="container">
        <h3 class="section-heading">Completed Projects</h3>
      </div>
    </div>
    <div class="container">
      <div id="featured-slider" class="featured-slider">
        <div class="item featured-block">
          <div class="featured-img">
            <img height="240" width="270" src="images/projects/1.jpg" class="img-responsive" alt="featured">
            <div class="overlay-bg"></div>
          </div>
          <div class="featured-dtl">
            <h5 class="featured-heading">01 Android Syatem Management</h5>
            <a href="projects-details.html" class="btn btn-default">View Project</a>
          </div>
        </div>
        <div class="item featured-block">
          <div class="featured-img">
            <img height="240" width="270" src="images/projects/2.jpg" class="img-responsive" alt="featured">
            <div class="overlay-bg"></div>
          </div>
          <div class="featured-dtl">
            <h5 class="featured-heading">02 Auto Wheel Chair</h5>
            <a href="projects-details.html" class="btn btn-default">View Project</a>
          </div>
        </div>
        <div class="item featured-block">
          <div class="featured-img">
            <img height="240" width="270" src="images/projects/1.jpg" class="img-responsive" alt="featured">
            <div class="overlay-bg"></div>
          </div>
          <div class="featured-dtl">
            <h5 class="featured-heading">03 Home Automation System</h5>
            <a href="projects-details.html" class="btn btn-default">View Project</a>
          </div>
        </div>
        <div class="item featured-block">
          <div class="featured-img">
            <img height="240" width="270" src="images/projects/4.jpg" class="img-responsive" alt="featured">
            <div class="overlay-bg"></div>
          </div>
          <div class="featured-dtl">
            <h5 class="featured-heading">04 Andriod Math Searching</h5>
            <a href="projects-details.html" class="btn btn-default">View Project</a>
          </div>
        </div>
        <div class="item featured-block">
          <div class="featured-img">
            <img height="240" width="270" src="images/projects/2.jpg" class="img-responsive" alt="featured">
            <div class="overlay-bg"></div>
          </div>
          <div class="featured-dtl">
            <h5 class="featured-heading">05 Auto wheel chair</h5>
            <a href="projects-details.html" class="btn btn-default">View Project</a>
          </div>
        </div>
        <div class="item featured-block">
          <div class="featured-img">
            <img height="240" width="270" src="images/projects/2.jpg" class="img-responsive" alt="featured">
            <div class="overlay-bg"></div>
          </div>
          <div class="featured-dtl">
            <h5 class="featured-heading">06 Auto Wheel Chair</h5>
            <a href="projects-details.html" class="btn btn-default">View Project</a>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- end featured product  -->
<!-- quote -->
  <section id="quote" class="quote-main-block" style="background-image: url('images/bg/quote-bg.jpg')">
    <div class="quote-text text-center">
      <p>???Get a variety of free software projects developed to help you in your work. Get free projects that can help in your project or may help you in your research.
          ???</p>
    </div>
  </section>
<!-- end quote  -->
<!-- about -->

<!-- end about  -->
<!-- testimonials  -->
  <section id="testimonials" class="testimonials-main-block" style="background-image: url('images/bg/testimonial-bg.jpg')">
    <div class="container">
      <div class="section">
        <h3 class="section-heading">Testimonials</h3>
      </div>
      <div class="row">
        <div id="testimonials-slider" class="testimonials-slider">
          <div class="item">
            <div class="testimonial-block">
              <div class="testimonial-detail">
                <p>???It is really a great work???
                </p>
                <div class="testimonial-arrow">
                  <img src="images/icons/testimonial-arrow-2.png" alt="arrow">
                </div>
              </div>
              <div class="testimonial-img">
                <img src="images/testimonial/testimonial-1.jpg" class="img-responsive" alt="testimonial">
              </div>
              <div class="testimonial-client-dtl">
                <div class="testimonial-client">Engr Azhar Dilshad <span>- Professor</span></div>
                <div class="rating">
                  <ul>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial-block">
              <div class="testimonial-detail">
                <p>???I even believe in helping a student function more product.
                ???
                </p>
                <div class="testimonial-arrow">
                  <img src="images/icons/testimonial-arrow-2.png" alt="arrow">
                </div>
              </div>
              <div class="testimonial-img">
                <img src="images/testimonial/testimonial-2.jpg" class="img-responsive" alt="testimonial">
              </div>
              <div class="testimonial-client-dtl">
                <div class="testimonial-client">Mr Salman Shah <span>- Asst Professor</span></div>
                <div class="rating">
                  <ul>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- end testimonials  -->

<!-- team  -->

<!-- end team  -->
<!--  clients -->

<!--  end call out -->
<!--  footer -->
  <footer id="footer" class="footer-main-block" style="background-image: url('images/bg/footer-bg.jpg')">
    <div class="footer-block">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="footer-about footer-widget">
              <h5 class="footer-heading">About Us</h5>
              <p>Engineers use our kits to upgrade their knowledge on desired software algorithms, electronics concepts & mechanical concepts to enhance their skills open up career options for a better future.

</p>
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
<!-- <div class="col-md-3 col-sm-6">
            <div class="footer-news footer-widget">
              <h5 class="footer-heading">Latest News</h5>
              <ul>
                <li><a href="#">IEEE SENINAR IN MARIOT HOTEL , KARACHI </a> - July 15, 2022</li>
                <li><a href="#">President of ACM Visited Okan University</a> - June 25, 2022</li>
              </ul>
            </div>
          </div> -->
          <div class="col-md-3 col-sm-6 col-lg-6">
            <div class="footer-contact footer-widget">
              <h5 class="footer-heading text-center">Quick Contact</h5>
              <p>If you want to contact us about any issue, our support available to help you 9am-5pm Monday to Friday.</p>
              <ul class="footer-address">
                <li><span>Address:</span> Okan University</li>
                <li><span>Call:</span> <a href="tel:#">5513978329</a></li>
                <li><span>Email:</span> <a href="mailto:#">hzindabad44@gmail.com</a></li>
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


</html>
