<?php
/*
Template Name: Home
 */

get_header('home'); ?>

	<div id="primary-home" class="content-area">
		<main id="main" class="site-main" role="main">
        
<?php get_template_part( 'menu-colecao' ); ?>

		<?php
			// Inicia e decide se mostra o Bloco Coleção.
			$exibir_colecao = of_get_option( 'exibir_colecao_checkbox' );
			if ( $exibir_colecao > 0 ) {
		?>
        <div class="subcontent-relacoes">
        
        	<div class="intro-relacoes-home">
            <h1 class="entry-title"><?php echo of_get_option('titulo_boas'); ?></h1>
				<?php echo of_get_option('colecao_home'); ?><br />
			<?php
				$id_intro = of_get_option('link_colecao');
				$link_intro = get_permalink( $id_intro ); 
				
				$id_quem = of_get_option('link_quem');
				$link_quem = get_permalink( $id_quem ); 
			?>
				<a href="<?php echo $link_quem; ?>">Leia mais>></a>
            </div><!-- .intro-relacoes-home -->
            
            <div class="logo-relacoes-home">
				<a href="<?php echo $link_intro; ?>">
					<img src="<?php echo of_get_option('logo_colecao_upload'); ?>" />
				</a>
            </div><!-- .logo-relacoes-home -->
            
            <div class="indiques-relacoes-home">
            
            <?php
				$id_indiques = of_get_option('link_indiques');
				$link_indiques = get_permalink( $id_indiques ); 
			?>
				<a href="<?php echo $link_indiques; ?>">
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
        <h1 class="entry-title">Afro-brasilidades em Imagens</h1>
        
        <div class="content-esquerda-subcontent-cartazes">
        
		<div class="intro-cartazes-home">
			<?php echo of_get_option('cartazes_home'); ?><br />
            
            <?php
				$id_cartazes = of_get_option('link_cartazes');
				$link_cartazes = get_permalink( $id_cartazes ); 
			?>
	            <a href="<?php echo $link_cartazes; ?>">Leia mais>></a>
		</div><!-- .intro-cartazes-home -->
        
		<div class="slider-cartazes-home">
                
        
        <div class="slider">

                <div class="list_carousel">
                    <div class="seta-esquerda"><a id="prev3" href="#">esquerda</a></div><!-- .seta-esquerda -->
                    <div class="seta-direita"><a id="next3" href="#">direita</a></div><!-- seta-direita -->

                <ul id="foo3">
				<?php
					$id_cartazes = of_get_option('link_cartazes');
                        $args = array(
                                'post_type' => 'attachment',
                                'numberposts' => 9,
                                'post_status' => null,
                                'post_parent' => $id_cartazes,
								'order' => 'ASC',
                                'orderby' => 'menu_order'
                                );
                            
                            $anexos = get_posts ( $args );
                            
                            if ( $anexos ) {
                                foreach ( $anexos as $anexo ) { ?>
                                
                                <?php 
                                    $attachment_id = $anexo->ID;
                                    $image_attributes = wp_get_attachment_image_src( $attachment_id, 'thumb' );
                                    $attachment_page = get_attachment_link( $attachment_id ); 
									$url = wp_get_attachment_url( $attachment_id ); 
                                    ?>
					<li>
					<div class="cada-outro-projeto">
                        <a href="<?php echo $url; ?>" class="thickbox image">
                            <img src="<?php echo $image_attributes[0]; ?>" alt="<?php echo apply_filters('the_title', $anexo->post_title); ?>">
                        </a>
					</div><!-- .cada-outro-projeto -->
					</li>

				   <!-- show pagination here -->
<?php } } ?>
				</ul>
				    
 				<div class="clearfix"></div>
					
			</div> <!-- .list_carrousel -->
            </div><!-- .slider. -->      
        
        
        
		</div><!-- .slider-cartazes-home -->
            
	</div><!-- .content-esquerda-subcontent-cartazes -->
            
	</div><!-- .esquerda-subcontent-cartazes -->
	
	<div class="direita-subcontent-cartazes">
	
		<div class="videos-home">
			<ul>
              <?php
              if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-videos') ) :
              endif; ?>
           </ul>
		</div><!-- .videos-home -->
		
	</div><!-- .direita-subcontent-cartazes -->
        
        </div><!-- .subcontent-cartazes -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>