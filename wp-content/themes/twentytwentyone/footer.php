<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
$has_sidebar_1 = is_active_sidebar('sidebar-4');
$has_sidebar_2 = is_active_sidebar('sidebar-2');
$has_sidebar_3 = is_active_sidebar('sidebar-3');
?>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->

<?php get_template_part('template-parts/footer/footer-widgets'); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<section id="footer">
	<div class="container">
		<div class="row text-center text-xs-center text-sm-left text-md-left">
			<div class="col-xs-12 col-sm-4 col-md-4">
				<h5>Quick links</h5>
				<?php if ($has_sidebar_1) {
					dynamic_sidebar('sidebar-4');
				} ?>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4">
				<h5>Quick links</h5>
				<?php if ($has_sidebar_1) {
					dynamic_sidebar('sidebar-2');
				} ?>
			</div>
			<div class="col-xs-12 col-sm-4 col-md-4">
				<h5>Quick links</h5>
				<?php if ($has_sidebar_1) {
					dynamic_sidebar('sidebar-3');
				} ?>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
				<ul class="list-unstyled list-inline social text-center">
					<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa-brands fa-facebook-f"></i></a></li>
					<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa-brands fa-twitter"></i></a></li>
					<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa-brands fa-instagram"></i></a></li>
					<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa-brands fa-google-plus-g"></i></a></li>
					<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02" target="_blank"><i class="fa fa-envelope"></i></a></li>
				</ul>
			</div>
			<hr>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
				<p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
				<p class="h6">© All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
			</div>
			<hr>
		</div>
	</div>
</section><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>