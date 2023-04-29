jq(document).ready(function() {
    
     var $nav = jq('.myinfo3')
        ,$navbar = $nav.find('li')
        ,$right = jq('.right')
        ,$infoCon = $right.find('.info_con>div')
        ,$tab = jq('.tabs')
        ,$tabMenu = $tab.find('li')
        ,$sec = $right.find('.con_box>div')
    
    $navbar.click(tab)
    function tab(){
        
        var im_index = jq(this).index() 
        $infoCon.hide() 
        $infoCon.eq(im_index).show()
        
        $navbar.removeClass('on')
        $navbar.eq(im_index).addClass('on')
        
    } //tabs
    
    /* 2018-08-22 */
    /* 변경 */
    /* 관리자로그인했을때 */
//    $navbar.eq(2).trigger('click')
    /* 회원로그인했을때 */
    $navbar.eq(0).trigger('click')
    
    
    $tabMenu.click(menu)
    function menu(){
        
        var index = jq(this).index() 
        $sec.hide() 
        $sec.eq(index).show()
        
        $tabMenu.removeClass('active')
        $tabMenu.eq(index).addClass('active')
    } //menu
    $tabMenu.eq(0).trigger('click')
})