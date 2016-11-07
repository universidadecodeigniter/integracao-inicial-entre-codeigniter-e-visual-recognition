<?php $this->load->view('commons/header'); ?>
	<header class="container-fluid">
		<div class="row">
			<div class="col-md-2"><a href="<?=base_url()?>" class="btn btn-default">Voltar</a></div>
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
	<div class="container mTop15">
		<div class="col-md-6 col-md-offset-3 text-center">
			<h3><?=$message?></h3>
		</div>
	</div>
</div>
<?php $this->load->view('commons/footer'); ?>
