var s = function (sketch) {

    let isMobile = window.matchMedia("only screen and (max-width: 760px)");

    var font;
    var vehicles = [];

    var positionFactor = 150;
    var containerWidth = $(window).width() - positionFactor;
    let xOffset = 0;
    if (isMobile.matches) {
        positionFactor = 250;
        containerWidth = $(window).width() + positionFactor;

        xOffset = 0.115 * containerWidth / 2;
    }


    var font_size = 0.115 * containerWidth;

    containerWidth = font_size * 3 + positionFactor / 2;
    var containerHeight = font_size + 100;


    sketch.preload = function () {
        font = sketch.loadFont('./fonts/Karla/Karla-regular.ttf');
    };

    sketch.setup = function () {

        sketch.createCanvas(containerWidth, containerHeight);

        var points = font.textToPoints("SKILLS", containerWidth * 0.05 + xOffset, containerHeight / 2 + font_size / 2, font_size);

        for (var i = 0; i < points.length; i++) {
            var pt = points[i];
            var vehicle = new Vehicle(pt.x, pt.y, sketch);
            vehicles.push(vehicle);

        }
    };


    sketch.draw = function () {

        sketch.background(240);

        for (var i = 0; i < vehicles.length; i++) {
            vehicles[i].behaviors();
            vehicles[i].update();

            if (i != 0) {
                var pos0 = vehicles[i - 1].getPosition();
                var pos1 = vehicles[i].getPosition();

                sketch.strokeWeight(1);
                sketch.line(pos0.x, pos0.y, pos1.x, pos1.y);

            }
            vehicles[i].show();

        }
    };

};


$(document).ready(function () {

    var node2 = document.createElement('div');
    var skills = new p5(s, node2);
    window.document.getElementById('skills-proccessing').appendChild(node2);


    // var myp5 = new p5(s, window.document.getElementById('skills-proccessing'));
});