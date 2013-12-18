<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Relacoes Raciais
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

    	<div class="frase-rodape">
        	<?php echo of_get_option('frase_rodape'); ?>
        </div><!-- .frase-rodape -->

        <div class="logo-unicef">
        </div><!-- .logo-unicef -->
        
        <div class="redes-rodape">
            <ul>
              <?php
              if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-footer') ) :
              endif; ?>
           </ul>
        </div><!-- .redes-rodape -->
        
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<div class="bg-footer"></div><!-- .bg-footer -->

</body>
</html>