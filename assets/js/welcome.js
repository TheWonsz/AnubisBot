$(function() {
    $(".window").fadeIn('slow',function() {
        $(".subtitle").first().delay(400).fadeIn('slow', function showNext() {
            $(this).next(".bull").delay(300).fadeIn('slow', function() {
                $(this).next(".subtitle").fadeIn('slow', showNext);
            });
        });
    });
});
