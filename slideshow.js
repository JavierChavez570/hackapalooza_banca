jQuery(document).ready(function($) {
	"use strict";
	jQuery(".slideshow").vegas({
		transitionDuration: 2000,
		slides: [
			{src: "http://www.yorokobu.es/wp-content/uploads/libertad.jpg"},
			{src: "https://altonivel-impresionesaerea.netdna-ssl.com/assets/images/Estructura_V3/Consultoria/Recursos_Humanos/GenYReten.gif"},
			{src: "https://www.reasonwhy.es/sites/default/files/millennials-centennials-reasonwhy.es_.jpg"},
			{src: "http://cdn2.upsocl.com/wp-content/uploads/immujer/2015/04/free4.jpg"}
		]
	});
});