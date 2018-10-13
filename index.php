<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, user-scalable=no"/>
	<meta name="robots" content="index, follow" />
	<meta name="keywords" content="diseño web, seguridad web, seo, ux, user experience, privacidad web" />
	<meta name="author" content="Alex Rayo" />
	<meta name="Description" content="Creamos sitios web innovadores; diseñados para brindar la mejor experiencia de usario y seguridad web dedicada en cada proyecto">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700,900" rel="stylesheet"> 

</head>
<?php wp_head(); ?>
<body>
	<header>
		<div class="icon-menu">
			<span class="icon-line"></span>
			<span class="icon-line"></span>
			<span class="icon-line"></span>
			<span class="icon-line"></span>
		</div>
		<div class="top-bar">
			<a class="logo" href="">yutaru.net</a>					
		<nav class="menu">
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="">Contact</a></li>
			</ul>
		</nav>	
		</div>	
	</header>


	
<section class="main">
	<section class="main-layer"></section>
	<section class="cover">		
		<div class="bg-cover"></div>
		<section class="layer table">
			<div class="text-cover table-cell">

				<p class="title-cover">ALEXANDER RAYO</p>
				<p class="description-cover">PORTFOLIO</p>
			<!--
				<a class="btn btn-cover btn-without-bg" href="">PORTFOLIO</a>
				<a class="btn btn-cover btn-with-bg" href="">CONTACT</a>
			-->
			</div>
		</section>
	</section>


    <footer>
    		
	        <section class="">	

	            <form id="ajax-contact" method="post" action="http://127.0.0.1/wordpress/wp-content/themes/yutarunet/mailer.php">

	            

	                <p class="title">Send me a message</p><br>
	                <div class="field">
	                    <span class="icon-user-full icon-absolute"></span>
	                    <input class="form-input" type="text" id="name" name="name" placeholder="Name" required>
	                </div>

	                <div class="field">
	                	<span class="icon-envelope-full icon-absolute"></span>
	                    <input class="form-input" type="email" id="email" name="email" placeholder="Mail" required>
	                </div>

	                <div class="field">
	                	<span class="icon-comment-full icon-absolute"></span>
	                    <textarea class="form-input" id="message" name="message" placeholder="Message..." required></textarea>
	                </div>
	                <div id="form-messages" class="success" class="error"></div>
	                <div class="field">
	                    <button class="btn-form" type="submit" id="enviar"><span class="icon-send-full"></span></button>
	                </div>
	      
	            </form>	            

	    	</section>	
	    	<div class="footer-info">
	    		<p>admin@yutaru.net</a></p>
	    	</div> 

    </footer>
</section>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/main.js"></script>
    

</body>
</html>


