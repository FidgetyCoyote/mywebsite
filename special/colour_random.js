$(function() {

    $('.btnColour').on('click', function() {
    var choices = "abcdef0123456789"
    var choice = "background: #";
    for (i = 0 ; i < 6 ; i++) {
    	choice += choices[Math.floor(Math.random()*16)];
    }
    $(document.body).attr('style',choice);
    });
});