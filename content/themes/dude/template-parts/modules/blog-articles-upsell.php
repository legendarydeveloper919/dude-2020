<?php
/**
 * @Author:             Timi Wahalahti, Digitoimisto Dude Oy (https://dude.fi)
 * @Date:               2019-05-18 18:08:24
 * @Last Modified by:   Timi Wahalahti
 * @Last Modified time: 2019-05-18 18:24:47
 *
 * @package dude2019
 */

$title_placeholder = get_sub_field( 'title_placeholder' );
$articles = get_sub_field( 'articles' );

if ( empty( $title_placeholder ) || empty( $articles ) ) {
  return;
} ?>

<section class="block block-blog-articles-upsell">
  <div class="container">

    <h2><?php printf( 'Blogauksii <span>%s</span>', $title_placeholder ) ?></h2>

    <div class="cols">
      <?php foreach ( $articles as $article ) :
        if ( ! post_exists_id( $article ) ) {
          continue;
        } ?>

        <div class="col">
          <h3><?php echo get_the_title( $article ) ?></h3>
          <?php echo get_the_excerpt( $article ) ?>
          <p><a href="<?php echo get_the_permalink( $article ) ?>">Lue kirjoitus</a></p>
        </div>

      <?php endforeach; ?>
    </div>

  </div>
</section>