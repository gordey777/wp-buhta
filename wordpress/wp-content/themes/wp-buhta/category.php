<?php get_header(); ?>

      <div class="wrapper title-wrap-sinhts-inst">
        <h2 class="singht-int-h2"><?php if( is_category() ) echo get_queried_object()->name; ?></h2>
      </div>
    </div>
  </header>
  <!-- header and -->
  <section class="fourth fourth-singht">
    <div class="container-fluid">
      <div class="row">

        <?php get_template_part('loop'); ?>

        <?php //get_template_part('pagination'); ?>

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
      </div><!-- /.row -->
    </div>
  </section>


<?php get_footer(); ?>
