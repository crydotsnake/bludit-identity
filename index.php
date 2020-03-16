<!--- Header -->
<?php include(THEME_DIR_PHP.'header.php'); ?>

				<!-- Main -->
					<section id="main">
						<header>
						<?php

							$file = DOMAIN_UPLOAD_PROFILES.'avatar.jpg';
							if( !file_exists (PATH_UPLOAD_PROFILES.'avatar.jpg') ){
								$file = DOMAIN_THEME.'images/avatar.jpg';
							}	

								echo '<span class="avatar"><img src="'.$file.'"></a>';
							?>	
						
						<?php foreach($content as $page): ?>
							<h1><?php echo $page->title(); ?></h1>
							<p><?php echo $page->content(); ?></p>
						<?php endforeach ?>
						
						</header>

						<footer>
							<ul class="icons">
								<li><a target="_blank" href="<?php echo $site->twitter(); ?>" class="icon brands fa-twitter">Twitter</a></li>
								<li><a target="_blank" href="<?php echo $site->instagram(); ?>" class="icon brands fa-instagram">Instagram</a></li>
								<li><a target="_blank" href="<?php echo $site->facebook(); ?>" class="icon brands fa-facebook-f">Facebook</a></li>
								<li><a target="_blank" href="<?php echo $site->github(); ?>" class="icon brands fa-github">GitHub</a></li>
							</ul>
						</footer>
					</section>

				<!-- Footer -->
				<?php include(THEME_DIR_PHP.'footer.php'); ?>

	</body>
</html>