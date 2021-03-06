var windowWidth;
var windowHeight;

function backgroundCover(selector){
    $(selector).each(function(){

        var $container = $(this);
        var $container_width = $(this).outerWidth();
        var $container_height = $(this).outerHeight();

        var image_url = $container.css('background-image');
        var image;
        image_url = image_url.match(/^url\("?(.+?)"?\)$/);

        if (image_url[1]) {
            image_url = image_url[1];
            image = new Image();

            image.src = image_url;

            // just in case it is not already loaded
            $(image).load(function () {
                var cW = $container_width;
            var cH = $container_height;
            var iW = image.width;
            var iH = image.height;

            // If image is to narrow scale to match container width
            if (iW < cW) {
                var ratio = cW / iW;
                iW = cW;
                iH = iH * ratio;
            }

            // If image is too short scale to match container height
                if (iH < cH) {
                var ratio = cH / iH;
                iH = cH;
                iW = iW * ratio;
            }

            // If image is bigger in both dimensions scale down to match an edge
            if (iW > cW && iH > cH) {
                var widthRatio = cW / iW;
                var heightRatio = cH / iH;

                if (widthRatio > heightRatio) {
                    iW = cW;
                    iH = iH * widthRatio;
                } else {
                    iH = cH;
                    iW = iW * heightRatio;
                }
            }

            $container.css({ 
                    "background-size": iW+"px "+iH+"px"
                });
            });
        }
    });
}

function headerResize(){
    windowWidth = $(window).width();
    windowHeight = $(window).height();

    $('#main-header').css({
        height : windowHeight,
        width : windowWidth
    });
}

function menuAnimation(){
    windowWidth = $(window).width();
    windowHeight = $(window).height();

    windowHeight = (windowHeight/2) - 100;

    if ($(this).scrollTop() > windowHeight){
        $('#main-menu').css({
            top : 0
        });
    } else if ($(this).scrollTop() < windowHeight) {
        $('#main-menu').css({
            top : -100
        });
    }
}

function aboutMargin(){
    windowHeight = $(window).height();

    $('#quienes-somos').css({
        'margin-top': windowHeight
    });
}

function adjustable(selector, height) {
    var maxHeight = -1;

    $(selector).each(function() {
        $(this).height('auto');
    });

    $(selector).each(function() {
        maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
    });

    if (maxHeight < height) {
        maxHeight = 'auto';
    }

    $(selector).each(function() {
        $(this).height(maxHeight);
    });
}

function smoothScrollResponsive(){
    windowWidth = $(window).width();

    $('#arrow-btn').smoothScroll({
        offset : -99,
        speed: 'auto',
    });

    $('#main-menu a').smoothScroll({
        offset : -99,
        speed: 'auto',
    });

    if (windowWidth < 767) {
        $('#main-menu a').click(function() {
            $('#bs-example-navbar-collapse-1').collapse('toggle');
        });
    }
    
}

function contactFormValidation(){
    $('#contactForm').formValidation({
        framework: 'bootstrap',
        message: 'Por favor introduce la información solicitada.',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'Por favor introduce tu nombre.'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Por favor introduce tu email.'
                    },
                    emailAddress: {
                        message: 'Por favor verifíca tu email.'
                    }
                }
            },
        }
    }).on('success.form.fv', function(e) {

      e.preventDefault();

      var $form = $(e.target);

      var $response_container = $('#response');

      $form.find('button').attr('disabled', 'disabled');
      $form.find('button').addClass('disabled');

      var formData = $form.serialize();

      $.ajax({
          type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
          url         : base_url+'/send-email', // the url where we want to POST
          data        : formData, // our data object
          dataType    : 'json', // what type of data do we expect back from the server
          encode      : true
      })
      .done(function(data) {

          if (!$response_container.is(':visible')) {
              $response_container.slideToggle('fast');
          }

          $response_container.html(data.message);

          if (data.status == 'error') {

              $response_container.addClass('alert-danger');

          }else{

              $response_container.addClass('alert-success');

              $form.formValidation('resetForm', true);
          }

          $form.find('button').removeAttr('disabled');
          $form.find('button').removeClass('disabled');

      });
    });
}

$(document).ready(function(){

    smoothScrollResponsive();
    headerResize();
    backgroundCover('#main-header');
    aboutMargin();
    adjustable('.products-grid--single p', 20);

    contactFormValidation();

    if (windowWidth > 767) {
        adjustable('.marcas-single p', 20);
    }

    $('input, textarea').placeholder();

    $(window).resize(function(){
          clearTimeout(timeOut);
          timeOut = setTimeout(function(){
              smoothScrollResponsive();
              headerResize();
              backgroundCover('#main-header');
              aboutMargin();
              adjustable('.products-grid--single p', 20);
              if (windowWidth > 767) {
                adjustable('.marcas-single p', 20);
              }
          }, 300);
    });

    $(window).scroll(function() {
        menuAnimation();
    });

});