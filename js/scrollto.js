function scrollto($id){
    $realid = "#"+$id;

    jQuery(function($) {
        // ...  
        $('html, body').animate({
            scrollTop: $($realid).offset().top - 150
        }, 2000);
    }); 

}