/* Dark mode */

const btnSwitch = document.querySelector('#switch');
const var1 = document.querySelector('#menu');

btnSwitch.addEventListener('click', () => {
 document.body.classList.toggle('dark');
 btnSwitch.classList.toggle('active');
 var1.classList.toggle("navbar-dark");

 if(document.body.classList.contains('dark')){
    localStorage.setItem('dark-mode', 'true');
 } else {
    localStorage.setItem('dark-mode', 'false');
 }
});


if(localStorage.getItem('dark-mode') === 'true'){
    document.body.classList.add('dark');
    btnSwitch.classList.add('active');
    var1.classList.add("navbar-dark");
}else{
    document.body.classList.remove('dark');
    btnSwitch.classList.remove('active');
    var1.classList.remove("navbar-dark");
}

/* Boton ir arriba */

$(document).ready(function(){

	$('#ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 400);
	});

	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('#ir-arriba').slideDown(300);
		} else {
			$('#ir-arriba').slideUp(300);
		}
	});

});


/* Barra de navegacion */

$(window).scroll(function() {
    if ($("#menu").offset().top > 30) {
        $("#menu").addClass("shadow-lg p-3 mb-5 cs rounded");
    } else {
      $("#menu").removeClass("shadow-lg p-3 mb-5 cs rounded");
    }
});

$(document).ready(function(){
    $(window).scroll(function(){
        var barra = $(window).scrollTop();
        var posicion = barra * 0.50;

        $('body').css({
            'background-position': '0 -' + posicion + 'px'
        });
    });
});


