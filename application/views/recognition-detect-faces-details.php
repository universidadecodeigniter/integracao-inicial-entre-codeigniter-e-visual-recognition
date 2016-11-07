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
	<div class="container-fluid vr-type">
		<div class='row'>
			<div class="col-md-12">
				<h2>Detecção de Rosto</h2>
			</div>
		</div>
	</div>

	<div class="container mTop15">
		<div class='row'>
			<?php foreach ($infos as $detail) : ?>
				<div class="col-md-6">
					<img src="<?=$detail['image_url']?>" class="img-responsive"/>
				</div>
				<div class="col-md-6">
					<?php foreach ($detail['faces'] as $faces): ?>
						<ul>
							<li><b>Nome: </b><?=$faces['identity']?></li>
							<li><b>Idade: </b><?=$faces['age']?></li>
							<li><b>Sexo: </b><?=$faces['gender']?></li>
							<li><b>Classificação: </b><?=$faces['type']?></li>
						</ul>
					<?php endforeach; ?>
				</div>
			<?php endforeach; ?>
		</div>
	</div>

</body>
</html>
