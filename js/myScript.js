/**
 * Created by Andreas on 09.04.17.
 */
var sly = hahn.slyScroll;

var language = "en";

$(document).ready(function () {

    let isMobile = window.matchMedia("only screen and (max-width: 760px)");

    language = document.documentElement.lang;
    if (language != "en" && language != "de") {
        language = "en";
    }

    var screenheight = $(window).height();

    // var currentScrollPosition = document.documentElement.scrollTop || document.body.scrollTop;


    //register click handler for navigation
    $(".nav-link").each(function (index) {
        $(this).on("click", function () {
            $.fn.fullpage.moveTo(index + 1);
            return false;
        });
    });

    if (!isMobile.matches) {
        $('#content').fullpage({
            menu: '#navbar',
            verticalCentered: false,
            slidesNavigation: true,
            lockAnchors: true,
            scrollingSpeed: 750,
            responsiveWidth: 900,
            fixedElements: '.modal',

            onLeave: function (index, nextIndex, direction) {

                var navItems = $(".nav-link");
                navItems.removeClass("activeSection");

                $(navItems[nextIndex - 1]).addClass("activeSection");
            }

        });
    }

    // load all texts depending on the language
    loadLanguageTexts();

    //size the start logo
    $('#bigLogo').css("height", screenheight * 0.4);

    $("#donateModal").modal({
        backdrop: false,
        show: false
    });


});

// When the DOM is ready and all assets - this includes images, iframe, fonts, etc - have been loaded
$(window).on('load', function () {

    var navbar = $('#navbar');
    var screenheight = $(window).height();

    //remove loader animation
    $('body').addClass('loaded');

    setTimeout(function () {
        //position the navbar element
        navbar.css('margin-top', screenheight * 0.25);
        if (screenheight / 2 * 0.9 < 180) { // for smartphones in the side view
            navbar.css('margin-top', screenheight * 0.05);
        }
        setTimeout(function () {
            //position the language element
            var lang = $("#language");
            lang.css("top", lang.parent()[0].clientHeight - 55);
            lang.css("opacity", 1);
        }, 1000);
    }, 700);

});

//toggle site language
function switchLanguage(lang) {
    console.log(lang);
    switch (lang) {
        case 'en':
            window.location.assign("./de");
            break;
        case 'de':
            window.location.assign("./en");
            break;
        default:
            break;
    }
}

function loadLanguageTexts() {
    //default load cms project description
    loadProjectDetails("storyclashCMSProject");
    loadReferencesText();
    loadAboutText();
    loadNavText();
}

//load project details
function loadProjectDetails(name) {
    readTextFile("./projectDescription.json", function (response) {
        var projects = JSON.parse(response);

        for (let project of projects) {
            if (name == project.name) {

                var text = project[language];

                $("#projectTitle").html(project.title + " - " + text.date);
                $("#projectDescription").html(text.description);
                $("#projectShortDescription").html(text.shortDescription);

                if (project.link != null) {
                    var link = $("<p id='projectLink' class='link'><a href='" + project.link + "' target='_blank'>[" + project.linkName + "]</a></p>")
                    $("#projectLink").remove();
                    $("#projectShortDescription").after(link);
                } else {
                    $("#projectLink").remove();
                }
            }
        }
    });
}


function loadAboutText() {
    readTextFile("./aboutText.json", function (response) {
        var about = JSON.parse(response)[0][language];

        $("#aboutText").find("[name='heading']").html(about.heading);
        $("#aboutText").find("[name='text']").html(about.text);

    });
}

function loadNavText() {
    readTextFile("./navText.json", function (response) {
        var navText = JSON.parse(response);

        for (let text of navText) {
            $("#navText").find("[name='" + text.name + "']").html(text[language]);
        }

    });
}


function loadReferencesText() {
    readTextFile("./referencesText.json", function (response) {
        var references = JSON.parse(response);
        var audioVideo = references[0][language];
        var digitalArts = references[1][language];


        $("#audioVideoText").find("[name='heading']").html(audioVideo.heading);
        $("#audioVideoText").find("[name='text']").html(audioVideo.text);

        $("#digitalArtsText").find("[name='heading']").html(digitalArts.heading);
        $("#digitalArtsText").find("[name='text']").html(digitalArts.text);

    });
}


function readTextFile(file, callback) {
    var rawFile = new XMLHttpRequest();
    rawFile.overrideMimeType("application/json");
    rawFile.open("GET", file, true);
    rawFile.onreadystatechange = function () {
        if (rawFile.readyState === 4 && rawFile.status == "200") {
            callback(rawFile.responseText);
        }
    };
    rawFile.send(null);
}

