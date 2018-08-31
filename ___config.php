<?php  
	setcookie('cookie_preloader', 'cookie_preloader', time() + (86400 * 90), "/"); // 90 dias;
	$cookie_preloader = '';
	if(isset($_COOKIE['cookie_preloader'])){
		$cookie_preloader = 'true';
	} else {
		$cookie_preloader = 'false';
	}
	session_start();



	// CRIAR ROBOTS.TXT
	(function(){
		$arquivoRobots = fopen('robots.txt', 'wa+');
		fwrite($arquivoRobots, 'User-agent: *

Allow: /
Sitemap: https://' . $_SERVER['SERVER_NAME'].'/sitemap.txt');
		fclose($arquivoRobots);
	})();



	// CRIAR SITEMAP.TXT
	(function(){
		$arquivoRobots = fopen('sitemap.txt', 'wa+');
		fwrite($arquivoRobots, 'https://' . $_SERVER['SERVER_NAME'] . '/');
		fclose($arquivoRobots);
	})();











	/// CONFIGURAÇÕES DO TEMPLATE
	///////////////////////////////////////////


	// TAGS HEAD
	$tagTitle = "INUP Brasil Sandálias";
	$tagDescription = "Desde 2014, a INUP Brasil traz ao mercado sandálias de design inovador! Buscamos sempre acompanhar as grandes tendências da moda no cenário nacional e internacional, desenvolvemos nossas sandálias com material nobre, durável e acima de tudo confortável. Dispomos de linha de produção moderna além de contar com matérias-primas com porosidade e densidade específica, proporcionando sensação de relaxamento em toda a região plantar, estimulando a circulação sanguínea, fazendo pés e pernas descansarem. Nossa base aerada realiza um processo contínuo de esfoliação e auto ventilação, colaborando para que os pés transpirem sem causar incômodo. Preocupados com a sua segurança nossas sandálias também oferecem 30% a mais de antiderrapante comparado a um calçado normal, ela também é própria para ambientes molhados não deixando escorregar! Conheça nosso produto, seja um revendedor. INUP Brasil, bonito aos olhos, confortável aos pés!";
	$corBarraMobile = '#CD3259';


	// GOOGLE WEBMASTER E ANALYTICS
	$idGoogleAnalyticsUrl = 'UA-109411717-1';
	$idGoogleAnalyticsJs = "'UA-109411717-1'"; 
	$codigoVerificacaoGoogle = 'b7HvQwi4jGsbnlZe1RYsLSmleXAFN93Un3JBb80kYyo';


	// CONTADOR
	$diaContador = '8';
	$mesContador = '01';
	$anoContador = '2018';


	// REDES SOCIAIS
	$urlFacebook = 'https://www.facebook.com/inupbrasil/';
	$urlInstagram = 'https://www.instagram.com/inupbrasil/';
	$urlWhatsapp = '';




	// ICONE PRELOADER
	$iconePreloader = '';



	// TEXTO APRESENTAÇÃO
	$tituloTextoApresentacao = 'sobre a inup brasil';
	$textoApresentacao = "Desde 2014, a INUP Brasil traz ao mercado sandálias de design inovador! Buscamos sempre acompanhar as grandes tendências da moda no cenário nacional e internacional, desenvolvemos nossas sandálias com material nobre, durável e acima de tudo confortável. Dispomos de linha de produção moderna além de contar com matérias-primas com porosidade e densidade específica, proporcionando sensação de relaxamento em toda a região plantar, estimulando a circulação sanguínea, fazendo pés e pernas descansarem. Nossa base aerada realiza um processo contínuo de esfoliação e auto ventilação, colaborando para que os pés transpirem sem causar incômodo. Preocupados com a sua segurança nossas sandálias também oferecem 30% a mais de antiderrapante comparado a um calçado normal, ela também é própria para ambientes molhados não deixando escorregar! Conheça nosso produto, seja um revendedor. INUP Brasil, bonito aos olhos, confortável aos pés!";



	// TELEFONES, EMAIL E ENDEREÇO;
	$telefoneFixo = '47 3311.5950 <br> 47 991.982.005';
	$telefoneMobile = '';
	$endereco = 'Av. Brasil nº 1521 . Centro <br> Baln. Camboriú . Santa Catarina';
	$email = 'contato@inupbrasil.com.br';



	// MAPA GOOGLE
	$latitude = '-26.9876966';
	$longitude = '-48.6340037';
	$zoom = '17';
	$linkGoogleMaps = "https://www.google.com.br/maps/place/Av.+Brasil,+1521+-+Centro,+Balne%C3%A1rio+Cambori%C3%BA+-+SC/@-26.9876918,-48.6361924,17z/data=!4m13!1m7!3m6!1s0x94d8b606aafbad99:0x175ed7c516a912f3!2sAv.+Brasil,+1521+-+Centro,+Balne%C3%A1rio+Cambori%C3%BA+-+SC!3b1!8m2!3d-26.9876966!4d-48.6340037!3m4!1s0x94d8b606aafbad99:0x175ed7c516a912f3!8m2!3d-26.9876966!4d-48.6340037";


	define('DEBUG', true);
?>