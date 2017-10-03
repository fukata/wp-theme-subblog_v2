<?php if ( is_single() ) : ?>
  <?php echo stripslashes(get_option('my_ad_content_bottom2')); ?>
  <h2>関連記事</h2>
  <?php echo stripslashes(get_option('my_ad_content_bottom3')); ?>
<?php endif; // is_single() ?>
