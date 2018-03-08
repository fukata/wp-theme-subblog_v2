<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="featured-post">
			<?php _e( 'Featured post', 'twentytwelve' ); ?>
		</div>
		<?php endif; ?>
        <?php if ( is_single() ) : ?>
		<header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
			<?php if ( comments_open() ) : ?>
				<div class="comments-link">
					<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'twentytwelve' ) . '</span>', __( '1 Reply', 'twentytwelve' ), __( '% Replies', 'twentytwelve' ) ); ?>
				</div><!-- .comments-link -->
			<?php endif; // comments_open() ?>
        </header><!-- .entry-header -->

		<!-- .entry-summary -->
		<div class="entry-content">
			<?php the_content( __( '続きを読む <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
      <?php include_once(__DIR__ . '/ad-coupon.php') ?>
      <?php include_once(__DIR__ . '/ad-content-bottom.php') ?>
		</div><!-- .entry-content -->

        <?php else : // is_single() ?>
          <?php if ( FlickrPress::isExtractThumbnailByPostID( get_the_ID() ) ) { ?>
            <?php $post_thumbnail = get_the_post_thumbnail(null, 'm'); ?>
            <header class="entry-header<?php echo $post_thumbnail ? "" : " not-has-post-thumbnail" ?>">
              <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'twentytwelve' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php echo $post_thumbnail ?></a>
            </header><!-- .entry-header -->
          <?php } else { ?>
            <?php $post_thumbnail = get_the_post_thumbnail(null, 'thumbnail'); ?>
            <header class="entry-header<?php echo $post_thumbnail ? "" : " not-has-post-thumbnail" ?>">
              <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'twentytwelve' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php echo $post_thumbnail ?></a>
            </header><!-- .entry-header -->
          <?php } ?>
        <?php endif; ?>

		<?php if ( is_single() ) : ?>
		<footer class="entry-meta">
			<?php twentytwelve_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
			<?php if ( is_singular() && get_the_author_meta( 'description' ) && is_multi_author() ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries. ?>
				<div class="author-info">
					<div class="author-avatar">
						<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentytwelve_author_bio_avatar_size', 68 ) ); ?>
					</div><!-- .author-avatar -->
					<div class="author-description">
						<h2><?php printf( __( 'About %s', 'twentytwelve' ), get_the_author() ); ?></h2>
						<p><?php the_author_meta( 'description' ); ?></p>
						<div class="author-link">
							<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
								<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentytwelve' ), get_the_author() ); ?>
							</a>
						</div><!-- .author-link	-->
					</div><!-- .author-description -->
				</div><!-- .author-info -->
			<?php endif; ?>
		</footer><!-- .entry-meta -->
        <?php else : ?>
        <footer class="entry-meta">
			<h1 class="entry-title">
                <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'twentytwelve' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>

            <?php $category = get_the_category()[0]; ?>
            <p class="category-name category-name-<?php echo $category->cat_ID ?>"><?php echo $category->cat_name ?></p>
            <time class="entry-date" datetime="<?php echo esc_attr( get_the_date( 'c' ) ) ?>"><?php echo esc_html( get_the_date() ) ?></time></a>
            <p class="entry-tags"><?php echo get_the_tag_list( '', __( ', ', 'twentytwelve' ) ); ?></p>
        </footer><!-- .entry-meta -->
        <?php endif; ?>
	</article><!-- #post -->
