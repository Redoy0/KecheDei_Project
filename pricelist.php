<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<title>Price List</title>
	
	<!-- favicon -->
    <link rel="shortcut icon" href="images/ico/favicon.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- css -->
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" /> 
	<link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css" />
	<link rel="stylesheet" type="text/css" href="css/unslider.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
</head>

<body data-target="#nino-navbar" data-spy="scroll">

	<!-- Header
    ================================================== -->
	<header id="nino-headerSub">
		<div id="nino-headerInnerSub">					
			<nav id="nino-navbar" class="navbar navbar-default" role="navigation">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<a class="navbar-brand" href="index.php"><img class="logo" src="images/logo/KechedeiWhite.png" alt=""></a>
						
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nino-navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="nino-menuItem pull-right">
						<div class="collapse navbar-collapse pull-left" id="nino-navbar-collapse">
							<ul class="nav navbar-nav">
								<li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
								<li><a href="index.php?#nino-services">Service</a></li>
								<li><a href="pricelist.php">Price List</a></li>
								<li><a href="orderpage.php">Order</a></li>
								<li><a href="#nino-latestBlog">Blog</a></li>
								<li><a href="index.php?#nino-story">About</a></li>
								<li><a href="signup_signin.php" target="_blank">Sign In</a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
						<ul class="nino-iconsGroup nav navbar-nav">
							<li><a href="#"><i class="mdi mdi-cart-outline nino-icon"></i></a></li>
							<li><a href="#" class="nino-search"><i class="mdi mdi-magnify nino-icon"></i></a></li>
						</ul>
					</div>
				</div><!-- /.container-fluid -->
			</nav>
		</div>
	</header><!--/#header-->
	
	<!-- Table -->
	<section class="price-table">
		<div  class="container">
			<div class="to-print">
				<h2 class="nino-sectionHeading">
					Price List
				</h2>
				<table id="print-area" class="table table-striped table-hover table-bordered .table-responsive{-sm|-md|-lg|-xl}">
				  <thead class="thead-dark">
				    <tr class="bg-primary">
				      <th scope="col">SI</th>
				      <th scope="col">Type</th>
				      <th scope="col">Service</th>
				      <th scope="col">Price</th>
				    </tr>
				  </thead>
				  <tbody id="table_body">
				  	<!-- Shirt -->
				    <tr>
				      <th scope="row" rowspan="3" class="vertical-center">1</th>
				      <td rowspan="3" class="vertical-center">Shirt</td>
				      <td>Iron</td>
				      <td>10 tk</td>
				    </tr>
				    <tr>
				      <td>Wash</td>
				      <td>18 tk</td>
				    </tr>
				    <tr>
				      <td>Hard Wash</td>
				      <td>30 tk</td>
				    </tr>
				    <!-- Pant -->
				    <tr>
				      <th scope="row" rowspan="3" class="vertical-center">2</th>
				      <td rowspan="3" class="vertical-center">Pant</td>
				      <td>Iron</td>
				      <td>08 tk</td>
				    </tr>
				    <tr>
				      <td>Wash</td>
				      <td>20 tk</td>
				    </tr>
				    <tr>
				      <td>Hard Wash</td>
				      <td>32 tk</td>
				    </tr>
				    
				    <!-- T- Shirt -->
				    
				    <tr>
				      <th scope="row" rowspan="3" class="vertical-center">3</th>
				      <td rowspan="3" class="vertical-center">T- Shirt</td>
				      <td>Iron</td>
				      <td>08 tk</td>
				    </tr>
				    <tr>
				      <td>Wash</td>
				      <td>18 tk</td>
				    </tr>
				    <tr>
				      <td>Hard Wash</td>
				      <td>25 tk</td>
				    </tr>
				    <!-- Panjabi -->
				    <tr>
				      <th scope="row" rowspan="3" class="vertical-center">4</th>
				      <td rowspan="3" class="vertical-center">Panjabi</td>
				      <td>Iron</td>
				      <td>10 tk</td>
				    </tr>
				    <tr>
				      <td>Wash</td>
				      <td>20 tk</td>
				    </tr>
				    <tr>
				      <td>Hard Wash</td>
				      <td>30 tk</td>
				    </tr>
				    <!-- Blazer -->
				    <tr>
				      <th scope="row" rowspan="3" class="vertical-center">5</th>
				      <td rowspan="3" class="vertical-center">Blazer</td>
				      <td>Iron</td>
				      <td>40 tk</td>
				    </tr>
				    <tr>
				      <td>Wash</td>
				      <td>90 tk</td>
				    </tr>
				    <tr>
				      <td>Hard Wash</td>
				      <td>110 tk</td>
				    </tr>
				    <!-- Bed Sheet -->
				    <tr>
				      <th scope="row" rowspan="3" class="vertical-center">6</th>
				      <td rowspan="3" class="vertical-center">Bed Sheet</td>
				      <td>Iron</td>
				      <td>30 tk</td>
				    </tr>
				    <tr>
				      <td>Wash</td>
				      <td>45 tk</td>
				    </tr>
				    <tr>
				      <td>Hard Wash</td>
				      <td>70 tk</td>
				    </tr>
				    
				    <!-- Others -->
				    <tr>
				      <th scope="row" rowspan="2" class="vertical-center">7</th>
				      <td rowspan="2" class="vertical-center">Others</td>
				      <td>Wash</td>
				      <td>Contact Us</td>
				    </tr>
				    <tr>
				      <td>Hard Wash</td>
				      <td>Contact Us</td>
				    </tr>
				    
				  </tbody>
				</table>
				<div class = "invoice-btns">
					<button type = "button" class = "invoice-btn"onclick="printInvoice()">
		                    <span>
		                         <i class="fa-solid fa-download"></i>
		                    </span>
		                    <span>Download Price List</span>
		            </button>
            	</div>
            </div>
		</div>
		
	</section>	
	
	
    <!-- Latest Blog
    ================================================== -->
    <section id="nino-latestBlog">
    	<div class="container">
    		<h2 class="nino-sectionHeading">
				<span class="nino-subHeading">Our stories</span>
				Latest Blog
			</h2>
			<div class="sectionContent">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<article>
							<div class="articleThumb">
								<a href="#"><img src="images/our-blog/blog-1.jpg" alt=""></a>
								<div class="date">
									<span class="number">20</span>
									<span class="text">Nov</span>
								</div>
							</div>
							<h3 class="articleTitle"><a href="">Winter Care Guide: Maintaining and Protecting Your Leather Jacket</a></h3>
							<p class="articleDesc">
								As the crisp, cool air of fall begins to embrace us, the trees shed their leaves, and we all start planning for the cozy winter months.
							</p>
							<div class="articleMeta">
								<a href="#"><i class="mdi mdi-eye nino-icon"></i> 543</a>
								<a href="#"><i class="mdi mdi-comment-multiple-outline nino-icon"></i> 15</a>
							</div>
						</article>
					</div>
					<div class="col-md-4 col-sm-4">
						<article>
							<div class="articleThumb">
								<a href="#"><img src="images/our-blog/blog-2.jpg" alt=""></a>
								<div class="date">
									<span class="number">14</span>
									<span class="text">Nov</span>
								</div>
							</div>
							<h3 class="articleTitle"><a href="">6 Clever Uses for Old Sheets and Towels</a></h3>
							<p class="articleDesc">
								Do you have any old bed sheets and towels? What would like to do with them?
							<div class="articleMeta">
								<a href="#"><i class="mdi mdi-eye nino-icon"></i> 995</a>
								<a href="#"><i class="mdi mdi-comment-multiple-outline nino-icon"></i> 42</a>
							</div>
						</article>
					</div>
					<div class="col-md-4 col-sm-4">
						<article>
							<div class="articleThumb">
								<a href="#"><img src="images/our-blog/blog-3.jpg" alt=""></a>
								<div class="date">
									<span class="number">12</span>
									<span class="text">Nov</span>
								</div>
							</div>
							<h3 class="articleTitle"><a href="">5 Reasons Why Using A Laundry Service Is More Eco-Friendly</a></h3>
							<p class="articleDesc">
								In the era of eco-conscious living, where every action we take holds the power to shape our environment, it's crucial to recognize the impact even the simplest tasks can have.
							</p>
							<div class="articleMeta">
								<a href="#"><i class="mdi mdi-eye nino-icon"></i> 1264</a>
								<a href="#"><i class="mdi mdi-comment-multiple-outline nino-icon"></i> 69</a>
							</div>
						</article>
					</div>
				</div>
			</div>
    	</div>
    </section><!--/#nino-latestBlog-->

    <!-- Map
    ================================================== -->
    <section id="nino-map">
    	<div class="container">
    		<h2 class="nino-sectionHeading">
    			<i class="mdi mdi-map-marker nino-icon"></i>
    			<span class="text">Open map</span>
    			<span class="text" style="display: none;">Close map</span>
    		</h2>
    		<div class="mapWrap">
	    		<iframe src="https://maps.google.com/maps?q=daffodil%20inernational%20university,%20ashulia&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
	    	</div>
    	</div>
    </section><!--/#nino-map-->
        <!-- Footer
    ================================================== -->
    <footer id="footer">
        <div class="container">
        	<div class="row">
        		<div class="col-md-4">
        			<div class="colInfo">
	        			<div class="footerLogo">
	        				<a calss= "navbar-brand" href="index.php" ><img class="logo" src="images/logo/Kechedei.png" alt=""></a>	
	        			</div>
	        			<p>
	        				where clinliness regin suprime.
	        			</p>
	        			<div class="nino-followUs">
	        				<div class="totalFollow"><span>15k</span> followers</div>
	        				<div class="socialNetwork">
	        					<span class="text">Follow Us: </span>
	        					<a href="" class="nino-icon"><i class="mdi mdi-facebook"></i></a>
	        					<a href="" class="nino-icon"><i class="mdi mdi-twitter"></i></a>
	        					<a href="" class="nino-icon"><i class="mdi mdi-instagram"></i></a>
	        					<a href="" class="nino-icon"><i class="mdi mdi-pinterest"></i></a>
	        					<a href="" class="nino-icon"><i class="mdi mdi-google-plus"></i></a>
	        					<a href="" class="nino-icon"><i class="mdi mdi-youtube-play"></i></a>
	        					<a href="" class="nino-icon"><i class="mdi mdi-dribbble"></i></a>
	        					<a href="" class="nino-icon"><i class="mdi mdi-tumblr"></i></a>
	        				</div>
	        			</div>
	        			<form action="" class="nino-subscribeForm">
	        				<div class="input-group input-group-lg">
								<input type="email" class="form-control" placeholder="Your Email" required>
								<span class="input-group-btn">
									<button class="btn btn-success" type="submit">Subscribe</button>
								</span>
							</div>
	        			</form>
        			</div>
        		</div>
        		<div class="col-md-4 col-sm-6">
        			<div class="colInfo">
	        			<h3 class="nino-colHeading">Blogs</h3>
	        			<ul class="listArticles">
	        				<li layout="row" class="verticalCenter">
	        					<a class="articleThumb fsr" href="#"><img src="images/our-blog/blog-4.jpg" alt=""></a>
	        					<div class="info">
	        						<h3 class="articleTitle"><a href="#">Winter Care Guide: Maintaining and Protecting Your Leather Jacket</a></h3>
	        						<div class="date">Nov 20, 2023</div>
	        					</div>
	        				</li>
	        				<li layout="row" class="verticalCenter">
	        					<a class="articleThumb fsr" href="#"><img src="images/our-blog/blog-5.jpg" alt=""></a>
	        					<div class="info">
	        						<h3 class="articleTitle"><a href="#">6 Clever Uses for Old Sheets and Towels</a></h3>
	        						<div class="date">Nov 14, 2023</div>
	        					</div>
	        				</li>
	        				<li layout="row" class="verticalCenter">
	        					<a class="articleThumb fsr" href="#"><img src="images/our-blog/blog-6.jpg" alt=""></a>
	        					<div class="info">
	        						<h3 class="articleTitle"><a href="#">5 Reasons Why Using A Laundry Service Is More Eco-Friendly</a></h3>
	        						<div class="date">Nov 12, 2023</div>
	        					</div>
	        				</li>
	        			</ul>
        			</div>
        		</div>
        		<div class="col-md-4 col-sm-6">
        			<div class="colInfo">
	        			<h3 class="nino-colHeading">instagram</h3>
	        			<div class="instagramImages clearfix">
	        				<a href="#"><img src="images/instagram/ld-1.jpg" alt=""></a>
	        				<a href="#"><img src="images/instagram/ld-2.jpg" alt=""></a>
	        				<a href="#"><img src="images/instagram/ld-3.jpg" alt=""></a>
	        				<a href="#"><img src="images/instagram/ld-4.jpg" alt=""></a>
	        				<a href="#"><img src="images/instagram/ld-5.jpg" alt=""></a>
	        				<a href="#"><img src="images/instagram/ld-6.jpg" alt=""></a>
	        				<a href="#"><img src="images/instagram/ld-7.jpg" alt=""></a>
	        				<a href="#"><img src="images/instagram/ld-8.jpg" alt=""></a>
	        				<a href="#"><img src="images/instagram/ld-9.jpg" alt=""></a>
	        				<a href="#"><img src="images/instagram/ld-3.jpg" alt=""></a>
	        				<a href="#"><img src="images/instagram/ld-4.jpg" alt=""></a>
	        				<a href="#"><img src="images/instagram/ld-5.jpg" alt=""></a>
	        			</div>
	        			<a href="#" class="morePhoto">View more photos</a>
        			</div>
        		</div>
        	</div>
			<div class="nino-copyright">Copyright &copy; 2023 <a target="_blank" href="http://www.kechedei.com/" title="KecheDei.com">kechedei.com</a>. All Rights Reserved. <br/> Keche Dei by <a href="https://www.facebook.com/SabbirAhamedRedoyRs">Team Keche Dei</a></div>
        </div>
    </footer><!--/#footer-->

    <!-- Search Form - Display when click magnify icon in menu
    ================================================== -->
    <form action="" id="nino-searchForm">
    	<input type="text" placeholder="Search..." class="form-control nino-searchInput">
    	<i class="mdi mdi-close nino-close"></i>
    </form><!--/#nino-searchForm-->
	
	
    <!-- Scroll to top
    ================================================== -->
	<a href="#" id="nino-scrollToTop">Go to Top</a>
	
	<!-- javascript -->
	<script src = "script.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>	
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.hoverdir.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.97074.js"></script>
	<script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script type="text/javascript" src="js/unslider-min.js"></script>
	<!-- <script type="text/javascript" src="js/template.js"></script> -->

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!-- css3-mediaqueries.js for IE less than 9 -->
	<!--[if lt IE 9]>
	    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
		
</body>
</html>