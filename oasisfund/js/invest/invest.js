jq(document).ready(function() {
    
    jq('.condition').click(slide)
    function slide(){
        jq('.slide_box').slideToggle()
        jq('.title').toggleClass('on')
    }
    
    jq( function(){
        $( "#accordion" ).accordion()
    })
    
})