<?php /* Template Name: About */ ?>
<?php get_header(); ?>

<div class="content-area">

	<div class="photo">
		<img src="<?php bloginfo('template_directory'); ?>/resources/stock1.png"/>
	</div>

	<div class="main">
		<?php
		while (have_posts()) {
			the_post();
			get_template_part('content');
		}
		?>
	</div>

	<div class="contact-wrap">
		<h1> Contact </h1>
		<div class="info">
			<div class="address">
				<h3>Office of Student Involvement</h3>
				<p>4000 Central Florida Boulevard</p>
				<p>Orlando, FL 32816</p>
				<br>
			</div>
			<div class="phone-number">
				<p><strong>Phone:</strong> (407) 823-6471</p>
			</div>
			<div class="fax">
				<p><strong>Fax:</strong> (407) 823-5899</p>
			</div>
		</div>
	</div>


</div>

<?php get_footer(); ?>