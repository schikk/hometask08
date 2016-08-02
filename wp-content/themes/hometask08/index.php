<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Index</title>

		<!--styles-->
		<link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="fonts/stylesheet.css" type='text/css'>
<?php wp_head() ?>
	</head>

	<body class="home">
		<header>
			<section class="header-top wrap">
				<section class="support">
					<ul>
					<li class="phone-icon"><a href="tel:+565 975 658">+565 975 658</a></li>
					<li class="mail-icon"><a href="mailto:info@premiumcoding.com">info@premiumcoding.com</a></li>
					</ul>
				</section>
				<nav>
					<ul class="account-menu">	
					   <li> <a href="#">MY ACCOUNT</a></li>
					   <li> <a href="#">LOGIN</a></li>
					   <li> <a href="#">CHECKOUT</a></li>
					   <li> <a href="#">SIGN UP</a></li>
					</ul>			   
				</nav>
			</section>
			<section class="header-main">
				<div class="header-main-content wrap">
					<h1><a href="index.html"><img src="<?php bloginfo(template_url)?>/img/logo.png" alt="BULLSy-RUGGED SHOES STORE"></a></h1>
					<nav>
						<ul class="main-menu">
						<?php wp_nav_menu( array( 'items_wrap' => '%3$s' ) ); ?>
						   <!-- <li> <a href="#">HOME</a></li>
						   <li> <a href="#">APPAREL</a></li>
						   <li> <a href="#">FASHION</a></li>
						   <li> <a href="#">CONTACT US</a></li> -->
						</ul>			   
					</nav>
					<a class="navigation-toggle">
						<!-- <i class="icon icon-bars"></i> -->
						<div class="menu-button">
							<div class="menu-line menu-line1"></div>
							<div class="menu-line menu-line2"></div>
							<div class="menu-line menu-line3"></div>
						</div>
					</a>
					<div class="cart">
						<div class="items"><a href="#">10 items</a></div>
						<div class="price">499.99 €</div>
					</div>
				</div>
			</section>
		</header>
		<section class="content">
			<section class="banner wrap">
				<strong>
					SHOES<br>
					SNICKERS<br>
					BOOTS<br>
					RUGGEDNESS
				</strong>
			</section>
			<section class="featured-boxes wrap">
				<ul>
					<li>
						<h3>FREE SHIPPING</h3>
						<p>- on all orders above <span class="red-text">$99</span></p>
					</li>
					<li>
						<h3>NEW SHOES COLLECTION</h3>
						<p>- brand new collection of <span class="red-text">Bulls Shoes</span></p>
					</li>
					<li>
						<h3>MONEY BACK GUARANTEE</h3>
						<p>- return policy on all orders within <span class="red-text">14 days</span></p>
					</li>
				</ul>
			</section>
			<div class="grey-bg">
				<section class="categories wrap">
					<h2><span class="line">OUR SHOE CATEGORIES</span></h2>
					<ul>
						<li> 
							<img src="<?php bloginfo(template_url)?>/img/snickers.jpg" alt="snickers">
							<h3>SNICKERS</h3>
							<p>Lorem ipsum dolor sit amet, consecte at justo 
							eget lorem port titor tincid ipsum lor.</p>
							<a href="#"><span class="red-text">View the Category</span></a>
						</li>
						<li> 
							<img src="<?php bloginfo(template_url)?>/img/running-shoes.jpg" alt="running-shoes">
							<h3>RUNNING SHOES</h3>
							<p>Lorem ipsum dolor sit amet, consecte at justo 
							eget lorem port titor tincid ipsum lor.</p>
							<a href="#"><span class="red-text">View the Category</span></a>
						</li>
						<li> 
							<img src="<?php bloginfo(template_url)?>/img/montain-shoes.jpg" alt="montain-shoes">
							<h3>MOUNTAIN SHOES</h3>
							<p>Lorem ipsum dolor sit amet, consecte at justo 
							eget lorem port titor tincid ipsum lor.</p>
							<a href="#"><span class="red-text">View the Category</span></a>
						</li>
					</ul>	
				</section>
			</div>
			<section class="products wrap">
				<h2><span class="line">OUR LATEST ARRIVALS</span></h2>
				<ul>
					<?php $posts = get_posts ("category_name=latest"); ?> 
					<?php if ($posts) : ?>
					<?php foreach ($posts as $post) : setup_postdata ($post); ?>
					<li> 
						<?php echo get_the_post_thumbnail($page->ID, 'thumbnail'); ?>
						<?php the_content();?>
					</li>
					<?php 
					  endforeach;
					  wp_reset_postdata();
					?>
					<?php endif; ?>
				</ul>	
			</section>
			<div class="grey-bg">
				<section class="products wrap">
					<h2><span class="line">FEATURED PRODUCTS</h2>
					<ul>
						<?php $posts = get_posts ("category_name=featured"); ?> 
						<?php if ($posts) : ?>
						<?php foreach ($posts as $post) : setup_postdata ($post); ?>
						<li> 
							<?php echo get_the_post_thumbnail($page->ID, 'thumbnail'); ?>
							<?php the_content();?>
						</li>
						<?php 
					  endforeach;
					  wp_reset_postdata();
					  ?>
					  <?php endif; ?>
					</ul>	
				</section>
			</div>
			<section class="blog wrap">
				<h2><span class="line">LATEST FROM THE BLOG</span></h2>
				<ul>
					<li> 
						<img src="<?php bloginfo(template_url)?>/img/blog1.jpg" alt="blog1">
						<h3>Extra rugged flip-flops will arrive soon</h3>
						<P>Lorem ipsum dolor sit amet, coct adipiscing elit, ip
						as consectuni. Lor ipsum dolor sit amet, consec adi
						pis elit, sed diam nonumm nibh euised tincidunt.</P>
						<a href="#"><span class="red-text">Read More</span></a>
					</li>
					<li> 
						<img src="<?php bloginfo(template_url)?>/img/blog2.jpg" alt="blog2">
						<h3>New models of Bullsy Snickers just arrived</h3>
						<P>Lorem ipsum dolor sit amet, coct adipiscing elit, ip
						as consectuni. Lor ipsum dolor sit amet, consec adi
						pis elit, sed diam nonumm nibh euised tincidunt.</P>
						<a href="#"><span class="red-text">Read More</span></a>
					</li>
					<li> 
						<img src="<?php bloginfo(template_url)?>/img/blog3.jpg" alt="blog3">
						<h3>Extra rugged flip-flops will arrive soon</h3>
						<P>Lorem ipsum dolor sit amet, coct adipiscing elit, ip
						as consectuni. Lor ipsum dolor sit amet, consec adi
						pis elit, sed diam nonumm nibh euised tincidunt.</P>
						<a href="#"><span class="red-text">Read More</span></a>
					</li>
				</ul>	
			</section>
			<section class="quote grey-bg">
				<section class="wrap">
						<strong>BULLSY - A RUGGED STORE FOR RUGGED PEOPLE</strong>
						<p>- read more about our store regulations and policy <a href="#"><span class="red-text">here</span></a>.
						Lorem ipsum dolor sit amet.</p>
				</section>
			</section>
		</section>
		<footer>
			<section class="footer-top">
				<div class="wrap">
					<a href="index.html"><img src="<?php bloginfo(template_url)?>/img/logo-bottom.png" alt="BULLSy-RUGGED SHOES STORE"></a>
					<nav>
						<ul class="main-menu">
						   <li> <a href="#">HOME</a></li>
						   <li> <a href="#">APPAREL</a></li>
						   <li> <a href="#">FASHION</a></li>
						   <li> <a href="#">CONTACT US</a></li>
						</ul>			   
					</nav>
					<div id="anchor"><a href="#" onclick="return up()"></a></div>
					<span class="copyright">© 2013 copyright PREMIUMCODING // All rights reserved</span>
				</div>
			</section>
			<section class="footer-bottom">
				<div class="wrap">
					<ul class="social">
						<li><a href="#" class="rss"></a></li>
						<li><a href="https://ru.pinterest.com/" target="_blank" class="pinterest"></a></li>
						<li><a href="https://www.facebook.com/" target="_blank" class="facebook"></a></li>
						<li><a href="https://twitter.com/" target="_blank" class="twitter"></a></li>
						<li><a href="https://dribbble.com/" target="_blank" class="dribble"></a></li>
					</ul>
					<p>Designed by <a href="http://premiumcoding.com/" target="_blank"><span class="red-text">PremiumCoding.com</span> </a>Web Design</p>
				</div>
			</section>
		</footer>
		<script type="text/javascript">
		 function up() {  
		  var top = Math.max(document.body.scrollTop,document.documentElement.scrollTop);  
		if(top > 0) {  
		  window.scrollBy(0,((top+100)/-20));  
		  t = setTimeout('up()',20);  
		} else clearTimeout(t);  
		return false;  
		} 
		</script>
		<?php wp_footer() ?>
	</body>
</html>
