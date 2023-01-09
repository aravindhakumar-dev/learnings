console.clear();
var log = console.log.bind(console);

var init = function () {
    var carousel = document.querySelector(".carousel");
    var items = document.querySelectorAll(".item");
    var prev = document.querySelector(".prev");
    var next = document.querySelector(".next");
    var currdeg = 0;

    prev.addEventListener("click", rotate.bind(null, "prev"));
    next.addEventListener("click", rotate.bind(null, "next"));


    function rotate(direction, event) {

        log("DIRECTION", direction);

        if (direction == "next") {
            currdeg = currdeg - 60;
        }
        if (direction == "prev") {
            currdeg = currdeg + 60;
        }

        TweenLite.to(carousel, 1, { rotationY: currdeg });
        TweenLite.to(items, 1, { rotationY: -currdeg });
    }
}