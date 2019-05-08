jQuery(document).ready(function(){
	jQuery("#sl_select").change(function() {
		send_to_editor(jQuery("#sl_select :selected").val());
		return false;
	});
});