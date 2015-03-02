<?php global $theme_root; ?>
<?php if (theme_get_setting('switcher') == 1): ?>
<div id="tuner" class="tuner">
	<div class="inner">
		<label><?php print t('Theme Color'); ?></label>
		<ul class="colors">
			<li data-hex="2d3e50" class="active" style="background-color:#2d3e50"></li><!--
			--><li data-hex="e7af62" style="background-color:#e7af62"></li><!--
			--><li data-hex="f26262" style="background-color:#f26262"></li><!--
			--><li data-hex="f64989" style="background-color:#f64989"></li><!--
			--><li data-hex="ad86bb" style="background-color:#ad86bb"></li><!--
			--><li data-hex="00b988" style="background-color:#00b988"></li><!--
			--><li data-hex="c3512f" style="background-color:#c3512f"></li><!--
			--><li data-hex="a0ce4e" style="background-color:#a0ce4e"></li><!--
			--><li data-hex="627f9a" style="background-color:#627f9a"></li><!--
			--><li data-hex="21cdec" style="background-color:#21cdec"></li><!--
			--><li data-hex="26476a" style="background-color:#26476a"></li><!--
			--><li data-hex="362d50" style="background-color:#362d50"></li>
		</ul>
		<div class="custom-color">
			<label><?php print t('Custom Color'); ?></label>
			<div id="color-picker" class="color-picker"><div style="background-color:#006171"></div></div>
		</div>
		<label><?php print t('Layouts'); ?></label>
		<ul class="layouts">
			<li data-layout="widescreen" class="active"><?php print t('Widescreen');?></li>
			<li data-layout="boxed"><?php print t('Boxed');?></li>
		</ul>
		<label><?php print t('Backgrounds');?></label>
		<ul class="patterns">
			<li data-url="url(<?php echo $theme_root; ?>/img/patterns/item-1.png)" class="active" style="background-image:url(<?php echo $theme_root; ?>/img/patterns/item-1.png)"></li><!--
			--><li data-url="url(<?php echo $theme_root; ?>/img/patterns/item-2.png)" style="background-image:url(<?php echo $theme_root; ?>/img/patterns/item-2.png)"></li><!--
			--><li data-url="url(<?php echo $theme_root; ?>/img/patterns/item-3.png)" style="background-image:url(<?php echo $theme_root; ?>/img/patterns/item-3.png)"></li><!--
			--><li data-url="url(<?php echo $theme_root; ?>/img/patterns/item-4.png)" style="background-image:url(<?php echo $theme_root; ?>/img/patterns/item-4.png)"></li><!--
			--><li data-url="url(<?php echo $theme_root; ?>/img/patterns/item-5.png)" style="background-image:url(<?php echo $theme_root; ?>/img/patterns/item-5.png)"></li><!--
			--><li data-url="url(<?php echo $theme_root; ?>/img/patterns/item-6.png)" style="background-image:url(<?php echo $theme_root; ?>/img/patterns/item-6.png)"></li><!--
			--><li data-url="url(<?php echo $theme_root; ?>/img/patterns/item-7.png)" style="background-image:url(<?php echo $theme_root; ?>/img/patterns/item-7.png)"></li><!--
			--><li data-url="url(<?php echo $theme_root; ?>/img/patterns/item-8.png)" style="background-image:url(<?php echo $theme_root; ?>/img/patterns/item-8.png)"></li><!--
			--><li data-url="url(<?php echo $theme_root; ?>/img/patterns/item-9.png)" style="background-image:url(<?php echo $theme_root; ?>/img/patterns/item-9.png)"></li><!--
			--><li data-url="url(<?php echo $theme_root; ?>/img/patterns/item-10.png)" style="background-image:url(<?php echo $theme_root; ?>/img/patterns/item-10.png)"></li><!--
			--><li data-url="url(<?php echo $theme_root; ?>/img/patterns/item-11.png)" style="background-image:url(<?php echo $theme_root; ?>/img/patterns/item-11.png)"></li><!--
			--><li data-url="url(<?php echo $theme_root; ?>/img/patterns/item-12.png)" style="background-image:url(<?php echo $theme_root; ?>/img/patterns/item-12.png)"></li>
		</ul>
	</div>
	<i id="tuner-switcher" class="fa fa-cog"></i>
