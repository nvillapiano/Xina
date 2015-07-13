<body class="reservations">

<div class="wrapper">

<!-- reservations -->

<div>

	<div class="reservations-wrapper">	

		<h1>
			reservations
		</h1>

		<div class="half">
			<h4>
				12 guests for less?
			</h4>
			<a href="https://www.seatme.yelp.com/r/xina-restaurant" class="button"  target="_blank">make a reservation</a>
		</div>

		<div class="half">
			<h4>
				13 or more guests?
			</h4>
			<a href="#event-form" class="button book">book an event</a>
		</div>

	</div>
	
</div>

<div id="event-form" class="event-form">
	<?php 
		define('WP_USE_THEMES', false);
		require('wp/wp-blog-header.php');
	?>

<!-- 138 local, 141 QP server -->
 	<?php echo do_shortcode('[contact-form-7 id="141" title="Contact form 1"]'); ?>
	
</div>