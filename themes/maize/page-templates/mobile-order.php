<?php



// NOTE: Not in use!





/**
 * Template Name: Mobile Order Form
 *
 * @package WordPress
 * @subpackage Maize
 * @since Maize 1.0
 */

get_header();

// get fields from home page
$home_page_id = 6;

$email_address          = get_field('email_address', $home_page_id);
$modal_1_caption        = get_field('modal_1_caption', $home_page_id);
$modal_2_caption        = get_field('modal_2_caption', $home_page_id);
$modal_3_caption        = get_field('modal_3_caption', $home_page_id);
$modal_4_caption        = get_field('modal_4_caption', $home_page_id);
$modal_5_caption        = get_field('modal_5_caption', $home_page_id);
$modal_6_caption        = get_field('modal_6_caption', $home_page_id);
$area_code              = get_field('area_code', $home_page_id);
$phone_number           = get_field('phone_number', $home_page_id);
$confirmation_message   = get_field('form_confirmation_message', $home_page_id);

$date_time_headline    = get_field('date_time_headline', 'option');
$date_time_subhead     = get_field('date_time_subhead', 'option');
$location_headline     = get_field('location_headline', 'option');
$location_subhead      = get_field('location_subhead', 'option');
$quantity_headline     = get_field('quantity_headline', 'option');
$quantity_subhead      = get_field('quantity_subhead', 'option');
$above_order_form_note = get_field('above_order_form_note', 'option');
$below_order_form_note = get_field('below_order_form_note', 'option');

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">


        <div class="form-container-mobile">
            <div class="form-window-mobile" id="form-window-cheat"></div>
            <div class="form-window-mobile" id="form-window-mobile-0">
                <form id="order-form" name="order-form" method="post" action="submit_order_form_ajax">

                    <input type="hidden" name="recipient" value="<?php echo $email_address; ?>">

                    <div class="form-close">
                        <a href="/">
                            <svg width="21" height="21" xmlns="http://www.w3.org/2000/svg">
                                <g stroke="#231F1E" stroke-width="1.5" fill="none" fill-rule="evenodd">
                                    <path fill="#FFF" d="M.75.75h19.5v19.5H.75z"/>
                                    <g stroke-linecap="square">
                                        <path d="M14.674 6.398L6.94 14.132M14.626 14.08l-7.63-7.63"/>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="form-header">
                        <img class="form-logo" src="<?php bloginfo('template_url'); ?>/images/logo-m-black.svg">
                        <a class="form-email" href="mailto:<?php echo $email_address; ?>"><?php echo $email_address; ?></a>
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
                        <div class="form-input-container">
                            <label for="form-address">Street Address</label>
                            <input type="text" id="form-address" name="address">
                        </div>
                        <div class="form-input-container">
                            <label for="form-zipcode">Zipcode</label>
                            <input type="text" id="form-zipcode" name="zipcode">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-headline">Contact Info</div>
                        <div class="form-input-container">
                            <label for="form-first-name">First Name</label>
                            <input type="text" id="form-first-name" name="first-name">
                        </div>
                        <div class="form-input-container">
                            <label for="form-last-name">Last Name</label>
                            <input type="text" id="form-last-name" name="last-name">
                        </div>
                        <div class="form-input-container">
                            <label for="form-email">Email</label>
                            <input type="text" id="form-email" name="email">
                        </div>
                        <div class="form-input-container">
                            <label for="form-phone-number">Phone Number</label>
                            <input type="text" id="form-phone-number" name="phone-number">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-headline"><?php echo $quantity_headline; ?></div>
                        <div class="form-subhead"><?php echo $quantity_subhead; ?></div>
                        <div class="form-quantity-group">
                            <label><?php echo $above_order_form_note; ?></label>

                            <div class="form-quantity-row">
                                <div class="form-quantity-name">
                                    <span><?php echo $modal_2_caption; ?></span>
                                </div>
                                <div class="quantity">
                                    <span class="dropdown">
                                        <select name="<?php echo $modal_2_caption; ?>">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </span>
                                </div>
                            </div>

                            <div class="form-quantity-row">
                                <div class="form-quantity-name">
                                    <span><?php echo $modal_3_caption; ?></span>
                                </div>
                                <div class="quantity">
                                    <span class="dropdown">
                                        <select name="<?php echo $modal_3_caption; ?>">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </span>
                                </div>
                            </div>

                            <div class="form-quantity-row">
                                <div class="form-quantity-name">
                                    <span><?php echo $modal_4_caption; ?></span>
                                </div>
                                <div class="quantity">
                                    <span class="dropdown">
                                        <select name="<?php echo $modal_4_caption; ?>">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </span>
                                </div>
                            </div>

                            <div class="form-quantity-row">
                                <div class="form-quantity-name">
                                    <span><?php echo $modal_5_caption; ?></span>
                                </div>
                                <div class="quantity">
                                    <span class="dropdown">
                                        <select name="<?php echo $modal_5_caption; ?>">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </span>
                                </div>
                            </div>

                            <div class="form-quantity-row">
                                <div class="form-quantity-name">
                                    <span><?php echo $modal_6_caption; ?></span>
                                </div>
                                <div class="quantity">
                                    <span class="dropdown">
                                        <select name="<?php echo $modal_6_caption; ?>">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </span>
                                </div>
                            </div>
                            <label class="disclaimer"><?php echo $below_order_form_note; ?></label>
                        </div>
                    </div>
                    <div class="row center-xs">
                        <button type="submit" class="btn" id="form-submit">Submit</button>
                    </div>
                    <div class="row center-xs">
                        <div class="error-message"></div>
                    </div>
                </form>
            </div>


            <div class="form-window-mobile" id="form-window-mobile-1">
                <div class="form-close">
                    <a href="/">
                        <svg width="21" height="21" xmlns="http://www.w3.org/2000/svg">
                            <g stroke="#231F1E" stroke-width="1.5" fill="none" fill-rule="evenodd">
                                <path fill="#FFF" d="M.75.75h19.5v19.5H.75z"/>
                                <g stroke-linecap="square">
                                    <path d="M14.674 6.398L6.94 14.132M14.626 14.08l-7.63-7.63"/>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="form-header">
                    <img class="form-logo" src="<?php bloginfo('template_url'); ?>/images/logo-m-black.svg">
                    <a class="form-email" href="mailto:<?php echo $email_address; ?>"><?php echo $email_address; ?></a>
                </div>
                <div class="form-success-headline">Thank You</div>
                <div class="form-success-body">
                    <?php echo $confirmation_message; ?>
                </div>
                <div class="form-success-phone"><a href="tel:<?php echo $area_code; ?><?php echo $phone_number; ?>"><?php echo $area_code; ?><?php echo $phone_number; ?></a><br><a href="mailto:<?php echo $email_address; ?>"><?php echo $email_address; ?></a></div>
                <div class="form-success-signature">-Maize</div>
                <a href="/"><button type="button" class="btn" id="success-close-btn">Close</button></a>
            </div>
        </div>



		</main><!-- #main -->
    </div><!-- #primary -->


<?php
get_footer();
