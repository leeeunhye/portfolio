jq(document).ready(function() {
    
     var $nav = jq('.nav')
        ,$navbar = $nav.find('li')
        ,$sec = jq('.section>div')
    
    $navbar.click(tab)
    function tab(){
        $navbar.removeClass('on')
        jq(this).addClass('on')
    
        var im_index = jq(this).index() 
        $sec.hide() 
        $sec.eq(im_index).fadeIn() 
        
    } //tabs
    $navbar.eq(0).trigger('click')
    
    $sec.find('li').click(menu)
    function menu(){
        var index = jq(this).index()
        jq('.desc').eq(index).slideToggle()
        jq('.s_tit').eq(index).toggleClass('down')
    }
    
})