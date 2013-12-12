<?php
/*
Template Name: Home
 */

get_header('home'); ?>

	<div id="primary-home" class="content-area">
		<main id="main" class="site-main" role="main">
        
        <div class="slider-menu-home">
        </div><!-- .slider-menu-home -->

		<?php
			// Inicia e decide se mostra o Bloco Coleção.
			$exibir_colecao = of_get_option( 'exibir_colecao_checkbox' );
			if ( $exibir_colecao > 0 ) {
		?>
        <div class="subcontent-relacoes">
        
        	<div class="intro-relacoes-home">
				<?php echo of_get_option('colecao_home'); ?><br />
				<a href="<?php echo of_get_option('link_colecao'); ?>">Leia mais>></a>
            </div><!-- .intro-relacoes-home -->
            
            <div class="logo-relacoes-home">
				<a href="<?php echo of_get_option('link_colecao'); ?>">
					<img src="<?php echo of_get_option('logo_colecao_upload'); ?>" />
				</a>
            </div><!-- .logo-relacoes-home -->
            
            <div class="indiques-relacoes-home">
				<a href="<?php echo of_get_option('link_indiques'); ?>">
					<img src="<?php echo of_get_option('capa_indiques_upload'); ?>" />
				</a>				
            </div><!-- .indiques-relacoes-home -->
        
        </div><!-- .subcontent-relacoes -->

		<?php } ?>

		<?php
			// inicia e decide se mostra o Bloco Cartazes
		?>
        
        <div class="subcontent-cartazes">
        
        <div class="">
        </div><!-- . -->
        
        <div class="esquerda-subcontent-cartazes">
        <h1>Relações Educação</h1>
        
        <div class="content-esquerda-subcontent-cartazes">
        
		<div class="intro-cartazes-home">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pellentesque risus eget erat venenatis facilisis. Ut semper justo at fermentum fringilla.</p>
		</div><!-- .intro-cartazes-home -->
        
		<div class="slider-cartazes-home">
		</div><!-- .slider-cartazes-home -->
            
	</div><!-- .content-esquerda-subcontent-cartazes -->
            
	</div><!-- .esquerda-subcontent-cartazes -->
	
	<div class="direita-subcontent-cartazes">
	
	<h1>Vídeos</h1>
	
		<div class="videos-home">
		</div><!-- .videos-home -->
		
	</div><!-- .direita-subcontent-cartazes -->
        
        </div><!-- .subcontent-cartazes -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>