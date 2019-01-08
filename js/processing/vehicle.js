var sketch;

function Vehicle(x, y,_sketch) {
    sketch = _sketch;
    this.pos = sketch.createVector(x, y);
    this.target = sketch.createVector(x, y);
    this.vel = p5.Vector.random2D();
    this.acc = sketch.createVector();
    this.r = 4;
    this.maxspeed = 5;
    this.maxforce = 0.3;
}

Vehicle.prototype.behaviors = function () {
    var arrive = this.arrive(this.target);
    var mouse = sketch.createVector(sketch.mouseX, sketch.mouseY);

    var flee = this.flee(mouse);

    arrive.mult(1);
    flee.mult(5);

    this.applyForce(arrive);
    this.applyForce(flee);
};

Vehicle.prototype.applyForce = function (f) {
    this.acc.add(f);
};

Vehicle.prototype.arrive = function (target) {

    var desired = p5.Vector.sub(target, this.pos);
    var distance = desired.mag();

    var speed = this.maxspeed;
    if (distance < 100)//pixels
    {
        speed = sketch.map(distance, 0, 100, 0, this.maxspeed);
    }
    desired.setMag(speed);

    var steer = p5.Vector.sub(desired, this.vel);
    steer.limit(this.maxforce);
    return steer;
};

// Vehicle.prototype.seek = function (target) {
//
//     var desired = p5.Vector.sub(target,this.pos);
//     desired.setMag(this.maxspeed);
//
//     var steer = p5.Vector.sub(desired, this.vel);
//     steer.limit(this.maxforce);
//     return steer;
// };

Vehicle.prototype.flee = function (target) {

    var desired = p5.Vector.sub(target, this.pos);
    var distance = desired.mag();

    if (distance < 30)//pixels
    {
        desired.setMag(this.maxspeed);
        desired.mult(-1);

        var steer = p5.Vector.sub(desired, this.vel);
        steer.limit(this.maxforce);
        return steer;

    }
    else {
        return sketch.createVector(0, 0);
    }
};

Vehicle.prototype.update = function () {
    this.pos.add(this.vel);
    this.vel.add(this.acc);
    this.acc.mult(0);
};

Vehicle.prototype.show = function () {
    sketch.stroke(0);
    sketch.strokeWeight(this.r);
    sketch.point(this.pos.x, this.pos.y);
};

Vehicle.prototype.getPosition = function () {
    return this.pos;
};