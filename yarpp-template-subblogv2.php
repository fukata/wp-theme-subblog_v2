<?php
/*
 * YARPP Template: SubBlog V2
 * Description: Requires a theme which supports post thumbnails
 * Author: fukata (Tatsuya Fukata)
 * */ ?>
<?php

if ( !$this->diagnostic_using_thumbnails() ) {
  $this->set_option( 'manually_using_thumbnails', true );
}

$options = array( 'thumbnails_heading', 'thumbnails_default', 'no_results' );
extract( $this->parse_args( $args, $options ) );

// a little easter egg: if the default image URL is left blank,
// default to the theme's header image. (hopefully it has one)
if ( empty($thumbnails_default) ) {
  $thumbnails_default = get_header_image();
}

$dimensions = $this->thumbnail_dimensions();

$output .= '<div class="ad_section">' .
           '<div class="ad_title">広告</div>' .
           '<div class="ad_body"> ' . stripslashes(get_option('my_ad_content_bottom2')) . '</div>' . 
           '</div>';

$output .= '<h2>関連記事</h2>' . "\n";

if (have_posts()) {
  $output .= '<div class="yarpp-thumbnails-horizontal">' . "\n";
  while (have_posts()) {
    the_post();

    $output .= "<a class='yarpp-thumbnail' href='" . get_permalink() . "' title='" . the_title_attribute('echo=0') . "'>" . "\n";

    $post_thumbnail_html = '';
    if ( has_post_thumbnail() ) {
      if ( $this->diagnostic_generate_thumbnails() ) {
        $this->ensure_resized_post_thumbnail( get_the_ID(), $dimensions );
      }
      $post_thumbnail_html = get_the_post_thumbnail( null, 'q' );
    }

    if ( trim($post_thumbnail_html) != '' ) {
      $output .= $post_thumbnail_html;
    } else {
      $output .= '<span class="yarpp-thumbnail-default"><img src="' . esc_url($thumbnails_default) . '"/></span>';
    }

    $output .= '<span class="yarpp-thumbnail-title">' . get_the_title() . '</span>';
    $output .= '</a>' . "\n";
  }
  $output .= "</div>\n";
} else {
  $output .= 'まだ関連記事がありません。';
}

$this->enqueue_thumbnails( $dimensions );
