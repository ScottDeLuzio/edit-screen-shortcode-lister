/**
 * Shortcode Lister JS
 * 
 * Event listener for selection change in the shortcode lister dropdown in the classic editor
 * 
 * @package Shortcode_Lister
 */


(function($) {
	jQuery( "#sl_select" ).change(
		function() {
			send_to_editor( jQuery( "#sl_select :selected" ).val() );
			$(this).val('');
			return false;
		}
	);
})(jQuery);
