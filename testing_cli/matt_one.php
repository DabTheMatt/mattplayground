<?php 

/**
	 * ## OPTIONS
	 * [--dry-run]
	 * : test without changing data
	 *
	 * [--post_id]
	 * : post id
	 *
	 * [--new_value]
	 * : new value of verint_dtree_json
	 *
	 * ## EXAMPLES
	 *   wp kmtool update_dt_meta --dry-run=1 --post_id=0 --new_value
	 *
	 * @alias update-dt-meta
	 */

	function update_dt_meta( $args, $args_assoc ) {

		$dry_run 	= $args_assoc['dry-run'];
		$post_id 	= $args_assoc['post_id'];
		$new_value	= $args_assoc['new_value'];

		\WP_CLI::line( " " );
		\WP_CLI::line( "******** update_dt_meta will update post {$post_id} : meta 'verint_dtree_json' value ********" );

		$before = get_post_meta ( $post_id, 'verint_dtree_json', true );

		if ( $dry_run ) {

			\WP_CLI::line( " " );
			\WP_CLI::line( '******** Relax, it is just a dry-run ********' );

		} else {

			\WP_CLI::line( " " );
			\WP_CLI::line( "Previous value: {$before}" );
			update_post_meta( $post_id, 'verint_dtree_json', $new_value);
			$after = get_post_meta ( $post_id, 'verint_dtree_json', true );
			\WP_CLI::line( "Actual value: {$after}" );
		}
	}