<?php /* Template Name: Category Page */ get_header(); ?>

      <div class="wrapper title-wrap-sinhts-inst">
        <h2 class="singht-int-h2"><?php the_title(); ?></h2><?php edit_post_link(); ?>
          <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile;?>
          <?php endif; ?>
      </div>
    </div>
  </header>
  <!-- header and -->
  <section class="fourth fourth-singht">
    <div class="container-fluid">
      <div class="row">
        <?php
        $taxonomies = get_field('posts_category');

         $args = array(
                 'cat' => $taxonomies, //ID Рубрики
                 'post_type' => 'post',
                 //'posts_per_page' => 2,
                 'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
                 );
        query_posts($args); ?>

        <?php get_template_part('loop'); ?>

        <?php if (  $wp_query->max_num_pages > 1 ) : ?>

            <div id="true_loadmore"  class="view-more col-md-12">
              посмотртеть больше...
            </div>

          <script>
            var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
            var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
            var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
            var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
          </script>

        <?php endif; ?>
        <?php //wp_reset_query(); ?>

      </div><!-- /.row -->
    </div>
  </section>


<?php get_footer(); ?>
