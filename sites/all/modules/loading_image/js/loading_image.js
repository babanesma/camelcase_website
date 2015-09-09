
jQuery(function ($){
   jQuery('#loading_image').prepend('<img src="sites/all/modules/loading_image/img/image.gif">');
   jQuery('#loading_image').prepend('<p>Please wait ...</p>');
   $('html').scrollTop(); 
});

jQuery(window).load(function()
{	
    jQuery('#loading_image').remove();
	setTimeout(function()
	{
		jQuery('#real-body').addClass('body-shown');
	}, 100);
});