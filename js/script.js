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

function year() {
    let x, text;

    x = document.getElementById("aar").value;

    if (isNaN(x) || x != 1617) {
        text = "Fel svar, prova igen!";
    } else {
        text = "Woww, Grattis! Kanske du har tänkt dig att bli professor i historia?";

    }
    document.getElementById("demo").innerHTML = text;

}

function peace() {
    let x, text;

    x = document.getElementById("aar").value;

    if (isNaN(x) || x != 1679) {
        text = "Fel svar, prova igen!";
    } else {
        text = "Woww, Grattis! Kanske du har tänkt dig att bli professor i historia?";
    }
    document.getElementById("demo").innerHTML = text;
}

function population() {
    let x, text;

    x = document.getElementById("aar").value;

    if (isNaN(x) || x < 280000 || x > 400000) {
        text = "Fel svar, prova igen!"
    } else {
        text = "Grattis, du är ganska nära. Du kan trycka på 'visa svaret' för att se det riktiga svaret";
    }
    document.getElementById("demo").innerHTML = text;
}

function people() {
    let x, text;

    x = document.getElementById("invaanare").value;

    if (isNaN(x) || x != 1353) {
        text = "fel svar, prova igen!"
    } else {
        text = "Woww, rätt gissat, grattis!"
    }
    document.getElementById("demo").innerHTML = text;
}

function kilometer() {
    let x, text;

    x = document.getElementById("avstand").value;

    if (isNaN(x) || x < 50 || x > 150) {
        text = "Fel svar, kanske dags att studera Skånekartan!"
    } else {
        text = "Grattis, du är ganska nära. Du kan trycka på 'visa svaret' för att se avståndet! "
    }
    document.getElementById("demo").innerHTML = text;

}

function kernen() {
    let x, text;

    x = document.getElementById("m").value;

    if (isNaN(x) || x != 35) {
        text = "Fel svar. Prova igen!"
    } else {
        text = "Grattis! Du är så duktig!"
    }
    document.getElementById("demo").innerHTML = "text";
}

function update() {


    let contract = $('#contract>option:selected').val();
    let whatContract = $('#contract>option:selected').text();
    contract = parseInt(contract);
    contract = contract ? contract : 0;

    let data = $('.data>input:checked').val();
    data = parseInt(data);

    data = data ? data : 0;

    let extra = 0;
    let whatExtra = $('.extra>input:checked').parent().find('label').text();

    $('.extra>input:checked').each(function () {
        let x = parseInt($(this).val());
        if (x > 0) {
            extra += x;
        }
    });

    let lc = contract + data + extra;
    rabat(whatContract, data, whatExtra, lc)
}

function rabat(whatContract, data, whatExtra, lc) {

    $('#lc').val(lc);
    display(lc);
}




