<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title><?php wp_title(); ?></title>

	<?php wp_head(); ?>
</head>
<body>


	<div class="header">
		<div class="wrap">
			<h1><a href="<?php echo site_url(); ?>" title="<?php bloginfo('name'); ?>"></a></h1>	
				<div class="info">
					
					<?php 
						$args= array('post_type' => 'page','pagename'=>'Principal' );
						$my_page = get_posts($args);			
					 ?>
					 <?php if($my_page) : foreach ($my_page as $post) : setup_postdata($post); ?>
					<?php the_content() ?>

						<input type="email" class="form-control" style="min-width:30px"; id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu email para mais informações">
						
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-primary btn-primary-custom" data-toggle="modal" data-target="#exampleModal">
						  Mais info
						</button>

						<!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h3 class="modal-title" id="exampleModalLabel">Cadastro</h3>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
								<!-- Inicio cadastro -->
								<form class="form-horizontal">
									<fieldset>
										<!-- Form Name -->
										<legend>Insira os dados abaixo que entraremos em contato</legend>
										<!-- Text input-->
											<div class="form-group">
											  <label class="col-md-4 control-label" for="nome">Nome</label>  
											  <div class="col-md-5">
											 	 <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text"> 
											  </div>
											</div>
												<!-- Text input-->
												<div class="form-group aling-left">
												  <label class="col-md-4 control-label" for="telefones">Telefone</label>  
												  <div class="col-md-4">
												  	<input id="telefones" name="telefones" placeholder="" class="form-control input-md" type="text">
												  </div>
												</div>
													<!-- Text input-->
													<div class="form-group">
													  <label class="col-md-4 control-label" for="email">Email</label>  
													  <div class="col-md-6">
													 	 <input id="email" name="email" placeholder="" class="form-control input-md" required="exampleInputEmail1" type="text">
													  </div>
													</div>
										</fieldset>
									</form>
									<!-- Fiim cadastro -->


						      </div>
						      <div class="modal-footer">
						       <!--  <button type="reset" class="btn btn-warning">Limpar</button> -->
						        <button type="button" class="btn btn-primary" data-dismiss="modal" >Enviar</button>

								<script>

								</script>

						      </div>
						    </div>
						  </div>
						</div><!-- end modal-->
					<?php endforeach;?> 
					<?php else: ?>	
						<h2>Atribua um título para página</h2>
					<?php endif ?>	
				</div><!-- end info-->
		</div><!-- end wrap -->
	</div><!-- end header -->
</div>



