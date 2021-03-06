
(function ($) {
    "use strict";


    /*==================================================================
    [ Focus input ]*/
    $('.input100').each(function(){
        $(this).on('blur', function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })
    })


    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }

    /*==================================================================
    [ Show pass ]*/
    var showPass = 0;
    $('.btn-show-pass').on('click', function(){
        if(showPass == 0) {
            $(this).next('input').attr('type','text');
            $(this).find('i').removeClass('zmdi-eye');
            $(this).find('i').addClass('zmdi-eye-off');
            showPass = 1;
        }
        else {
            $(this).next('input').attr('type','password');
            $(this).find('i').addClass('zmdi-eye');
            $(this).find('i').removeClass('zmdi-eye-off');
            showPass = 0;
        }

    });


        /*==================================================================
        [ Validate after type ]*/
        $('.validate-input .input100').each(function(){
            $(this).on('blur', function(){
                if(validate(this) == false){
                    showValidate(this);
                }
                else {
                    $(this).parent().addClass('true-validate');
                }
            })
        })


        /*==================================================================
        [ Validate ]*/
        var input = $('.validate-input .input100');

        $('.validate-form').on('submit',function(){
            var check = true;

            for(var i=0; i<input.length; i++) {
                if(validate(input[i]) == false){
                    showValidate(input[i]);
                    check=false;
                }
            }

            return check;
        });


        $('.validate-form .input100').each(function(){
            $(this).focus(function(){
               hideValidate(this);
               $(this).parent().removeClass('true-validate');
            });
        });

         function validate (input) {
            if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
                if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                    return false;
                }
            }
            else {
                if($(input).val().trim() == ''){
                    return false;
                }
            }
        }

        function showValidate(input) {
            var thisAlert = $(input).parent();

            $(thisAlert).addClass('alert-validate');

            $(thisAlert).append('<span class="btn-hide-validate">&#xf135;</span>')
            $('.btn-hide-validate').each(function(){
                $(this).on('click',function(){
                   hideValidate(this);
                });
            });
        }

        function hideValidate(input) {
            var thisAlert = $(input).parent();
            $(thisAlert).removeClass('alert-validate');
            $(thisAlert).find('.btn-hide-validate').remove();
        }
        // Smooth scroll for the navigation menu and links with .scrollto classes
          $(document).on('click', '.nav-menu a, .mobile-nav a, .scrollto', function(e) {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
              e.preventDefault();
              var target = $(this.hash);
              if (target.length) {

                var scrollto = target.offset().top;
                var scrolled = 20;

                if ($('#header').length) {
                  scrollto -= $('#header').outerHeight()

                  if (!$('#header').hasClass('header-scrolled')) {
                    scrollto += scrolled;
                  }
                }

                if ($(this).attr("href") == '#header') {
                  scrollto = 0;
                }

                $('html, body').animate({
                  scrollTop: scrollto
                }, 1500, 'easeInOutExpo');

                if ($(this).parents('.nav-menu, .mobile-nav').length) {
                  $('.nav-menu .active, .mobile-nav .active').removeClass('active');
                  $(this).closest('li').addClass('active');
                }

                if ($('body').hasClass('mobile-nav-active')) {
                  $('body').removeClass('mobile-nav-active');
                  $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
                  $('.mobile-nav-overly').fadeOut();
                }
                return false;
              }
            }
          });

          // Mobile Navigation
          if ($('.nav-menu').length) {
            var $mobile_nav = $('.nav-menu').clone().prop({
              class: 'mobile-nav d-lg-none'
            });
            $('body').append($mobile_nav);
            $('body').prepend('<button type="button" class="mobile-nav-toggle d-lg-none"><i class="icofont-navigation-menu"></i></button>');
            $('body').append('<div class="mobile-nav-overly"></div>');

            $(document).on('click', '.mobile-nav-toggle', function(e) {
              $('body').toggleClass('mobile-nav-active');
              $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
              $('.mobile-nav-overly').toggle();
            });

            $(document).on('click', '.mobile-nav .drop-down > a', function(e) {
              e.preventDefault();
              $(this).next().slideToggle(300);
              $(this).parent().toggleClass('active');
            });

            $(document).click(function(e) {
              var container = $(".mobile-nav, .mobile-nav-toggle");
              if (!container.is(e.target) && container.has(e.target).length === 0) {
                if ($('body').hasClass('mobile-nav-active')) {
                  $('body').removeClass('mobile-nav-active');
                  $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
                  $('.mobile-nav-overly').fadeOut();
                }
              }
            });
          } else if ($(".mobile-nav, .mobile-nav-toggle").length) {
            $(".mobile-nav, .mobile-nav-toggle").hide();
          }

          // Navigation active state on scroll
          var nav_sections = $('section');
          var main_nav = $('.nav-menu, #mobile-nav');

          $(window).on('scroll', function() {
            var cur_pos = $(this).scrollTop() + 80;

            nav_sections.each(function() {
              var top = $(this).offset().top,
                bottom = top + $(this).outerHeight();

              if (cur_pos >= top && cur_pos <= bottom) {
                if (cur_pos <= bottom) {
                  main_nav.find('li').removeClass('active');
                }
                main_nav.find('a[href="#' + $(this).attr('id') + '"]').parent('li').addClass('active');
              }
              if (cur_pos < 300) {
                $(".nav-menu ul:first li:first").addClass('active');
              }
            });
          });

          // Toggle .header-scrolled class to #header when page is scrolled
          $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
              $('#header').addClass('header-scrolled');
            } else {
              $('#header').removeClass('header-scrolled');
            }
          });

          if ($(window).scrollTop() > 100) {
            $('#header').addClass('header-scrolled');
          }

          // Back to top button
          $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
              $('.back-to-top').fadeIn('slow');
            } else {
              $('.back-to-top').fadeOut('slow');
            }
          });

          $('.back-to-top').click(function() {
            $('html, body').animate({
              scrollTop: 0
            }, 1500, 'easeInOutExpo');
            return false;
          });

})(jQuery);
