$(function(){
///// PRELOADER
/////////////////////////////////////
(function(){
	var preloader = $('#preloader');
	var data_preloader = preloader.attr('data-preloader');
	console.log(data_preloader);

	if(data_preloader == 'cookie_off'){
		preloader.delay(5000).fadeOut(350);
	} else {
		preloader.fadeOut(450);
	}
})();


///// CONTADOR
/////////////////////////////////////
(function contador(){
	var contador = $('#contador');
	var dia_contador = contador.attr('data-dia');
	var mes_contador = contador.attr('data-mes');
	var ano_contador = contador.attr('data-ano');

	if(mes_contador == '01'){
		mes_contador = 'January';
	} else if(mes_contador == '02'){
		mes_contador = 'February';
	} else if(mes_contador == '03'){
		mes_contador = 'March';
	} else if(mes_contador == '04'){
		mes_contador = 'April';
	} else if(mes_contador == '05'){
		mes_contador = 'May';
	} else if(mes_contador == '06'){
		mes_contador = 'June';
	} else if(mes_contador == '07'){
		mes_contador = 'July';
	} else if(mes_contador == '08'){
		mes_contador = 'August';
	} else if(mes_contador == '09'){
		mes_contador = 'September';
	} else if(mes_contador == '10'){
		mes_contador = 'October';
	} else if(mes_contador == '11'){
		mes_contador = 'November';
	} else {
		mes_contador = 'December';
	}
	var data_entrega_projeto = mes_contador + ' ' + dia_contador + ', ' + ano_contador + ' 12:00:00';
	$('.countdown').countdown({
	    date: data_entrega_projeto,
	    render: function(data) {
	        $(this.el).html("<div>"  + this.leadingZeros(data.days, 2) + " <span>dias</span></div><div>" + this.leadingZeros(data.hours, 2) + " <span>horas</span></div><div>" + this.leadingZeros(data.min, 2) + " <span>min</span></div><div>" + this.leadingZeros(data.sec, 2) + " <span>seg</span></div>");
	    }
	});
})();


});// FIM FUNCTION PRINCIPAL

