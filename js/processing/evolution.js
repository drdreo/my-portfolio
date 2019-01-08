var hoomans = []; //contains hoomans

var food = []; //contains food location
var poison = []; //contains posion location
var amountFood, amountPoison, population;
var debug;

var stateWaitBeforeProgram = false;
var stateNormalProgram = true;
var state = stateWaitBeforeProgram;

var screenWidth = $(window).width() * 0.9;
var screenHeight = $(window).height() - 100;


function preload() {
    amountFood = 45;
    amountPoison = 0;
    population = 20;

}

function setup() {

    var canvas = createCanvas(screenWidth, screenHeight);
    canvas.parent('evolution-container');

    initFood();
    initPoison();
    initHoomans();

    debug = createCheckbox(0, 0);

}


function draw() {

    if (state === stateWaitBeforeProgram) {
        fill(0);
        text("Press Mouse here", screenWidth / 2 - 50, screenHeight / 2);
    }
    else {


        resetGlobals();

        background(240);

        //randomly grow food with a 5% chance
        if (random(population) < population / 10) {
            food.push(createVector(random(width), random(height)));
        }

        //call steering behavior for the hooman
        for (var i = hoomans.length - 1; i >= 0; i--) {

            hoomans[i].boundaries();

            var eat = food;
            if (hoomans[i].hungry()) //start the hunger games, cannibalism
            {
                console.log("hungry");
                hoomans[i].behaviors(eat, poison, hoomans);
            } else {
                hoomans[i].behaviors(eat, poison);
            }

            if (hoomans[i] !== undefined) //if it hasnt been eaten by others
            {
                hoomans[i].update();
                hoomans[i].display();

                //clone hoomans
                if (random(1) < 0.1) {
                    var childHooman = hoomans[i].clone();
                    if (childHooman !== null) {
                        hoomans.push(childHooman);
                    }
                }


                //hooman died
                if (hoomans[i].dead()) {
                    var x = hoomans[i].position.x;
                    var y = hoomans[i].position.y;
                    hoomans.splice(i, 1);
                    // create Poison at its position
                    //poison.push(createVector(x, y));

                }

                if (debug.checked()) {
                    console.log(hoomans[i]);
                }
            }
        }


        //display the food
        displayFood();
        displayPoison();


    }
}

function initFood() {
    for (var i = 0; i < amountFood; i++) {
        food.push(createVector(random(width), random(height)));
    }
}

function initPoison() {
    for (var i = 0; i < amountPoison; i++) {
        poison.push(createVector(random(width), random(height)));
    }
}

function initHoomans() {
    for (var i = 0; i < population; i++) {
        hoomans[i] = new Hooman(random(width), random(height));
    }
}


function displayFood() {

    for (var i = 0; i < food.length; i++) {
        fill(0, 200, 0);
        strokeWeight(3);
        ellipse(food[i].x, food[i].y, 8, 8);
    }

}

function displayPoison() {

    for (var i = 0; i < poison.length; i++) {
        fill(200, 50, 0);
        strokeWeight(3);
        ellipse(poison[i].x, poison[i].y, 8, 8);
    }

}

function resetGlobals() {
    population = hoomans.length;
    amountFood = food.length;
    amountPoison = poison.length;
}

function mouseDragged() {


    hoomans.push(new Hooman(mouseX, mouseY));

}

function mouseClicked() {
    if (state === stateWaitBeforeProgram) {
        state = stateNormalProgram;
    }
    else {
    }
}

function touchStarted() {
    if (state === stateWaitBeforeProgram) {
        state = stateNormalProgram;
    }
    else {
    }
}
