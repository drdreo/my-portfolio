"use strict";

var hahn = hahn || {};

hahn.slyScroll = (function ($) {
    var frame = $('#frame');
    var wrap = frame.parent();

    var container = $('#projectSlide');
    var children = container.children().length;
    // Call Sly on frame
    var sly = new Sly(frame, {
        horizontal: 1,
        itemNav: 'forceCentered',
        smart: 1,
        activateMiddle: 1,
        mouseDragging: 1,
        touchDragging: 1,
        releaseSwing: 1,
        pauseOnHover: true,
        startAt: 0,
        scrollBar: wrap.find('.scrollbar'),
        scrollBy: 1,
        speed: 750,
        elasticBounds: 1,
        easing: 'easeOutQuad',
        cycleBy: 'items',
        cycleInterval: 5000,
        dragHandle: 1,
        dynamicHandle: 1,
        clickBar: 1,

        // Buttons
        prev: wrap.find('.prev'),
        next: wrap.find('.next')
    }).init();

    $(window).resize(function (e) {
        reloadFrame();
    });

    sly.on('active', function (eventName) {
        var name = findActiveItem();
        loadProjectDetails(name);

        if (isLastItem(children)) {
            console.log("last item scrolled!");
        }
    });

    function reloadFrame() {
        frame.sly('reload');
        children = container.children().length;

    }

    function isLastItem(amount) {
        return ( sly.rel.activeItem === amount - 1);
    }

    function findActiveItem() {
        var items = sly.items;

        for (let item of items) {
            if ($(item.el).hasClass('active')) {
                return $(item.el).attr("name");
            }
        }
    }

    return {
        reloadFrame: reloadFrame
    };
}($));
