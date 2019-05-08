<?php
if ( !defined( 'ABSPATH' ) ) {
    die( "Sorry, you are not allowed to access this page directly." );
}
add_filter( 'media_buttons', 'shortcode_lister_menu', 15 );
function shortcode_lister_menu( $location ){
	// retrieve registered shortcode tags
	global $shortcode_tags;
	
	// set up include array
	$includes = array();
	
	global $shortcode_lister_settings;
	$shortcode_lister_settings = get_option( 'shortcode_lister_settings' );

	switch ( $location ) {
		case 'settings':
			foreach ( $shortcode_tags as $code => $function ){ ?>
				<tr valign="top">
					<td>
						<input id="shortcode_lister_settings[<?php echo $code; ?>]" name="shortcode_lister_settings[<?php echo $code; ?>]" type="checkbox" value="1" <?php if ( is_array($shortcode_lister_settings) && array_key_exists( $code, $shortcode_lister_settings ) ) { checked(1, $shortcode_lister_settings[ $code ]); } ?> />
						<label class="description" for="shortcode_lister_settings[<?php echo $code; ?>]">[<?php echo $code; ?>]</label>
					</td>
				</tr>
				<?php
			}
			break;
		
		default:
			// loop through each shortcode tag to create array of tags
			foreach( $shortcode_tags as $code => $function ){
				if ( is_array( $shortcode_lister_settings ) && array_key_exists( $code, $shortcode_lister_settings ) && 1 == $shortcode_lister_settings[ $code ] ) {
					// do nothing
				} else {
					$includes[] = '[' . $code . ']';
				}
			}
			echo '&nbsp;<select id="sl_select"><option class="noclick">Shortcodes</option>';
			foreach ( $includes as $include ){
				$shortcodes_list .= '<option value="' . $include . '">' . $include . '</option>';
			}
			echo $shortcodes_list;
			echo '</select>';
			break;
	}
	
}