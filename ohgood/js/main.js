$(function(){
    
    var $con = $('#container')
       ,$sec1 = $con.find('#section1')
       ,$sec1List = $sec1.find('.list')
       ,$sec3 = $con.find('#section3')
       ,$sec3List = $sec3.find('.list')
       ,$win = $(window)
    
    var winWidth = $win.width()

    if(winWidth >= 769) {
        var slider = $sec1List.bxSlider({
            maxSlides : 3,
            minSlides : 3,
            moveSlides : 1,
            slideWidth: 500,
            slideMargin: 20
        }) // section1
        
        
        var slider = $sec3List.bxSlider({
            maxSlides : 4,
            minSlides : 4,
            moveSlides : 1,
            slideWidth: 500,
            slideMargin: 20,
            auto: true,
            pager: false,
            controls: false,
            speed: 500
        }) // secion3
        
    } // 769~
    
    if(winWidth < 769) {
        var slider = $sec1List.bxSlider({
            maxSlides : 2,
            minSlides : 2,
            moveSlides : 1,
            slideWidth: 500,
            slideMargin: 10,
            controls: false,
            auto: true,
            speed: 500
        }) //section1
    } // ~768
    
    if(winWidth > 640 && winWidth < 769){
        var slider = $sec3List.bxSlider({
            maxSlides : 3,
            minSlides : 3,
            moveSlides : 1,
            slideWidth: 500,
            slideMargin: 10,
            auto: true,
            pager: false,
            controls: false,
            speed: 500
        }) // secion3
    } //641 ~ 768
    
    if(winWidth <= 640) {
        var slider = $sec3List.bxSlider({
            maxSlides : 2,
            minSlides : 2,
            moveSlides : 1,
            slideWidth: 500,
            slideMargin: 10,
            auto: true,
            pager: false,
            controls: false,
            speed: 500
        }) //section3
    } // ~640

    $win.resize(function(){

        var winWidth = $win.width()
        
        if(winWidth >= 769) {
            
            $sec1List.reloadSlider({
                maxSlides : 3,
                minSlides : 3,
                moveSlides : 1,
                slideWidth: 500,
                slideMargin: 20
            }) // section1
            
            $sec3List.reloadSlider({
                maxSlides : 4,
                minSlides : 4,
                moveSlides : 1,
                slideWidth: 500,
                slideMargin: 20,
                auto: true,
                pager: false,
                controls: false,
                speed: 500
            }) // section3
            
        } // 769~
        
        if(winWidth < 769) {
            $sec1List.reloadSlider({
                maxSlides : 2,
                minSlides : 2,
                moveSlides : 1,
                slideWidth: 500,
                slideMargin: 10,
                controls: false,
                auto: true,
                speed: 500
            }) // secrion1
        } // ~768
        
        if(winWidth > 640 && winWidth < 768) {
            $sec3List.reloadSlider({
                maxSlides : 3,
                minSlides : 3,
                moveSlides : 1,
                slideWidth: 500,
                slideMargin: 10,
                auto: true,
                pager: false,
                controls: false,
                speed: 500
            }) // secrion3
        } // 641 ~ 768
        
        if(winWidth <= 640){
            $sec3List.reloadSlider({
                maxSlides : 2,
                minSlides : 2,
                moveSlides : 1,
                slideWidth: 500,
                slideMargin: 10,
                auto: true,
                pager: false,
                controls: false,
                speed: 500
            }) // secrion3
        } // ~640
        
        
    })
    
    
})