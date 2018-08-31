<?php require_once('___config.php') ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<title><?php echo $tagTitle ?></title>
	<meta name="description" content="<?php echo $tagDescription ?>">
	<?php require_once '___head-geral.php';?>
</head>


<body>


<div id="preloader" data-cookie-preloader="<?php echo $cookie_preloader ?>" class="framework flexbox justify-center align-center">
	<?php echo $iconePreloader ?>
</div>





<div class="bg-fixo" style="background-image: url('imagens/bg-fixo/1.jpg<?php refresh() ?>');"></div>


<section class="principal">
	<div class="flex-container-fluid">
		<div class="flex-row">

			<div class="flex-col-12 flex-col-md-6">
				<div class="box-fixo-logo-contador framework">
					<div class="box-countdown">
						<div 
							id="contador" 
							class="countdown"
							data-dia="<?php echo $diaContador ?>"
							data-mes="<?php echo $mesContador ?>"
							data-ano="<?php echo $anoContador ?>"></div>
					</div>
					<div class="box-logomarca">
						<img src="imagens/logomarca/logomarca.png<?php refresh() ?>" alt="<?php echo $tagTitle ?>">
					</div>
					<div class="box-frase-breve framework txt-center">
						<h1>
							em breve um novo site 
							<span>para uma melhor experiência</span>
						</h1>
						<p>Aguarde! <br> Logo estaremos lançando um novo site, uma maneira dinâmica e ágil de comunicação com nossos clientes através de uma solução inovadora e imersiva!</p>
					</div>
					<div class="box-rede-social">
						<ul class="framework lista lista-inline framework txt-center">
							<li>
								<a href="<?php echo $urlFacebook ?>" target="_blank"><i class="ikon ikon-facebook"></i></a>
							</li>
							<li>
								<a href="<?php echo $urlInstagram ?>" target="_blank"><i class="ikon ikon-instagram"></i></a>
							</li>
							<li>
								<a href="tel:47991982005"><i class="ikon ikon-whatsapp"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>




			<div class="flex-col-12 flex-col-md-6 padding-off coluna-sobre-info-contato">
				<div class="box-info-sobre-contato">
					<div class="box-titulo-principal">
						<h2><span><?php echo $tituloTextoApresentacao ?></span></h2>
						<div class="separador"></div>
						<p><?php echo $textoApresentacao ?></p>
					</div>

					<div class="gap-120"></div>

					<div class="box-titulo-principal">
						<h3><span>contato</span></h3>
						<div class="separador"></div>
						<p class="padding-lateral-plus">Fale conosco através de mensagem ou se preferir ligue e fale diretamente com nossos atendentes.</p>
					</div>

					<div class="gap-30"></div>



					<div class="framework formok">
						<form 
							id="formulario_contato"
							data-script-php="formok/contato.php"
							data-msg-sucesso="<p id='msg_sucesso_formulario_contato'><i class='ikon ikon-mail'></i><br>Mensagem Enviada</p>">
							<div class="framework box-input">
								<label class="label-input">
									<input type="text" class="input" name="nome" placeholder="Nome" data-required>
								</label>
							</div>
							<div class="framework box-input">
								<label class="label-input">
									<input type="text" class="input" name="email" placeholder="Email" data-required data-input-email>
								</label>
							</div>
							<div class="framework box-input">
								<label class="label-input">
									<textarea rows="3" class="input" name="mensagem" placeholder="Mensagem" data-required></textarea>
								</label>
							</div>
							<div class="gap-15"></div>
							<div class="framework flexbox justify-center">
								<button type="submit" class="framework botao botao-alfa botao-wide botao-block-mobile">enviar</button>
							</div>
						</form>
					</div>

					<div class="gap-90"></div>


					<div class="framework flexbox column row-sm icones-contato">
						<div class="box-icone framework txt-center">
							<i class="ikon ikon-comments-line"></i>
							<h4>telefone</h4>
							<a><?php echo $telefoneFixo ?></a>
							<a><?php echo $telefoneMobile ?></a>
						</div>
						<div class="box-icone framework txt-center">
							<i class="ikon ikon-user-edit"></i>
							<h4>email</h4>
							<a><?php echo $email ?></a>
							
						</div>
						<div class="box-icone framework txt-center">
							<i class="ikon ikon-pin-map-3"></i>
							<h4>endereço</h4>
							<address>
								<?php echo $endereco ?>
							</address>
						</div>
						
					</div>
				</div> <!-- fim .box-info-sobre-contato -->



				
				<!-- instafeed -->
				<ul id="instagram_feed_novidades" class="framework lista lista-inline">

				</ul>



				<div id="box_mapa">
					<!-- 
						latitude e longitude estão na url do google maps
						o link é a própria url inteira basta copiar e colar em data-link-google-maps logo abaixo;
					-->
					<div 
						id="mapa_google" 
						class="framework mapa-google" 
						data-latitude="<?php echo $latitude ?>" 
						data-longitude="<?php echo $longitude ?>" 
						data-zoom="<?php echo $zoom ?>"
						data-link-google-maps="<?php echo $linkGoogleMaps ?>">
					</div>
				</div>
				<!-- Mapa Google -->
				<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlm5fWCN7bM1FmdugKR9rByUXX6_HrFtQ&amp;sensor=false"></script>
			</div> <!-- fim .flex-col-12.flex-col-md-6 -->
		</div>
	</div>
</section>
	
<a href="http://www.denvemarketing.com.br/" class="framework esconder">Denve Marketing</a>

<?php require_once '___footer.php';?>
</body>
</html>