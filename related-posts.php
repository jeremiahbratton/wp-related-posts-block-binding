<?php
/** 
 * Title: Related Articles
 * Slug: theme/related-articles
 * Categories: content, related
 * Viewport width: 1400
 */
?>
<!-- wp:group {"metadata":{"name":"Related Content"},"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:heading -->
<h2 class="wp-block-heading">Related Posts</h2>
<!-- /wp:heading -->

<!-- wp:columns {"metadata":{"name":"Related Article Columns"},"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"metadata":{"name":"Article 1"}} -->
<div class="wp-block-column"><!-- wp:group {"metadata":{"name":"Article Card"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"border":{"radius":"10px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"borderColor":"contrast-3","backgroundColor":"accent","textColor":"contrast","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group has-border-color has-contrast-3-border-color has-contrast-color has-accent-background-color has-text-color has-background has-link-color" style="border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)">
<!-- wp:image {
    "id":102,
    "aspectRatio":"3/2",
    "scale":"cover",
    "sizeSlug":"medium",
    "linkDestination":"none",
    "style":{"border":{"radius":"10px"}},
    "metadata":{
		"bindings":{
			"url":{
				"source":"theme/related-posts",
				"args":{
					"key":"1",
                    "field":"image"
				}
			}
		}
	}
}
-->
<figure class="wp-block-image size-medium has-custom-border">
    <img src="https://images.unsplash.com/photo-1706707075372-29a7d1ba306f?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="wp-image-102" style="border-radius:10px;aspect-ratio:3/2;object-fit:cover"/>
</figure>
<!-- /wp:image -->

<!-- wp:heading {
	"metadata":{
		"bindings":{
			"content":{
				"source":"theme/related-posts",
				"args":{
					"key":"1",
                    "field":"title"
				}
			}
		}
	}
} -->
<h2 class="wp-block-heading">Article Title</h2>
<!-- /wp:heading -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph {
	"metadata":{
		"bindings":{
			"content":{
				"source":"theme/related-posts",
				"args":{
					"key":"1",
                    "field":"excerpt"
				}
			}
		}
	}
} -->
<p>Article Except</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {
	"metadata":{
		"bindings":{
			"url":{
				"source":"theme/related-posts",
				"args":{
					"key":"1",
                    "field":"permalink"
				}
			}
		}
	}
} -->
<div class="wp-block-button">
    <a class="wp-block-button__link wp-element-button">Read More</a>
</div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"metadata":{"name":"Article 2"}} -->
<div class="wp-block-column"><!-- wp:group {"metadata":{"name":"Article Card"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"border":{"radius":"10px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"borderColor":"contrast-3","backgroundColor":"accent","textColor":"contrast","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group has-border-color has-contrast-3-border-color has-contrast-color has-accent-background-color has-text-color has-background has-link-color" style="border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)">
<!-- wp:image {
    "id":102,
    "aspectRatio":"3/2",
    "scale":"cover",
    "sizeSlug":"medium",
    "linkDestination":"none",
    "style":{"border":{"radius":"10px"}},
    "metadata":{
		"bindings":{
			"url":{
				"source":"theme/related-posts",
				"args":{
					"key":"2",
                    "field":"image"
				}
			}
		}
	}
}
-->
<figure class="wp-block-image size-medium has-custom-border">
    <img src="https://images.unsplash.com/photo-1706707075372-29a7d1ba306f?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="wp-image-102" style="border-radius:10px;aspect-ratio:3/2;object-fit:cover"/>
</figure>
<!-- /wp:image -->

<!-- wp:heading {
	"metadata":{
		"bindings":{
			"content":{
				"source":"theme/related-posts",
				"args":{
					"key":"2",
                    "field":"title"
				}
			}
		}
	}
} -->
<h2 class="wp-block-heading">Article Title</h2>
<!-- /wp:heading -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph {
	"metadata":{
		"bindings":{
			"content":{
				"source":"theme/related-posts",
				"args":{
					"key":"2",
                    "field":"excerpt"
				}
			}
		}
	}
} -->
<p>Article Except</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {
	"metadata":{
		"bindings":{
			"url":{
				"source":"theme/related-posts",
				"args":{
					"key":"2",
                    "field":"permalink"
				}
			}
		}
	}
} -->
<div class="wp-block-button">
    <a class="wp-block-button__link wp-element-button">Read More</a>
</div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"metadata":{"name":"Article 3"}} -->
<div class="wp-block-column"><!-- wp:group {"metadata":{"name":"Article Card"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"border":{"radius":"10px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"borderColor":"contrast-3","backgroundColor":"accent","textColor":"contrast","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group has-border-color has-contrast-3-border-color has-contrast-color has-accent-background-color has-text-color has-background has-link-color" style="border-width:1px;border-radius:10px;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)">
<!-- wp:image {
    "id":102,
    "aspectRatio":"3/2",
    "scale":"cover",
    "sizeSlug":"medium",
    "linkDestination":"none",
    "style":{"border":{"radius":"10px"}},
    "metadata":{
		"bindings":{
			"url":{
				"source":"theme/related-posts",
				"args":{
					"key":"3",
                    "field":"image"
				}
			}
		}
	} 
}
-->
<figure class="wp-block-image size-medium has-custom-border">
    <img src="https://images.unsplash.com/photo-1706707075372-29a7d1ba306f?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="wp-image-102" style="border-radius:10px;aspect-ratio:3/2;object-fit:cover"/>
</figure>
<!-- /wp:image -->

<!-- wp:heading {
	"metadata":{
		"bindings":{
			"content":{
				"source":"theme/related-posts",
				"args":{
					"key":"3",
                    "field":"title"
				}
			}
		}
	}
} -->
<h2 class="wp-block-heading">Article Title</h2>
<!-- /wp:heading -->

<!-- wp:separator -->
<hr class="wp-block-separator has-alpha-channel-opacity"/>
<!-- /wp:separator -->

<!-- wp:paragraph {
	"metadata":{
		"bindings":{
			"content":{
				"source":"theme/related-posts",
				"args":{
					"key":"3",
                    "field":"excerpt"
				}
			}
		}
	}
} -->
<p>Article Except</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {
	"metadata":{
		"bindings":{
			"url":{
				"source":"theme/related-posts",
				"args":{
					"key":"3",
                    "field":"permalink"
				}
			}
		}
	}
} -->
<div class="wp-block-button">
    <a class="wp-block-button__link wp-element-button">Read More</a>
</div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->