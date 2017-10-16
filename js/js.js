var a;

function myfunc(a) {
    if (a == "nhome") {
        document.getElementById("slider").style.left = "0px";
        $('#navbar').css("visibility", "visible");
        $('#navbar1').css("visibility", "hidden")
    } else if (a == "nabout") {
        $('#slider').animate({
            "left": "-1366px"
        }, {
            duration: 1000,
            easing: 'linear'
        });
        $('#navbar').css("visibility", "hidden");
        $('#navbar1').css("visibility", "visible")
    } else if (a == "nreservation") {
        $('#slider').animate({
            "left": "-2732px"
        }, {
            duration: 1000,
            easing: 'linear'
        });
        $('#navbar1').css("visibility", "visible")
    } else if (a == "nrooms") {
        $('#slider').animate({
            "left": "-4098px"
        }, {
            duration: 1000,
            easing: 'linear'
        });
        $('#navbar1').css("visibility", "visible")
    } else if (a == "npackages") {
        $('#slider').animate({
            "left": "-5464px"
        }, {
            duration: 1000,
            easing: 'linear'
        });
        $('#navbar1').css("visibility", "visible")
    } else if (a == "ncontact") {
        $('#slider').animate({
            "left": "-6830px"
        }, {
            duration: 1000,
            easing: 'linear'
        });
        $('#navbar1').css("visibility", "visible")
    } else {
        $('#slider').animate({
            "left": "0px"
        }, {
            duration: 1000,
            easing: 'linear'
        })
    }
};
var mover = 0;
window.onload = slider;

function slider() {
    var currentValue = $('#currentValue');
    $('#defaultSlider').change(function() {
        currentValue.html(this.value)
    });
    $('#defaultSlider').change();
    var currentValue1 = $('#currentValue1');
    $('#defaultSlider1').change(function() {
        currentValue1.html(this.value)
    });
    $('#defaultSlider1').change();
    $('#arc1 #right').click(function() {
        if (mover > -184) {
            mover = mover - 184
        }
        $('#arc1 .imgwrapper figure').animate({
            "margin-left": mover + "px"
        })
    });
    $('#arc1 #left').click(function() {
        if (mover < 0) {
            mover = mover + 184
        }
        $('#arc1 .imgwrapper figure').animate({
            "margin-left": mover + "px"
        })
    });
    $('#arc2 #right').click(function() {
        if (mover > -184) {
            mover = mover - 184
        }
        $('#arc2 .imgwrapper figure').animate({
            "margin-left": mover + "px"
        })
    });
    $('#arc2 #left').click(function() {
        if (mover < 0) {
            mover = mover + 184
        }
        $('#arc2 .imgwrapper figure').animate({
            "margin-left": mover + "px"
        })
    });
    $('#arc3 #right').click(function() {
        if (mover > -184) {
            mover = mover - 184
        }
        $('#arc3 .imgwrapper figure').animate({
            "margin-left": mover + "px"
        })
    });
    $('#arc3 #left').click(function() {
        if (mover < 0) {
            mover = mover + 184
        }
        $('#arc3 .imgwrapper figure').animate({
            "margin-left": mover + "px"
        })
    });
    $('.imgwrapper img').click(function() {
        var isrc = $(this).attr("src");
        document.getElementById("lightbox").setAttribute("src", isrc);
        document.getElementById("lightbox").style.display = "block";
        $(document).keyup(function(e) {
            if (e.keyCode == 27) {
                document.getElementById("lightbox").style.display = "none"
            }
        })
    })
};

function formfunc(e) {
    alert("Thank You For Your Feedback");
    document.getElementsByTagName("form")[1].reset();
    e.preventDefault()
};

function formfunc1(e) {
    alert("Thank You For Reservation");
    document.getElementsByTagName("form")[0].reset();
    e.preventDefault()
};