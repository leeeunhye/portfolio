$(function(){
    
    var $filterList = $('.filter_list li')
       ,$filterBtn = $('.filter_btn')
       ,$fileterBox = $('#fileter_box')
       ,$areaType = $('.area_type li')
       ,$selectArea = $('.select_area li')
       ,$selectRoad = $('.select_road_box>li')
    
    /* 음식종류선택*/
    $filterList.click(click)
    function click(){
        var index = $(this).index()
        $filterList.removeClass('click')
        $filterList.eq(index).addClass('click')
    }
    $filterList.eq(0).trigger('click')

    /* 필터버튼 */
    $filterBtn.click(active)
    function active(){
        $fileterBox.slideToggle(0)
        $filterBtn.toggleClass('active')
    }
    
    /* 지역 나라선택 */
    $areaType.click(color)
    function color(){
        var indexs = $(this).index()
        $areaType.removeClass('color')
        $areaType.eq(indexs).addClass('color')
    }
    $areaType.eq(0).trigger('click')
    
    /* 지역 선택하기 */
    $selectArea.click(type)
    function type(){
        var indexx = $(this).index()
        $selectArea.removeClass('type')
        $selectArea.eq(indexx).addClass('type')
        $selectRoad.hide()
        $selectRoad.eq(indexx).show()
    }
    $selectArea.eq(0).trigger('click')
    
    /* 동네선택하기 */
    $('.select_road').children().click(border)
    function border(){
        $('.select_road').children().removeClass('border')
        $(this).addClass('border')
        
        /* 모달닫기 */
        $('#myarea').fadeOut(400)
        $('.modal-backdrop').fadeOut(600)
        $('body').removeClass('modal-open')
        
    }
    
    /* 모달*/
    $('#myarea').on('show.bs.modal', function (e) {})
    
    
})