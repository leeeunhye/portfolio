$(function(){

    var $win = $(window)
       ,$html = $('html')
	   ,$topBtn = $('#top_btn')
	   ,$career = $('.section2')
	   ,$type = $career.find('.info>li')
       ,$text = $career.find('.right>li')

	$topBtn.click(top)
    function top(){
        $('html,body').animate({ 
            scrollTop: 0
        })
    } // top
    
    
	$win.scroll(move)
	function move(){
		var nowScroll = $win.scrollTop() 	
		
		if(nowScroll > 0 ){
			$topBtn.show()
			$topBtn.removeClass('scroll')
			$('.down_desc').hide()

		}else{
			$topBtn.hide()
			$topBtn.removeClass('scroll')
			$('.down_desc').show()
		} 
		if(nowScroll == $(document).height() - $(window).height()){
			$topBtn.addClass('scroll')

		}


	}
    
   
    
});
