Math.easeInOutQuad = function(t, b, c, d) {
    t /= d / 2;
    if (t < 1) {
        return c / 2 * t * t + b
    }
    t--;
    return -c / 2 * (t * (t - 2) - 1) + b;
};

var requestAnimFrame = (function() {
    return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || function(callback) {
        window.setTimeout(callback, 1000 / 60);
    };
})();

function scrollTo(to, callback, duration) {
    function move(amount) {
        $("#content").scrollTop(amount);
    }

    function position() {
        return $("#content").scrollTop();
    }
    var start = position();
    var change = $("#"+to).offset().top - 100;
    var currentTime = 0;
    var increment = 20;
    duration = (typeof(duration) === 'undefined') ? 500 : duration;
    var animateScroll = function() {
        currentTime += increment;
        var val = Math.easeInOutQuad(currentTime, start, change, duration);
        move(val);
        if (currentTime < duration) {
            requestAnimFrame(animateScroll);
        } else {
            if (callback && typeof(callback) === 'function') {
                callback();
            }
        }
    };
    animateScroll();
}

function startup(){
    const list = document.getElementById("navigation");
    
    list.addEventListener('click', e => {
        const {
            target
        } = e;
        e.preventDefault();
        const to = target.getAttribute('data-target');
        scrollTo(to, null, 300);
    });
}
