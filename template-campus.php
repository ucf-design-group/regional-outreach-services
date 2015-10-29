<?php /*Template Name: Campus */ ?>
<?php get_header(); ?>

<div class="content-area">

	<div class="splash-wrap">
		<div class="splash-image">
			<div class="inner-text">
				<h2></h2>
				<p></p>
			</div>
		</div>
	</div>
	
	<div class="main">
		<?php
		while (have_posts()) {
			the_post();
			get_template_part('content');

		} ?>
	</div>

	<section class="exec-board">
		<h2>Cocoa Regional Service Team</h2>
<?php
		$leaderLoop = new WP_QUERY(array('post_type' => 'exec_board', 'posts_per_page' => -1, 'orderby' => 'meta_value', 'order'='ASC', 'meta_key' => 'leader_form_order'));
		while ($leaderLoop->have_posts()) {
			$leaderLoop->the_posts();
			$title = get_the_title();
			$content = get_the_post_thumbnail($post->ID, 'thumbnail');
			$image_url = wp_get_attachment_image_src(get_the_post_thumbnail_id($post->ID), 'full');
			
		}


</div>

<?php get_footer(); ?>