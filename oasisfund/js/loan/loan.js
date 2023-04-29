jq(document).ready(function() {
    
    var $fileBox = jq('.filetype');

    $fileBox.each(function() {
        var $fileUpload = jq(this).find('.input-file'),
            $fileText = jq(this).find('.file-text')
        
        $fileUpload.on('change', function() {
            var fileName = jq(this).val();
            $fileText.attr('disabled', 'disabled').val(fileName);
          })
    })
    
    jq( "#accordion" ).accordion();
})