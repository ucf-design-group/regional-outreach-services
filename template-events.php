<?php /* Template Name: Events */ ?>
<?php get_header(); ?>

<div class="content-area">

	<div class="main">
		<?php
		while (have_posts()) {
			the_post();
			get_template_part('content');
		}
		?>
	</div>
	
</div>

<?php get_footer(); ?>