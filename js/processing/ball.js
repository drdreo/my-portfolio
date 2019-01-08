var gid = 0;

function Ball(_sketch) {
    this.sketch = _sketch;
    this.pos = this.sketch.createVector(this.sketch.random(this.sketch.width), this.sketch.random(this.sketch.height));
    this.vel = p5.Vector.random2D();
    this.r = this.sketch.random(3,7);
    this.maxDistance = this.sketch.random(50,200);
    this.id = ++gid;
}

Ball.prototype.update = function () {

    //x boundaries
    if(this.pos.x >= this.sketch.width || this.pos.x <= 0)
    {
        this.vel.rotate(this.sketch.HALF_PI);
    }
    //y boundaries
    if(this.pos.y >= this.sketch.height || this.pos.y <= 0)
    {
        this.vel.rotate(this.sketch.HALF_PI);
    }

    this.pos.add(this.vel);
};

Ball.prototype.connect = function (list) {

    var distance = 0;

    for (var i = list.length - 1; i >= 0; i--) {

        distance = this.pos.dist(list[i].getPosition());
        if(this.id === list[i].id)
        {
            distance = Infinity;
        }
        //if ball is near enough, connect to it
        if (distance < this.maxDistance)
        {
            this.sketch.stroke('rgba(10,10,10,0.1)');
            this.sketch.strokeWeight(1);
            this.sketch.line(this.pos.x, this.pos.y, list[i].pos.x, list[i].pos.y);
        }

    }
};

Ball.prototype.show = function () {
    this.sketch.noStroke();
    this.sketch.fill('rgba(50,50,50,0.4)');
    this.sketch.ellipse(this.pos.x, this.pos.y,this.r,this.r);
};

Ball.prototype.getPosition = function () {
    return this.pos;
};


