jq(document).ready(function() {
    
    var $accordion = jq('#accordion>li')
       ,$tab = $accordion.find('.s_tit')
       ,$tabCon = $accordion.find('.con')
    
    $accordion.click(show)
    function show(){
        var index = jq(this).index()
        $tabCon.eq(index).slideToggle(0)
        $tab.eq(index).toggleClass('active')
    }
})