jq(document).ready(function() {
    
    var $m_open = jq('.open_btn')
       ,$m_gnb = jq('.gnb_box')
       ,$m_close = jq('.close_btn')
       ,$m_dimmed = jq('.dimmed')
       ,$html = jq('html')
    
    /* mobile */
    $m_open.click(gnbOpen)
    $m_dimmed.click(gnbClose)
    $m_close.click(gnbClose)
    
    function gnbOpen(){
        $m_gnb.animate({right:0})
        $m_dimmed.fadeIn()
        $html.addClass('fixed')
    } // gnbOpen
    
    function gnbClose(){
        $m_gnb.animate({right:-280})
        $m_dimmed.fadeOut()
        $html.removeClass('fixed')
    } // gnbClose 
    
})