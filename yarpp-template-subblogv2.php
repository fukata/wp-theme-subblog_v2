<?php
/*
 * YARPP Template: SubBlog V2
 * Description: Requires a theme which supports post thumbnails
 * Author: fukata (Tatsuya Fukata)
 * */ ?>
<h2>関連記事</h2>
<div class="yarpp-thumbnails-horizontal">
<?php if (have_posts()):?>
<?php while (have_posts()) : the_post(); ?>
<a class="yarpp-thumbnail" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
  <?php if ( FlickrPress::isExtractThumbnailByPostID( get_the_ID() ) ) { ?>
  <span class="yarpp-thumbnail-default"><?php the_post_thumbnail('q'); ?></span><span class="yarpp-thumbnail-title"><?php the_title(); ?></span>
  <?php } else { ?>
  <span class="yarpp-thumbnail-default"><?php the_post_thumbnail('thumbnail'); ?></span><span class="yarpp-thumbnail-title"><?php the_title(); ?></span>
  <?php } ?>
</a>
<?php endwhile; ?>
</ol>
</div>

<?php else: ?>
<p>まだ関連記事がありません。</p>
<?php endif; ?>
