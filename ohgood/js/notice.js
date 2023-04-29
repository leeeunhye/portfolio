$(function(){
    $('.s_tit').click(function(e){
        $(this).parent().siblings().children("p").removeClass('click')
        $(this).next().slideToggle(0).parent().siblings().children("div").hide()
        $(this).toggleClass('click')
        e.preventDefault()
    })

})