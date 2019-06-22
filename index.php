<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/source.css">
<style>
.mySlides {display:none}
.xinxin-left, .xinxin-right, .xinxin-badge {cursor:pointer}
.xinxin-badge {height:13px;width:13px;padding:0}
</style>
<!-- -->
<head>
	<meta charset="UTF-8">
	<title>XinXin-Shape your style</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
	<header>
		<div class="text-center logo">
			<img src="img/logo1.png" alt="" />
			<h2>XinXin-The best choice for you</h2>
		</div>
	</header>
	<!-- Content -->
	
<div class="xinxin-content xinxin-display-container" style="max-width:1500px">
  			<img class="mySlides" src="images/slide1.png" style="width:100%">
  			<img class="mySlides" src="images/slide2.png" style="width:100%">
  			<img class="mySlides" src="images/slide3.png" style="width:100%">
  		<div class="xinxin-center xinxin-container xinxin-section xinxin-large xinxin-text-white xinxin-display-bottommiddle" style="width:100%">
    		<div class="xinxin-left xinxin-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    		<div class="xinxin-right xinxin-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    			<span class="xinxin-badge demo xinxin-border xinxin-transparent xinxin-hover-white" onclick="currentDiv(1)"></span>
    			<span class="xinxin-badge demo xinxin-border xinxin-transparent xinxin-hover-white" onclick="currentDiv(2)"></span>
    			<span class="xinxin-badge demo xinxin-border xinxin-transparent xinxin-hover-white" onclick="currentDiv(3)"></span>
  		</div>
</div>

					<script>
						var slideIndex = 1;
						showDivs(slideIndex);

						function plusDivs(n) {
						  showDivs(slideIndex += n);
						}

						function currentDiv(n) {
						  showDivs(slideIndex = n);
						}

						function showDivs(n) {
						  var i;
						  var x = document.getElementsByClassName("mySlides");
						  var dots = document.getElementsByClassName("demo");
						  if (n > x.length) {slideIndex = 1}
						  if (n < 1) {slideIndex = x.length}
						  for (i = 0; i < x.length; i++) {
						    x[i].style.display = "none";  
						  }
						  for (i = 0; i < dots.length; i++) {
						    dots[i].className = dots[i].className.replace(" xinxin-white", "");
						  }
						  x[slideIndex-1].style.display = "block";  
						  dots[slideIndex-1].className += " xinxin-white";
						}
					</script>
</div>
	<div class="main-content">
		<div class="container">
			<div class="main-inner clearfix">
				<div class="row" style="margin-top: 50px;">
					<div class="col-lg-12 col-md-12">
						<h2 class="section-title">SHOES</h2>
						<div class="row">
							<div class="col-sm-6 col-lg-4 col-md-4 text-center">
								<a href="#" class="demo-full image-shop-box" target="_blank">
									<span class="image-bg">
										<span class="image-shop-scroll" style="background-image: url('img/home1.png');"></span>
									</span>
									<h2 class="text-heading">Adidas</h2>
								</a>
							</div>
							<div class="col-sm-6 col-lg-4 col-md-4 text-center">
								<a href="#" class="image-shop-box demo-full" target="_blank">
									<span class="image-bg">
										<span class="image-shop-scroll" style="background-image: url('img/home2.png');"></span>
									</span>
									<h2 class="text-heading">Nike</h2>
								</a>
							</div>
							<div class="col-sm-6 col-lg-4 col-md-4 text-center">
								<a href="#" class="image-shop-box demo-full" target="_blank">
									<span class="image-bg">
										<span class="image-shop-scroll" style="background-image: url('img/home3.png');"></span>
									</span>
									<h2 class="text-heading">New Balance</h2>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top: 0px;">
					<div class="col-lg-12 col-md-12">
						<h2 class="section-title">Clothes</h2>
						<div class="row">
							<div class="col-sm-6 col-lg-4 col-md-4 text-center">
								<a href="#" class="image-shop-box demo-full" target="_blank">
									<span class="image-bg">
										<span class="image-shop-scroll" style="background-image: url('img/hoodie.png');"></span>
									</span>
									<h2 class="text-heading">Hoodie</h2>
								</a>
							</div>
							<div class="col-sm-6 col-lg-4 col-md-4 text-center">
								<a href="#" class="image-shop-box demo-full" target="_blank">
									<span class="image-bg">
										<span class="image-shop-scroll" style="background-image: url('img/shirt.png');"></span>
									</span>
									<h2 class="text-heading">Shirt</h2>
								</a>
							</div>
							<div class="col-sm-6 col-lg-4 col-md-4 text-center">
								<a href="#" class="image-shop-box demo-full" target="_blank">
									<span class="image-bg">
										<span class="image-shop-scroll" style="background-image: url('img/short.png');"></span>
									</span>
									<h2 class="text-heading">Short</h2>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top: 0px;">
					<div class="col-lg-12 col-md-12">
						<h2 class="section-title">Fashion accessories</h2>
						<div class="row">
							<div class="col-sm-6 col-lg-4 col-md-4 text-center">
								<a href="#" class="image-shop-box demo-full" target="_blank">
									<span class="image-bg">
										<span class="image-shop-scroll" style="background-image: url('img/bag.png');"></span> 
									</span>
									<h2 class="text-heading">Bag</h2>
								</a>
							</div>
							<div class="col-sm-6 col-lg-4 col-md-4 text-center">
								<a href="#" class="image-shop-box demo-full" target="_blank">
									<span class="image-bg">
										<span class="image-shop-scroll" style="background-image: url('img/watch.png');"></span> 
									</span>
									<h2 class="text-heading">Watch</h2>
								</a>
							</div>
							<div class="col-sm-6 col-lg-4 col-md-4 text-center">
								<a href="#" class="image-shop-box demo-full" target="_blank">
									<span class="image-bg">
										<span class="image-shop-scroll" style="background-image: url('img/hat.png');"></span> 
									</span>
									<h2 class="text-heading">Hat</h2>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="text-center buy-now">
							<img src="img/arrow.png" alt=""/>
							<a href="XinXinProduct.php" class="btn btn-buy">SEE MORE AT</a>
						</div>
					</div>
				</div>
				<div>	
						<a href="https://www.youtube.com/watch?v=O2vhdz5Pegc" target="_blank"><img src="img/youtube.png" alt= "Youtube" style="width:200px"></a>
						<a href="https://www.pinterest.com/" target="_blank"><img src="img/pinterest.png" alt= "Pinterest" style="width:140px"></a>
						<a href="https://www.facebook.com/" target="_blank"><img src="img/facebook.png" alt= "Facebook" style="width:150px"></a>
						<a href="https://www.instagram.com" target="_blank"><img src="img/instagram.png" alt= "Instagram" style="width:110px"></a>
						<a href="https://twitter.com/" target="_blank"><img src="img/tw.png" alt= "Twitter" style="width:127px"></a>
						<a href="https://merrychristmas2018quotes.com/merry-christmas-images/" target="_blank"><img src="img/google.png" alt= "That is Cú Lừa" style="width:130px"></a>
				</div>

			</div>
		</div>
	</div>

	<footer>
		<div class="text-center">
			<p class="copyright">
				Welcome &copy; 2018 <a href="https://www.pinterest.com/search/pins/?q=shoes&rs=typed&term_meta[]=shoes%7Ctyped" rel="nofollow" style="color: #009ED8 !important">XinXin</a>. The best choice for you.
			</p>
		</div>
	</footer>

	
	

</body>
<!--Toan dep trai-->
</html>