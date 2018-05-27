<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dennisvintherjensen
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
    <div class="spacer">
      <div class="site-info">
        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'dennisvintherjensen' ) ); ?>">
          <?php
          /* translators: %s: CMS name, i.e. WordPress. */
          printf( esc_html__( 'Proudly powered by %s', 'dennisvintherjensen' ), 'WordPress' );
          ?>
        </a>
      </div><!-- .site-info -->
      <div class="platforms">
        <a href="https://github.com/dennisvintherjensen" title="Me on GitHub" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/images/github.svg" />
        </a>
        <a href="https://twitter.com/dennis_v_jensen" title="Me on Twitter" target="_blank">
          <img src="<?php echo get_template_directory_uri(); ?>/images/twitter.svg" />
        </a>
      </div>
    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
