<?php get_header(); ?>

<div class="clear"></div>			
	<div class="container-fluid">
	
		<div class="contents">

			<div class="wrap">
			
			    <div class="row align-items-center" style="background-color: #f8f9fa;">
			        
			        <div class="col-sm-12 col-md-6 col-lg-4">
			            <div class="servicos">
			                <i class="fas fa-building fa-6x" style="color: #415E9B;"></i>
			                <div class="LT_servicos">
			                    <h3><strong>Apartamento Completo</strong></h3>
			                    <p>Mobília já incluída em maravilhosos<br>ambientes</p>
			                </div>
			            </div>
			        </div>

			        <div class="col-sm-12 col-md-6 col-lg-4">
			            <div class="servicos">
			                <i class="fas fa-external-link-alt fa-6x" style="color: #415E9B;"></i>
			                <div class="LT_servicos">
			                    <h3><strong>Alto padrão</strong></h3>
			                    <p>Imóvel de alto padrão e em<br>excelente localização</p>
			                </div>
			            </div>
			        </div>

			        <div class="col-sm-12 col-md-6 col-lg-4">
			            <div class="servicos text-center">
			                <i class="fas fa-hands-helping fa-6x" style="color: #415E9B;"></i>
			                <div class="LT_servicos">
			                    <h3><strong>Negociação fácil</strong></h3>
			                    <p>Financiamento desburocratizado e<br> barato</p>
			                </div>
			            </div>
			        </div>
			    </div><!-- end row -->	
			</div><!-- end wrap -->	
		</div><!-- end end contents -->	
		
	</div>

<div class="clear"></div><br>
	
	<div class="container-fluid">
		<div class="page">		
				<?php 
					$args= array('post_type' => 'post','showposts'=>2 );
					$my_posts = get_posts($args);			
				 ?>
				 
				 <?php $cont=1; if($my_posts) : foreach ($my_posts as $post) : setup_postdata($post);?>
				 		
				 	<?php if( $cont == 1){ ?>	
					  	<div class="row align-items-center" >				  	
						    <div class="col-sm-12 col-md-6 col-lg-6 align-self-center">
								<div class="txt">
									<h3><strong> <?php the_title(); ?> </strong></h3>
							  		<?php the_content(); ?>	
						      	</div>
						    </div>
						    
					    	<div class="col-sm-12 col-md-6 col-lg-6">
					    		<img class="img1 img-fluid" src="<?php bloginfo( 'template_directory' ) ?>/assets/images/planta-lazer2.png" alt="">
					   	 	</div>
						</div>
					
					<?php } else { ?>
						 <div class="row align-items-center">
						    <div class="col-sm-12 col-md-6 col-lg-6">
						    	<img class="img2 img-fluid" src="<?php bloginfo( 'template_directory' ) ?>/assets/images/planta-quarto2.png" alt="">
						    </div>
						    <div class="col-sm-12 col-md-6 col-lg-6 align-self-center">
			  					<div class="txt">
			  						<h3><strong> <?php the_title();?> </strong></h3>
						      		<?php the_content(); ?>	
								</div>
						 </div> 
					 <?php } ?>
				<?php $cont++; endforeach;?> 
				<?php else: ?>	
					<h2><strong>Página sem postagem</strong></h2>
				<?php endif ?>					    	  		
		</div>	<!-- end page -->
	</div><!-- end container -->



<?php get_footer(); ?>


