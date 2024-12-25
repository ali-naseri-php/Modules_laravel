$(document).ready(function() {
    $('.list-group-item .badge').next('.detiled-search-result').addClass('none');
    var enteredTerm = "";
    var caret = $('<span>', {
        class: "caret"
    });
    $('#searchButton').append(" : جستجو بر اساس  ");
    caret.appendTo('#searchButton');
    var query = "";
    //console.log($('#searchButton').text());
    $('#searchList li').find("a").click(function() {
        query = $(this).html();
        $('#searchButton').html($(this).html() + " : ");
        caret.appendTo('#searchButton');
    });
    $('#loadDiv').addClass('none');
    $(document).ajaxStart(function() {
        $('#loadDiv').removeClass('none');
    }).ajaxStop(function() {
        $('#loadDiv').addClass('none');
    }).ajaxError(function() {

    });
    $('.list-group-item .badge').click(function() {
        $(this).next('.detiled-search-result').fadeToggle('slow', function() {
            if ($(this).hasClass('none')) {
                $(this).removeClass('none');
                $(this).prev('.badge').html("<i class='fa fa-minus fa-lg'></i>");
            } else {
                $(this).addClass('none');
                $(this).prev('.badge').html("<i class='fa fa-plus fa-lg'></i>");
            }
        });
    });
});
