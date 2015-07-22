<?php while (have_posts()) : the_post(); ?>

<style>
  .post-banner{
    background-image: url('<?php
  $thumb_id = get_post_thumbnail_id();
  $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
  echo $thumb_url[0];
?>');
  }
</style>
<div class="post-banner">&nbsp;</div>
<div class="row">
  <article <?php post_class(); ?>>
    <div class="large-8 large-offset-2 columns">
      <header>
        <h1 class="entry-title"><?php the_title(); ?></h1>
  <!--      <?php get_template_part('templates/entry-meta'); ?> -->
      </header>

      

      <div class="entry-content">
        <?php the_content(); ?>
      </div>

    </div>

    <footer>
    </footer>

  </article>
<?php endwhile; ?>
</div>
<div class="waypoints">
  <div class="large-6 medium-6 columns wayprev">
  <?php previous_post(' %', '<span>Previous Post</span>', 'yes'); ?>
  </div>
  <div class="large-6 medium-6 columns waynext">
  <?php next_post(' %', '<span>Next Post</span>', 'yes'); ?>
  </div>
</div>
