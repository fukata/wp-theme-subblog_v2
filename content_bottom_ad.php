            <?php if ( is_single() ) : ?>
<div class="ad_section">
  <h2>関連記事</h2>
  <div class="ad_body"><?php echo stripslashes(get_option('my_ad_content_bottom3')); ?></div>
</div>
			<?php endif; // is_single() ?>
