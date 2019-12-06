let x = document.getElementById('row').offsetLeft;
let y = document.getElementById('row').offsetTop;
let c = document.getElementById('row').getBoundingClientRect();
const finish = document.getElementById('finish').getBoundingClientRect();
window.onkeydown = function move() {
    if  (event.keyCode===37) {
        x-=5;
        document.getElementById('row').style.left = x + 'px';
        document.getElementById('row').style.transition = 0.5 + 's';
        c = document.getElementById('row').getBoundingClientRect();
        if  (c===finish) {
            alert("Happy NEW YEAR");
        }
    }   else if (event.keyCode===39) {
        x+=5;
        document.getElementById('row').style.left = x + 'px';
        document.getElementById('row').style.transition = 0.5 + 's';
        c = document.getElementById('row').getBoundingClientRect();
        if  (c===finish) {
            alert("Happy NEW YEAR");
        }
    }   else if (event.keyCode===38) {
        y-=5;
        document.getElementById('row').style.top = y + 'px';
        document.getElementById('row').style.transition = 0.5 + 's';
        c = document.getElementById('row').getBoundingClientRect();
        if  (c===finish) {
            alert("Happy NEW YEAR");
        }
    }   else if (event.keyCode===40) {
        y+=5;
        document.getElementById('row').style.top = y + 'px';
        document.getElementById('row').style.transition = 0.5 + 's';
        c = document.getElementById('row').getBoundingClientRect();
        if  (c===finish) {
            alert("Happy NEW YEAR");
        }
    }   else if (event.keyCode===37 && event.keyCode===38) {
        x-=5;
        y-=5;
        document.getElementById('row').style.left = x + 'px';
        document.getElementById('row').style.top = y + 'px';
        document.getElementById('row').style.transition = 0.5 + 's';
        c = document.getElementById('row').getBoundingClientRect();
        if  (c===finish) {
            alert("Happy NEW YEAR");
        }
    }   else if (event.keyCode===39 && event.keyCode===38) {
        x+=5;
        y-=5;
        document.getElementById('row').style.left = x + 'px';
        document.getElementById('row').style.top = y + 'px';
        document.getElementById('row').style.transition = 0.5 + 's';
        c = document.getElementById('row').getBoundingClientRect();
        if  (c===finish) {
            alert("Happy NEW YEAR");
        }
    }   else if (event.keyCode===37 && event.keyCode===40) {
        x-=5;
        y+=5;
        document.getElementById('row').style.left = x + 'px';
        document.getElementById('row').style.top = y + 'px';
        document.getElementById('row').style.transition = 0.5 + 's';
        c = document.getElementById('row').getBoundingClientRect();
        if  (c===finish) {
            alert("Happy NEW YEAR");
        }
    }   else if (event.keyCode===39 && event.keyCode===40) {
        x+=5;
        y+=5;
        document.getElementById('row').style.left = x + 'px';
        document.getElementById('row').style.top = y + 'px';
        document.getElementById('row').style.transition = 0.5 + 's';
        c = document.getElementById('row').getBoundingClientRect();
        if  (c===finish) {
            alert("Happy NEW YEAR");
        }
    }
};

console.log(c);
