<?php

/*

Plugins

*/

if ( ! function_exists( 'dox_plugins' ) ) {

	/**
	 * Plugins
	 */
	function dox_plugins() {

		$plugins = array(

			array(
				'name'     => 'FORQY',
				'slug'     => 'forqy',
				'version'  => FORQY_PLUGIN_VERSION,
				'source'   => esc_url( 'https://plugin.forqy.website/forqy-' . FORQY_PLUGIN_VERSION . '.zip' ),
				'required' => true,
			),
			array(
				'name'     => 'FORQY reCAPTCHA',
				'slug'     => 'forqy-recaptcha',
				'version'  => '1.0.3',
				'source'   => esc_url( 'https://plugin.forqy.website/forqy-recaptcha-1.0.3.zip' ),
				'required' => false,
			),
			array(
				'name'     => 'Envato Market',
				'slug'     => 'envato-market',
				'version'  => '2.0.1',
				'source'   => esc_url( 'https://envato.github.io/wp-envato-market/dist/envato-market.zip' ),
				'required' => false,
			),
			array(
				'name'     => 'One Click Demo Import',
				'slug'     => 'one-click-demo-import',
				'required' => false,
			),
			array(
				'name'     => 'Autoptimize',
				'slug'     => 'autoptimize',
				'required' => false,
			),
			array(
				'name'     => 'WP Super Cache',
				'slug'     => 'wp-super-cache',
				'required' => false,
			),
			array(
				'name'     => 'WooCommerce',
				'slug'     => 'woocommerce',
				'required' => false,
			),
			array(
				'name'     => 'Loco Translate',
				'slug'     => 'loco-translate',
				'required' => false,
			),

		);

		$config = array(
			'default_path' => '', // Default absolute path to pre-packaged plugins.
			'menu'         => 'forqy-plugins', // Menu slug.
			'has_notices'  => true, // Show admin notices or not.
			'dismissable'  => true, // If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '', // If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => true, // Automatically activate plugins after installation or not.
			'message'      => '', // Message to output right before the plugins table.
			'strings'      => array(
				'page_title'                      => esc_html__( 'Install Plugins', 'dox' ),
				'menu_title'                      => esc_html__( 'Install Plugins', 'dox' ),
				'installing'                      => esc_html__( 'Installing Plugin: %s', 'dox' ),
				// %s = plugin name.
				'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'dox' ),
				'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'dox' ),
				// %1$s = plugin name(s).
				'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'dox' ),
				// %1$s = plugin name(s).
				'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'dox' ),
				// %1$s = plugin name(s).
				'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'dox' ),
				// %1$s = plugin name(s).
				'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'dox' ),
				// %1$s = plugin name(s).
				'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'dox' ),
				// %1$s = plugin name(s).
				'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'dox' ),
				// %1$s = plugin name(s).
				'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'dox' ),
				// %1$s = plugin name(s).
				'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'dox' ),
				'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'dox' ),
				'return'                          => esc_html__( 'Return to Required Plugins Installer', 'dox' ),
				'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'dox' ),
				'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'dox' ),
				// %s = dashboard link.
				'nag_type'                        => 'updated',
				// Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
			)
		);

		tgmpa( $plugins, $config );

	}

	add_action( 'tgmpa_register', 'dox_plugins' );

}
