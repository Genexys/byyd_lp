$(document).ready(function() {

  var lazyload = lazyload || {};
    var page = 2,
        buttonId = "#more-button",
        loadingId = "#loading-div",
        container = "#smart-portfolio";

    lazyload.load = function() {

        var url = "./pages/" + page + ".html";

        $(buttonId).hide();
        $(loadingId).show();

        $.ajax({
            url: url,
            success: function(response) {
                if (!response || response.trim() == "NONE") {
                    $(buttonId).fadeOut();
                    $(loadingId).text("Портфолио полностью загружено");
                    return;
                }
                appendContests(response);
            },
            error: function(response) {
                $(loadingId).text("К сожалению, возникла какая-то ошибка при запросе. Пожалуйста, обновите страницу.");
            }
        });
    };



    var appendContests = function(response) {
        var id = $(buttonId);

        $(buttonId).show();
        $(loadingId).hide();

        $(response).appendTo($(container));
        page += 1;
    };

    $("#more-button").click(function() {
      lazyload.load()
    });
});
