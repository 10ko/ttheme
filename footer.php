<div class="clear"></div>
</div>
<footer id="footer" role="contentinfo" class="columns small-centered small-6">
<div id="copyright">
<?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'ttheme' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); ?>
</div>
</footer>
</div>


<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/foundation.min.js"></script>
<script>
  $(document).foundation();
</script>
<?php wp_footer(); ?>
</body>
</html>