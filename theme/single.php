<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h2 class='backgroundcolor'><?php the_title(); ?></h2>

			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

				<div class='faint'><?php the_time('l, F jS, Y') ?> at <?php the_time() ?></div>

				<div class="navigation">
					<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
					<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
				</div>
				<div class='clear longtrailer'></div>

				<h3>Interact</h3>
				<a href="<?php trackback_url(); ?>" rel="trackback">Trackback</a><br>
				<a href="#respond">Make a Comment</a><br>
				<a href='http://digg.com/submit?phase=2&url=<?php the_permalink() ?>'>Digg This</a><br>
				<a href='http://reddit.com/submit?url=<?php the_permalink() ?>&title=<?php the_title(); ?>'>Submit to Reddit</a><br>
				<a href='http://del.icio.us/post?url=<?php the_permalink() ?>&title=<?php the_title(); ?>'>Submit to Del.icio.us</a>

				<hr class='longtrailer'>

				<?php comments_template(); ?>

				<hr class='longtrailer'>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>

				<h3>Read more about</h3>
				<?php the_category('<br>') ?>

				<hr class='longtrailer'>

			</div>
		</div>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
