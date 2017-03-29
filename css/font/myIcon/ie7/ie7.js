/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referencing this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'assignment\'">' + entity + '</span>' + html;
	}
	var icons = {
		'ddfj-addicon': '&#xe902;',
		'ddfj-bellicon': '&#xe903;',
		'ddfj-charticon': '&#xe904;',
		'ddfj-downloadicon': '&#xe905;',
		'ddfj-menuicon': '&#xe906;',
		'ddfj-msgicon': '&#xe907;',
		'ddfj-ordericon': '&#xe908;',
		'ddfj-reporticon': '&#xe909;',
		'ddfj-usericon': '&#xe90a;',
		'ddfj-crossicon': '&#xe900;',
		'ddfj-download2icon': '&#xe901;',
		'ddfj-uploadicon': '&#xe90c;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/ddfj-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
