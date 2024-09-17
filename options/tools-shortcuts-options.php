<?php
/**
 *
 * Shortcuts Options.
 *
 * @package mah
 */

defined( 'ABSPATH' ) || die( 'No script kiddies please!' );
use Carbon_Fields\Container;
use Carbon_Fields\Field;

/**
 *  Shortcuts Options Fields.
 */
function mah_tools_shortcuts_options_fields() {
	return array(

		Field::make( 'separator', 'scutsmah', 'Tools Shortcuts Options' )
			->set_classes( 'mah-sep' ),

		// checkbox enable create own tools shortcuts.
		Field::make( 'checkbox', 'mah_tools_shortcuts_enable', 'Use Your Own Tools Shortcuts' )
			->set_option_value( 'yes' )
			->set_help_text( 'Check this box to create your own tools shortcuts, if not checked, the default shortcuts will be shown.' )
			->set_default_value( false ),

		Field::make( 'complex', 'mah_tools_shortcuts', 'Your Own Shortcuts' )
			->add_fields(
				array(
					// name.
					Field::make( 'text', 'tool_name', 'Name' )
						->set_help_text( 'Name of the tool e.g Keyframe Playground' ),

					// url.
					Field::make( 'text', 'tool_url', 'URL' )
						->set_help_text( 'URL of the tool e.g https://keyframes.netlify.app/' ),

					// description.
					Field::make( 'text', 'tool_description', 'Description' )
						->set_help_text( 'Description of the tool e.g My created tool' ),
				)
			)
			->set_layout( 'tabbed-horizontal' )
			->set_header_template(
				'
                <% if (tool_name) { %>
                    <%- tool_name %>
                <% } else { %>
                    Name
                <% } %>
            '
			),
	);
}
