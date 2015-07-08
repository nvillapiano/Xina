<div class="menu"

	<?php 
		define('WP_USE_THEMES', false);
		require('wp/wp-blog-header.php');
	?>
	<!-- Main Menu -->

		<section class="main-menu">
			
			<div class="menu-wrapper">
			
				<div>
					<h1>
						MENU
					</h1>
				</div>
				<div class="colspan1">

					<article class="soup">

						<div class="menu-category">
							Soup
						</div>

						<?php query_posts( array ( 'post_type' => 'soup', 'posts_per_page' => -1, 'order' => 'ASC' ) ); ?>
						<?php while ( have_posts() ) : the_post(); ?>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								<?php the_title(); ?>
							</p>
							<p class="menu-price">
								<?php the_field('item_price'); ?>
							</p>
							<p class="menu-description">
								<?php the_field('item_description'); ?>
							</p>
						</div>
						<?php the_content(); ?>

						<?php endwhile; ?>

					</article>

					<article class="salad">

						<div class="menu-category">
							Salad
						</div>

						<?php query_posts( array ( 'post_type' => 'salad', 'posts_per_page' => -1, 'order' => 'ASC' ) ); ?>
						<?php while ( have_posts() ) : the_post(); ?>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								<?php the_title(); ?>
							</p>
							<p class="menu-price">
								<?php the_field('item_price'); ?>
							</p>
							<p class="menu-description">
								<?php the_field('item_description'); ?>
							</p>
						</div>
						<?php the_content(); ?>

						<?php endwhile; ?>

					</article>		

				</div>

				<div class="colspan1">

					<article class="noodles-and-rice">

						<div class="menu-icon">
							<img src="images/noodles.svg" alt="Noodles & Rice">
						</div>

						<div class="menu-category">
							Noodles &amp; Rice
						</div>
						<div class="category-description">
							pork, chicken or vegetables<br>
							(beef or shrimp add $1)
						</div>

						<?php query_posts( array ( 'post_type' => 'noodlesandrice', 'posts_per_page' => -1, 'order' => 'ASC' ) ); ?>
						<?php while ( have_posts() ) : the_post(); ?>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								<?php the_title(); ?>
							</p>
							<p class="menu-price">
								<?php the_field('item_price'); ?>
							</p>
							<p class="menu-description">
								<?php the_field('item_description'); ?>
							</p>
						</div>
						<?php the_content(); ?>

						<?php endwhile; ?>
						
					</article>
						
				</div>
			
			</div>

		</section>

	<!-- Starters -->

		<section class="starters">

			<div class="menu-wrapper">

				<div>
					<h1>
						STARTERS
					</h1>
				</div>
				<div class="colspan1">

					<article>

						<?php query_posts( array ( 'post_type' => 'starters-col1', 'posts_per_page' => -1, 'order' => 'ASC' ) ); ?>
						<?php while ( have_posts() ) : the_post(); ?>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								<?php the_title(); ?>
							</p>
							<p class="menu-price">
								<?php the_field('item_price'); ?>
							</p>
							<p class="menu-description">
								<?php the_field('item_description'); ?>
							</p>
						</div>
						<?php the_content(); ?>

						<?php endwhile; ?>

					</article>

				</div>

				<div class="colspan1">

					<article>

						<?php query_posts( array ( 'post_type' => 'starters-col2', 'posts_per_page' => -1, 'order' => 'ASC' ) ); ?>
						<?php while ( have_posts() ) : the_post(); ?>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								<?php the_title(); ?>
							</p>
							<p class="menu-price">
								<?php the_field('item_price'); ?>
							</p>
							<p class="menu-description">
								<?php the_field('item_description'); ?>
							</p>
						</div>
						<?php the_content(); ?>

						<?php endwhile; ?>
						
					</article>
						
				</div>

			</div>

			<div class="pattern-footer">
				
			</div>

		</section>

	<!-- Entrees -->

		<section class="entrees">

			<div class="menu-wrapper">

				<div class="menu-header">
					<img src="images/pig.svg" alt="Pig">
					<h1>
						ENTRées
					</h1>
					<img src="images/pig.svg" alt="Pig">
				</div>
				<div class="colspan1">

					<article>

						<?php query_posts( array ( 'post_type' => 'entrees-col-1', 'posts_per_page' => -1, 'order' => 'ASC' ) ); ?>
						<?php while ( have_posts() ) : the_post(); ?>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								<?php the_title(); ?>
							</p>
							<p class="menu-price">
								<?php the_field('item_price'); ?>
							</p>
							<p class="menu-description">
								<?php the_field('item_description'); ?>
							</p>
						</div>
						<?php the_content(); ?>

						<?php endwhile; ?>

					</article>

				</div>

				<div class="colspan1">

					<article>

						<?php query_posts( array ( 'post_type' => 'entrees-col-2', 'posts_per_page' => -1, 'order' => 'ASC' ) ); ?>
						<?php while ( have_posts() ) : the_post(); ?>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								<?php the_title(); ?>
							</p>
							<p class="menu-price">
								<?php the_field('item_price'); ?>
							</p>
							<p class="menu-description">
								<?php the_field('item_description'); ?>
							</p>
						</div>
						<?php the_content(); ?>

						<?php endwhile; ?>
						
					</article>
						
				</div>

			</div>

			<div class="pattern-footer">
				
			</div>

		</section>

	<!-- Sushi -->

		<section class="sushi">

			<div class="menu-wrapper">
			
				<div class="colspan1">

					<article class="raw-bar">

						<div class="menu-icon">
							<img src="images/raw-bar.svg" alt="Raw Bar">
						</div>

						<div class="menu-category">
							Raw Bar
						</div>

						<div class="category-description">
							PRICED BY SINGLE OR 1/2 DOZEN
						</div>

						<?php query_posts( array ( 'post_type' => 'raw-bar', 'posts_per_page' => -1, 'order' => 'ASC' ) ); ?>
						<?php while ( have_posts() ) : the_post(); ?>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								<?php the_title(); ?>
							</p>
							<p class="menu-price">
								<?php the_field('item_price'); ?>
							</p>
							<p class="menu-description">
								<?php the_field('item_description'); ?>
							</p>
						</div>
						<?php the_content(); ?>

						<?php endwhile; ?>

					</article>

					<article class="sushi-appetizer">

						<div class="menu-category">
							Sushi Appetizers
						</div>

						<?php query_posts( array ( 'post_type' => 'sushi-appetizers', 'posts_per_page' => -1, 'order' => 'ASC' ) ); ?>
						<?php while ( have_posts() ) : the_post(); ?>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								<?php the_title(); ?>
							</p>
							<p class="menu-price">
								<?php the_field('item_price'); ?>
							</p>
							<p class="menu-description">
								<?php the_field('item_description'); ?>
							</p>
						</div>
						<?php the_content(); ?>

						<?php endwhile; ?>

					</article>	

					<article class="sushi-entrees">

						<div class="menu-category">
							SUSHI ENTRÉES
						</div>

						<?php query_posts( array ( 'post_type' => 'sushi-entrees', 'posts_per_page' => -1, 'order' => 'ASC' ) ); ?>
						<?php while ( have_posts() ) : the_post(); ?>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								<?php the_title(); ?>
							</p>
							<p class="menu-price">
								<?php the_field('item_price'); ?>
							</p>
							<p class="menu-description">
								<?php the_field('item_description'); ?>
							</p>
						</div>
						<?php the_content(); ?>

						<?php endwhile; ?>

						<div class="menu-icon desktop">
							<img src="images/sushi.svg" alt="Sushi">
						</div>

					</article>
				</div>

				<div class="colspan1">

					<article class="nigiri-and-sashimi">

						<div class="menu-category">
							NIGIRI &amp; SASHIMI
						</div>

						<?php query_posts( array ( 'post_type' => 'nigiri-and-sashimi', 'posts_per_page' => -1, 'order' => 'ASC' ) ); ?>
						<?php while ( have_posts() ) : the_post(); ?>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								<?php the_title(); ?>
							</p>
							<p class="menu-price">
								<?php the_field('item_price'); ?>
							</p>
							<p class="menu-description">
								<?php the_field('item_description'); ?>
							</p>
						</div>
						<?php the_content(); ?>

						<?php endwhile; ?>

					</article>

					<article class="maki">

						<div class="menu-icon">
							<img src="images/maki.svg" alt="Maki">
						</div>

						<div class="menu-category">
							MAKI
						</div>

						<?php query_posts( array ( 'post_type' => 'maki', 'posts_per_page' => -1, 'order' => 'ASC' ) ); ?>
						<?php while ( have_posts() ) : the_post(); ?>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								<?php the_title(); ?>
							</p>
							<p class="menu-price">
								<?php the_field('item_price'); ?>
							</p>
							<p class="menu-description">
								<?php the_field('item_description'); ?>
							</p>
						</div>
						<?php the_content(); ?>

						<?php endwhile; ?>

					</article>

				</div>
			
			</div>

			<div class="pattern-footer">
				
			</div>

		</section>

	<!-- Signature Rolls -->

		<section class="signature-rolls">

			<div class="menu-wrapper">

				<div class="menu-header">
					<img src="images/sig-roll.svg" alt="Signature Rolls">
					<h1>
						SIGNATURE ROLLS
					</h1>
					<img src="images/sig-roll.svg" alt="Signature Rolls">
				</div>
				<div class="colspan1">

					<article>

						<?php query_posts( array ( 'post_type' => 'signature-rolls-col1', 'posts_per_page' => -1, 'order' => 'ASC' ) ); ?>
						<?php while ( have_posts() ) : the_post(); ?>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								<?php the_title(); ?>
							</p>
							<p class="menu-price">
								<?php the_field('item_price'); ?>
							</p>
							<p class="menu-description">
								<?php the_field('item_description'); ?>
							</p>
						</div>
						<?php the_content(); ?>

						<?php endwhile; ?>

					</article>

				</div>

				<div class="colspan1">

					<article>

						<?php query_posts( array ( 'post_type' => 'signature-rolls-col2', 'posts_per_page' => -1, 'order' => 'ASC' ) ); ?>
						<?php while ( have_posts() ) : the_post(); ?>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								<?php the_title(); ?>
							</p>
							<p class="menu-price">
								<?php the_field('item_price'); ?>
							</p>
							<p class="menu-description">
								<?php the_field('item_description'); ?>
							</p>
						</div>
						<?php the_content(); ?>

						<?php endwhile; ?>

					</article>
						
				</div>

			</div>

			<div class="pattern-footer">
				
			</div>

		</section>	

	<!-- Desserts -->

		<section class="desserts">
			
			<div class="menu-wrapper">
			
				<div class="colspan1">

					<article class="sides">

						<div class="menu-category">
							Sides
						</div>

						<?php query_posts( array ( 'post_type' => 'sides', 'posts_per_page' => -1, 'order' => 'ASC' ) ); ?>
						<?php while ( have_posts() ) : the_post(); ?>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								<?php the_title(); ?>
							</p>
							<p class="menu-price">
								<?php the_field('item_price'); ?>
							</p>
							<p class="menu-description">
								<?php the_field('item_description'); ?>
							</p>
						</div>
						<?php the_content(); ?>

						<?php endwhile; ?>

						<div class="menu-icon desktop">
							<img src="images/xina-fish.svg" alt="Xina fish">
						</div>

					</article>	

				</div>

				<div class="colspan1">

					<article class="desserts">

						<div class="menu-category">
							DESSERT
						</div>

						<?php query_posts( array ( 'post_type' => 'dessert', 'posts_per_page' => -1, 'order' => 'ASC' ) ); ?>
						<?php while ( have_posts() ) : the_post(); ?>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								<?php the_title(); ?>
							</p>
							<p class="menu-price">
								<?php the_field('item_price'); ?>
							</p>
							<p class="menu-description">
								<?php the_field('item_description'); ?>
							</p>
						</div>
						<?php the_content(); ?>

						<?php endwhile; ?>

						<div class="menu-icon mobile">
							<img src="images/xina-fish.svg" alt="Xina fish">
						</div>		

					</article>
						
				</div>
			
			</div>

		</section>

</div>