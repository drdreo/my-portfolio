var mr = 1; //mutation rate
var gid = 0;

function Hooman(x, y, dna) {
    this.r = 4;

    this.id = ++gid;

    this.position = createVector(x, y);
    this.velocity = createVector(0, -2);
    this.acceleration = createVector();
    this.maxspeed = 5;
    this.maxforce = 0.5;

    this.maxChildren = 3;
    this.children = 0;
    this.canibal = false;

    this.health = 1;
    this.dna = [];



    if (dna === undefined) {
        // Food attraction
        this.dna[0] = random(-2, 2);
        // Poison attraction
        this.dna[1] = random(-2, 2);
        // Food perception
        this.dna[2] = random(0, 100);
        // Poision percepton
        this.dna[3] = random(0, 100);
    } else {
        // Mutation
        this.dna[0] = dna[0];
        if (random(1) < mr) {
            this.dna[0] += random(-0.2, 0.2);
        }
        this.dna[1] = dna[1];
        if (random(1) < mr) {
            this.dna[1] += random(-0.2, 0.2);
        }
        this.dna[2] = dna[2];
        if (random(1) < mr) {
            this.dna[2] += random(-15, 15);
        }
        this.dna[3] = dna[3];
        if (random(1) < mr) {
            this.dna[3] += random(-15, 15);
        }
    }

}


Hooman.prototype.behaviors = function (good, bad, hoomans) {


    var steerGood = this.eat(good, 0.2, this.dna[2]); //0.2 food health factor
    var steerBad = this.eat(bad, -0.5, this.dna[3]); //-0.5 poision health factor

    if (hoomans !== undefined) {
        steerGood = this.eat(hoomans, 1, 300);
        console.log("lets eat hoomans");
    }

    steerGood.mult(this.dna[0]);
    steerBad.mult(this.dna[1]);

    this.applyForce(steerGood);
    this.applyForce(steerBad);
};

Hooman.prototype.seek = function (target) {

    var desired = null;
    if (target instanceof Hooman && target.id !== this.id) //hooman is the traget
    {
        desired = p5.Vector.sub(target.position, this.position);
        desired.setMag(this.maxspeed);
    } else {
        desired = p5.Vector.sub(target, this.position);
        desired.setMag(this.maxspeed);
    }


    var steer = p5.Vector.sub(desired, this.velocity);
    steer.limit(this.maxforce);

    return steer;

};

Hooman.prototype.eat = function (list, nutrition, perception) {

    var record = Infinity;
    var closest = null;


    for (var i = list.length - 1; i >= 0; i--) {


        var distance = 0;
        if (list[i] instanceof Hooman) //hoomanslist is passed
        {
            distance = this.position.dist(list[i].position);
            if(this.id === list[i].id)
            {
                distance = Infinity;
            }
        }
        else {
            distance = this.position.dist(list[i]);
        }

        //if it is in eat range, eat and remove it
        //else seek it
        if (distance < this.maxspeed) // if it could jump over it, because too fast - eat it
        {
            if (list[i] instanceof Hooman && list[i].id !== this.id) //kill humans health
            {
                list[i].health -= 1;
                console.log("canibal");
            }
            else //remove the food/poison
            {
                list.splice(i, 1);
            }

            this.health += nutrition;
        }
        else {
            if (distance < record && distance < perception) {
                record = distance;
                closest = list[i];
            }

        }
    }

    if (closest !== null) {
        return this.seek(closest);
    }

    return createVector(0, 0);
};

Hooman.prototype.dead = function () {
    return (this.health <= 0);
};

Hooman.prototype.hungry = function ()
{
    if(this.health <= 0.3 && random(1) < 0.01 || ( this.canibal && this.health <= 0.3))
    {
        this.canibal = true;
        return true
    }

    return false;
};

Hooman.prototype.clone = function () {
    if (this.maxChildren > this.children) {
        if (this.health > 1 && random(1) < 0.1) {
            this.children++;
            return new Hooman(this.position.x, this.position.y, this.dna);
        }
    }
    return null;
};


//checks the window boundaries
Hooman.prototype.boundaries = function () {
    var d = 25; //the edge of the boundary

    var desired = null;

    if (this.position.x < d) {
        desired = createVector(this.maxspeed, this.velocity.y);
    } else if (this.position.x > width - d) {
        desired = createVector(-this.maxspeed, this.velocity.y);
    }

    if (this.position.y < d) {
        desired = createVector(this.velocity.x, this.maxspeed);
    } else if (this.position.y > height - d) {
        desired = createVector(this.velocity.x, -this.maxspeed);
    }

    if (desired !== null) {
        desired.normalize();
        desired.mult(this.maxspeed);
        var steer = p5.Vector.sub(desired, this.velocity);
        steer.limit(this.maxforce);
        this.applyForce(steer);
    }
};


Hooman.prototype.applyForce = function (f) {
    this.acceleration.add(f);
};

Hooman.prototype.update = function () {

    //health decay
    this.health -= 0.005;

    //update speed
    this.velocity.add(this.acceleration);
    //limit speed
    this.velocity.limit(this.maxspeed);
    //reset acceleration
    this.acceleration.mult(0);

    this.position.add(this.velocity);
};

Hooman.prototype.display = function () {

    var angle = this.velocity.heading() + PI / 2;

    push();
    {
        translate(this.position.x, this.position.y);
        rotate(angle);

        if (debug.checked()) {


            //debug lines
            strokeWeight(2);
            noFill();
            //good dots
            stroke(0, 255, 0);
            line(0, 0, 0, -this.dna[0] * 25);
            ellipse(0, 0, this.dna[2] * 2);

            //bad dots
            strokeWeight(1);

            stroke(255, 0, 0);
            line(0, 0, 0, -this.dna[1] * 25);
            ellipse(0, 0, this.dna[3] * 2);
        }

        //health debug
        var green = color(0, 255, 0);
        var red = color(255, 0, 0);
        var col = lerpColor(red, green, this.health);

        if(this.canibal) col = color(0);

        //draw hooman
        fill(col);
        stroke(col);
        strokeWeight(this.r);
        line(0, 0, 0, 10);
        ellipse(0, -5, this.r);
    }
    pop();
};
