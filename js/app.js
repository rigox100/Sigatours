window.addEventListener('load', function() {
    new Glider(document.querySelector('.carousel__lista'), {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: '.carousel__indicadores',
        arrows: {
            prev: '.carousel__anterior',
            next: '.carousel__siguiente'
        },
        responsive: [{
            // screens greater than >= 775px
            breakpoint: 450,
            settings: {
                // Set to `auto` and provide item width to adjust to viewport
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }, {
            // screens greater than >= 1024px
            breakpoint: 800,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 4
            }
        }]
    });

});

var slider = new Glider(document.querySelector('.carousel__lista'), {
    slidesToScroll: 1,
    slidesToShow: 1,
    dots: '.carousel__indicadores',
    arrows: {
        prev: '.carousel__anterior',
        next: '.carousel__siguiente'
    },
    responsive: [{
        // screens greater than >= 775px
        breakpoint: 450,
        settings: {
            // Set to `auto` and provide item width to adjust to viewport
            slidesToShow: 2,
            slidesToScroll: 2
        }
    }, {
        // screens greater than >= 1024px
        breakpoint: 800,
        settings: {
            slidesToShow: 4,
            slidesToScroll: 4
        }
    }]
});

slideAutoPaly(slider, '.carousel__lista');

function slideAutoPaly(glider, selector, delay = 5000, repeat = true) {
    let autoplay = null;
    const slidesCount = glider.track.childElementCount;
    let nextIndex = 1;
    let pause = true;

    function slide() {
        autoplay = setInterval(() => {
            if (nextIndex >= slidesCount) {
                if (!repeat) {
                    clearInterval(autoplay);
                } else {
                    nextIndex = 0;
                }
            }
            glider.scrollItem(nextIndex++);
        }, delay);
    } 

    slide();

    var element = document.querySelector(selector);
    element.addEventListener('mouseover', (event) => {
        if (pause) {
            clearInterval(autoplay);
            pause = false;
        }
    }, 300);

    element.addEventListener('mouseout', (event) => {
        if (!pause) {
            slide();
            pause = true;
        }
    }, 300);
}



// =====================================Categor??a 2=======================
window.addEventListener('load', function() {
    new Glider(document.querySelector('.carousel__listas'), {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: '.carousel__indicadoress',
        arrows: {
            prev: '.carousel__anteriors',
            next: '.carousel__siguientes'
        },
        responsive: [{
            // screens greater than >= 775px
            breakpoint: 450,
            settings: {
                // Set to `auto` and provide item width to adjust to viewport
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }, {
            // screens greater than >= 1024px
            breakpoint: 800,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 4
            }
        }]
    });

});



var slider = new Glider(document.querySelector('.carousel__listas'), {
    slidesToScroll: 1,
    slidesToShow: 1,
    dots: '.carousel__indicadoress',
    arrows: {
        prev: '.carousel__anteriors',
        next: '.carousel__siguientes'
    },
    responsive: [{
        // screens greater than >= 775px
        breakpoint: 450,
        settings: {
            // Set to `auto` and provide item width to adjust to viewport
            slidesToShow: 2,
            slidesToScroll: 2
        }
    }, {
        // screens greater than >= 1024px
        breakpoint: 800,
        settings: {
            slidesToShow: 4,
            slidesToScroll: 4
        }
    }]
});

slideAutoPaly(slider, '.carousel__listas');

function slideAutoPaly(glider, selector, delay = 5000, repeat = true) {
    let autoplay = null;
    const slidesCount = glider.track.childElementCount;
    let nextIndex = 1;
    let pause = true;

    function slide() {
        autoplay = setInterval(() => {
            if (nextIndex >= slidesCount) {
                if (!repeat) {
                    clearInterval(autoplay);
                } else {
                    nextIndex = 0;
                }
            }
            glider.scrollItem(nextIndex++);
        }, delay);
    }

    slide();

    var element = document.querySelector(selector);
    element.addEventListener('mouseover', (event) => {
        if (pause) {
            clearInterval(autoplay);
            pause = false;
        }
    }, 300);

    element.addEventListener('mouseout', (event) => {
        if (!pause) {
            slide();
            pause = true;
        }
    }, 300);
}

// =====================================Categor??a 3=======================
window.addEventListener('load', function() {
    new Glider(document.querySelector('.carousel__listass'), {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: '.carousel__indicadoresss',
        arrows: {
            prev: '.carousel__anteriorss',
            next: '.carousel__siguientess'
        },
        responsive: [{
            // screens greater than >= 775px
            breakpoint: 450,
            settings: {
                // Set to `auto` and provide item width to adjust to viewport
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }, {
            // screens greater than >= 1024px
            breakpoint: 800,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 4
            }
        }]
    });

});



var slider = new Glider(document.querySelector('.carousel__listass'), {
    slidesToScroll: 1,
    slidesToShow: 1,
    dots: '.carousel__indicadoresss',
    arrows: {
        prev: '.carousel__anteriorss',
        next: '.carousel__siguientess'
    },
    responsive: [{
        // screens greater than >= 775px
        breakpoint: 450,
        settings: {
            // Set to `auto` and provide item width to adjust to viewport
            slidesToShow: 2,
            slidesToScroll: 2
        }
    }, {
        // screens greater than >= 1024px
        breakpoint: 800,
        settings: {
            slidesToShow: 4,
            slidesToScroll: 4
        }
    }]
});

slideAutoPaly(slider, '.carousel__listass');

function slideAutoPaly(glider, selector, delay = 5000, repeat = true) {
    let autoplay = null;
    const slidesCount = glider.track.childElementCount;
    let nextIndex = 1;
    let pause = true;

    function slide() {
        autoplay = setInterval(() => {
            if (nextIndex >= slidesCount) {
                if (!repeat) {
                    clearInterval(autoplay);
                } else {
                    nextIndex = 0;
                }
            }
            glider.scrollItem(nextIndex++);
        }, delay);
    }

    slide();

    var element = document.querySelector(selector);
    element.addEventListener('mouseover', (event) => {
        if (pause) {
            clearInterval(autoplay);
            pause = false;
        }
    }, 300);

    element.addEventListener('mouseout', (event) => {
        if (!pause) {
            slide();
            pause = true;
        }
    }, 300);
}