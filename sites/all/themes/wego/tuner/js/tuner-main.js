/**/
/* on load event */
/**/
jQuery(function()
{
	//jQuery('body').append('<style>');
	
	//Setting Default
	jQuery('#switch_color').text(jQuery('#tuner-style').text());
	
	
	//Switcher
	jQuery('#tuner-switcher').on('click', function()
	{
		jQuery('#tuner').toggleClass('tuner-visible');
	});
	
	jQuery('#tuner').on('click', '.colors li', function()
	{
		jQuery('#color-picker div').removeClass('active');
		jQuery(this).addClass('active').siblings().removeClass('active');
		jQuery('#tuner-style span').text(jQuery(this).data('hex'));
		jQuery('#switch_color').text(jQuery('#tuner-style').text());
	});
	
	jQuery('#color-picker').ColorPicker(
	{
		color: '#006171',
		onShow: function(colpkr)
		{
			jQuery(colpkr).fadeIn(300);
			jQuery('#color-picker div').addClass('active');
			jQuery('#tuner .colors li').removeClass('active');
			jQuery('#tuner-style span').text('006171');
			jQuery('#switch_color').text(jQuery('#tuner-style').text());
			return false;
		},
		onHide: function(colpkr)
		{
			jQuery(colpkr).fadeOut(300);
			return false;
		},
		onChange: function (hsb, hex, rgb) {
			jQuery('#color-picker div').css('backgroundColor', '#' + hex);
			jQuery('#tuner-style span').text(hex);
			jQuery('#switch_color').text(jQuery('#tuner-style').text());
		}
	});
	
	jQuery('#tuner').on('click', '.layouts li', function()
	{
		jQuery(this).addClass('active').siblings().removeClass('active');
		if( jQuery(this).data('layout') == 'boxed' )
			jQuery('.page').addClass('page-boxed');
		else
			jQuery('.page').removeClass('page-boxed');
	});
	
	jQuery('#tuner').on('click', '.patterns li', function()
	{
		jQuery(this).addClass('active').siblings().removeClass('active');
		jQuery('body').css('background-image', jQuery(this).data('url'));
	});
});