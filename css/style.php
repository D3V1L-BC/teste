<?php
    require_once 'framework.php';
?>


<style>
/*=========================================================*/
/*======================== Preloader ======================*/
/*=========================================================*/
#preloader {
	position: fixed;
	z-index: 999999;
	width: 100%;
	height: 100%;
	background-color: #fff;
}

#preloader i.ikon {
	font-size: 50px;
}



/*=========================================================*/
/*======================== Bg Fixo ========================*/
/*=========================================================*/
div.bg-fixo {
	position: fixed;
	z-index: -1;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	background-size: cover;
	background-repeat: no-repeat;
	background-position: top center;
}



/*=========================================================*/
/*==================== Título Principal ===================*/
/*=========================================================*/
div.box-titulo-principal {

}

div.box-titulo-principal h2,
div.box-titulo-principal h3 {
	font-weight: 300;
	<?php fonte_beta() ?>
	letter-spacing: 1px;
	text-align: center;
	font-size: 26px;
}

div.box-titulo-principal h2 span,
div.box-titulo-principal h3 span {
	font-weight: 500;
	padding-left: 3px;
}

div.box-titulo-principal .separador {
	position: relative;
	width: 34px;
	height: 1px;
	left: calc(50% - 16px);
	margin: 35px 0;
	background-color: #666;
}

div.box-titulo-principal p {
	<?php justify() ?>
	<?php fonte_alfa() ?>
	font-size: 14px;
}
div.box-titulo-principal p.padding-lateral-plus {
	padding: 0 150px;
	text-align: center;
}







/*=========================================================*/
/*=================== Section Principal ===================*/
/*=========================================================*/
section.principal {
	padding: 0;
	background-color: rgba(0,0,0,0);
}


section.principal .box-fixo-logo-contador {
	position: fixed;
	width: 50%;
	height: 100vh;
	top: 0;
	left: 0;
	padding-top: 115px;
}


section.principal .box-fixo-logo-contador .box-countdown {
	position: relative;
	text-align: center;
	padding-bottom: 80px;
}
section.principal .box-fixo-logo-contador .box-countdown .countdown {
	
}
section.principal .box-fixo-logo-contador .box-countdown .countdown div {
	position: relative;
	display: inline-block;
	width: 50px;
	margin:0 35px;
	font-size: 40px;
	color: #fff;
	letter-spacing: 2px;
}
section.principal .box-fixo-logo-contador .box-countdown .countdown div span {
	display: block;
	font-weight: lighter;
	font-size: 14px;
}



section.principal .box-fixo-logo-contador .box-logomarca {
	padding-bottom: 40px;
}
section.principal .box-fixo-logo-contador .box-logomarca img {
	display: block;
	width: 280px;
	margin:0 auto;
}



section.principal .box-fixo-logo-contador .box-frase-breve {
	padding: 40px 0;
}

section.principal .box-fixo-logo-contador .box-frase-breve h1 {
	color: #fff;
	font-weight: lighter;
	letter-spacing: 5px;
	<?php fonte_beta() ?>
	font-size: 28px;
}
section.principal .box-fixo-logo-contador .box-frase-breve h1 span {
	display: block;
	font-weight: 500;
	padding-top: 5px;
}
section.principal .box-fixo-logo-contador .box-frase-breve p {
	<?php fonte_alfa() ?>
	color: #fff;
	padding: 35px 220px 0 220px;
	font-size: 14px;
}



section.principal .box-fixo-logo-contador .box-rede-social {
	
}

section.principal .box-fixo-logo-contador .box-rede-social a {
	color: #fff;
	font-size: 23px;
}

section.principal .box-fixo-logo-contador .box-rede-social a i.ikon-facebook {
	font-size: 95%;
}
























section.principal .coluna-sobre-info-contato {
	<?php hex_to_rgba('bg', '#fff', 0.85) ?>
}
section.principal .box-info-sobre-contato {
	/*border:1px solid blue;*/
	padding: 70px 120px 30px 120px;
}



section.principal .box-info-sobre-contato form#formulario_contato {
	
}

section.principal .box-info-sobre-contato form#formulario_contato .input {
	background-color: transparent;
	<?php border_solid('all', '0px', '#eee;') ?>
	<?php border_solid('bottom', '2px', '#777;') ?>
	font-size: 15px;
	padding-left: 0;
	padding-right: 0;
	<?php uppercase() ?>
}
section.principal .box-info-sobre-contato form#formulario_contato button[type="submit"] {
	font-weight: 500;
	letter-spacing: 1px;
	font-size: 15px;
}
p#msg_sucesso_formulario_contato {
	text-align: center;
	padding-top: 40px;
	<?php fonte_alfa() ?>
	font-size: 17px;
	font-weight: bold;
}



section.principal .box-info-sobre-contato .icones-contato {
	
}
section.principal .box-info-sobre-contato .icones-contato .box-icone {
	width: 33.333333%;
}
section.principal .box-info-sobre-contato .icones-contato .box-icone i.ikon {
	font-size: 40px;
}
section.principal .box-info-sobre-contato .icones-contato .box-icone h4 {
	margin: 15px 0 10px 0;
	font-size: 16px;
	font-weight: 400;
	<?php fonte_beta() ?>
	letter-spacing: 1px;
}

section.principal .box-info-sobre-contato .icones-contato .box-icone address,
section.principal .box-info-sobre-contato .icones-contato .box-icone a {
	display: block;
	font-weight: 400;
	<?php fonte_alfa() ?>
	color: #444;
	font-size: 14px;
}




/*=========================================================*/
/*======================== Instafeed ======================*/
/*=========================================================*/
ul#instagram_feed_novidades {
	margin-top: 50px;
	position: relative;
	padding-left: 5px;
}
ul#instagram_feed_novidades li {
	width: 25%;
	padding: 0;
}
ul#instagram_feed_novidades li a {
	position: relative;
	display: inline-block;
}
ul#instagram_feed_novidades li a::before {
	<?php pseudohead() ?>
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	background-color: rgba(205,50,89, 0.5);
	opacity: 0;
	<?php transition(0.5) ?>
}
ul#instagram_feed_novidades li a:hover::before {
	opacity: 1;
}
ul#instagram_feed_novidades li a i {
	position: absolute;
	top: calc(50% - 11px);
	left: calc(50% - 11px);
	font-size: 22px;
	color: #fff;
	opacity: 0;
	<?php transform('scale(0.4)') ?>
	<?php transition(0.4) ?>
}
ul#instagram_feed_novidades li a:hover i {
	opacity: 1;
	<?php transform('scale(1)') ?>
}
ul#instagram_feed_novidades li a span {
	position: absolute;
	top: 58%;
	left: calc(50% - 10px);
	font-size: 16px;
	color: #fff;
	letter-spacing: 0.04em;
	opacity: 0;
	<?php transition(0.4) ?>
}
ul#instagram_feed_novidades li a:hover span {
	opacity: 1;
}
ul#instagram_feed_novidades li a img {
	display: inline-block;
	width: 100%;
}
</style>

