jq(document).ready(function() {
    
     var $nav = jq('.nav')
        ,$navbar = $nav.find('span')
        ,$tableBox = jq('.table_box>div')
    
    $navbar.click(tab)
    function tab(){
        
        var im_index = jq(this).index() 
        $tableBox.hide() 
        $tableBox.eq(im_index).show()
        
        $navbar.removeClass('on')
        $navbar.eq(im_index).addClass('on')
        
    } //tabs
    $navbar.eq(0).trigger('click')

})