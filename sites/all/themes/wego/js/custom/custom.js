// add class for revolution slide
jQuery('#art-revolution').addClass('slider-revolution');

// add placeholder for input search
//jQuery('#edit-search-block-form--4').attr('placeholder', 'Type keywords and press Enter');

// readonly for (input text) footer contact title
jQuery('.contact-form input[name="footer_contact_title1"]').attr('readonly', 'readonly');
jQuery('.contact-form input[name="footer_contact_title2"]').attr('readonly', 'readonly');

// Add class contact form
jQuery('.widget-feedback .form-submit').addClass('button');
//jQuery('.block-feedback .form-item').addClass('input');
jQuery('.page-content .contact-form .form-item-name').append('<i class="fa fa-user"></i>').addClass('input');
jQuery('.page-content .contact-form .form-item-mail').append('<i class="fa fa-envelope"></i>').addClass('input');
jQuery('.page-content .contact-form .form-item-subject').append('<i class="fa fa-comments"></i>').addClass('input');
jQuery('#webform-component-your-name').append('<i class="fa fa-user"></i>').addClass('input');
jQuery('#webform-component-your-email').append('<i class="fa fa-envelope"></i>').addClass('input');
jQuery('#webform-component-subject').append('<i class="fa fa-comments"></i>').addClass('input');
jQuery('.block-feedback .contact-form').addClass('clearfix');

//add class to subscribe page
//jQuery('.page-content-section form').addClass('grid-row block-feedback');
jQuery('.page-content-section form .form-submit').addClass('button');

// Page team list
jQuery('.block-team-list ul li').addClass('clearfix');

// add class for login form
jQuery('#user-login').addClass('grid-row');

// add class for register form
jQuery('#user-register-form').addClass('grid-row');

// add class for forgot password form
jQuery('#user-pass').addClass('grid-row');

// add class for account page
jQuery('.profile').addClass('grid-row');

// add class for top menu item
jQuery('ul.menu li').addClass('top-parent');
jQuery('ul.menu ul.menu li').removeClass('top-parent');

// toggle menu on mobile
jQuery(document).ready(function () {
    jQuery('#main-nav .switcher').click(function () {
		jQuery('#main-nav ul').addClass('menu-parent');
		jQuery('#main-nav ul ul').removeClass('menu-parent');
        jQuery('#main-nav .menu.menu-parent').slideToggle('fast');
    });
});

// add symbol to main-menu
jQuery('ul.menu li.expanded a').append('<i class="fa fa-angle-down"></i>');
jQuery('ul.menu li.expanded ul.menu a i').remove();
jQuery('ul.menu li.expanded ul.menu li.expanded a').append('<i class="fa fa-angle-right"></i>');
jQuery('ul.menu li.expanded ul.menu li.expanded ul.menu a i').remove();

// change comment head border bottom
jQuery('.comment-wrapper .block-head').addClass('block-head-7');

// Add class to cart
jQuery('#views-form-commerce-cart-form-default').addClass('block block-shopping-cart');
jQuery('#commerce-checkout-form-checkout').addClass('block block-shopping-cart');
jQuery('#edit-cart-contents').addClass('block block-checkout-address');
jQuery('.view-commerce-cart-summary').addClass('block block-shopping-cart');
jQuery('.view-commerce-user-orders .views-table').addClass('block block-shopping-cart');

