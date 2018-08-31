$(function(){!function a(){var a=$("#preloader");"true"==a.attr("data-cookie-preloader")?a.delay(600).fadeOut(500):a.delay(3e3).fadeOut(600)}(),function e(){var e=$("#contador"),a=e.attr("data-dia"),t=e.attr("data-mes"),n=e.attr("data-ano");t="01"==t?"January":"02"==t?"February":"03"==t?"March":"04"==t?"April":"05"==t?"May":"06"==t?"June":"07"==t?"July":"08"==t?"August":"09"==t?"September":"10"==t?"October":"11"==t?"November":"December";var d=t+" "+a+", "+n+" 12:00:00";$(".countdown").countdown({date:d,render:function(a){$(this.el).html("<div>"+this.leadingZeros(a.days,2)+" <span>dias</span></div><div>"+this.leadingZeros(a.hours,2)+" <span>horas</span></div><div>"+this.leadingZeros(a.min,2)+" <span>min</span></div><div>"+this.leadingZeros(a.sec,2)+" <span>seg</span></div>")}})}()});



$(function(){
	/// INSTAGRAM FEED NOVIDADES
	////////////////////////////////////
	if($('#instagram_feed_novidades').length > 0){
		var user_id = 4025712873;
		var user_token = '4025712873.52b5fd8.97ca58767dc34675a60a907e5534f26e';
		var id_box_instgram_feed = 'instagram_feed_novidades';
		var template_instagram_feed = '<li>' 
		                                  + '<a href="{{link}}" target="_blank">'
		                                  	+ '<i class="ikon ikon-poker-heart"></i>'
		                                  	+ '<span>{{model.likes.count}}</span>' 
		                                	+ '<img src="{{image}}">' 
		                                  + '</a>' 
		                                + '</li>';
		var feed = new Instafeed({
		  get: 'user',
		  userId: user_id,
		  accessToken: user_token,
		  resolution: 'standard_resolution',
		  target: id_box_instgram_feed,
		  template: template_instagram_feed,
		  limit: 4,
		  sortBy: 'most-recent',
		  after: function () {},
		});
		feed.run();
	}
});