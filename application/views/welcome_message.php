<?php $this->load->view('commons/header'); ?>
	<header class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8 text-center"><h1>IBM Watson + CodeIgniter + Unirest PHP</h1></div>
			<div class="col-md-2"></div>
		</div>
	</header>
	<div class="container-fluid description">
		<div class='row'>
			<div class="col-md-12">
				<p class="text-center">Esse exemplo foi desenvolvido utilizando CodeIgniter, o serviço <i>Visual Recognition</i> do IBM Watson, e a biblioteca Unirest PHP.</p>
			</div>
		</div>
	</div>
	<div class="container form">
		<div class="col-md-6 col-md-offset-3">
			<form method="POST" action="<?=base_url('recognition')?>">
				<div class="form-group">
					<p><b>Tipo</b></p>
				</div>
				<div class="radio">
					<label for="classify"><input type="radio" name="type" value="1" id="classify" required/> Classificação da imagem</label>
				</div>
				<div class="radio">
					<label for="face_detect"><input type="radio" name="type" value="2" id="face_detect" required/> Detecção de rosto</label>
				</div>
				<div class="form-group">
					<label for="image_url">URL da Imagem</label>
					<input type="text" id="image_url" name="url" class="form-control" required/>
				</div>

				<input type="submit" value="Processar imagem" class="btn btn-success"/>
			</form>
		</div>
	</div>
</div>
<?php $this->load->view('commons/footer'); ?>
