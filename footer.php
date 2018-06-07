<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Maize
 */

?>

	</div><!-- #content -->

	<footer id="colophon">
		
		<div class="about" id="about">		
			<div class="section-left">
				<div class="section-inner">
					A cookie is a baked or cooked good that is small, flat, and sweet, usually containing flour, sugar and some type of oil or fat. It may include other ingredients such as raisins, oats, chocolate chips or nuts. In most English-speaking countries except for the US and Canada, crisp cookies are called biscuits. Chewier biscuits are sometimes called cookies even in the UK. Some cookies may also be named by their shape.
				</div>
			</div>
			<div class="section-right">
				<div class="section-inner">
					<a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo-m-white.svg" alt="Maize"></a>
				</div>
			</div>
		</div>

		<div class="footer">
			<div class="footer-left">
				<div class="footer-logo">
					<a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo-footer.svg" alt="Maize"></a>
				</div>
				<!--
				<div class="footer-info">
					<a href="#" target="_blank">The Gram</a><br>
					<a href="#" target="_blank">The Book</a>
				</div>
				-->
			</div>
			<div class="footer-right">
				<div class="footer-telephone">TEL.<br><?php the_field('area_code'); ?><br><?php the_field('phone_number'); ?></div>
				<div class="footer-email"><a href="mailto:<?php the_field('email_address'); ?>" target="_blank"><?php the_field('email_address'); ?></a></div>
				<div class="footer-copyright">Copyright <?php echo date('Y'); ?></div>
			</div>
		</div>

		<div class="footer-mobile">
			<!--
			<div class="footer-link-group">
				<div class="footer-link">
					<a href="#">The Gram</a>
				</div>
				<div class="footer-link">
					<a href="#">The Book</a>
				</div>
			</div>
			-->
			<div class="footer-mobile-info">
				<div class="footer-mobile-telephone"><a href="tel:8044264466">TEL<br><?php the_field('area_code'); ?><br><?php the_field('phone_number'); ?></a></div>
				<div class="footer-mobile-email"><a href="mailto:<?php the_field('email_address'); ?>" target="_blank"><?php the_field('email_address'); ?></a></div>
				<div class="footer-mobile-copyright">Copyright <?php echo date('Y'); ?></div>
			</div>
		</div>

		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
