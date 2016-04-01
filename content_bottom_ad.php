			<?php if ( is_single() ) : ?>
<div class="clear">
    <div class="ad">
        <?php echo stripslashes(get_option('my_ad_content_bottom1')); ?>
    </div>
    <div class="ad">
        <?php echo stripslashes(get_option('my_ad_content_bottom2')); ?>
    </div>
</div>
			<?php endif; // is_single() ?>


