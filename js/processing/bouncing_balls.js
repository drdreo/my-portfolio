var s1 = function (sketch1) {

    let isMobile = window.matchMedia("only screen and (max-width: 760px)");

    var screenWidth = $(window).width() - 100;

    if (isMobile.matches) {
        screenWidth += 100;
    }

    var screenHeight = $(window).height();

    var amountBalls = 50;
    var balls = [];

    sketch1.preload = function () {
    };

    sketch1.setup = function () {

        sketch1.createCanvas(screenWidth, screenHeight);


        for (var i = 0; i < amountBalls; i++) {
            balls[i] = new Ball(sketch1);
        }
    };


    sketch1.draw = function () {

        sketch1.background(240);

        for (var i = balls.length - 1; i >= 0; i--) {

            balls[i].update();
            balls[i].show();
            balls[i].connect(balls);
        }

    };
};

$(document).ready(function () {

    var node = document.createElement('div');
    var balls = new p5(s1, node);
    window.document.getElementById('bouncing-container').appendChild(node);


    // var myp5 = new p5(s, window.document.getElementById('skills-proccessing'));
});
