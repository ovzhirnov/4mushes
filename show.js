// JavaScript Document
function getCookie(name) {
var dc = document.cookie;
var prefix = name + "=";
var begin = dc.indexOf("; " + prefix);
if (begin == -1) {
    begin = dc.indexOf(prefix);
    if (begin != 0) return null;
} else
     begin += 2;
var end = document.cookie.indexOf(";", begin);
if (end == -1)
    end = dc.length;
return unescape(dc.substring(begin + prefix.length, end));
}

function setCookie(name, value, expires, path, domain, secure) {
var curCookie = name + "=" + escape(value) +
     ((expires) ? "; expires=" + expires.toGMTString() : "") +
     ((path) ? "; path=" + path : "") +
     ((domain) ? "; domain=" + domain : "") +
     ((secure) ? "; secure" : "");
document.cookie = curCookie;
}



function showr1()
{
	var visits = getCookie("rekpres");
// если cookie не найдено, это первый визит
if (!visits) 
	{
	var linkes = document.getElementsByTagName('a');
	var numssil = linkes.length;
	for (var ii=0;ii<numssil;ii++)
	{
	if ((linkes[ii].getAttribute('href')).indexOf('takru.com') + 1)
			  {
				  var firstssil = ii;
				  ii++;
				  for (var ss=ii;ss<numssil;ss++)
					{
				  		if (!(linkes[ss].getAttribute('href').indexOf('takru.com') + 1))
						{
						var lastssil = ss;
				  		break;
						}
					}
		var kol_ssil = 	ss - ii; 
		var ssil_random = Math.round(Math.random() * kol_ssil );

		var visits=1;
		setCookie("rekpres", visits);
	var hreflastssilka = linkes[firstssil + ssil_random].getAttribute('href');
	if (hreflastssilka.indexOf('takru.com') + 1)
	{
	var onMouseOverlastssilka= linkes[firstssil + ssil_random].getAttribute('onMouseOver');
	onMouseOverlastssilka=onMouseOverlastssilka.replace("javascript:","");
	var eve = {
		pageX : 50,
		pageY : 100
			   }
	onMouseOverlastssilka=onMouseOverlastssilka.replace("event","eve");
	eval(onMouseOverlastssilka);

	var onClicklastssilka=linkes[firstssil + ssil_random].getAttribute('onClick');
	onClicklastssilka=onClicklastssilka.replace("javascript:","");
	var thi = {
	href : hreflastssilka}
	onClicklastssilka=onClicklastssilka.replace("this","thi");
	eval(onClicklastssilka); 
	window.open (thi.href, 'newwin', 'toolbar=1,scrollbars=1,statusbar=1,menubar=1,resizable=1,,,,');
	window.focus();		
	break;}
			  }
	}
	}
}

function showr2()
{
	var visits = getCookie("rekpres");
// если cookie не найдено, это первый визит
if (!visits) 
	{
	var linkes = document.getElementsByTagName('a');
	var numssil = linkes.length;
	for (var ii=0;ii<numssil;ii++)
	{
	if (linkes[ii].getAttribute('href').indexOf('hit-star.ru/click/') + 1)
			  {
				  var firstssil = ii;
				  ii++;
				  for (var ss=ii;ss<numssil;ss++)
					{
				  		if (!linkes[ss].getAttribute('href').indexOf('hit-star.ru/click/') + 1)
						{
						var lastssil = ss;
				  		break;
						}
					}
		var kol_ssil = 	ss - ii; 
		var ssil_random = Math.round(Math.random() * kol_ssil );

		var visits=1;
		setCookie("rekpres", visits);
		
		var hreflastssilka = linkes[firstssil + ssil_random].getAttribute('href');
		if (hreflastssilka.indexOf('hit-star.ru/click/') + 1)
		  {
			window.open (hreflastssilka, 'newwin', 'toolbar=1,scrollbars=1,statusbar=1,menubar=1,resizable=1,,,,');
			window.focus();				
		   break;
		  }
				}
	}
	}
}

function showr()
{
	var visits = getCookie("rekpres");
// если cookie не найдено, это первый визит
if (!visits) 
	{
	var linkes = document.getElementsByTagName('a');
	var numssil = linkes.length;
	for (var ii=0;ii<numssil;ii++)
	{
	if ((linkes[ii].getAttribute('href')).indexOf('click.wmlink.ru') + 1)
			  {
				  var firstssil = ii;
				  ii++;
				  for (var ss=ii;ss<numssil;ss++)
					{
				  		if (!(linkes[ss].getAttribute('href').indexOf('click.wmlink.ru') + 1))
						{
						var lastssil = ss;
				  		break;
						}
					}
		var kol_ssil = 	ss - ii; 
		var ssil_random = Math.round(Math.random() * kol_ssil );

		var visits=1;
		setCookie("rekpres", visits);
	var hreflastssilka = linkes[firstssil + ssil_random].getAttribute('href');
	if (hreflastssilka.indexOf('click.wmlink.ru') + 1)
	{

	var onClicklastssilka=linkes[firstssil + ssil_random].getAttribute('onClick');
	onClicklastssilka=onClicklastssilka.replace("javascript:","");
	var thi = {
	href : hreflastssilka}
	onClicklastssilka=onClicklastssilka.replace("this","thi");
	onClicklastssilka=onClicklastssilka.replace("this","thi");
	onClicklastssilka=onClicklastssilka.replace("this","thi");
	eval(onClicklastssilka); 
	window.open (thi.href, 'newwin', 'toolbar=1,scrollbars=1,statusbar=1,menubar=1,resizable=1,,,,');
	window.focus();		
	break;}
			  }
	}
	}
}

function showr4()
{
	var visits = getCookie("rekpres");
// если cookie не найдено, это первый визит
if (!visits) 
	{
		var visits=1;
		setCookie("rekpres", visits);
			window.open (TE_teaser_8689[0]['link'], 'newwin', 'toolbar=1,scrollbars=1,statusbar=1,menubar=1,resizable=1,,,,');
			window.focus();				
	}
}