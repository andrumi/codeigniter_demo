/**
 * Created by andrew on 19/11/2015.
 */
$(document).ready(function () {
    function init() {
        if (localStorage["title"]) {
            $('#title').val(localStorage["title"]);
        }
        if (localStorage["text"]) {
            $('#text').val(localStorage["text"]);
        }
        //if (localStorage["message"]) {
        //    $('#message').val(localStorage["message"]);
        //}
    }
    init();
});

$('.stored').keyup(function () {
    localStorage[$(this).attr('name')] = $(this).val();
});

$('#localStorageTest').submit(function() {
    localStorage.clear();
});
