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

						<?php query_posts( 'post_type=soup' . '&order=ASC'); ?>
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

						<?php query_posts( 'post_type=salad' . '&order=ASC'); ?>
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

						<?php query_posts( 'post_type=noodlesandrice' . '&order=ASC'); ?>
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

						<div class="menu-item-wrapper">
							<p class="menu-title">
								EDAMAME
							</p>
							<p class="menu-price">
								4
							</p>
							<p class="menu-description">
								steamed to order with sprinkle of kosher salt
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								VEGETARIAN SPRING ROLLS
							</p>
							<p class="menu-price">
								5
							</p>
							<p class="menu-description">
								light &amp; crispy spring rolls filled with fresh vegetables
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								CHICKEN DUMPLINGS
							</p>
							<p class="menu-price">
								5
							</p>
							<p class="menu-description">
								handmade won-tons steamed or fried
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								THAI CHICKEN WINGS
							</p>
							<p class="menu-price">
								7
							</p>
							<p class="menu-description">
								marinated in garlic and fish sauce, deep fried and finished in a caramelized chili reduction
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								VEGETABLE TEMPURA
							</p>
							<p class="menu-price">
								7
							</p>
							<p class="menu-description">
								battered seasonal vegetables with dashi dipping sauce
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								STEAMED PEKING DUCK BUNS
							</p>
							<p class="menu-price">
								7
							</p>
							<p class="menu-description">
								Chinese steamed buns served with Peking duck &amp; plum sauce
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								HALF RACK BBQ SPARE RIBS
							</p>
							<p class="menu-price">
								10
							</p>
							<p class="menu-description">
								pork ribs glazed with our housemade Asian BBQ sauce
							</p>
						</div>

					</article>

				</div>

				<div class="colspan1">

					<article>

						<div class="menu-item-wrapper">
							<p class="menu-title">
								SPICY EGGPLANT
							</p>
							<p class="menu-price">
								8
							</p>
							<p class="menu-description">
								Japanese eggplant, spicy pork, peppers, scallions &amp; raisins
							</p>
						</div>

						<div class="menu-item-wrapper">
							<p class="menu-title">
								FRIED OYSTER
							</p>
							<p class="menu-price">
								10
							</p>
							<p class="menu-description">
								panko-crusted bluepoint oysters
							</p>
						</div>				
						<div class="menu-item-wrapper">
							<p class="menu-title">
								CHINESE BLACK BEAN CLAMS
							</p>
							<p class="menu-price">
								10
							</p>
							<p class="menu-description">
								wok-stirred fresh clams with black bean &amp; oyster sauce
							</p>
						</div>				
						<div class="menu-item-wrapper">
							<p class="menu-title">
								CHICKEN OR SHRIMP LETTUCE WRAPS	
							</p>
							<p class="menu-price">
								10
							</p>
							<p class="menu-description">
								chicken or shrimp, green onions, water chestnuts, served over crispy rice sticks
							</p>
						</div>				
						<div class="menu-item-wrapper">
							<p class="menu-title">
								SPICY ROCK SHRIMP
							</p>
							<p class="menu-price">
								9
							</p>
							<p class="menu-description">
								crispy rock shrimp tossed in spicy Gochujang sauce
							</p>
						</div>				
						<div class="menu-item-wrapper">
							<p class="menu-title">
								SHRIMP TEMPURA
							</p>
							<p class="menu-price">
								9
							</p>
							<p class="menu-description">
								battered shrimp &amp; vegetables with dashi dipping sauce
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								BEEF TATAKI
							</p>
							<p class="menu-price">
								11
							</p>
							<p class="menu-description">
								sliced rare angus sirloin expertly prepared by our sushi chef
							</p>
						</div>
						
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

						<div class="menu-item-wrapper">
							<p class="menu-title">
								GENERAL TSO’S CHICKEN
							</p>
							<p class="menu-price">
								15
							</p>
							<p class="menu-description">
								diced chicken breast dusted &amp; stir-fried with tangy sweet &amp; spicy sauce
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								Miso Salmon
							</p>
							<p class="menu-price">
								18
							</p>
							<p class="menu-description">
								marinated in white miso and served with black coconut sticky rice, string beans &amp; carrots
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								Orange Beef
							</p>
							<p class="menu-price">
								18
							</p>
							<p class="menu-description">
								crispy Sichuan-style flank steak tossed in mild chili sauce &amp; orange peel
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								PEKING PORK CHOPS
							</p>
							<p class="menu-price">
								18
							</p>
							<p class="menu-description">
								crispy boneless pork in a sweet &amp; sour tamarind glaze
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								BEEF WITH SEASONAL VEGETABLES
							</p>
							<p class="menu-price">
								18
							</p>
							<p class="menu-description">
								sliced flank steak stir-fried with ginger, green onions, garlic &amp; fresh seasonal vegetables
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								PEKING DUCK
							</p>
							<p class="menu-price">
								20
							</p>
							<p class="menu-description">
								honey-glazed, fire roasted sliced Peking-style duck served with fried rice &amp; bok choy
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								WHOLE MAIN LOBSTER
							</p>
							<p class="menu-price">
								MP
							</p>
							<p class="menu-description">
								cantonese, ginger scallion or Szechuan style
							</p>
						</div>

					</article>

				</div>

				<div class="colspan1">

					<article>

						<div class="menu-item-wrapper">
							<p class="menu-title">
								MU SHU
							</p>
							<p class="menu-price">
								15
							</p>
							<p class="menu-description">
								julienne vegetables, mushrooms &amp; pork or chicken, served with warm Chinese pancakes (duck $2 suppl.)
							</p>
						</div>

						<div class="menu-item-wrapper">
							<p class="menu-title">
								KUNG PAO
							</p>
							<p class="menu-price">
								16
							</p>
							<p class="menu-description">
								stir-fried chicken with peanuts, chilis &amp; scallions (shrimp $2 suppl.)
							</p>
						</div>				
						<div class="menu-item-wrapper">
							<p class="menu-title">
								WALNUT SHRIMP
							</p>
							<p class="menu-price">
								18
							</p>
							<p class="menu-description">
								jumbo shrimp tossed in grand marnier honey sauce with candied walnuts &amp; strawberries
							</p>
						</div>				
						<div class="menu-item-wrapper">
							<p class="menu-title">
								FRIED DIVER SEA SCALLOPS
							</p>
							<p class="menu-price">
								20
							</p>
							<p class="menu-description">
								snow peas, ginger, scallion &amp; black bean sauce
							</p>
						</div>				
						<div class="menu-item-wrapper">
							<p class="menu-title">
								SIZZLING CUMIN LAMB CHOPS
							</p>
							<p class="menu-price">
								23
							</p>
							<p class="menu-description">
								served on a sizzling plate
							</p>
						</div>				
						<div class="menu-item-wrapper">
							<p class="menu-title">
								N.Y. STRIP STEAK
							</p>
							<p class="menu-price">
								24
							</p>
							<p class="menu-description">
								Shichimi Togarashi pepper encrusted steak, &amp; tempura green beans &amp; carrots
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								SEASONAL WHOLE FISH
							</p>
							<p class="menu-price">
								MP
							</p>
							<p class="menu-description">
								wok-fried with Szechuan sauce
							</p>
						</div>
						
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

						<div class="menu-item-wrapper">
							<p class="menu-title">
								“SELECT” LITTLE NECK CLAMS
							</p>
							<p class="menu-price">
								1/6
							</p>
							<p class="menu-description">
								
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								EAST POINT PORT	NORRIS OYSTER (NJ)
							</p>
							<p class="menu-price">
								1.5/7.5
							</p>
							<p class="menu-description">
								
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								CAPE MAY SALT OYSTER (NJ)
							</p>
							<p class="menu-price">
								2/10
							</p>
							<p class="menu-description">
								
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								CHESAPEAKE BAY 	BLUE POINT OYSTER (VA)
							</p>
							<p class="menu-price">
								2/10
							</p>
							<p class="menu-description">
								
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								MALPEQUE OYSTER (P.E.I.)
							</p>
							<p class="menu-price">
								2.5/12.5
							</p>
							<p class="menu-description">
								
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								PACIFIC KUMAMOTO OYSTER (WA)
							</p>
							<p class="menu-price">
								2.5/12.5
							</p>
							<p class="menu-description">
								
							</p>
						</div>

					</article>

					<article class="sushi-appetizer">

						<div class="menu-category">
							Sushi Appetizers
						</div>

						<div class="menu-item-wrapper">
							<p class="menu-title">
								TUNA TARTARE
							</p>
							<p class="menu-price">
								10
							</p>
							<p class="menu-description">
								tuna, lemon zest, tempura flakes, avocado &amp; ponzu sauce
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								SALMON TORTILLA
							</p>
							<p class="menu-price">
								11
							</p>
							<p class="menu-description">
								crispy tortilla, fresh guacamole, pickled jalapeño, salmon sashimi
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								YELLOWTAIL JALAPEÑO
							</p>
							<p class="menu-price">
								12
							</p>
							<p class="menu-description">
								yellowtail sashimi, fresh sliced jalapeños &amp; Yuzu-Soy
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								TREASURE ISLAND
							</p>
							<p class="menu-price">
								12
							</p>
							<p class="menu-description">
								tuna, yellowtail, salmon, fluke on a bed of avocado &amp; daikon finished with spicy mayo &amp; ponzu
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								CRUNCHY PEPPERED TUNA
							</p>
							<p class="menu-price">
								12
							</p>
							<p class="menu-description">
								seared peppercorn encrusted tuna
							</p>
						</div>

					</article>	

					<article class="sushi-entrees">

						<div class="menu-category">
							SUSHI ENTRÉES
						</div>

						<div class="menu-item-wrapper">
							<p class="menu-title">
								UNAGI-DON
							</p>
							<p class="menu-price">
								16
							</p>
							<p class="menu-description">
								
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								TEKKA-DON
							</p>
							<p class="menu-price">
								18
							</p>
							<p class="menu-description">
								
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								CHIRASHI-DON
							</p>
							<p class="menu-price">
								21
							</p>
							<p class="menu-description">
								
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								SUSHI DINNER (8 PC, TUNA ROLL)
							</p>
							<p class="menu-price">
								18
							</p>
							<p class="menu-description">
								
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								SUSHI DINNER (14 PC)
							</p>
							<p class="menu-price">
								23
							</p>
							<p class="menu-description">
								
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								SUSHI &amp; SASHIMI COMBO
							</p>
							<p class="menu-price">
								28
							</p>
							<p class="menu-description">
								5 sushi &amp; 11 sashimi, spicy tuna roll
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								SUSHI DELUXE (14 PC)
							</p>
							<p class="menu-price">
								26
							</p>
							<p class="menu-description">
								
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								SUSHI &amp; SASHIMI DELUXE
							</p>
							<p class="menu-price">
								50
							</p>
							<p class="menu-description">
								8 sushi &amp; 14 sashimi, chef’s choice roll
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								SUSHI &amp; SASHIMI GRAND PLATTER
							</p>
							<p class="menu-price">
								95
							</p>
							<p class="menu-description">
								14 sushi &amp; 25 sashimi, 3 chef’s choice rolls
							</p>
						</div>

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

						<div class="menu-item-wrapper">
							<p class="menu-title">
								TUNA (MAGURO)						
							</p>
							<p class="menu-price">
								6
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								SALMON (SAKE)						
							</p>
							<p class="menu-price">
								5
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								YELLOWTAIL (HAMACHI)						
							</p>
							<p class="menu-price">
								5.5
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								RED SNAPPER (MA-DAI)
							</p>
							<p class="menu-price">
								5
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								OCTOPUS (TAKO)
							</p>
							<p class="menu-price">
								5.5
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								SQUID (IKA)
							</p>
							<p class="menu-price">
								5
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								SHRIMP (EBI)
							</p>
							<p class="menu-price">
								5
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								SWEET SHRIMP (AMA-EBI)
							</p>
							<p class="menu-price">
								5
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								SURF CLAM (HOKKI-GAI)
							</p>
							<p class="menu-price">
								5
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								FATTY TUNA (CHU-TORO)
							</p>
							<p class="menu-price">
								MP
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								SEA URCHIN (UNI)
							</p>
							<p class="menu-price">
								8
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								SCALLOP (HOTATE)
							</p>
							<p class="menu-price">
								8
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								STRIPED BASS (SUZUKI)
							</p>
							<p class="menu-price">
								5
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								BBQ EEL (UNAGI)
							</p>
							<p class="menu-price">
								5
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								WHITE TUNA (SHIRO MAGURO)
							</p>
							<p class="menu-price">
								5
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								EGG CUSTARD (TAMAGO)
							</p>
							<p class="menu-price">
								5
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								FLYING FISH ROE (TOBIKO)
							</p>
							<p class="menu-price">
								5
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								SALMON ROE (IKURA)
							</p>
							<p class="menu-price">
								5
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								FLUKE (HIRAME)
							</p>
							<p class="menu-price">
								5
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								MACKEREL (SABA)
							</p>
							<p class="menu-price">
								5
							</p>
							<p class="menu-description">
							</p>
						</div>

					</article>

					<article class="maki">

						<div class="menu-icon">
							<img src="images/maki.svg" alt="Maki">
						</div>

						<div class="menu-category">
							MAKI
						</div>

						<div class="menu-item-wrapper">
							<p class="menu-title">
								AVOCADO ROLL
							</p>
							<p class="menu-price">
								4
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								CUCUMBER ROLL
							</p>
							<p class="menu-price">
								4
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								OSHINKO ROLL
							</p>
							<p class="menu-price">
								4
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								CRAB STICK ROLL
							</p>
							<p class="menu-price">
								4
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								CALIFORNIA ROLL
							</p>
							<p class="menu-price">
								4.5
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								GREEN ROLL
							</p>
							<p class="menu-price">
								4
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								SALMON ROLL
							</p>
							<p class="menu-price">
								5
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								TUNA ROLL
							</p>
							<p class="menu-price">
								5
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								SHRIMP (EBI) ROLL
							</p>
							<p class="menu-price">
								4.5
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								SHRIMP TEMPURA ROLL
							</p>
							<p class="menu-price">
								6
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								SWEET POTATO TEMPURA ROLL
							</p>
							<p class="menu-price">
								4.5
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								EEL ROLL
							</p>
							<p class="menu-price">
								5
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								SPICY SALMON ROLL
							</p>
							<p class="menu-price">
								5.5
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								SPICY TUNA ROLL
							</p>
							<p class="menu-price">
								5.5
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								ALASKAN ROLL
							</p>
							<p class="menu-price">
								5
							</p>
							<p class="menu-description">
								salmon, cucumber &amp; avocado
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								PHILADELPHIA ROLL
							</p>
							<p class="menu-price">
								5
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								BOSTON ROLL
							</p>
							<p class="menu-price">
								5.5
							</p>
							<p class="menu-description">
								ebi, avocado, cucumber &amp; mayo
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								SPIDER ROLL
							</p>
							<p class="menu-price">
								10
							</p>
							<p class="menu-description">
								soft shell crab tempura, avocado, cucumber &amp; caviar
							</p>
						</div>

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

						<div class="menu-item-wrapper">
							<p class="menu-title">
								BANZAI ROLL
							</p>
							<p class="menu-price">
								12
							</p>
							<p class="menu-description">
								shrimp tempura, topped with salmon sashimi, spicy mayo &amp; sweet soy
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								RED LOBSTER ROLL
							</p>
							<p class="menu-price">
								13
							</p>
							<p class="menu-description">
								spicy lobster meat &amp; cucumber topped with tuna sashimi, spicy mayo &amp; tempura flakes
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								COCONUT SHRIMP ROLL
							</p>
							<p class="menu-price">
								13
							</p>
							<p class="menu-description">
								crispy coconut shrimp, spicy lobster, topped with avocado, coconut flakes &amp; wasabi coconut sauce
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								CATERPILLAR ROLL
							</p>
							<p class="menu-price">
								12
							</p>
							<p class="menu-description">
								BBQ eel, cucumber, topped with avocado
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								FLAMING HEART ROLL
							</p>
							<p class="menu-price">
								12
							</p>
							<p class="menu-description">
								salmon, tuna, crabstick, caviar, avocado &amp; spicy tuna wrapped in soybean nori
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								OUT OF CONTROL ROLL
							</p>
							<p class="menu-price">
								13
							</p>
							<p class="menu-description">
								tuna, yellowtail &amp; salmon, avocado, asparagus, with eel sauce, spicy miso &amp; spicy mayo
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								NARUTO ROLL
							</p>
							<p class="menu-price">
								12
							</p>
							<p class="menu-description">
								salmon, tuna, yellowtail, wrapped in cucumber without rice
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								Everything Bagel Roll
							</p>
							<p class="menu-price">
								12
							</p>
							<p class="menu-description">
								smoked salmon, cream cheese, crab, scallions inside then tempuraed &amp; finished with everything bagel seasoning
							</p>
						</div>
					</article>

				</div>

				<div class="colspan1">

					<article>

						<div class="menu-item-wrapper">
							<p class="menu-title">
								CHILEAN SEABASS ROLL
							</p>
							<p class="menu-price">
								13
							</p>
							<p class="menu-description">
								panko crusted chilean seabass, tobiko, avocado, topped with tempura flakes, honey wasabi aioli &amp; eel sauce
							</p>
						</div>

						<div class="menu-item-wrapper">
							<p class="menu-title">
								ANGRY DRAGON ROLL
							</p>
							<p class="menu-price">
								13
							</p>
							<p class="menu-description">
								crispy shrimp tempura, spicy tuna &amp; mango topped with alaskan crab meat, nori &amp; miso sauce
							</p>
						</div>				
						<div class="menu-item-wrapper">
							<p class="menu-title">
								SPICE IS RIGHT ROLL
							</p>
							<p class="menu-price">
								13
							</p>
							<p class="menu-description">
								spicy tuna, yellowtail, salmon, pickled jalapeños, avocado, deep fried, wasabi &amp; eel sauce
							</p>
						</div>				
						<div class="menu-item-wrapper">
							<p class="menu-title">
								TUNA AMAZING ROLL
							</p>
							<p class="menu-price">
								13
							</p>
							<p class="menu-description">
								white tuna tempura, spicy tuna, avocado, topped with peppered tuna, mango &amp; eel sauce
							</p>
						</div>				
						<div class="menu-item-wrapper">
							<p class="menu-title">
								PAINTED LADY ROLL
							</p>
							<p class="menu-price">
								14
							</p>
							<p class="menu-description">
								fresh lobster tail, mango, asparagus, topped with spicy tuna, avocado &amp; spicy mango sauce
							</p>
						</div>				
						<div class="menu-item-wrapper">
							<p class="menu-title">
								ACAPULCO ROLL
							</p>
							<p class="menu-price">
								15
							</p>
							<p class="menu-description">
								lobster tempura, crab salad &amp; mango topped with white tuna, jalapeno, yuzu caviar
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								Forever ROLL
							</p>
							<p class="menu-price">
								12
							</p>
							<p class="menu-description">
								spicy tuna, spicy lobster inside. tuna, salmon, avocado &amp; rainbow tobiko wrapped in soy nori
							</p>
						</div>

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

						<div class="menu-item-wrapper">
							<p class="menu-title">
								WHITE RICE
							</p>
							<p class="menu-price">
								1.5
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								BROWN RICE
							</p>
							<p class="menu-price">
								2
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								BABY BOK CHOY
							</p>
							<p class="menu-price">
								8
							</p>
							<p class="menu-description">
							</p>
						</div>
						<div class="menu-item-wrapper">
							<p class="menu-title">
								STRING BEANS
							</p>
							<p class="menu-price">
								8
							</p>
							<p class="menu-description">
							</p>
						</div>

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

						<div class="menu-item-wrapper">
							<p class="menu-title">
								ICE CREAM
							</p>
							<p class="menu-price">
								4
							</p>
							<p class="menu-description">
								vanilla, chocolate, green tea or red bean
							</p>
						</div>

						<div class="menu-item-wrapper">
							<p class="menu-title">
								MILK PIE
							</p>
							<p class="menu-price">
								4.5
							</p>
							<p class="menu-description">
								salty, sweet ooey-gooey goodness with fresh unsweetened whip cream
							</p>
						</div>				
						<div class="menu-item-wrapper">
							<p class="menu-title">
								JAPANESE MOCHI
							</p>
							<p class="menu-price">
								5
							</p>
							<p class="menu-description">
								vanilla, mango, green tea or strawberry
							</p>
						</div>				
						<div class="menu-item-wrapper">
							<p class="menu-title">
								CHOCOLATE BROWNIE
							</p>
							<p class="menu-price">
								6
							</p>
							<p class="menu-description">
								layered chocolate chip cookie, oreo cookie &amp; chocolate brownie with vanilla ice cream
							</p>
						</div>	

						<div class="menu-icon mobile">
							<img src="images/xina-fish.svg" alt="Xina fish">
						</div>		

					</article>
						
				</div>
			
			</div>

		</section>

</div>