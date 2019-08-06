$(function() {
    //fading effect
    // $('#wrapper-ck-bikerides').css('display', 'none');
    // $('#wrapper-ck-bikerides').fadeIn(4000);
    
    //configuration
    var width = 720;
    var animationSpeed = 1000;
    var pause = 4000;
    var currentSlide = 1

    //cache DOM
    var $slider = $('#slider');
    var $slideContainer = $slider.find('.slides');
    var $slides = $slideContainer.find('.slide');

    var interval;

    function startSlider() {
        interval = setInterval(function() {
        $slideContainer.animate({'margin-left': '-='+width}, animationSpeed, function () {
            currentSlide++;
            if(currentSlide === $slides.length) {
                currentSlide = 1;
                $slideContainer.css('margin-left', 0);
            };
        })
        }, pause);
    }
    function stopSlider() {
        clearInterval(interval);
    }

    $slider.on('mouseenter', stopSlider).on('mouseleave', startSlider);
    startSlider();

})

$('body').on('change', update);

$('body').on('click', update);

//the animator

function display(lc) {

    lc = Math.round(lc);

    console.log('lc', lc);
    lc = lc.toString();
    lc = lc.split('')
    lc = lc.reverse();

    let p_100000 = 0;

    if (lc[5]) {
        p_100000 = lc[5];
    }

    let p_10000 = 0;

    if (lc[4]) {
        p_10000 = lc[4];
    }

    let p_1000 = 0;

    if (lc[3]) {
        p_1000 = lc[3];
    }

    let p_100 = 0;

    if (lc[2]) {
        p_100 = lc[2];
    }

    let p_10 = 0;
    if (lc[1]) {
        p_10 = lc[1];
    }

    let p_1 = lc[0];

    let f = 30;

    $('.n-100000').animate({ 'margin-top': p_100000 * -f });
    $('.n-10000').animate({ 'margin-top': p_10000 * -f });
    $('.n-1000').animate({ 'margin-top': p_1000 * -f });
    $('.n-100').animate({ 'margin-top': p_100 * -f });
    $('.n-10').animate({ 'margin-top': p_10 * -f });
    $('.n-1').animate({ 'margin-top': p_1 * -f });
}



function update() {


    let skill = $('#skill>option:selected').val();
    let whatskill = $('#skill>option:selected').text();
    skill = parseInt(skill);
    skill = skill ? skill : 0;

    let data = $('.data>input:checked').val();
    data = parseInt(data);

    data = data ? data : 0;

    let extra = 0;

    $('.extra>input:checked').each(function () {
        let x = parseInt($(this).val());
        if (x > 0) {
            extra += x;
        }
    });

    let lc = skill + data + extra;
    choice(whatskill, data, lc)
}

function choice(whatskill, data, lc) {

    $('#lc').val(lc);
    display(lc);
}




