<?php
$args = array(
  'post_type' => 'characters',
  'posts_per_page' => -1,
  'meta_key'  => '_main_char_field',
  'orderby'   => 'meta_value_num',

);
$characters_query = new WP_Query($args);
?>
<article id="characters" class="characters">
  <h3 class="characters__title fadeTitle"><span class="hidden-1">Les </span><span    class="hidden-2">personnages</span>
  </h3>

<!-- Slider main container -->
  <div class="slider swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <?php  
      while ( $characters_query->have_posts() ) {
        $characters_query->the_post();
        echo '<div class="swiper-slide">';
        echo '<figure>';
        echo get_the_post_thumbnail(get_the_ID  (), 'full' );
        echo '<figcaption>';
        the_title();
        echo'</figcaption>';
        echo '</figure>';
        echo '</div>';
      }
      ?>
    </div>
  
  </div>
</article>
