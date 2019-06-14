<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
	<title>Cars Sale a Auto mobile Category Website Template | Single :: w3layouts</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$(".dropdown img.flag").addClass("flagvisibility");

			$(".dropdown dt a").click(function () {
				$(".dropdown dd ul").toggle();
			});

			$(".dropdown dd ul li a").click(function () {
				var text = $(this).php();
				$(".dropdown dt a span").php(text);
				$(".dropdown dd ul").hide();
				$("#result").php("Selected value is: " + getSelectedValue("sample"));
			});

			function getSelectedValue(id) {
				return $("#" + id).find("dt a span.value").php();
			}

			$(document).bind('click', function (e) {
				var $clicked = $(e.target);
				if (!$clicked.parents().hasClass("dropdown"))
					$(".dropdown dd ul").hide();
			});


			$("#flagSwitcher").click(function () {
				$(".dropdown img.flag").toggleClass("flagvisibility");
			});
		});
	</script>
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<link rel="stylesheet" href="css/global.css">
	<!--thumb slider--->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			$("#slider").responsiveSlides({
				auto: true,
				manualControls: '#slider3-pager',
			});
		});
	</script>
	<!---thumb slider--->
</head>

<body>
	<div class="header">
		<div class="wrap">
			<div class="header-bot">
				<div class="logo">
					<a href="index.php">
						<img src="images/logo.png" alt="">
					</a>
				</div>
				<div class="cart">
					<ul class="ph-no">
						<li class="item  first_item">
							<div class="item_html">
								<span class="text1">Order delivery:</span>
								<span class="text2">+800-0005-5289</span>
							</div>
						</li>
					</ul>
					<div id="top-search">
						<form method="get" action="#">
							<input type="text" name="s" class="input-search">
							<input type="submit" value="Search" id="submit">
						</form>
					</div>
				
					
					<?php
					include "menu.php";				
					?>

	<div class="header-bottom">
		<div class="wrap">
			<div class="single">
				<div class="box_wrapper">
					<h1>Long Term Business</h1>
				</div>
				<div class="single-top">
					<div class="thum-main">
						<div class="slider">
							<!-- Slideshow 3 -->
							<ul class="rslides" id="slider">
								<li>
									<img src="images/pic10.jpg" alt="">
								</li>
								<li>
									<img src="images/pic9.jpg" alt="">
								</li>
								<li>
									<img src="images/pic8.jpg" alt="">
								</li>
								<li>
									<img src="images/pic11.jpg" alt="">
								</li>
								<li>
									<img src="images/pic12.jpg" alt="">
								</li>
								<li>
									<img src="images/pic13.jpg" alt="">
								</li>
							</ul>
							<!-- Slideshow 3 Pager -->
							</br>
							</br>
							<ul id="slider3-pager">
								<li>
									<a href="#">
										<img src="images/t-pic10.jpg" alt="">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="images/t-pic9.jpg" alt="">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="images/t-pic8.jpg" alt="">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="images/t-pic11.jpg" alt="">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="images/t-pic12.jpg" alt="">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="images/t-pic13.jpg" alt="">
									</a>
								</li>
							</ul>
						</div>
					</div>





					<div class="grid span_2_of_3">
						<h3>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
							aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
							Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
							aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
							Duis aute irure.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
							et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem
							ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
							irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					</div>
					<div class="clear"></div>
				</div>
				<p class="about-para">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
					aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
					aliquip ex ea commodo consequat.aliquam erat vol.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
					nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
					exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor
					in hendrerit </p>
				<div class="clear"></div>
				<div class="links">
					<ul>
						<li>
							<a href="#">
								<img src="images/blog-icon1.png" title="date">
								<span>june 14, 2013</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/blog-icon2.png" title="Admin">
								<span>admin</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/blog-icon3.png" title="Comments">
								<span>No comments</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/blog-icon4.png" title="Lables">
								<span>View posts</span>
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/blog-icon5.png" title="permalink">
								<span>permalink</span>
							</a>
						</li>
					</ul>
				</div>
				<div class="team">
					<h2>Related Posts</h2>
					<div class="section group">
						<div class="col_1_of_4 span_1_of_4">
							<img src="images/pic14.jpg" alt="" />
						</div>
						<div class="col_1_of_4 span_1_of_4">
							<img src="images/pic15.jpg" alt="" />
						</div>
						<div class="col_1_of_4 span_1_of_4">
							<img src="images/pic16.jpg" alt="" />
						</div>
						<div class="col_1_of_4 span_1_of_4">
							<img src="images/pic17.jpg" alt="" />
						</div>
						<div class="clear"></div>
					</div>
					<div class="leave-comment">
						<a href="#" name="comment">Leave a Comment</a>
					</div>
					<div class="comments-area">
						<form>
							<p>
								<label>Name</label>
								<span>*</span>
								<input type="text" value="">
							</p>
							<p>
								<label>Email</label>
								<span>*</span>
								<input type="text" value="">
							</p>
							<p>
								<label>Website</label>
								<input type="text" value="">
							</p>
							<p>
								<label>Subject</label>
								<span>*</span>
								<textarea></textarea>
							</p>
							<p>
								<input type="submit" value="Post">
							</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="wrap">
			<div class="footer-top">
				<div class="col_1_of_5 span_1_of_5">
					<div class="footer-grid twitts">
						<h3>Latest Tweets</h3>
						<p>
							<label>@Lorem ipsum</label>dolor sit amet, consectetur adipisicing elit.</p>
						<span>10 minutes ago</span>
						<p>
							<label>@consectetur</label>dolor sit amet, consectetur adipisicing elit.</p>
						<span>15 minutes ago</span>
					</div>
				</div>
				<div class="col_1_of_5 span_1_of_5">
					<div class="footer-grid center-grid">
						<h3>Recent posts</h3>
						<ul>
							<li>
								<a href="#">eiusmod temporinc</a>
							</li>
							<li>
								<a href="#">adipisicing elit, sed</a>
							</li>
							<li>
								<a href="#">mod tempor incididunt</a>
							</li>
							<li>
								<a href="#">dipisicing elit, sed do</a>
							</li>
							<li>
								<a href="#">eiusmod temporinc</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col_1_of_5 span_1_of_5">
					<div class="footer-grid twitts">
						<h3>Our Company</h3>
						<div class="f_menu">
							<ul>
								<li>About your Company Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh eui</li>
								<li>Terms &amp; conditions Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh eui</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col_1_of_5 span_1_of_5">
					<div class="call_info">
						<p class="txt_3">Call us toll free:</p>
						<p class="txt_4">1 800 234 23456</p>
					</div>
				</div>
				<div class="col_1_of_5 span_1_of_5">
					<div class="footer-grid twitts">
						<h3>Get in touch</h3>
						<ul class="follow_icon">
							<li>
								<a href="#" style="opacity: 1;">
									<img src="images/follow_icon.png" alt="">
								</a>
							</li>
							<li>
								<a href="#" style="opacity: 1;">
									<img src="images/follow_icon1.png" alt="">
								</a>
							</li>
							<li>
								<a href="#" style="opacity: 1;">
									<img src="images/follow_icon2.png" alt="">
								</a>
							</li>
							<li>
								<a href="#" style="opacity: 1;">
									<img src="images/follow_icon3.png" alt="">
								</a>
							</li>
							<li>
								<a href="#" style="opacity: 1;">
									<img src="images/follow_icon4.png" alt="">
								</a>
							</li>
							<li>
								<a href="#" style="opacity: 1;">
									<img src="images/follow_icon5.png" alt="">
								</a>
							</li>
						</ul>
						<p>+1 111-111-1111</p>
						<span>
							<a href="mailto:info@example.com">support(at)carssale.com</a>
						</span>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<div class="copy-right">
		<div class="wrap">
			<p>Copyright &copy; 2013 Car Sale. All Rights Reserved | Design by
				<a href="http://w3layouts.com/"> W3layouts</a>
			</p>
		</div>
	</div>
</body>

</html>