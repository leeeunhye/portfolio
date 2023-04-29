jq(document).ready(function() {
    
    var $tabBtn = jq('.join_nav')
       ,$tabMenu = $tabBtn.find('li')
       ,$joinContent = jq('.join_content>div')
  
    
    $tabMenu.click(tabs)
    function tabs(){
        $tabMenu.removeClass('on')
        jq(this).addClass('on')
    
        var im_index = jq(this).index() 
        $joinContent.hide() 
        $joinContent.eq(im_index).fadeIn() 
        
    } //tabs
    $tabMenu.eq(0).trigger('click')
    
    
})