<?php include 'header.php' ?>

<!-- STARTING MAIN -->
<div class="container content">
	<div class="main block">
		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
				<article class="post">
					<h2>
						
						<?php the_title(); ?>
						
					</h2>
					<!-- The META used for - the author name, the date -->
					<p class="meta">
						Posted at 
						<?php the_time(); ?> 
						by 
						<!-- HERE The link of a look into all posts from this author -->
						<!-- And the display info is the author name -->
						<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?>
						</a>
					</p>
					<p><?php the_content(); ?></p>

				<?php endwhile; ?>	
				<?php else : ?>
					<?php echo wpautop('Sorry no posts were found')	?>
				<?php endif ?>
			</article>

		</div>
		<!-- END OF MAIN -->

		<!-- SIDEBAR -->
		<div class="side">
			<div class="block">
				<h3>Sidebar Head</h3>
				<p>Integer cursus massa risus, et vulputate arcu blandit at. Sed posuere, leo non commodo cursus, ex mi lacinia risus, id lobortis augue lacus vel justo. Quisque erat urna, ultrices sit amet nisi non, gravida sodales libero. Curabitur aliquam felis ut sem pharetra, consequat aliquet massa dapibus. In dictum consequat tincidunt.</p>
				<a class="button" href="#">Action</a>

			</div>
		</div>
	</div>

	<?php include 'footer.php'; ?>