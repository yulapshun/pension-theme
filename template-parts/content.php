<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<article style="background-image: url(<?php echo the_post_thumbnail_url(); ?>)" id="post-<?php the_ID(); ?>" <?php post_class('post-grid'); ?>>
  <a href="<?php echo esc_url( get_permalink() ); ?>">
    <div class="article-mask">
      <header class="entry-header">
	<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
	  <span class="sticky-post"><?php _e( 'Featured', 'twentysixteen' ); ?></span>
	<?php endif; ?>

	<?php the_title( sprintf( '<div class="entry-title">'), '</div>' ); ?>
      </header><!-- .entry-header -->
      <div class="entry-content">
	<?php
	/* translators: %s: Name of current post */
	the_excerpt();
	/* the_content( sprintf(
	__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
	get_the_title()
	) ); */

	wp_link_pages( array(
	  'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
	  'after'       => '</div>',
	  'link_before' => '<span>',
	  'link_after'  => '</span>',
	  'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
	  'separator'   => '<span class="screen-reader-text">, </span>',
	) );
	?>
      </div><!-- .entry-content -->
      <footer class="entry-footer">

      </footer><!-- .entry-footer -->
    </div><!-- .article-mask -->
  </a>
</article><!-- #post-## -->
