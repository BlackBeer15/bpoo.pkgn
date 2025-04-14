$(document).on('click', '#tapWebConf', function(){
	var conf = $('#conferences');
	var kval = $('#kvaliph');
	var abil = $('#abilimpiks');
	var webconf = $('#webConferences');
	
	if (webconf.css('display')=='none') {
		conf.css({'display':'none'});
		kval.css({'display':'none'});
		abil.css({'display':'none'});
		webconf.css({'display':'block'});
	}
});

$(document).on('click', '#tapConf', function(){
	var conf = $('#conferences');
	var kval = $('#kvaliph');
	var abil = $('#abilimpiks');
	var webconf = $('#webConferences');
	
	if (conf.css('display')=='none') {
		kval.css({'display':'none'});
		abil.css({'display':'none'});
		webconf.css({'display':'none'});
		conf.css({'display':'block'});
	}
});

$(document).on('click', '#tapAbilim', function(){
	var conf = $('#conferences');
	var kval = $('#kvaliph');
	var abil = $('#abilimpiks');
	var webconf = $('#webConferences');
	
	if (abil.css('display')=='none') {
		kval.css({'display':'none'});
		webconf.css({'display':'none'});
		conf.css({'display':'none'});
		abil.css({'display':'block'});
	}
});