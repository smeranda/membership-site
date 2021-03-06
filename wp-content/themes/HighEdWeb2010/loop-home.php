<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 */

/* Display navigation to next/previous pages when applicable */
if ( $wp_query->max_num_pages > 1 ) : ?>
	<nav id="nav-above" class="navigation">
		<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'highedweb2010' ) ); ?></div>
		<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'highedweb2010' ) ); ?></div>
	</nav><?php
endif;

/* If there are no posts to display, such as an empty archive page */

if ( ! have_posts() ) : ?>
	<div id="post-0" class="post error404 not-found">
		<h1 class="entry-title"><?php _e( 'Not Found', 'highedweb2010' ); ?></h1>
		<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'highedweb2010' ); ?></p>
			<?php get_search_form(); ?>
		</div>
	</div><?php
endif;

/* Start the Loop.
 *
 * In Twenty Ten we use the same loop in multiple contexts.
 * It is broken into three main parts: when we're displaying
 * posts that are in the gallery category, when we're displaying
 * posts in the asides category, and finally all other posts.
 *
 * Additionally, we sometimes check for whether we are on an
 * archive page, a search page, etc., allowing for small differences
 * in the loop on each template without actually duplicating
 * the rest of the loop that is shared.
 *
 * Without further ado, the loop:
 */

while ( have_posts() ) : the_post();

	/* How to display posts in the Gallery category. */

	if ( in_category( _x('gallery', 'gallery category slug', 'highedweb2010') ) ) : ?>
                		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        	<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'highedweb2010' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
                            <div class="entry-meta"><?php highedweb_posted_on(); ?></div>
                            <div class="entry-content"><?php
                           	if ( post_password_required() ) :
								the_content();
							else :
								$images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) );
								if ( $images ) :
									$total_images = count( $images );
									$image = array_shift( $images );
									$image_img_tag = wp_get_attachment_image( $image->ID, 'thumbnail' ); ?>
                            	<div class="gallery-thumb"><a class="size-thumbnail" href="<?php the_permalink(); ?>"><?php echo $image_img_tag; ?></a></div>
                                <p><em><?php printf( __( 'This gallery contains <a %1$s>%2$s photos</a>.', 'highedweb2010' ),
								'href="' . get_permalink() . '" title="' . sprintf( esc_attr__( 'Permalink to %s', 'highedweb2010' ), the_title_attribute( 'echo=0' ) ) . '" rel="bookmark"',
								$total_images); ?></em></p><?php
                            	endif;
								the_excerpt();
							endif; ?>
                            </div>
                            <div class="entry-utility">
                            	<a href="<?php echo get_term_link( _x('gallery', 'gallery category slug', 'highedweb2010'), 'category' ); ?>" title="<?php esc_attr_e( 'View posts in the Gallery category', 'highedweb2010' ); ?>"><?php _e( 'More Galleries', 'highedweb2010' ); ?></a>
                                <span class="meta-sep">|</span>
                                <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'highedweb2010' ), __( '1 Comment', 'highedweb2010' ), __( '% Comments', 'highedweb2010' ) ); ?></span><?php
                                	edit_post_link( __( 'Edit', 'highedweb2010' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
                            </div>
                        </article><?php

	/* How to display posts in the asides category */

	elseif ( in_category( _x('asides', 'asides category slug', 'highedweb2010') ) ) : ?>
                		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><?php
                        if ( is_archive() || is_search() ) : // Display excerpts for archives and search. ?>
                        	<div class="entry-summary">
								<?php the_excerpt(); ?>
                            </div><?php
                        else : ?>
                        	<div class="entry-content"><?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'highedweb2010' ) ); ?></div><?php
                        endif; ?>
                        	<div class="entry-utility">
								<?php highedweb_posted_on(); ?><span class="meta-sep">|</span>
                            	<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'highedweb2010' ), __( '1 Comment', 'highedweb2010' ), __( '% Comments', 'highedweb2010' ) ); ?></span>
                                <?php edit_post_link( __( 'Edit', 'highedweb2010' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
                            </div>
                        </article><?php
	/* How to display all other posts. */
	else : ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        	<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'highedweb2010' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
                            <div class="entry-meta"><?php highedweb_posted_on(); ?></div><?php
                            if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
                            <div class="entry-summary"><?php the_excerpt(); ?></div><?php
                            else : ?>
                            <div class="entry-content">
                            	<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'highedweb2010' ) ); ?>
                                <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'highedweb2010' ), 'after' => '</div>' ) ); ?>
                            </div><?php
                            endif; ?>
                            <div class="entry-utility"><?php
                            	if ( count( get_the_category() ) ) : ?>
                                <span class="cat-links"><?php printf( __( '<span class="%1$s">Posted in</span> %2$s', 'highedweb2010' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?></span>
                                <span class="meta-sep">|</span><?php
                                endif;

								$tags_list = get_the_tag_list( '', ', ' );
								if ( $tags_list ): ?>
                                <span class="tag-links"><?php printf( __( '<span class="%1$s">Tagged</span> %2$s', 'highedweb2010' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?></span>
                                <span class="meta-sep">|</span><?php
                                endif; ?>
                                <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'highedweb2010' ), __( '1 Comment', 'highedweb2010' ), __( '% Comments', 'highedweb2010' ) ); ?></span>
                                <?php edit_post_link( __( 'Edit', 'highedweb2010' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
                            </div>
                        </article><?php
                        comments_template( '', true );

	endif; // This was the if statement that broke the loop into three parts based on categories.

endwhile; // End the loop. Whew.

/* Display navigation to next/previous pages when applicable */

if (  $wp_query->max_num_pages > 1 ) : ?>
                        <nav id="nav-below" class="navigation">
                        	<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'highedweb2010' ) ); ?></div>
                            <div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'highedweb2010' ) ); ?></div>
                        </nav><?php
endif; ?>