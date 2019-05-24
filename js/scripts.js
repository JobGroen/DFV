/* Nav menu overlay */
$(".sidenav-toggle").click(function () {
    $("body").toggleClass("open-menu");
});

/* Nav menu scroll effect Homepage */
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= $("#header").height()) {
        $("header").addClass("scrolling");
    } else {
        $("header").removeClass("scrolling");
    }
});

/* Review slider */
$("#reviewslider").on('slide.bs.carousel', function(evt) {

    var step = $(evt.relatedTarget).index();

    $('#slider_captions .carousel-caption:not(#caption-'+step+')').fadeOut('fast', function() {
            $('#caption-'+step).fadeIn();
    });

 });

 $('#reviewslider .carousel').carousel({
    interval: 8000
  })

/* Portfolio page photos overlay */
$(document).ready( function() {

    $('.photos-item').hover( function() {
        $(this).find('.img-title').fadeIn(300);
    }, function() {
        $(this).find('.img-title').fadeOut(100);
    });
    
});

/* Portfolio page category filter */
$(function() {
    var $container = $('#photos'),
        $select = $('div#filters select');
    filters = {};

    $container.isotope({
        itemSelector: '.photos-item'
    });
        $select.change(function() {
        var $this = $(this);

        var $optionSet = $this;
        var group = $optionSet.attr('data-filter-group');
    filters[group] = $this.find('option:selected').attr('data-filter-value');

        var isoFilters = [];
        for (var prop in filters) {
            isoFilters.push(filters[prop])
        }
        var selector = isoFilters.join('');

        $container.isotope({
            filter: selector
        });

        return false;
    });
});

function validateForm() {
    document.getElementById('status').innerHTML = "Sending...";
    formData = {
        'name': $('input[name=name]').val(),
        'email': $('input[name=email]').val(),
        'subject': $('input[name=subject]').val(),
        'message': $('textarea[name=message]').val()
    };

    var name = $('input[name=name]');
    var email = $('input[name=email]');
    var subject = $('input[name=subject]');
    var message = $('textarea[name=message]');
    var visual_error = "1px solid red";
    var visual_reset = "0";

    if (name.val() == '') {
        name.css("border", visual_error);
    } else {
        name.css("borer", visual_reset);
    }

    if (email.val() == '' || ! email.val().includes("@")) {
        email.css("border", visual_error);
    } else {
        email.css("border", visual_reset);
    }

    if (subject.val() == '') {
        subject.css("border", visual_error);
    } else {
        subject.css("border", visual_reset);
    }

    if (message.val() == '') {
        message.css("border", visual_error);
    } else {
        message.css("border", visual_reset);
    }
    
    
    $.ajax({
        url: "/wp-content/themes/DFV/mail.php",
        type: "POST",
        data: formData,
        success: function (data, textStatus, jqXHR) {
    
            $('#status').text(data.message);
            if (data.code)
                $('#contact-form').closest('form').find("input[type=text], textarea").val("");
        },
        error: function (jqXHR, textStatus, errorThrown) {
            $('#status').text(jqXHR);
        }
    });
}

/* AOS JS init function */
AOS.init();

// You can also pass an optional settings object
// below listed default settings
AOS.init({
  // Global settings:
  disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
  

  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 400, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});