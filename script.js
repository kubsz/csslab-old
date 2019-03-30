function setCookie(c_name,value,exdays) {
    var exdate=new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value=escape(value) + ((exdays==null) ? "" : ("; expires="+exdate.toUTCString()));
    document.cookie=c_name + "=" + c_value;
}

function getCookie(c_name) {
    var i,x,y,ARRcookies=document.cookie.split(";");
    for (i=0; i<ARRcookies.length; i++)
    {
        x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
        y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
        x=x.replace(/^\s+|\s+$/g,"");
        if (x==c_name)
        {
            return unescape(y);
        }
    }
}

$(".footer i:first-of-type").click(function() {
    if($(this).hasClass("fa-sticky-note")) {
        $(this).removeClass("fa-sticky-note");
        $(this).addClass("fa-times");
        setCookie("load", "false", "7");
    } else {
        $(this).addClass("fa-sticky-note");
        $(this).removeClass("fa-times");
        setCookie("load", "true", "7");
    }
});
$(".footer i:last-of-type").click(function() {
    if($(this).hasClass("fa-volume-up")) {
        $(this).removeClass("fa-volume-up");
        $(this).addClass("fa-volume-mute");
        setCookie("audio", "false", "7");
    } else {
        $(this).addClass("fa-volume-up");
        $(this).removeClass("fa-volume-mute");
        setCookie("audio", "true", "7");
    }
});

$(".color").click(function() {
    color = $(this).css("background-color");
    console.log("color: " + color);
    setCookie("color", color, "7");
    $(".edit-color").html(color)
    $('html > head').append("<style> .col3 { background: " + color + "; } .col3-font { color: " + color + "; } .col3-border-color { border-color: " + color + " ;} #colors .bar-container > input::-webkit-slider-thumb { background: " + color + "; } ::selection { background: " + color + "; } .active-animation { background: " + color + "; }</style>");
    $('html > head').append("<style> #dimension-units .table-row:nth-of-type(even) { background: " + color.replace(')', ', 0.3)').replace('rgb', 'rgba') + "; } .focus-example:focus  { background: " + color.replace(')', ', 0.3)').replace('rgb', 'rgba') + "; }</style>");
})

$(".theme").click(function() {
    theme = $(this).css("background-color");
    setCookie("theme", theme, "7");
    console.log(theme);
    switch(theme) {
        case "rgb(238, 238, 238)":
            $('html > head').append("<style>" +
                ".col1 {background: " + theme + "; }" +
                ".col1-font { color: " + theme + "; }" +
                ".col1-border-color { border-color: " + theme + "; }" +
                ".col2 { background:rgb(44, 49, 55) ; }" +
                ".col2-font { color: rgb(44, 49, 55) ; }" +
                ".col2-border-color { border-color: rgb(44, 49, 55) ; }" +
                ".col4 { background:rgb(27, 30, 36) ; }" +
                ".col4-font { color: rgb(27, 30, 36) ; }" +
                "</style>");
            break;
        case "rgb(44, 49, 55)":
            $('html > head').append("<style>" +
                ".col1 {background: " + theme + "; }" +
                ".col1-font { color: " + theme + "; }" +
                ".col1-border-color { border-color: " + theme + "; }" +
                ".col2 { background:rgb(238, 238, 238) ; }" +
                ".col2-font { color: rgb(238, 238, 238) ; }" +
                ".col2-border-color { border-color: rgb(238, 238, 238) ; }" +
                ".col4 { background:rgb(27, 30, 36) ; }" +
                ".col4-font { color: rgb(27, 30, 36) ; }" +
                "</style>");
            break;
        case "rgb(27, 30, 36)":
            $('html > head').append("<style>" +
                ".col1 {background: " + theme + "; }" +
                ".col1-font { color: " + theme + "; }" +
                ".col1-border-color { border-color: " + theme + "; }" +
                ".col2 { background:rgb(238, 238, 238) ; }" +
                ".col2-font { color: rgb(238, 238, 238) ; }" +
                ".col2-border-color { border-color: rgb(238, 238, 238) ; }" +
                ".col4 { background:rgb(44, 49, 55) ; }" +
                ".col4-font { color: rgb(44, 49, 55) ; }" +
                "</style>");
            break;
    }
})

var audio = new Audio('page.wav');
$(".option").click(function() {
    if ( $(this).attr('disabled') == "disabled" )
        return false;

    if (($(this).hasClass("next-option") && $(this).next(".option").hasClass('locked-option')) || ($(this).is(':last-child') && !($(this).prev(".option").hasClass('locked-option') ))) {
        $(this).removeClass('next-option')
        $(this).next(".option").addClass('next-option')
        $(this).next(".option").removeClass('locked-option')
        $(".option").removeClass("col3-border-color");
        $(".option").removeClass("col3-font");
        $(this).addClass("col3-border-color");
        $(this).addClass("col3-font");
    } if (!$(this).hasClass("locked-option") && !$(this).hasClass("next-option")) {
        $(".option").removeClass("col3-border-color");
        $(".option").removeClass("col3-font");
        $(".option").removeClass("col2-font");
        $(this).addClass("col3-border-color");
        $(this).addClass("col3-font");
    }

    if($(this).hasClass("locked-option") || $(this).hasClass('next-option'))
        return false;

    if(!$(this).hasClass("locked-option"))
        $(".option").attr('disabled','disabled');

    var option = $(this).text();

    $.post("page.php", {option: option})
        .done(function (data) {
            if(getCookie("audio") == "true") {
                audio.play();
            }
            if(getCookie("load") == "true" || getCookie("load") == null) {
                var time = 1000;
                load();
            } else {
                $(".option").removeAttr('disabled'); //get rid of this, change setimeout '0' to '1000'
                var time = 0;
            }
            setTimeout(function() {
                $(".main-content").attr("id", ((option.toLowerCase()).replace(/ /g, "-").replace(",","")));
                $(".main-content").html(data);
            }, time);
        });

})

function load() {
    $(".load-container").css("display", "block");
    setTimeout(function() {
        $(".upper-bar").css({"height": "calc(50% - 1px)", "border-bottom": "1px solid"});
        $(".lower-bar").css({"height": "calc(50% - 1px)", "border-top": "1px solid"});
        setTimeout(function() {
            $(".bars").css({"opacity": "1"});
            setTimeout(function() {
                $(".bars").css({"opacity": "0"});
                setTimeout(function() {
                    $(".upper-bar").css({"height": "0", "border-bottom": "0px solid"})
                    $(".lower-bar").css({"height": "0", "border-top": "0px solid"})
                    setTimeout(function() {
                        $(".load-container").css("display", "none");
                        $(".option").removeAttr('disabled');
                    }, 300)
                }, 100)
            }, 800)
        }, 300)
    }, 10)
}