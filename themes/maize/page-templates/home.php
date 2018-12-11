<?php
/**
 * Template Name: Home
 *
 * @package WordPress
 * @subpackage Maize
 * @since Maize 1.0
 */

$date_time_headline    = get_field('date_time_headline', 'option');
$date_time_subhead     = get_field('date_time_subhead', 'option');
$location_headline     = get_field('location_headline', 'option');
$location_subhead      = get_field('location_subhead', 'option');
$quantity_headline     = get_field('quantity_headline', 'option');
$quantity_subhead      = get_field('quantity_subhead', 'option');
$above_order_form_note = get_field('above_order_form_note', 'option');
$below_order_form_note = get_field('below_order_form_note', 'option');

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

            <?php // Hero. Images are added in main.js ?>
            <div id="hero" class="hero">
                <img class="logo" src="<?php bloginfo('template_url'); ?>/images/logo-main.svg" alt="Maize">
            </div>

            <section class="main-content">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-xs-12">
                        <header>
                            <?php // Desktop Menu ?>
                            <nav id="site-navigation" class="main-navigation">
                                <div class="menu-left">
                                    <a href="#" id="open-forms">Order Cookies</a>
                                </div>

                                <div class="menu-logo">
                                    <a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo-secondary.svg" alt="Maize"></a>
                                </div>

                                <div class="menu-right">
                                    <a href="#about" id="about-link">About Us</a>
                                </div>
                            </nav>
                        </header>
                    </div>
                    <div class="col-lg-1"></div>
                </div>

                <?php // Mobile Menu ?>
                <div class="menu-link-group">
                    <div class="menu-link">
                        <a href="/order">Order Cookies</a>
                    </div>
                    <div class="menu-link">
                        <a href="#about" id="about-link">About Us</a>
                    </div>
                </div>

                <?php // Mobile Image Grid ?>
                <div class="mobile-grid">
                    <div class="mobile-image-card" data-id="<?php echo string_to_id(get_field('modal_1_caption')); ?>">
                        <img src="<?php echo get_field('modal_1_preview_image')['url']; ?>">
                        <div class="mobile-grid-caption"><?php the_field('modal_1_caption'); ?></div>
                    </div>
                    <div class="mobile-image-card" data-id="<?php echo string_to_id(get_field('modal_2_caption')); ?>">
                        <img src="<?php echo get_field('modal_2_preview_image')['url']; ?>">
                        <div class="mobile-grid-caption"><?php the_field('modal_2_caption'); ?></div>
                    </div>
                    <div class="mobile-image-card" data-id="<?php echo string_to_id(get_field('modal_3_caption')); ?>">
                        <img src="<?php echo get_field('modal_3_preview_image')['url']; ?>">
                        <div class="mobile-grid-caption"><?php the_field('modal_3_caption'); ?></div>
                    </div>
                    <div class="mobile-image-card" data-id="<?php echo string_to_id(get_field('modal_5_caption')); ?>">
                        <img src="<?php echo get_field('modal_5_preview_image')['url']; ?>">
                        <div class="mobile-grid-caption"><?php the_field('modal_5_caption'); ?></div>
                    </div>
                    <div class="mobile-image-card" data-id="<?php echo string_to_id(get_field('modal_4_caption')); ?>">
                        <img src="<?php echo get_field('modal_4_preview_image')['url']; ?>">
                        <div class="mobile-grid-caption"><?php the_field('modal_4_caption'); ?></div>
                    </div>
                    <div class="mobile-image-card" data-id="<?php echo string_to_id(get_field('modal_6_caption')); ?>">
                        <img src="<?php echo get_field('modal_6_preview_image')['url']; ?>">
                        <div class="mobile-grid-caption"><?php the_field('modal_6_caption'); ?></div>
                    </div>
                </div>

                <?php // Desktop Image Grid ?>
                <div class="fig-grid">
                    <div class="row fig-grid-top">
                        <div class="col-xs-8">
                            <div class="fig-image-card" data-id="<?php echo string_to_id(get_field('modal_1_caption')); ?>">
                                <div class="fig-image a" style="background-image: url(<?php echo get_field('modal_1_preview_image')['url']; ?>);"></div>
                                <div class="fig-caption"><?php the_field('modal_1_caption'); ?></div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="fig-image-card" data-id="<?php echo string_to_id(get_field('modal_2_caption')); ?>">
                                <div class="fig-image b" style="background-image: url(<?php echo get_field('modal_2_preview_image')['url']; ?>);"></div>
                                <div class="fig-caption"><?php the_field('modal_2_caption'); ?></div>
                            </div>
                            <div class="fig-image-card" data-id="<?php echo string_to_id(get_field('modal_3_caption')); ?>">
                                <div class="fig-image b" style="background-image: url(<?php echo get_field('modal_3_preview_image')['url']; ?>);"></div>
                                <div class="fig-caption"><?php the_field('modal_3_caption'); ?></div>
                            </div>
                        </div>
                    </div>

                    <div class="row fig-grid-bottom">
                        <div class="col-xs-4 col-lg-5">
                            <div class="fig-image-card" data-id="<?php echo string_to_id(get_field('modal_4_caption')); ?>">
                                <div class="fig-image d" style="background-image: url(<?php echo get_field('modal_4_preview_image')['url']; ?>);"></div>
                                <div class="fig-caption"><?php the_field('modal_4_caption'); ?></div>
                            </div>
                        </div>
                        <div class="col-xs-4 col-lg-3">
                            <div class="fig-image-card" data-id="<?php echo string_to_id(get_field('modal_5_caption')); ?>">
                                <div class="fig-image d" style="background-image: url(<?php echo get_field('modal_5_preview_image')['url']; ?>);"></div>
                                <div class="fig-caption"><?php the_field('modal_5_caption'); ?></div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="fig-image-card" data-id="<?php echo string_to_id(get_field('modal_6_caption')); ?>">
                                <div class="fig-image d" style="background-image: url(<?php echo get_field('modal_6_preview_image')['url']; ?>);"></div>
                                <div class="fig-caption"><?php the_field('modal_6_caption'); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


		</main><!-- #main -->
    </div><!-- #primary -->


    <div class="form-windows-bg">
        <div class="form-container">
            <div class="form-clearfix">
                <form id="order-form" name="order-form" method="post" action="submit_order_form_ajax">
                    <input type="hidden" name="recipient" value="<?php the_field('email_address'); ?>">
                    <div class="form-window" id="form-window-cheat"></div>
                    <div class="form-window" id="form-window-0">
                        <div class="form-close">
                            <svg width="21" height="21" xmlns="http://www.w3.org/2000/svg">
                                <g stroke="#231F1E" stroke-width="1.5" fill="none" fill-rule="evenodd">
                                    <path fill="#FFF" d="M.75.75h19.5v19.5H.75z"/>
                                    <g stroke-linecap="square">
                                        <path d="M14.674 6.398L6.94 14.132M14.626 14.08l-7.63-7.63"/>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="form-header">
                            <img class="form-logo" src="<?php bloginfo('template_url'); ?>/images/logo-m-black.svg">
                            <a class="form-email" href="mailto:<?php the_field('email_address'); ?>"><?php the_field('email_address'); ?></a>
                        </div>
                        <div class="form-row">
                            <div class="form-headline"><?php echo $date_time_headline; ?></div>
                            <div class="form-subhead"><?php echo $date_time_subhead; ?></div>
                            <div class="form-input-group">
                                <div class="form-col">
                                    <label for="form-date">Date</label>
                                    <input type="text" id="form-date" name="date">
                                </div>
                                <div class="form-col">
                                    <label for="form-time">Time</label>
                                    <input type="text" id="form-time" name="time">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-headline"><?php echo $location_headline; ?></div>
                            <div class="form-subhead"><?php echo $location_subhead; ?></div>
                            <div class="form-input-group">
                                <div class="form-col">
                                    <label for="form-address">Street Address</label>
                                    <input type="text" id="form-address" name="address">
                                </div>
                                <div class="form-col">
                                    <label for="form-zipcode">Zipcode</label>
                                    <input type="text" id="form-zipcode" name="zipcode">
                                </div>
                            </div>
                        </div>
                        <div class="row center-xs">
                            <button type="button" class="btn" id="form-next-btn">Next</button>
                        </div>
                        <div class="row center-xs">
                            <div class="error-message"></div>
                        </div>
                    </div>


                    <div class="form-window" id="form-window-1">
                        <div class="form-close">
                            <svg width="21" height="21" xmlns="http://www.w3.org/2000/svg">
                                <g stroke="#231F1E" stroke-width="1.5" fill="none" fill-rule="evenodd">
                                    <path fill="#FFF" d="M.75.75h19.5v19.5H.75z"/>
                                    <g stroke-linecap="square">
                                        <path d="M14.674 6.398L6.94 14.132M14.626 14.08l-7.63-7.63"/>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="form-row">
                            <div class="form-headline">Contact Info</div>
                            <div class="form-input-group">
                                <div class="form-col">
                                    <label for="form-first-name">First Name</label>
                                    <input type="text" id="form-first-name" name="first-name" class="ignore-validation">
                                </div>
                                <div class="form-col">
                                    <label for="form-last-name">Last Name</label>
                                    <input type="text" id="form-last-name" name="last-name" class="ignore-validation">
                                </div>
                                <div class="form-col">
                                    <label for="form-email">Email</label>
                                    <input type="text" id="form-email" name="email" class="ignore-validation">
                                </div>
                                <div class="form-col">
                                    <label for="form-phone-number">Phone Number</label>
                                    <input type="text" id="form-phone-number" name="phone-number" class="ignore-validation">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-headline"><?php echo $quantity_headline; ?></div>
                            <div class="form-subhead"><?php echo $quantity_subhead; ?></div>
                            <div class="form-input-group">
                                <div class="form-quantity-group">
                                    <label><?php echo $above_order_form_note; ?></label>

                                    <?php while ( have_rows('cookies', 'options') ) : the_row(); ?>
                                    <div class="form-quantity-row">
                                        <div class="form-quantity-name">
                                            <span><?php the_sub_field('cookie'); ?></span>
                                        </div>
                                        <div class="quantity">
                                            <input type="number" min="0" max="9" step="1" value="0" name="<?php the_field('modal_1_caption'); ?>">
                                        </div>
                                    </div>
                                    <?php endwhile; ?>

                                    <label class="disclaimer"><?php echo $below_order_form_note; ?></label>

                                </div>
                            </div>
                        </div>
                        <div class="row center-xs">
                            <button type="submit" class="btn" id="form-submit">Submit</button>
                        </div>
                        <div class="row center-xs">
                            <div id="back-btn">Go Back</div>
                        </div>
                        <div class="row center-xs">
                            <div class="error-message"></div>
                        </div>
                    </div>


                    <div class="form-window" id="form-window-2">
                        <div class="form-close">
                            <svg width="21" height="21" xmlns="http://www.w3.org/2000/svg">
                                <g stroke="#231F1E" stroke-width="1.5" fill="none" fill-rule="evenodd">
                                    <path fill="#FFF" d="M.75.75h19.5v19.5H.75z"/>
                                    <g stroke-linecap="square">
                                        <path d="M14.674 6.398L6.94 14.132M14.626 14.08l-7.63-7.63"/>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="form-header">
                            <img class="form-logo" src="<?php bloginfo('template_url'); ?>/images/logo-m-black.svg">
                            <a class="form-email" href="mailto:<?php the_field('email_address'); ?>"><?php the_field('email_address'); ?></a>
                        </div>
                        <div class="form-success-headline">Thank You</div>
                        <div class="form-success-body">
                            <?php the_field('form_confirmation_message'); ?>
                        </div>
                        <div class="form-success-phone"><?php the_field('area_code'); ?><?php the_field('phone_number'); ?><br><a href="mailto:<?php the_field('email_address'); ?>"><?php the_field('email_address'); ?></a></div>
                        <div class="form-success-signature">-Maize</div>
                        <button type="button" class="btn" id="success-close-btn">Close</button>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <?php // Modals ?>
    <?php get_template_part('template-parts/modals'); ?>


<?php
get_footer();