</div>
<?php endif; ?>

<?php 
	if( theme_get_setting('color_type') == 'theme') { 
		$color = theme_get_setting('color_scheme'); 
	} else { 
		$color = theme_get_setting('custom_color'); 
	} 
?>
<div id="tuner-style" class="tuner-style">
	input:focus,
	select:focus,
	textarea:focus {
		border-color: #<span><?php print $color; ?></span>;
	}
	a {
		color: #<span><?php print $color; ?></span>;
	}
	.radio i,
	.checkbox i {
		color: #<span><?php print $color; ?></span>;
	}
	.radio i:before {
		background-color: #<span><?php print $color; ?></span>;
	}
	.button, .btn-default {
		border-color: #<span><?php print $color; ?></span>;
		background-color: #<span><?php print $color; ?></span>;
	}
	.button:hover {
		color: #<span><?php print $color; ?></span>;
	}
	.page-header-top {
		background-color: #<span><?php print $color; ?></span>;
	}
	.page-header-bottom-alt {
		background-color: #<span><?php print $color; ?></span>;
	}
	.page-intro:after {
		background-color: #<span><?php print $color; ?></span>;
	}
	.page-intro:before {
		background-color: #<span><?php print $color; ?></span>;
	}
	.page-content-section-bg {
		background-color: #<span><?php print $color; ?></span>;
	}
	.page-content-section-bg:before {
		background-color: #<span><?php print $color; ?></span>;
	}
	.page-content-section-border {
		border-top-color: #<span><?php print $color; ?></span>;
	}
	.page-footer {
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-head-1 {
		border-bottom-color: #<span><?php print $color; ?></span>;
	}
	.block-head-1 i {
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-head-2:after {
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-head-2 i:after,
	.block-head-2 i:before {
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-head-3 {
		border-bottom-color: #<span><?php print $color; ?></span>;
	}
	.block-head-3 i:after {
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-head-4:after {
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-head-7 {
		border-bottom-color: #<span><?php print $color; ?></span>;
	}
	.block-head-7:after {
		background-color: #<span><?php print $color; ?></span>;
	}
	.page-content-section-bg .block-head-3 i {
		color: #<span><?php print $color; ?></span>;
	}
	
	.main-search button {
		color: #<span><?php print $color; ?></span>;
	}
	.main-search button:after {
		background: #<span><?php print $color; ?></span>;
	}
	.main-nav li a {
		color: #<span><?php print $color; ?></span>;
	}
	.main-nav li a:before {
		background-color: #<span><?php print $color; ?></span>;
	}
	.main-nav li ul {
		background-color: #<span><?php print $color; ?></span>;
	}
	.main-nav li li:hover > a,
	.main-nav li li.active > a,
	#block-newsletter-newsletter-subscribe .form-submit:hover,
	.block-product-details .add-wishlist .button-alt:hover, .block-product-details-2 .add-wishlist .button-alt:hover	{
		color: #<span><?php print $color; ?></span>;
	}
	.main-nav .switcher {
		border-color: #<span><?php print $color; ?></span>;
		background-color: #<span><?php print $color; ?></span>;
	}
	.main-nav .mega > div {
		background-color: #<span><?php print $color; ?></span>;
	}
	#block-newsletter-newsletter-subscribe .form-submit, .btn-primary:hover, .btn-primary:focus, .btn-primary:active {
		border-color: #<span><?php print $color; ?></span>;
		background-color: #<span><?php print $color; ?></span>;
	}
	.art-portfolio ol li.active, .ui-slider-horizontal .ui-slider-handle, .ui-slider-horizontal .ui-slider-range,
	.btn-primary.link {
		background-color: #<span><?php print $color; ?></span>;
	}
	.btn-primary, .button:hover, .btn-default:hover, .btn-default:focus, .btn-default:active {
		border-color: #<span><?php print $color; ?></span>;
		color: #<span><?php print $color; ?></span>;
	}
	.btn-primary.link:hover, .btn-primary.link:focus, .btn-primary.link:active {
		color: #<span><?php print $color; ?></span>;
	}
	}
	@media screen and (max-width: 767px) { /* phone */
		.main-nav ul {
			background-color: #<span><?php print $color; ?></span>;
		}
		.main-nav li a {
			color: #ecf0f1;
		}
		.main-nav li ul {
			background: #e9e9e9;
		}
		.main-nav li li {
			border-top-color: #<span><?php print $color; ?></span>;
		}
		.main-nav li li a {
			color: #<span><?php print $color; ?></span>;
		}
		.main-nav li li a:hover {
			background-color: #<span><?php print $color; ?></span>;
			color: #fff;
		}
		.main-nav li li ul {
			border-top-color: #<span><?php print $color; ?></span>;
		}
		.main-nav .mega ul li {
			border-top-color: #<span><?php print $color; ?></span>;
		}
	}
	.slider-revolution .fa:after {
		background-color: #<span><?php print $color; ?></span>;
	}
	.slider-revolution .title {
		border-top-color: 1px solid #<span><?php print $color; ?></span>;
		border-bottom-color: 1px solid #<span><?php print $color; ?></span>;
	}
	.slider-revolution .button-my {
		border-color: #<span><?php print $color; ?></span>;
		background-color: #<span><?php print $color; ?></span>;
	}
	.slider-revolution .button-my:hover {
		color: #<span><?php print $color; ?></span>;
	}
	
	
	.pagination-1 a:hover {
		border-color: #<span><?php print $color; ?></span>;
		color: #<span><?php print $color; ?></span>;
	}
	.pagination-1 .active,
	.pagination-1 .active:hover {
		border-color: #<span><?php print $color; ?></span>;
		background: #<span><?php print $color; ?></span>;
	}
	.pagination-2 a:hover {
		color: #<span><?php print $color; ?></span>;
	}
	.pagination-2 .active,
	.pagination-2 .active:hover {
		background: #<span><?php print $color; ?></span>;
	}
	.pagination-3 a:before {
		box-shadow: inset 0 0 0 1px #<span><?php print $color; ?></span>;
	}
	.pagination-3 .active:before,
	.pagination-3 .active:hover:before {
		background: #<span><?php print $color; ?></span>;
	}
	.pagination-4 a:hover {
		border-color: #<span><?php print $color; ?></span>;
	}
	.pagination-4 .active {
		border-color: #<span><?php print $color; ?></span>;
		background: #<span><?php print $color; ?></span>;
	}
	.pagination-5 a {
		border-color: #<span><?php print $color; ?></span>;
		background-color: #<span><?php print $color; ?></span>;
		color: #<span><?php print $color; ?></span>;
	}
	.block-benefits div:hover {
		border-color: #<span><?php print $color; ?></span>;
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-benefits i {
		color: #<span><?php print $color; ?></span>;
	}
	.block-benefits-2 li i {
		color: #<span><?php print $color; ?></span>;
	}
	.block-benefits-2 .tabs a:hover {
		border-color: #<span><?php print $color; ?></span>;
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-benefits-2 .tabs .active a,
	.block-benefits-2 .tabs .active a:hover {
		color: #<span><?php print $color; ?></span>;
	}
	.block-benefits-3 i {
		color: #<span><?php print $color; ?></span>;
	}
	.block-about .button {
		border-color: #<span><?php print $color; ?></span>;
		color: #<span><?php print $color; ?></span>;
	}
	.block-about .button:hover {
		background: #<span><?php print $color; ?></span>;
		color: #ecf0f1;
	}
	.block-about .owl-prev:hover,
	.block-about .owl-next:hover {
		color: #<span><?php print $color; ?></span>;
	}
	.block-about-2 .bar {
		background: #<span><?php print $color; ?></span>;
	}
	.block-about-2 .value {
		color: #<span><?php print $color; ?></span>;
	}
	.block-about-4 .owl-pagination div {
		border-color: #<span><?php print $color; ?></span>;
		background: #<span><?php print $color; ?></span>;
	}
	.block-about-5 .owl-prev,
	.block-about-5 .owl-next {
		display: inline-block;
		border-color: #<span><?php print $color; ?></span>;
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-about-5 .owl-prev:hover,
	.block-about-5 .owl-next:hover {
		color: #<span><?php print $color; ?></span>;
	}
	.block-about-6 .icons a:hover {
		color: #<span><?php print $color; ?></span>;
	}
	.block-mission .year {
		background: #<span><?php print $color; ?></span>;
	}
	.block-mission .years a:after {
		border-bottom-color: #<span><?php print $color; ?></span>;
	}
	.block-recent-works ol li:hover {
		color: #<span><?php print $color; ?></span>; 
	}
	.block-recent-works ol .active {
		border-color: #<span><?php print $color; ?></span>;
		background: #<span><?php print $color; ?></span>;
	}
	.block-recent-works .description {
		background: #<span><?php print $color; ?></span>;
	}
	.block-recent-works .description:before {
		border-right-color: #<span><?php print $color; ?></span>;
	}
	.block-recent-works-3 h3 {
		border-top-color: #<span><?php print $color; ?></span>;
	}
	.block-recent-works-3 .link {
		border-color: #<span><?php print $color; ?></span>;
	}
	.block-recent-works-3 .fancybox {
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-recent-works-3 .owl-pagination div {
		border-color: #<span><?php print $color; ?></span>;
		background: #<span><?php print $color; ?></span>;
	}
	.block-recent-works-4:before {
		background: #<span><?php print $color; ?></span>;
	}
	.block-recent-works-4 .fancybox {
		background: #<span><?php print $color; ?></span>;
	}
	.block-recent-works-4 .owl-prev:hover,
	.block-recent-works-4 .owl-next:hover {
		color: #<span><?php print $color; ?></span>;
	}
	.block-recent-works-6 a:before {
		background: #<span><?php print $color; ?></span>;
	}
	.block-recent-works-6 .owl-prev,
	.block-recent-works-6 .owl-next {
		border-color: #<span><?php print $color; ?></span>;
		background: #<span><?php print $color; ?></span>;
	}
	.block-recent-works-6 .owl-prev:hover,
	.block-recent-works-6 .owl-next:hover {
		color: #<span><?php print $color; ?></span>;
	}
	.block-portfolio ol li:hover {
		color: #<span><?php print $color; ?></span>; 
	}
	.block-portfolio ol li.active {
		border-bottom-color: #<span><?php print $color; ?></span>;
	}
	.block-portfolio ul .pic span:after,
	.block-portfolio ul .pic span:before {
		background: #<span><?php print $color; ?></span>;
	}
	.block-portfolio ul .pic span i {
		color: #<span><?php print $color; ?></span>;
	}
	.block-portfolio-2 ol li:hover {
		color: #<span><?php print $color; ?></span>; 
	}
	.block-portfolio-2 ol li.active {
		background: #<span><?php print $color; ?></span>;
	}
	.block-portfolio-2 ul .pic:before {
		background: #<span><?php print $color; ?></span>;
	}
	.block-portfolio-2 ul .pic a {
		background: #<span><?php print $color; ?></span>;
	}
	.block-portfolio-2 ul .pic a:hover {
		color: #<span><?php print $color; ?></span>;
	}
	.block-portfolio-3 ol li:hover {
		color: #<span><?php print $color; ?></span>; 
	}
	.block-portfolio-3 ol li.active {
		background: #<span><?php print $color; ?></span>;
	}
	.block-portfolio-4 h3 {
		border-top-color: #<span><?php print $color; ?></span>;
	}
	.block-portfolio-4 .link {
		border-color: #<span><?php print $color; ?></span>;
	}
	.block-portfolio-4 .fancybox {
		background: #<span><?php print $color; ?></span>;
	}
	.block-portfolio-5 ol li:hover {
		color: #<span><?php print $color; ?></span>; 
	}
	.block-portfolio-5 ol li.active {
		background: #<span><?php print $color; ?></span>;
	}
	.block-portfolio-5 .info:before {
		background: #<span><?php print $color; ?></span>;
	}
	.block-portfolio-6 ol li:hover {
		color: #<span><?php print $color; ?></span>; 
	}
	.block-portfolio-6 ol li.active {
		background: #<span><?php print $color; ?></span>;
	}
	.block-portfolio-6 ul a:before {
		background: #<span><?php print $color; ?></span>;
	}
	.block-portfolio-7 ol li:hover {
		color: #<span><?php print $color; ?></span>; 
	}
	.block-portfolio-7 ol li.active {
		background: #<span><?php print $color; ?></span>;
	}
	.block-portfolio-7 ul li:before {
		background: #<span><?php print $color; ?></span>;
	}
	.block-portfolio-7 ul a:hover {
		color: #<span><?php print $color; ?></span>;
	}
	.block-portfolio-8 li div:before {
		background: #<span><?php print $color; ?></span>;
	}
	.block-portfolio-8 li a {
		background: #<span><?php print $color; ?></span>;
	}
	.block-clients .owl-prev,
	.block-clients .owl-next {
		color: #<span><?php print $color; ?></span>;
	}
	.block-testimonials-3 .carousel h3 {
		border-bottom-color: #<span><?php print $color; ?></span>;
	}
	.block-testimonials-3 .owl-pagination div {
		border-color: #<span><?php print $color; ?></span>;
	}
	.block-testimonials-3 .owl-pagination .active {
		background: #<span><?php print $color; ?></span>;
	}
	.block-testimonials-4 .owl-prev,
	.block-testimonials-4 .owl-next {
		border-color: #<span><?php print $color; ?></span>;
		background: #<span><?php print $color; ?></span>;
	}
	.block-testimonials-4 .owl-prev:hover,
	.block-testimonials-4 .owl-next:hover {
		color: #<span><?php print $color; ?></span>;
	}
	.block-services li a {
		border-color: #<span><?php print $color; ?></span>;
	}
	.block-services li a:hover {
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-services-2 li a:hover {
		background: none;
	}
	.block-services-2 li a:after {
		box-shadow: inset 0 0 0 2px #<span><?php print $color; ?></span>;
	}
	.block-services-2 li a:hover:after {
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-services-3 li a:hover {
		background: none;
	}
	.block-services-3 li a:after {
		box-shadow: inset 0 0 0 2px #<span><?php print $color; ?></span>;
	}
	.block-services-3 li a:before {
		background: #<span><?php print $color; ?></span>;
		box-shadow: inset 0 0 0 2px #<span><?php print $color; ?></span>;
	}
	.block-services-3 li a:hover:after {
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-services-4 li a {
		border-color: #<span><?php print $color; ?></span>;
	}
	.block-services-4 li a:hover {
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-services-5 li i {
		color: #<span><?php print $color; ?></span>;
	}
	.block-services-5 li i:hover {
		background: #<span><?php print $color; ?></span>;
	}
	.block-services-6 h3 span {
		color: #<span><?php print $color; ?></span>;
	}
	.block-services-6 li a {
		border-color: #<span><?php print $color; ?></span>;
		background: #<span><?php print $color; ?></span>;
	}
	.block-services-6 li a:hover {
		color: #<span><?php print $color; ?></span>;
	}
	.block-services-7 .info i {
		background: #<span><?php print $color; ?></span>;
	}
	.block-services-7 .carousel .active {
		background: #<span><?php print $color; ?></span>;
	}
	.block-services-7 .carousel .owl-prev,
	.block-services-7 .carousel .owl-next {
		border-color: #<span><?php print $color; ?></span>;
		background: #<span><?php print $color; ?></span>;
	}
	.block-services-7 .carousel .owl-prev:hover,
	.block-services-7 .carousel .owl-next:hover {
		color: #<span><?php print $color; ?></span>;
	}
	.block-pricing dt {
		color: #<span><?php print $color; ?></span>;
	}
	.block-pricing .price:before {
		background: #<span><?php print $color; ?></span>;	
	}
	.block-pricing li:hover .inner {
		background: #<span><?php print $color; ?></span>;
	}
	.block-pricing li:hover .button {
		color: #<span><?php print $color; ?></span>;
	}
	.block-pricing li:hover .button:hover {
		background: #<span><?php print $color; ?></span>;
	}
	.page-content-section .block-pricing .inner {
		box-shadow: 0 0 0 1px #<span><?php print $color; ?></span>;
	}
	.block-pricing-2 dt {
		color: #<span><?php print $color; ?></span>;
	}
	.block-pricing-2 .price {
		background: #<span><?php print $color; ?></span>;
	}
	.block-pricing-2 .button {
		color: #<span><?php print $color; ?></span>;
	}
	.block-pricing-2 li:hover .inner {
		background: #<span><?php print $color; ?></span>;
	}
	.block-pricing-2 li:hover .button:hover {
		background: #<span><?php print $color; ?></span>;
	}
	.block-progress li i {
		border-color: #<span><?php print $color; ?></span>;
		color: #<span><?php print $color; ?></span>;
	}
	.block-team-2 .pic:before {
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-team-2 .icons a {
		color: #<span><?php print $color; ?></span>;
	}
	.block-team-3 .pic:before {
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-team-3 .icons a {
		color: #<span><?php print $color; ?></span>;
	}
	.block-team-3 .info h3 {
		color: #<span><?php print $color; ?></span>;
	}
	.block-team-list .pic span:after {
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-team-list .icons a:hover {
		color: #<span><?php print $color; ?></span>;
	}
	.block-team-list .icons a:before {
		background: #<span><?php print $color; ?></span>;
	}
	.block-team-list .skills {
		border-top-color: #<span><?php print $color; ?></span>;
		border-bottom-color: #<span><?php print $color; ?></span>;
	}
	.block-team-grid .pic:before {
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-skills i:before {
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-skills .bar {
		border-color: #<span><?php print $color; ?></span>;
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-skills-2 i:before {
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-skills-2 .bar {
		border-color: #<span><?php print $color; ?></span>;
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-capabilities h3 {
		color: #<span><?php print $color; ?></span>;
	}
	.block-capabilities-2 h3 {
		color: #<span><?php print $color; ?></span>;
	}
	.block-recent-posts .info {
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-recent-posts-2:before {
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-recent-posts-2 li .button {
		color: #<span><?php print $color; ?></span>;
	}
	.block-recent-posts-2 li .button:hover {
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-recent-posts-2 .button-more {
		color: #<span><?php print $color; ?></span>;
	}
	.block-recent-posts-2 .button-more:hover {
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-featured-posts .pic:before {
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-blog-list .link {
		background: #<span><?php print $color; ?></span>;
	}
	.block-blog-list .date:before {
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-blog-list .date-alt {
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-blog-list .zoom {
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-blog-grid .link {
		background: #<span><?php print $color; ?></span>;
	}
	.block-blog-grid .date:before {
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-blog-grid .pic:hover .date {
		color: #<span><?php print $color; ?></span>;
	}
	.block-blog-grid .zoom {
		color: #<span><?php print $color; ?></span>;
	}
	.block-blog-details .date:before,
	.block-blog-details .reply:before,
	.block-blog-details .type:before {
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-blog-details .date-alt {
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-blog-details .share a:before {
		border-color: #<span><?php print $color; ?></span>;
		background: #<span><?php print $color; ?></span>;
	}
	.block-blog-details .share a:hover {
		color: #<span><?php print $color; ?></span>;
	}
	.block-blog-details .about:before {
		background: #<span><?php print $color; ?></span>;
	}
	.block-catalog-toolbar .view a:hover {
		border-color: #<span><?php print $color; ?></span>;
		color: #<span><?php print $color; ?></span>;	
	}
	.block-catalog-toolbar .view .active,
	.block-catalog-toolbar .view .active:hover {
		border-color: #<span><?php print $color; ?></span>;
		background: #<span><?php print $color; ?></span>;
	}
	.block-catalog-toolbar .direction {
		border-color: #<span><?php print $color; ?></span>;
		background: #<span><?php print $color; ?></span>;
	}
	.block-catalog-toolbar .direction:hover {
		color: #<span><?php print $color; ?></span>;
	}
	.block-catalog-grid .pic:before {
		background: #<span><?php print $color; ?></span>;
	}
	.block-catalog-grid .badge {
		background: #<span><?php print $color; ?></span>;
	}
	.block-catalog-grid .price {
		color: #<span><?php print $color; ?></span>;
	}
	.block-catalog-grid .owl-prev,
	.block-catalog-grid .owl-next {
		border-color: #<span><?php print $color; ?></span>;
		background: #<span><?php print $color; ?></span>;
	}
	.block-catalog-grid .owl-prev:hover,
	.block-catalog-grid .owl-next:hover {
		color: #<span><?php print $color; ?></span>;;
	}
	.block-catalog-list .pic:after {
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-catalog-list .badge:before {
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-catalog-list .price {
		color: #<span><?php print $color; ?></span>;
	}
	.block-catalog-list .owl-prev,
	.block-catalog-list .owl-next {
		border-color: #<span><?php print $color; ?></span>;
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-catalog-list .owl-prev:hover,
	.block-catalog-list .owl-next:hover {
		color: #<span><?php print $color; ?></span>;;
	}
	.block-product-details .price {
		color: #<span><?php print $color; ?></span>;
	}
	.block-product-details .button-alt {
		color: #<span><?php print $color; ?></span>;
	}
	.block-product-details-2 .button-alt {
		color: #<span><?php print $color; ?></span>;
	}
	.block-product-details-2 .share a:before {
		background-color: #<span><?php print $color; ?></span>;
		box-shadow: 0 0 0 2px #<span><?php print $color; ?></span>;
	}
	.block-product-details-2 .share a:hover {
		color: #<span><?php print $color; ?></span>;
	}
	.block-product-info .owl-prev,
	.block-product-info .owl-next {
		border-color: #<span><?php print $color; ?></span>;
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-product-info .owl-prev:hover,
	.block-product-info .owl-next:hover {
		color: #<span><?php print $color; ?></span>;
	}
	.block-product-tabs .head .active {
		color: #<span><?php print $color; ?></span>;
	}
	.block-product-tabs .head .active:before {
		border-top-color: #<span><?php print $color; ?></span>;
	}
	.block-shopping-cart th {
		border-top-color: #<span><?php print $color; ?></span>;
		color: #<span><?php print $color; ?></span>;
	}
	.block-shopping-cart .price {
		color: #<span><?php print $color; ?></span>;
	}
	.block-shopping-cart .remove {
		border-color: #<span><?php print $color; ?></span>;
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-shopping-cart .remove:hover {
		color: #<span><?php print $color; ?></span>;
	}
	.block-shopping-cart .quantity a {
		color: #<span><?php print $color; ?></span>;
	}
	.block-shopping-cart .empty td {
		border-bottom-color: #<span><?php print $color; ?></span>;
	}
	.block-shopping-cart-totals dd {
		color: #<span><?php print $color; ?></span>;
	}
	.block-shopping-cart-totals .button-alt {
		color: #<span><?php print $color; ?></span>;
	}
	.block-checkout-order td:last-child {
		color: #<span><?php print $color; ?></span>;
	}
	.block-checkout-payment label {
		color: #<span><?php print $color; ?></span>;
	}
	.block-welcome .icons i:after {
		border-color: #<span><?php print $color; ?></span>;
		background: #<span><?php print $color; ?></span>;
	}
	.block-welcome .icons a:hover i {
		color: #<span><?php print $color; ?></span>;
	}
	.block-pasteboard:before {
		background: #<span><?php print $color; ?></span>;
	}
	.block-pasteboard .icons a:hover {
		color: #<span><?php print $color; ?></span>;
	}
	.block-map-3 .block-head {
		color: #<span><?php print $color; ?></span>;
	}
	.block-contacts ul li:after,
	.block-contacts ul li:before {
		border-color: #<span><?php print $color; ?></span>;
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-contacts ul li:before {
		background-color: #fff;
	}
	.block-contacts ul li span {
		border-bottom-color: #<span><?php print $color; ?></span>;
	}
	.block-contacts ul .active {
		color: #<span><?php print $color; ?></span>;
	}
	.block-contacts ul .active:before {
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-contacts ol {
		border-top-color: #<span><?php print $color; ?></span>;
	}
	.block-contacts ol li {
		color: #<span><?php print $color; ?></span>;
	}
	.block-contacts ol li i:after {
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-feedback .message i,
	.block-feedback-2 .message i {
		color: #<span><?php print $color; ?></span>;
	}
	.block-not-found h3 {
		color: #<span><?php print $color; ?></span>;
	}
	.block-not-found .pic:before {
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-not-found .pic div:before {
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-not-found-2 .button {
		color: #<span><?php print $color; ?></span>;
	}
	.block-not-found-2 .button:hover {
		background: #<span><?php print $color; ?></span>;
	}
	.block-coming-soon li:before {
		background-color: #<span><?php print $color; ?></span>;
	}
	.block-coming-soon-2 li:after {
		background-color: #<span><?php print $color; ?></span>;
	}
	
	.widget-categories a:hover,
	.widget-categories a.active {
		color: #<span><?php print $color; ?></span>;
	}
	.widget-top-posts a:hover {
		color: #<span><?php print $color; ?></span>;
	}
	.widget-text hr {
		border-top-color: #<span><?php print $color; ?></span>;
	}
	.widget-text em {
		color: #<span><?php print $color; ?></span>;
	}
	.widget-archive a:hover,
	.widget-archive a.active {
		color: #<span><?php print $color; ?></span>;
	}
	.widget-tags a:hover {
		color: #<span><?php print $color; ?></span>;
	}
	.widget-categories-filter a:hover {
		color: #<span><?php print $color; ?></span>;
	}
	.widget-categories-filter .active {
		color: #<span><?php print $color; ?></span>;	
	}
	.widget-categories-filter .active span {
		background-color: #<span><?php print $color; ?></span>;
	}
	.widget-price-filter .ui-slider-range {
		background-color: #<span><?php print $color; ?></span>;
	}
	.widget-price-filter .ui-slider-handle {
		background-color: #<span><?php print $color; ?></span>;
	}
	.widget-color-filter .active:before {
		border-color: #<span><?php print $color; ?></span>;
	}
	.widget-top-products .pic i {
		background-color: #<span><?php print $color; ?></span>;
	}
	.main-nav ul {
		background-color: #<span><?php print $color; ?></span>;
	}
</div>
<!--/ tuner -->