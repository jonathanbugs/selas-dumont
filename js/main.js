$(document).ready(function(){
	placeHolder();
	imgRetina();
	scrollPage();
	abrirMenu();
	modalLojas();
});

var $window = $(window);
var windowHeight = $window.height();
var windowWidth = $window.width();

$(window).on('resize', function(){
	windowHeight = $window.height();
	windowWidth = $window.width();

	if(windowWidth > 1023){
		$('#menuUl').show();
	} else {
		$('#menuUl').hide();
		$('#btMenuMobile'). removeClass('btMenuMobileAberto');
	}
});


/* =========
   PLACEHOLDER
   ========= */
function placeHolder(){
	$('.input, .textarea').on('keyup',function(){
		if($(this).val()===''){ $(this).prev().show(); }
	}).on('keydown',function(){
		$(this).prev().hide();
	}).on('change',function(){
		if ($(this).val()===''){ $(this).prev().show(); } else { $(this).prev().hide(); }
	}).on('focusout',function(){
		$(this).prev().fadeTo(0,1);
		if ($(this).val()===''){ $(this).prev().show(); $(this).parent().find('.erro').show(); } else { $(this).prev().hide(); $(this).parent().find('.erro').hide(); }
	}).on('focusin',function(){
		if ($(this).val()===''){ $(this).prev().show(); $(this).prev().fadeTo(0,0.3); } else { $(this).prev().hide(); }
	}).each(function(){
		if ($(this).val()===''){ $(this).prev().show(); } else { $(this).prev().hide(); }
	});
}


/* =========
   RETINA
   ========= */
function imgRetina(){
	Retina = function() {
		return {
			init: function(){
				var pixelRatio = !!window.devicePixelRatio ? window.devicePixelRatio : 1;
				if (pixelRatio > 1) {
					$("img").each(function(idx, el){
						el = $(el);
						if (el.attr("data-src2x")) {
							el.attr("src", el.attr("data-src2x"));
						}
					});
				}
			}
		};
	}();
	Retina.init();
}


/* =========
   SCROOL
   ========= */
function scrollPage(){
	$("#menuUl").localScroll({
		duration: 1000,
		//easing: 'easeInOutExpo',
		offset: {
			top: 0
		},
		hash: false
	});
}



/* ============
   MENU MOBILE
   ============ */
function abrirMenu(){
	var divMenu = $('#menuUl');
	
	$('#btMenuMobile').on('click', function() {
		var ele = $(this);
		ele.toggleClass('btMenuMobileAberto');
		
		if (divMenu.is(":hidden")) {
			divMenu.show();
		}  else {
			divMenu.hide();
		}
	});
}


/* =========
   MODAL LOJAS
   ========= */
function modalLojas(){
	$(".ondeComprarLink").fancybox({
		fitToView: false,
		padding: 0,
		scrolling: "visible"
	});
}
