<?php
/**
 * The template for displaying 404 pages (Page Not Found).
 *
 * @package ThemeGrill
 * @subpackage Ample
 * @since Ample 0.1
 */
?>

<?php get_header();

   do_action( 'ample_before_body_content' ); ?>

   <div class="single-page clearfix">
      <div class="inner-wrap">
         <div id="primary">
            <div id="content">
               <section class="error-404 not-found">
                  <div class="page-content">

                     <header class="page-header">
                        <h2 class="page-title"><?php _e( 'На жаль! Ця сторінка не може бути знайдена.', 'ample' ); ?></h2>
                     </header>

                     <?php if ( ! dynamic_sidebar( 'ample_error_404_page_sidebar' ) ) : ?>
                        <p><?php _e( "Схоже, нічого не було знайдено в цьому місці. Спробуйте пошук нижче.", 'ample' ); ?></p>
                        <?php get_search_form(); ?>
                     <?php endif; ?>
                  </div>
               </section>
            </div>
            <?php ample_both_sidebar_select(); ?>
         </div>

         <?php ample_sidebar_select(); ?>
      </div><!-- .inner-wrap -->
   </div><!-- .single-page -->

   <?php do_action( 'ample_after_body_content' );
get_footer(); ?>