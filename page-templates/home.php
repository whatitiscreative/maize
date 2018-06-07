<?php
/**
 * Template Name: Home
 *
 * @package WordPress
 * @subpackage Maize
 * @since Maize 1.0
 */


get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

            <div id="hero" class="hero">
                <img class="logo" src="<?php bloginfo('template_url'); ?>/images/logo-main.svg" alt="Maize">
            </div>



            <!-- <section class="main-content">
                <div class="row">
                    <div class="col-lg-1">COL 1</div>
                    <div class="col-xs-12 col-lg-10">
                        <header>
                            <nav id="site-navigation" class="main-navigation">
                                <div class="menu-left">
                                    <a href="#">Order Cookies</a>
                                </div>

                                <div class="menu-logo">
                                    <a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo-secondary.svg" alt="Maize"></a>
                                </div>

                                <div class="menu-right">
                                    <a href="#">About Us</a>
                                </div>
                            </nav>
                        </header>
                    </div>
                    <div class="col-lg-1">COL 1</div>
                </div> -->

                <!--
                <div class="grid">
                    <div>
                        <img src="<?php bloginfo('template_url'); ?>/images/img_00.png">
                    </div>
                    <div>
                        <img src="<?php bloginfo('template_url'); ?>/images/img_03.png">
                    </div>
                    <div>
                        <img src="<?php bloginfo('template_url'); ?>/images/img_04.png">
                    </div>
                    <div>
                        <img src="<?php bloginfo('template_url'); ?>/images/img_01.png">
                    </div>
                    <div>
                        <img src="<?php bloginfo('template_url'); ?>/images/img_02.png">
                    </div>
                    <div>
                        <img src="<?php bloginfo('template_url'); ?>/images/img_05.png">
                    </div>
                </div>
                -->




            <section class="main-content">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-xs-12">
                        <header>
                            <nav id="site-navigation" class="main-navigation">
                                <div class="menu-left">
                                    <a href="mailto:<?php the_field('email_address'); ?>" target="_blank">Order Cookies</a>
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

                <div class="menu-link-group">
                    <div class="menu-link">
                        <a href="mailto:<?php the_field('email_address'); ?>" target="_blank">Order Cookies</a>
                    </div>
                    <div class="menu-link">
                        <a href="#about" id="about-link">ABout Us</a>
                    </div>
                </div>

                <!-- <section class="img-grid">
                    <figure style="grid-area: bigsquare;">
                        <img src="<?php bloginfo('template_url'); ?>/images/img_00.png">
                        <figcaption>A</figcaption>
                    </figure>
                    <figure style="grid-area: smallsquare;">
                        <img src="<?php bloginfo('template_url'); ?>/images/img_03.png">
                        <figcaption>B</figcaption>
                    </figure>
                    <figure style="grid-area: mediumtall;">
                        <img src="<?php bloginfo('template_url'); ?>/images/img_04.png">
                        <figcaption>C</figcaption>
                    </figure>
                    <figure style="grid-area: mediumsquare;">
                        <img src="<?php bloginfo('template_url'); ?>/images/img_01.png">
                        <figcaption>D</figcaption>
                    </figure>
                    <figure style="grid-area: smalltall;">
                        <img src="<?php bloginfo('template_url'); ?>/images/img_02.png">
                        <figcaption>E</figcaption>
                    </figure>
                    <figure style="grid-area: smallsquare2;">
                        <img src="<?php bloginfo('template_url'); ?>/images/img_05.png">
                        <figcaption>F</figcaption>
                    </figure>
                </section> -->

                

                <!-- <div class="grid-2">
                    <div>
                        <img src="<?php bloginfo('template_url'); ?>/images/img_00.png">
                        <div class="image-title">A</div>
                    </div>
                    <div>
                        <img src="<?php bloginfo('template_url'); ?>/images/img_03.png">
                        <div class="image-title">B</div>
                    </div>
                    <div>
                        <img src="<?php bloginfo('template_url'); ?>/images/img_04.png">
                        <div class="image-title">C</div>
                    </div>
                    <div>
                        <img src="<?php bloginfo('template_url'); ?>/images/img_01.png">
                        <div class="image-title">D</div>
                    </div>
                    <div>
                        <img src="<?php bloginfo('template_url'); ?>/images/img_02.png">
                        <div class="image-title">E</div>
                    </div>
                    <div>
                        <img src="<?php bloginfo('template_url'); ?>/images/img_05.png">
                        <div class="image-title">F</div>
                    </div>
                </div> -->


                <!-- <div class="grid">
                    <div>
                        <img src="<?php bloginfo('template_url'); ?>/images/img_00.png">
                    </div>
                    <div>
                        <img src="<?php bloginfo('template_url'); ?>/images/img_03.png">
                    </div>
                    <div>
                        <img src="<?php bloginfo('template_url'); ?>/images/img_04.png">
                    </div>
                    <div>
                        <img src="<?php bloginfo('template_url'); ?>/images/img_01.png">
                    </div>
                    <div>
                        <img src="<?php bloginfo('template_url'); ?>/images/img_02.png">
                    </div>
                    <div>
                        <img src="<?php bloginfo('template_url'); ?>/images/img_05.png">
                    </div>
                </div> -->


                <div class="mobile-grid">
                    <div>
                        <img src="<?php echo get_field('modal_1_preview_image')['url']; ?>">
                        <div class="mobile-grid-caption"><?php the_field('modal_1_caption'); ?></div>
                    </div>
                    <div>
                        <img src="<?php echo get_field('modal_2_preview_image')['url']; ?>">
                        <div class="mobile-grid-caption"><?php the_field('modal_2_caption'); ?></div>
                    </div>
                    <div>
                        <img src="<?php echo get_field('modal_3_preview_image')['url']; ?>">
                        <div class="mobile-grid-caption"><?php the_field('modal_3_caption'); ?></div>
                    </div>
                    <div>
                        <img src="<?php echo get_field('modal_5_preview_image')['url']; ?>">
                        <div class="mobile-grid-caption"><?php the_field('modal_5_caption'); ?></div>
                    </div>
                    <div>
                        <img src="<?php echo get_field('modal_4_preview_image')['url']; ?>">
                        <div class="mobile-grid-caption"><?php the_field('modal_4_caption'); ?></div>
                    </div>
                    <div>
                        <img src="<?php echo get_field('modal_6_preview_image')['url']; ?>">
                        <div class="mobile-grid-caption"><?php the_field('modal_6_caption'); ?></div>
                    </div>
                </div>



                <!-- <div class="row">
                    <div class="col-lg-1">COL 1</div>
                    <div class="col-1">
                        <div class="img-card">
                            <img src="<?php bloginfo('template_url'); ?>/images/img_00.png">
                            <div class="img-card-title">Dark Chocolate Biscuits</div>
                        </div>
                    </div>
                    <div class="col-2">
                        
                        <div class="img-card">
                            <img src="<?php bloginfo('template_url'); ?>/images/img_03.png">
                            <div class="img-card-title">Chocolate Creams</div>
                        </div>
                        <div class="img-card">
                            <img src="<?php bloginfo('template_url'); ?>/images/img_04.png">
                            <div class="img-card-title">Almond Curd Drops w/ Coconut Glaze</div>
                        </div>
                    </div>
                    <div class="col-lg-1">COL 1</div>
                </div> -->

                <!-- <div class="row">
                    <div class="col-lg-1">COL 1</div>
                    <div class="col-xs-12 col-l-10">
                        <div class="row">
                            <div class="col-xs-9">
                                <div class="row">
                                    <div class="img-card left">
                                        <img src="<?php bloginfo('template_url'); ?>/images/img_00.png">
                                        <div class="img-card-title">Dark Chocolate Biscuits</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-7">
                                        <div class="img-card left">
                                            <img src="<?php bloginfo('template_url'); ?>/images/img_01.png">
                                            <div class="img-card-title">Apricot Drops w/ Almond Glaze</div>
                                        </div>
                                    </div>
                                    <div class="col-cs-5">
                                        <div class="img-card">
                                            <img src="<?php bloginfo('template_url'); ?>/images/img_02.png">
                                            <div class="img-card-title">Ginger Snaps</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="img-card">
                                    <img src="<?php bloginfo('template_url'); ?>/images/img_03.png">
                                    <div class="img-card-title">Chocolate Creams</div>
                                </div>
                                <div class="img-card">
                                    <img src="<?php bloginfo('template_url'); ?>/images/img_04.png">
                                    <div class="img-card-title">Almond Curd Drops w/ Coconut Glaze</div>
                                </div>
                                <div class="img-card">
                                    <img src="<?php bloginfo('template_url'); ?>/images/img_05.png">
                                    <div class="img-card-title">Dark Chocolate Biscuits</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1">COL 1</div>
                </div> -->

                <div class="fig-grid">
                    <div class="row fig-grid-top">
                        <div class="col-xs-8">
                            <div class="fig-image-card">
                                <div class="fig-image a" style="background-image: url(<?php echo get_field('modal_1_preview_image')['url']; ?>);"></div>
                                <div class="fig-caption"><?php the_field('modal_1_caption'); ?></div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="fig-image-card">
                                <div class="fig-image b" style="background-image: url(<?php echo get_field('modal_2_preview_image')['url']; ?>);"></div>
                                <div class="fig-caption"><?php the_field('modal_2_caption'); ?></div>
                            </div>
                            <div class="fig-image-card">
                                <div class="fig-image b" style="background-image: url(<?php echo get_field('modal_3_preview_image')['url']; ?>);"></div>
                                <div class="fig-caption"><?php the_field('modal_3_caption'); ?></div>
                            </div>
                        </div>
                    </div>

                    <div class="row fig-grid-bottom">
                        <div class="col-xs-5">
                            <div class="fig-image-card">
                                <div class="fig-image d" style="background-image: url(<?php echo get_field('modal_4_preview_image')['url']; ?>);"></div>
                                <div class="fig-caption"><?php the_field('modal_4_caption'); ?></div>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="fig-image-card">
                                <div class="fig-image d" style="background-image: url(<?php echo get_field('modal_5_preview_image')['url']; ?>);"></div>
                                <div class="fig-caption"><?php the_field('modal_5_caption'); ?></div>
                            </div>    
                        </div>
                        <div class="col-xs-4">
                            <div class="fig-image-card">
                                <div class="fig-image d" style="background-image: url(<?php echo get_field('modal_6_preview_image')['url']; ?>);"></div>
                                <div class="fig-caption"><?php the_field('modal_6_caption'); ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


		</main><!-- #main -->
    </div><!-- #primary -->

    <!--
    <div class="form-container">
        <div id="form-window-0" class="form-window">
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
                <a class="form-email" href="mailto:info@maize.com">info@maize.com</a>
            </div>
            <div class="form-row">
                <div class="form-headline">Event Details</div>
                <div class="form-subhead">minimum lead time (24 hr). No deliveries on SUNDAY OR Monday.</div>
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
                <div class="form-headline">Event Location</div>
                <div class="form-subhead">We deliver within the Austin city limits.</div>
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
        </div>
    </div>
    -->
    

    <?php // Modals ?>
    <div class="modal" data-id="">
        <div class="modal-dialog">
            <div class="modal-close">
                <svg width="21" height="21" xmlns="http://www.w3.org/2000/svg">
                    <g stroke="#231F1E" stroke-width="1.5" fill="none" fill-rule="evenodd">
                        <path fill="#FFF" d="M.75.75h19.5v19.5H.75z"/>
                        <g stroke-linecap="square">
                            <path d="M14.674 6.398L6.94 14.132M14.626 14.08l-7.63-7.63"/>
                        </g>
                    </g>
                </svg>
            </div>
            
            <div class="modal-inner-left">
                <div class="modal-img" style="background-image: url(<?php bloginfo('template_url'); ?>/images/img_03.png);"></div>
            </div>
            <div class="modal-inner-right">
                <div class="modal-dialog-content">
                    <div class="modal-dialog-body">
                        <div class="modal-dialog-body-inner">
                            Modal Inner
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
