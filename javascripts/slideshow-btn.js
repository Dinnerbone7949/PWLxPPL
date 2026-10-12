let rightallowed = true;
let leftallowed = true;
let scrolls;
document.getElementById("movierow").addEventListener("scroll",  function() {
    scrolls = document.getElementById("movierow").scrollLeft;
    rightbtn();
    leftbtn();
});

function right() {
    if (rightallowed) {
        rightallowed = false;
        setTimeout(() => {
            rightallowed = true;
        }, 650);
        const width = document.getElementById("movierow").clientWidth;
        const move = width / 5 - 43;

        document.getElementById("movierow").scrollBy({
            left: move,
            behavior: "smooth"
        });   
    }
    if(scrolls >= 942) {
        scrolls = 944;
        document.getElementById("movierow").scrollLeft = 944;
    }
}

function left() {
    if (leftallowed) {
        leftallowed = false;
        setTimeout(() => {
            leftallowed = true;
        }, 650);
        const width = document.getElementById("movierow").clientWidth;
        const move = width / 5 - 43;

        document.getElementById("movierow").scrollBy({
            left: -move,
            behavior: "smooth"
        });
    }
    if(scrolls <= 10) {
        scrolls = 0;
        document.getElementById("movierow").scrollLeft = 0;
    }
}

function rightbtn(){
    if (scrolls >= 944) {
        document.getElementById("rightbtn").style.visibility = "hidden";
    }
    else {
        document.getElementById("rightbtn").style.visibility = "visible";
    }
}

function leftbtn(){
    if (scrolls <= 1) {
        document.getElementById("leftbtn").style.visibility = "hidden";
    }
    else {
        document.getElementById("leftbtn").style.visibility = "visible";
    }
}

document.getElementById("leftbtn").style.visibility = "hidden"