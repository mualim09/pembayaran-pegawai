$(function () {
    $("#layout2, #layout3, #layout4").css("display", "none").children(".modern-ticker").modernTicker("pause");
    $("#theme li").click(function () {
        var e = $(this);
        if (!e.hasClass("selected")) {
            $("#theme .selected").removeClass("selected");
            e.addClass("selected");
            $("#style-sheet").attr("href", "modern-ticker/themes/theme" + e.html().split(" ")[1] + "/theme.css")
        }
    });
    $("#layout li").click(function () {
        var e = $(this);
        if (!e.hasClass("selected")) {
            $("#layout .selected").removeClass("selected");
            e.addClass("selected");
            $(".active").removeClass("active").css("display", "none").children(".modern-ticker").modernTicker("pause");
            $("#layout" + e.html().split(" ")[1]).css("display", "block").addClass("active").children(".modern-ticker").modernTicker("resume")
        }
    });
    $("#corners li").click(function () {
        var e = $(this);
        if (!e.hasClass("selected")) {
            $("#corners .selected").removeClass("selected");
            e.addClass("selected");
            var t = $(".modern-ticker");
            if (t.hasClass("mt-round")) {
                t.removeClass("mt-round")
            } else {
                t.addClass("mt-round")
            }
        }
    })
})