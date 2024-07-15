
$(document).ready(function () {

    $("#img").click(function () {
        $("#img").toggleClass("d");
        $("#search").toggleClass("d");
        $("#li").removeClass("img1");
        $("#input-box").val("");
    });

    $("#search-button").click(function () {
        $("#img").removeClass("d");
        $("#search").addClass("d");
        $("#li").addClass("img1");
    });


    let pathpage = window.location.pathname;
    let pathname = pathpage.split("/").pop();


    if (pathname === "") {
        $("#item1").addClass("active disabled");
    }
    if (pathname === "search.php") {

        console.log("sdbfvdsgfvdg");
        $("#li").addClass("active disabled");
    }


    $("#nav1 a").click(function (e) {
        var link = $(this);
        var item = link.parent("li");

        if (item.hasClass("active")) {
            item.removeClass("active").children("a").removeClass("active");
        }
        else {
            item.addClass("active").children("a").addClass("active");
        }

        if (item.children("ul").length > 0) {
            var href = link.attr("href");
            link.attr("href", "#");
            setTimeout(function () {
                link.attr("href", href);
            }, 300);
            e.preventDefault();
        }
    }).each(function () {
        var link = $(this);
        if (link.get(0).href === location.href) {
            link.addClass("active").parents("li").addClass("active");
            link.addClass("disabled ").parents("li").addClass("disabled ");
            return false;
        }
    });
});