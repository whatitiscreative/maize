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

$instagram_link = get_field('instagram_link');
$facebook_link = get_field('facebook_link');

?>

	</div><!-- #content -->

	<footer id="colophon">
		
		<div class="about" id="about">		
			<div class="section-left">
				<div class="section-inner">
					<?php the_field('about_copy'); ?>
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
				
				<div class="footer-info">
					<?php if(!empty($instagram_link)): ?>
						<a href="<?php echo $instagram_link['url']; ?>" target="<?php echo $instagram_link['target']; ?>"><?php echo $instagram_link['title']; ?></a>
					<?php endif; ?>
					<?php if(!empty($facebook_link)): ?>
						<br><a href="<?php echo $facebook_link['url']; ?>" target="<?php echo $facebook_link['target']; ?>"><?php echo $facebook_link['title']; ?></a>
					<?php endif; ?>
				</div>
				
			</div>
			<div class="footer-right">
				<div class="footer-telephone">TEL.<br><?php the_field('area_code'); ?><br><?php the_field('phone_number'); ?></div>
				<div class="footer-email"><a href="mailto:<?php the_field('email_address'); ?>" target="_blank"><?php the_field('email_address'); ?></a></div>
				<div class="footer-copyright">Copyright <?php echo date('Y'); ?></div>
			</div>
		</div>

		<div class="footer-mobile">
			
			<div class="footer-link-group">
				<?php if(!empty($instagram_link)): ?>
					<div class="footer-link">
						<a href="<?php echo $instagram_link['url']; ?>" target="<?php echo $instagram_link['target']; ?>"><?php echo $instagram_link['title']; ?></a>
					</div>
				<?php endif; ?>
				<?php if(!empty($facebook_link)): ?>
					<div class="footer-link">
						<a href="<?php echo $facebook_link['url']; ?>" target="<?php echo $facebook_link['target']; ?>"><?php echo $facebook_link['title']; ?></a>
					</div>
				<?php endif; ?>
			</div>
			
			<div class="footer-mobile-info">
				<div class="row col-xs between-xs col-flushed">
					<div class="footer-mobile-telephone"><a href="tel:8044264466">TEL<br><?php the_field('area_code'); ?><br><?php the_field('phone_number'); ?></a></div>
					<div class="footer-mobile-email"><a href="mailto:<?php the_field('email_address'); ?>" target="_blank"><?php the_field('email_address'); ?></a></div>
				</div>
				<div class="footer-mobile-copyright">Copyright <?php echo date('Y'); ?></div>
			</div>
		</div>

		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
