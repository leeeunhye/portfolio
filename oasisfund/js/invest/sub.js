jq(document).ready(function() {
    
    var $ltxBox = jq('.ltv') 
       ,$tabBtn = jq('.nav_tabs')
       ,$tabMenu = $tabBtn.find('li')
       ,$sec = jq('.content>.sec')
       ,$btn = jq('.btn_right')
    
    
    $ltxBox.hover(show)
    function show(){
        jq('.explanation').toggle()
    } // show
    
    $tabMenu.click(tabs)
    function tabs(){
        $tabMenu.removeClass('on')
        jq(this).addClass('on')
    
        var im_index = jq(this).index() 
        $sec.hide() 
        $sec.eq(im_index).fadeIn() 
        
    } //tabs
    $tabMenu.eq(0).trigger('click')
    
    $btn.click(table)
    function table(){
        jq('table').slideToggle(0)
        $btn.toggleClass('active')
        jq('.top_title').toggleClass('change')
    }
    
    var chart = new CanvasJS.Chart("chartContainer", {
        data: [{
            type: "doughnut",
            startAngle: -90,
            indexLabelFontSize: 0,
            toolTipContent: "<b>{label}:</b> {y} (#percent%)",
            dataPoints: [
                { y: 1, label: "1순위 대출금"},
                { y: 3, label: "모집중" },
                { y: 16, label: "모집예정" },
                { y: 15, label: "잔여여유금" },

            ]
        }]
    });
    chart.render();
    
    jq( function(){
        jq( "#accordion" ).accordion()
    })
    
    
    
})