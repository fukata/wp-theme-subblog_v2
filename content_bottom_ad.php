            <?php if ( is_single() ) : ?>
<div class="ad_section">
    <p class="ad_title">広告</p>
    <div class="clear">
        <div class="ad">
            <?php echo stripslashes(get_option('my_ad_content_bottom1')); ?>
        </div>
        <div class="ad">
            <?php echo stripslashes(get_option('my_ad_content_bottom2')); ?>
        </div>
    </div>
</div>
			<?php endif; // is_single() ?>


