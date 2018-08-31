<?php require_once '___config.php' ?>

<!-- MOBILE METAS -->
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="<?php echo $corBarraMobile ?>">
<!-- //////////////////////////////// -->


<!-- GERAL METAS -->
<meta name="author" content="<?php echo 'DENVE Marketing ' . date('Y') ?>">
<meta name="generator" content="Sublime Text 3">
<meta name="rating" content="general">
<meta name="robots" content="all">
<!-- //////////////////////////////// -->


<!-- FACEBOOK METAS -->
<meta property='og:url' content='<?php echo $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] ?>'/>
<meta property='og:title' content='<?php echo $tagTitle ?>'>
<meta property='og:description' content='<?php echo $tagDescription ?>'>
<meta property='og:type' content='website'>
<!-- ///////////////////////// -->




<!-- VERIFICAÇÃO GOOGLE -->
<meta name="google-site-verification" content="<?php echo $codigoVerificacaoGoogle ?>" />
<!-- //////////////////////////////// -->


<!-- GOGLE ANALYTICS -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $idGoogleAnalyticsUrl ?>"></script>
<script>
  	window.dataLayer = window.dataLayer || [];
  	function gtag(){dataLayer.push(arguments)};
  	gtag('js', new Date());
	gtag('config', <?php echo $idGoogleAnalyticsJs ?>);
</script>
<!-- //////////////////////////////// -->




<!-- Favicon -->
<link rel="icon" type="image/png" href="imagens/logomarca/favicon.png<?php refresh() ?>" />
<!-- //////////////////////////////// -->




<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- //////////////////////////////// -->


<?php
	// FUNÇÃO  RESPONSÁVEL POR ATUALIZAR NOVAS IMAGENS
	function refresh(){
		if(DEBUG){
			echo '?' . md5(mt_rand(1,1000000));
		}
	}


	// CLASSE RESPONSÁVEL POR CRIAR MÉTODO DE REFRESH DOS ARQUIVOS CARREGADOS NA CLASSE ABAIXO
	class RefreshArquivos {

	 	protected function refresh_arquivos(){
	 		if(DEBUG){
	 			return '?' . md5(mt_rand(1,1000000));
	 		}
	 	}
	}

	
	// CLASSE RESPONSÁVEL POR CARREGAR OS ARQUIVOS DAS PASTAS css E js, ALÉM DE MINIFICAR E SALVAR O CSS COMPILADO;
	class ManageArquivos extends RefreshArquivos {

		public function carregar_CSS($pastaCSS){
	 		foreach(glob($pastaCSS) as $arquivo){
	 			echo '<link rel="stylesheet" href="'. $arquivo . $this->refresh_arquivos() . '">' . "\n";
	 		}
	 	}

	 	public function carregar_JAVASCRIPT($pastaJS){
	 		foreach(glob($pastaJS) as $arquivo){
	 			echo '<script src="' . $arquivo . $this->refresh_arquivos() . '"></script>' . "\n";
	 		}
	 	}

	 	//RESPONSÁVEL POR FAZER O require_once() DE ARQUIVOS NO PROCESSO DE DESENVOLVIMENTO DO SITE
	 	public function require_arquivo($caminho){
	 		if(DEBUG){
	 			require_once $caminho;
	 		}
	 	}


	 	public function compilar_CSS(){
			if(DEBUG){
				if(isset($_POST['css_compilado'])){
					// aqui criamos o arquivo ___css-compilado.css
					$arquivo_css_compilado = fopen("___css-compilado.css", "wa+");
					// conteudo do textarea do formulario de css compilado;
					$css_pronto = $_POST['css_compilado'];

					// Remove comments
					$css_pronto = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $css_pronto);

					// Remove space after colons
					$css_pronto = str_replace(': ', ':', $css_pronto);

					// Remove whitespace
					$css_pronto = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $css_pronto);

					// Replace opacity: 0.6 with opacity:.6
					$css_pronto = preg_replace('#\b0+\.(\d+)#', '.$1', $css_pronto);

					// Remove the last semi–colon(;) and replace multiple semi–colon(s) with a semi–colon
					$css_pronto = preg_replace('#;+([;\}])#', '$1', $css_pronto);

					fwrite($arquivo_css_compilado, $css_pronto);
					fclose($arquivo_css_compilado);
				}


			}
			// se não estiver em desenvolvimento a tag do css compilado é adicionada ao <head>
			if(!DEBUG){
				echo '<link rel="stylesheet" href="___css-compilado.css">';
			}
		}
	}

	$ManageArquivos = new ManageArquivos();
	// carregar os arquivos .css
	$ManageArquivos->carregar_CSS('fonts/*.css');
	$ManageArquivos->carregar_CSS('css/*.css');
	// fazer o require_once de arquivos .php referentes ao css de desenvolvimento do site
	$ManageArquivos->require_arquivo('css/style.php');
	$ManageArquivos->require_arquivo('css/responsive.php');
	// minifica e salva o css principal em ___css-compilado.css
	$ManageArquivos->compilar_CSS();
?>




<?php if (DEBUG) { ?>
<form id="formulario_css_compilado" class="framework esconder">
    <textarea name="css_compilado" rows="10" class="form-control" ></textarea>
    <button type="submit">salvar</button>
</form>


<script>
    (function (){
        var formulario_css_compilado = $('#formulario_css_compilado');
        var css = $('style').text();
        var textarea_css = formulario_css_compilado.find('textarea');
            textarea_css.val(css);
            setTimeout(function(){
                formulario_css_compilado.find("button[type=submit]").click();
            }, 1000);
            formulario_css_compilado.submit(function(e){
            e.preventDefault();
            var dadosFormulario = $(this).serialize();
                $.ajax({
                    type:'POST',
                    url: '___head-geral.php',
                    data: dadosFormulario,
                    dataType:'html',
                });
            });
    })();
</script>     
<?php } ?>


