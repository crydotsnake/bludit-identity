<!--- Header -->
<?php include(THEME_DIR_PHP.'header.php'); ?>

				<!-- Main -->
					<section id="main">
						<header>
						<?php

							if(!$site->logo()){
								$file = DOMAIN_THEME.'images/avatar.jpg';
							}else{
								$file = $site->logo();
							}
								echo '<span class="avatar"><img src="'.$file.'" /></span>';
							?>		
						
						<?php foreach($content as $page): ?>
							<h1><?php echo $page->title(); ?></h1>
							<p><?php echo $page->content(); ?></p>
						<?php endforeach ?>
						
						</header>

						<footer>
							<ul class="icons">
								<?php 
							if ($site->twitter()){
								echo '<li><a target="_blank" href="'.$site->twitter().'" class="icon brands fa-twitter"></a></li>';
								}
							if ($site->instagram()){
								echo '<li><a target="_blank" href="'.$site->instagram().'" class="icon brands fa-instagram"></a></li>';
								}
							if ($site->facebook()){
								echo '<li><a target="_blank" href="'.$site->facebook().'" class="icon brands fa-facebook-f"></a></li>';
								}
							if ($site->github()){
								echo '<li><a target="_blank" href="'.$site->github().'" class="icon brands fa-github"></a></li>';
								}
							?>
							</ul>
						</footer>
					</section>

				<!-- Footer -->
				<?php include(THEME_DIR_PHP.'footer.php'); ?>

	</body>
</html>
