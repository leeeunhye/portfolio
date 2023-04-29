$(function(){

    var $lang = $('.lang') 
       ,$langBox = $('.lang_box')
       ,$langFirst = $langBox.find('.first')
       ,$favoriteBtn = $('.favorite_btn')
       ,$mypageBtn = $('.info_btn')
       ,$mypage = $('#mypage')
       ,$dimmed = $('#dimmed')
    
    /* 언어 */
    $lang.click(show)
    function show(){
        $langBox.show()
    }
    $langFirst.click(hide)
    function hide(){
        $langBox.hide()
    }
    
    /* 좋아요버튼 */
    $favoriteBtn.click(good)
    function good(){
        $(this).toggleClass('good')
    }
    
    /* 마이페이지 */
    $mypageBtn.click(mypage)
    function mypage(){
        $mypage.slideToggle(0)
        $mypageBtn.toggleClass('open')
        $('#main_header').toggleClass('open')
        $dimmed.slideToggle(0)
        $('html').toggleClass('fixed')
    }
    $dimmed.click(hide_mypage)
    function hide_mypage(){
        $mypage.hide()
        $dimmed.hide()
        $('#main_header').removeClass('open')
        $('html').removeClass('fixed')
    }
    
    
})