// Isotope activation js codes




$(document).ready(function(){
    
    
    
    $(".pic-size").load(function(){
        
        $(".pic-size").height(function(){
        return $(this).parent().height();
        });
        
        $(".pic-size").width(function(){
        return $(this).parent().width();
        });
        
        $(".text-width").width(function(){
        return $(this).parent().width();
        });
    });
      
    /*
        $(".pic-size").width(function(){
        return $(this).parent().width();
        });
      
        $(".text-width").width(function(){
        return $(this).parent().width();
        });
    */
    
    
    
    //only for slide in main page

			//hide all image
            $("#slider img:gt(0)").hide();
        

			setInterval(function(){

				//get the current img- it is the visible one
				var current = $('#slider img:visible');

				//get immediates next image after the current if exist
				//otherwise find the fast one
				var next = current.next().length ? current.next() : $('#slider img:eq(0)');

				//hide the current image
				current.fadeOut(2000);
				//show the next one
				next.fadeIn(2000);

			}, 9000);
    
    
    
    
    // Only for Changeing Image text.. 

            $("#header_text .shopping-text:gt(0)").hide();

			setInterval(function(){

				//get the current img- it is the visible one
				var current = $('#header_text .shopping-text:visible');

				//get immediates next image after the current if exist
				//otherwise find the fast one
				var next = current.next().length ? current.next() : $('#header_text .shopping-text:eq(0)');

				//hide the current image
				current.fadeOut(1000);
				//show the next one
				next.fadeIn(1500);

			}, 9000);                
                

       
   
     // Activate isotope in container
 
    $(".protfolio-item").isotope({
        itemSelector: '.single-item',
        layoutMode: 'fitRows',
    });
    
    // Add isotope click function
    
    $('.default-nav li').click(function(){
        $(".default-nav li").removeClass("active");
        $(this).addClass("active");
 
        var selector = $(this).attr('data-filter');
        $(".protfolio-item").isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false,
            }
        });
        return false;
    });
    
 //$("img").elevateZoom({scrollZoom : true});
    
    
    //initiate the plugin and pass the id of the div containing gallery images 
    $("#zoom_09").elevateZoom({
        gallery : "gallery_09", 
        galleryActiveClass: "active" 
    });
    
    $("#select").change(function(e){
        var currentValue = $("#select").val(); 
        
        if(currentValue == 1){
            smallImage = 'Resourse/img/img-1-small.jpg'; 
            largeImage = 'hResourse/img/img-1-big.jpg'; 
        } 
        if(currentValue == 2){
            smallImage = 'Resourse/img/img-2-small.jpg'; 
            largeImage = 'Resourse/img/img-2-big.jpg'; 
        }
     
    
    // Example of using Active Gallery 
        
    $('#gallery_09 a').removeClass('active').eq(currentValue-1).addClass('active');	
        var ez = $('#zoom_09').data('elevateZoom');	ez.swaptheimage(smallImage, largeImage); 
    }); 
    
    
});