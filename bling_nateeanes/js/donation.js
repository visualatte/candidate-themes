jQuery(document).ready(function() {
	
	// Set default values to form items.
	jQuery('input.form-text').each(function() {
		var default_value = '';
		if (jQuery(this).val() != '') {
			default_value = jQuery('input.form-text').val();
		}
		
		jQuery(this).blur(function() {
			if (this.value == '') {
				this.value = default_value;
			}
		});
		
		jQuery(this).focus(function() {
			if (this.value == default_value) {
				this.value = '';
			}
		});
	});
	
});