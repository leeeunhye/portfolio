$(function(){
    
    var $type = $('.type li')
       ,$secList = $('.sec_box>li')
       ,$imgType = $('.images_type li')
       ,$imgList = $('.list_box>li')
       ,$reviewType = $('.review_type li')
       ,$goodBtn = $('.good_btn')

    /* 메뉴 */
    $type.click(sort)
    function sort(){
        var im_index = $(this).index()
        $type.removeClass('color')
        $type.eq(im_index).addClass('color')
        $secList.hide()
        $secList.eq(im_index).show()
    }
    $type.eq(0).trigger('click')
    
    /* 사진 */
    $imgType.click(images)
    function images(){
        var index = $(this).index()
        $imgType.removeClass('active')
        $imgType.eq(index).addClass('active')
    }
    $imgType.eq(0).trigger('click')
    
    /* 리뷰 */
    $reviewType.click(types)
    function types(){
        var indexs = $(this).index()
        $reviewType.removeClass('types')
        $reviewType.eq(indexs).addClass('types')
    }
    $reviewType.eq(0).trigger('click')
    
    /* 좋아요버튼 */
    $goodBtn.click(good)
    function good(){
        $(this).toggleClass('good')
    }
    
    
})