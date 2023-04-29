$(function(){
    
    var $type = $('.type li')
    
    /* 리스트 정렬 */
    $type.click(sort)
    function sort(){
        var im_index = $(this).index()
        $type.removeClass('sort')
        $type.eq(im_index).addClass('sort')
    }
    $type.eq(0).trigger('click')
    
})