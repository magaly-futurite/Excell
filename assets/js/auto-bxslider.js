 jQuery(document).ready(function ($) {
    if (screen.width>480) {
       

        // launch bxslider
        slider = $('.bxslider').bxSlider({
            auto: true,
            slideWidth: 1200,
            minSlides: 3,
            maxSlides: 3,
            slideMargin: 10
        });

    }else if (screen.width<479){
    	
    	

        // launch bxslider
        slider = $('.bxslider').bxSlider({
            auto: true,
            slideWidth: 1200,
            minSlides: 1,
            maxSlides: 1,
            slideMargin: 10
        });

    
    }
})


function mostrar(){
	document.getElementById('oculto').style.display = 'block';
}
function ocultar(){
	document.getElementById('oculto').style.display = 'none';
}
function gdlCamionetas(){
	document.getElementById('camionetasgdl').style.display = 'block';
}
function ocultarCaminetas(){
	document.getElementById('camionetasgdl').style.display = 'none';
}
function autoMty(){
	document.getElementById('automty').style.display = 'block';
}
function ocultarAutoMty(){
	document.getElementById('automty').style.display = 'none';
}
function camionetaMty(){
	document.getElementById('camionetamty').style.display = 'block';
}
function ocultarCamionetaMty(){
	document.getElementById('camionetamty').style.display = 'none';
}