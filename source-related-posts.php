<?php
/**
 * Related posts block binding source
 */

//low priority to ensure it runs after the theme and ACF are loaded
add_action( 'init', 'theme_register_block_bindings', 999 );

function theme_register_block_bindings() {
	register_block_bindings_source( 'theme/related-posts', array(
		'label'              => __( 'Related posts', 'theme' ),
		'get_value_callback' => 'theme_related_post_callback'
	) );
}

function theme_related_post_callback( $source_args, $block ) {
	// No Key No Service
	if( !isset ( $source_args['key'] ) && !isset ( $source_args['field'] ) ) {
		return null;
	}

	//For now we need to pull using get_post_meta. ACF is not setup at this stage in the lifecycle.
	//$related_content = get_post_meta( $block->context['postId'], 'related_posts', true );
    $related_posts = get_field( 'related_posts', $block->context['postId']);
	
	//Set a new key equal to the passed key minus 1. We are going to be nice and not force the author to think about zero index. 
	$postKey = $source_args['key'] - 1; 
	$related_post_id = $related_posts[ $postKey ];

	if(!empty($related_post_id)) {
		/*
		 * This will fire multiple times, lets not overfetch and only grab the specific information we want
		 */
		switch ( $source_args['field'] ) {
			case 'image':
				return get_the_post_thumbnail_url( $related_post_id , 'medium' );
			case 'title':
				return get_the_title( $related_post_id );
			case 'excerpt':
				return get_the_excerpt( $related_post_id );
			case 'permalink':
				return get_the_permalink( $related_post_id );
			default:
				return null;
	    }
	}
}
