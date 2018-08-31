<style>

@media (max-width: 400px){
	/* fix altura do bg-fixo devido a rolagem da barra de endereço no mobile*/
	div.bg-fixo {
		height: 100vh;
	}
	/*fix padding top contador*/
	section.principal .box-fixo-logo-contador .box-countdown .countdown div:nth-child(3),
	section.principal .box-fixo-logo-contador .box-countdown .countdown div:nth-child(4) {
		padding-top: 25px;
	}
}




@media (max-width: 767px){
	section.principal .box-info-sobre-contato .icones-contato .box-icone {
		width: 100%;
	}
	/*fix padding top box icone*/
	section.principal .box-info-sobre-contato .icones-contato .box-icone:not(:first-child) {
		padding-top: 65px;
	}

	/*instafeed*/
	ul#instagram_feed_novidades li {
		width: 50%;
		padding: 0;
	}
}



@media (max-width: 992px){
	/*box fixo logo contador*/
	section.principal .box-fixo-logo-contador {
		position: relative;
		width: 100%;
		height: auto;
		padding: 40px 0;
	}


	
	/*contador*/
	section.principal .box-fixo-logo-contador .box-countdown .countdown div {
		font-size: 40px;
	}
	section.principal .box-fixo-logo-contador .box-logomarca img {
		width: 240px;
	}


	/*frase do box fixo logo contador*/
	section.principal .box-fixo-logo-contador .box-frase-breve h1 {
		font-size: 20px;
	}
	section.principal .box-fixo-logo-contador .box-frase-breve h1 span {
		padding-top: 10px;
	}
	section.principal .box-fixo-logo-contador .box-frase-breve p {
		padding: 60px 0 0 0;
		font-size: 13px;
	}


	


	/*box sobre-formulario*/
	section.principal .box-info-sobre-contato {
		padding: 70px 15px 30px 15px;
	}


	/*titulos do box sobre-formulario*/
	div.box-titulo-principal h2,
	div.box-titulo-principal h3 {
		font-size: 21px;
	}
	div.box-titulo-principal p.padding-lateral-plus {
		padding: 0;
	}
}











@media (min-width: 993px) and (max-width: 1570px) {
	/*box fixo logo contador*/
	section.principal .box-fixo-logo-contador {
		position: fixed;
		width: 50%;
		height: 100vh;
		padding-top: 60px;
	}

	/*fonte contador*/
	section.principal .box-fixo-logo-contador .box-countdown .countdown div {
		width: 50px;
		margin:0 20px;
		font-size: 27px;
	}

	section.principal .box-fixo-logo-contador .box-logomarca img {
		width: 240px;
	}

	
	/*frase do box fixo logo contador*/
	section.principal .box-fixo-logo-contador .box-frase-breve {
		padding: 10px 0 10px 0;
	}
	section.principal .box-fixo-logo-contador .box-frase-breve h1 {
		font-size: 22px;
	}
	section.principal .box-fixo-logo-contador .box-frase-breve p {
		padding: 20px 50px 0 50px;
		font-size: 14px;
	}





	/*box sobre-formulario*/
	section.principal .box-info-sobre-contato {
		padding: 70px 60px 30px 60px;
	}

	/*titulos do box sobre-formulario*/
	div.box-titulo-principal p.padding-lateral-plus {
		padding: 0 60px;
	}

	/*fix tamanho fonte links box icones*/
	section.principal .box-info-sobre-contato .icones-contato .box-icone address,
	section.principal .box-info-sobre-contato .icones-contato .box-icone a {
		font-size: 12px;
	}
}
</style>

