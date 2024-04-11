# Related Posts in WordPress using the Block Binding API and Advanced Custom Fields Pro

## Introduction
The first pass of the Block Binding API was released with WordPress 6.5, this new API allows authors to replace values held in specific block attributes with bonud data source. This API opens up the possibility to interact with existing blocks in a way that does not require React. Related content is a common componenet on blog posts and articles. Lets build a pattern using core WordPress blocks and the block binding API.

## Advanced Custom Fields Setup
ACF Pro is not required to build something like this. For this example I am using the AFC Pro relationship field because of its ease of use when authoring content. 

### Setup a relationship field
Hop into ACF and create a new field group. Add a relationship field with the field name related_posts. If is important to set the `return format` to `post ID` we do not need an array of post objects everytime we call this field. We will use the ID to pull only what we need, when we need it. All other settings are up to you.

## Custom Source Setup
Next, lets go ahead and setup our custom source for fetching and returning the bits of post data we need.

### Init Action and Source Registration
---
```
add_action( 'init', 'theme_register_block_bindings', 999 );

function theme_register_block_bindings() {
	register_block_bindings_source( 'theme/related-posts', array(
		'label'              => __( 'Related posts', 'theme' ),
		'get_value_callback' => 'theme_related_post_callback'
	) );
}
```
Add an `init` action and set the priority very low. We want to use ACF's `get_field()` function, which also gets setup during `init`. We need to make sure our callback runs as late as possible.

Something worth noting here is that we do not need the third paramter (uses_context) on `register_block_bindings_source()`. This function will pass a block object to our callback that already contains a block context with the post ID we need. 

### Cherry picking in the callback
---
In our callback function we want to accept `$source_args` and `$block`.
```
function theme_related_post_callback( $source_args, $block ) {}
```
#### Expected Arguments:
We are expecting two source arguments from a block:
- key: This argument will reference a specific index in the array we get back from ACF. 
- field: The name / label of the type of information we will pass back (image, title, excerpt, permalink)

#### Grab the field data
After some checks to ensure the user setup the proper arguments we call on `get_field()` to pull our related posts field using the block context to tell ACF where to look. Remember: we are outside the loop right now, which means you need to supply specific post IDs to look up meta data. 

```
 $related_posts = get_field( 'related_posts', $block->context['postId']);
```

Becuase we set a low priority on our action we could attempt to get the ID via `global $post` however, there is not reason to bother. We get what we need in `$block`

Because we are referencing an array index I am going to be friendly to our user and not require them to consider the concept of a zero-based array. We expect an index number starting at 1. To prepare data for the switch statement we will subtract 1 from the key and pluck that ID out of our array. 
```
$postKey = $source_args['key'] - 1; 
$related_post_id = $related_posts[ $postKey ];
```

#### Switch statement
We will run our data through a switch statement checking against the source argument `field` and return the proper field. 

>Quick note about `image`: The block binding API does not support a setup for responsive imagery. You are not able to supply an `SRCset` to the block. I recommend enforcing an image size when you pluck the thumbnail url. I have chosen the medium size for this. No need for a 4k image inside a 150 x 200 pixel card.

```
if(!empty($related_post_id)) {
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
```

## Block Metadata and Pattern File
To bring the field and source together we are going to build our related posts section in the block editor, out of core WordPress blocks and save the markup in a pattern file within our theme's `pattern` folder. Working in the block editor is great, but we only want to set this up a single time. 

Once you are copy / pasted / comfortable in your editor of choice. Add metadata settings to each image, heading, paragraph, and button block. Remember to supply the appropriate `key` value.

### Applying the metadata attribute
---
Currently you can only supply the metadata object directly in the comments that wrap a block. 

Below is an example of how and where the metadata object is placed within existing attributes. The structure of this markup is `metadata` > `bindings` > `{bound attribute name}`

Within each bound attribute you will supply a source name. For our purposes we are calling the `theme/related-posts` source we created in the previous step.

```
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
        <img src="image.png" alt="" class="wp-image-102" style="border-radius:10px;aspect-ratio:3/2;object-fit:cover"/>
    </figure>
<!-- /wp:image -->
```
### Bindings
---
Below are examples of the source and argument bindings that need to be supplied for each block.

#### Image
```
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
```

#### Heading
```
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
```

#### Paragraph
```
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
```

#### Button
```
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
```
## Use that Pattern
After the setup, jump back into WordPress and locate your pattern in the block library. When you add the pattern to the editor you will see that the blocks within your card are showing the databinding icon, and you are no longer able to edit them. 

Currently ACF fields will not update dynmically in the editor. You will need to save the post and preview it to see the source data flowing into the blocks. 





