$(function(){

    var $win = $(window)
       ,$html = $('html')
	   ,$topBtn = $('#top_btn')
	   ,$sec1 = $('.section1')
	   ,$sec2 = $('.section2')
	   ,$sec3 = $('.section3')
	   ,$type = $sec2.find('.info>li')
       ,$text = $sec2.find('.right>li')
	   ,$visual = $('#visual')

	$type.click(click)
	function click(){
		var index = $(this).index()
		$('.section2 .info li').removeClass('click')
		$(this).addClass('click')
		$('.section2 .right>li').hide()
		$text.eq(index).show()
	}
	$type.eq(0).toggleClass('click')
  
	$topBtn.click(top)
    function top(){
        $('html,body').animate({ 
            scrollTop: 0
        })
    } // top
    

	var sec1Pos = $sec1.position().top - 500
	var sec2Pos = $sec2.position().top - 500
	var sec3Pos = $sec3.position().top

	$visual.find('.bg').animate({top: 0, opacity: 1},1000)
	$visual.find('.txt_box').delay(500).animate({bottom: '50px', opacity: 1},1000)

    $win.scroll(scroll)
    function scroll(){
        var nowScroll = $win.scrollTop()
		function each(index){
			$(this).delay(index*250).animate({top: 0, opacity: 1},1000)
		}
        if(nowScroll > sec1Pos){ 
			$sec1.find('.left').animate({top: 0, opacity: 1},1000)
			$sec1.find('.right').delay(500).animate({right: 0, opacity: 1},1000)
        }
		if(nowScroll > sec2Pos){ 
			$sec2.find('.s_tit').animate({top: 0, opacity: 1},1000)
			$sec2.find('.left').delay(300).animate({left: 0, opacity: 1},1000)
			$sec2.find('.right').delay(500).animate({top: 0, opacity: 1},1000)
        }
		if(nowScroll > sec3Pos - 500){ 
			$sec3.find('.s_tit').animate({left: 0, opacity: 1},1000)
			$sec3.find('.list li').each(each)
        }
			
		if(nowScroll > sec3Pos - 250){ 
			$sec3.find('.about').addClass('show')
			$sec3.find('.left').delay(400).animate({top: 0, opacity: 1},1000)
			$sec3.find('.right').delay(800).animate({right: 0, opacity: 1},1000)
        }
    } // scroll
    
   
    
});
