<?php

// =============================================================================
// FUNCTIONS.PHP
// -----------------------------------------------------------------------------
// Overwrite or add your own custom functions to X in this file.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Enqueue Parent Stylesheet
//   02. Additional Functions
// =============================================================================

// Enqueue Parent Stylesheet
// =============================================================================

add_filter( 'x_enqueue_parent_stylesheet', '__return_true' );



// Additional Functions
// =============================================================================

/**
 * Preselect dropdown field based on URL parameter.
 * 
 * @param array $field
 * @param array $field_atts
 * @param array $form_data
 * @return array
 */
function wpf_preselect_dropdown( $field, $field_atts, $form_data ) {
	
	// Only continue of the form and field are the ones we are looking for
	if ( '637' != $form_data['id'] || '5' != $field['id'] ) {
		return $field;
	}

	// Only continue if a prefered vehicle was provided
	if ( empty( $_GET['prefered-vehicle'] ) ) {
		return $field;
	}

	// Check to see if the vehicle provided exists in the dropdown, if it does
	// then set it to default.
	foreach ( $field['choices'] as $key => $choice ) {
		if ( $choice['label'] == $_GET['prefered-vehicle'] ) {
			$field['choices'][$key]['default'] = '1';
			break;
		}
	}
	return $field;
}
add_filter( 'wpforms_select_field_display', 'wpf_preselect_dropdown', 10 , 3 );