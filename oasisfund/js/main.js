jq(document).ready(function() {
    
    var $visual = jq('#visual')
       ,$slider = $visual.find('.slider')
       ,$container = jq('#container')
       ,$sec1 = $container.find('.section1')
       ,$sec1List =$sec1.find('.list')
       ,$sec3 = $container.find('.section3')
       ,$slide = $sec3.find('.slide')
       ,$topBtn = jq('.top')
       ,$win = jq(window)
       ,$html = jq('html')
    
    // visual
    $slider.bxSlider({
        auto : true,
    }) // slider
    
    // section3
    $slide.bxSlider({
        controls: false
    })
    
    $win.scroll(scroll)
    function scroll(){
        var nowScroll = $win.scrollTop()
               
        if(nowScroll == 0){
            $topBtn.hide()
        }else{
            $topBtn.show()
        }
        
    } // scroll
    
    $topBtn.click(top)
    function top(){
        jq('html,body').animate({ 
            scrollTop: 0
        })
    } // top
    
    /* section1 */
    var winWidth = $win.width()

    if( winWidth >= 1280 ) {
        var slider= $sec1List.bxSlider({
            minSlides : 4,
            maxSlides : 4,
            moveSlides : 1,
            slideWidth: 320, 
            slideMargin: 20,
            auto: true,
            controls: false
        })
    } // ~1200
    
    if( winWidth >= 1024 && winWidth < 1280 ) {
        var slider= $sec1List.bxSlider({
            minSlides : 3,
            maxSlides : 3,
            moveSlides : 1,
            slideWidth: 320, 
            slideMargin: 20,
            auto: true,
            controls: false
        })
    } // 1024 ~ 1279
    
    if( winWidth > 768 && winWidth < 1024 ) {
        var slider= $sec1List.bxSlider({
            minSlides : 2,
            maxSlides : 2,
            moveSlides : 1,
            slideWidth: 320, 
            slideMargin: 20,
            auto: true,
            controls: false
        })
    } // 769 ~ 1023
    
    if( winWidth < 769 ) {
        var slider= $sec1List.bxSlider({
            minSlides : 1,
            maxSlides : 1,
            moveSlides : 1,
            slideWidth: 320, 
            slideMargin: 20,
            auto: true,
            controls: false
        })
    } // ~768
    
    $win.resize(function(){

        var winWidth = $win.width()
         
        if( winWidth >= 1280 ) {
            slider.reloadSlider({
                minSlides : 4,
                maxSlides : 4,
                moveSlides : 1,
                slideWidth: 320, 
                slideMargin: 20,
                auto: true,
                controls: false
            })
        } // ~1200
        
        if( winWidth >= 1024 && winWidth < 1280) {
            slider.reloadSlider({
                minSlides : 3,
                maxSlides : 3,
                moveSlides : 1,
                slideWidth: 320, 
                slideMargin: 20,
                auto: true,
                controls: false
            })
        } // 1024 ~ 1279
        
        if( winWidth > 768 && winWidth < 1024 ) {
            slider.reloadSlider({
                minSlides : 2,
                maxSlides : 2,
                moveSlides : 1,
                slideWidth: 320, 
                slideMargin: 20,
                auto: true,
                controls: false
            })
        } // 769 ~ 1023

        if( winWidth < 769 ) {
            slider.reloadSlider({
                minSlides : 1,
                maxSlides : 1,
                moveSlides : 1,
                slideWidth: 320, 
                slideMargin: 20,
                auto: true,
                controls: false
            })
        } // ~768
        
    })
    
})