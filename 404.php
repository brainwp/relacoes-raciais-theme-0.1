<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Relacoes Raciais
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        
        <?php get_template_part( 'menu-colecao' ); ?>
        
   					<header class="entry-header center">
                        <h1 class="entry-title"><?php _e( 'Oops 404! That page can&rsquo;t be found.', 'relacoes-raciais' ); ?></h1>
                    </header><!-- .entry-header -->
                    
			<article class="pagina-404">
            </article><!-- #post-## -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>