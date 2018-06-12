(function($) {

    /**
     * Init hero images
     * Append them to #hero with the data below
     */
     var heroImgs = {
        0: {
            fileName: 'hero_00.png',
            x: '23%',
            y: '2%',
            directionx: 'left',
            directiony: 'top',
        },
        1: {
            fileName: 'hero_01.png',
            x: '23%',
            y: '4%',
            directionx: 'right',
            directiony: 'top',
        },
        2: {
            fileName: 'hero_02.png',
            x: '1%',
            y: '15%',
            directionx: 'right',
            directiony: 'top',
        },
        3: {
            fileName: 'hero_03.png',
            x: '5%',
            y: '18%',
            directionx: 'left',
            directiony: 'top',
        },
        4: {
            fileName: 'hero_04.png',
            x: '16%',
            y: '34%',
            directionx: 'right',
            directiony: 'top',
        },
        5: {
            fileName: 'hero_05.png',
            x: '25%',
            y: '34%',
            directionx: 'left',
            directiony: 'bottom',
        },
        6: {
            fileName: 'hero_06.png',
            x: '28%',
            y: '24%',
            directionx: 'right',
            directiony: 'bottom',
        },
        7: {
            fileName: 'hero_07.png',
            x: '4%',
            y: '20%',
            directionx: 'left',
            directiony: 'bottom',
        },
        8: {
            fileName: 'hero_08.png',
            x: '3%',
            y: '13%',
            directionx: 'right',
            directiony: 'bottom',
        },
        9: {
            fileName: 'hero_09.png',
            x: '17%',
            y: '1%',
            directionx: 'left',
            directiony: 'bottom',
        },
        10: {
            fileName: 'hero_10.png',
            x: '39%',
            y: '2%',
            directionx: 'right',
            directiony: 'bottom',
        }
    }

    // loop through data and add images to #hero
    for(var key in heroImgs) {
        var fileName    = heroImgs[key].fileName;
        var x           = heroImgs[key].x;
        var y           = heroImgs[key].y;
        var directionx  = heroImgs[key].directionx;
        var directiony  = heroImgs[key].directiony;
        var img         = document.createElement('img');
        var mobileDist  = '160px';

        img.src = '/wp-content/themes/maize/images/' + fileName;
        img.style.position = 'absolute';

        // move the images left or right on mobile
        if(document.documentElement.clientWidth < 768) {
            x = 'calc(' + x + ' - ' + mobileDist + ')';
        }

        // set absolute left or right position
        if(directionx === 'left') {
            img.style.left = x;
        } else {
            img.style.right = x;
        }

        // set absolute top or bottom position
        if(directiony === 'top') {
            img.style.top = y;
        } else {
            img.style.bottom = y;
        }

        // add class for hover effects
        img.classList.add('hero-img');

        // append to #hero
        document.getElementById('hero').appendChild(img);
    }

    /**
     * Scroll to About Section on click
     */
    $('#about-link').on('click', function(e) {
        e.preventDefault();

        // get href from anchor
        var href = $(this).attr('href');

        // scroll to id that matches href
        $('html, body').animate({scrollTop: $(href).offset().top}, 'slow');
    })

    /**
    * Open a modal when a link with a matching data-id attribute is clicked
    */
    if($('.page-template-home').length) {
        $(document).on('click', '.fig-image-card', function(e) {
            e.preventDefault();

            // get the id and use it to get the target modal
            var id = $(this).data('id');
            var targetModal = $('.modal[data-id="' + id +  '"]');
            
            // open the modal
            targetModal.addClass('modal-open');

            // prevent the body from scrolling
            $('html, body').addClass('halt');
        });

        /**
        * Close the modal when the outer area or close button is clicked
        */
        $(document).on('click', '.modal, .modal-close', function(e) {
            // if they clicked this actually (no bubbling) then close the modal
            if(e.target === this) {

                // get the id and use it to get the target modal
                var id = $(this).data('id');
                var targetModal = $('.modal[data-id="' + id +  '"]');

                // close modal
                targetModal.removeClass('modal-open');

                // allow body to scroll again
                $('html, body').removeClass('halt');
            }
        });
    }

    /**
     * Controls for the custom number input element
     */
    
    // add elements after the number input to be used as custom controls
    var controls = '<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>';
    $(controls).insertAfter('.quantity input');

    // add listeners for each of the controls
    $('.quantity').each(function() {
        var spinner     = $(this);
        var input       = spinner.find('input[type="number"]');
        var btnUp       = spinner.find('.quantity-up');
        var btnDown     = spinner.find('.quantity-down');
        var min         = input.attr('min');
        var max         = input.attr('max');

        // update value when the addition button is clicked
        btnUp.on('click', function(e) {
            var oldValue = parseFloat(input.val());
            if(oldValue >= max) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue + 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
        });

        // update value when the subtraction button is clicked
        btnDown.on('click', function(e) {
            var oldValue = parseFloat(input.val());
            if (oldValue <= min) {
                var newVal = oldValue;
            } else {
                var newVal = oldValue - 1;
            }
            spinner.find("input").val(newVal);
            spinner.find("input").trigger("change");
        });
    });


    /**
     * Form variables
     */
    var form = $('#order-form');
    var errorMsg = $('.error-message');
    var nextBtn = $('#form-next-btn');
    var formWindow0 = $('#form-window-0');
    var formWindow1 = $('#form-window-1');
    var formWindow2 = $('#form-window-2');
    var formWindows = $('.form-window');
    var formWindowMobile = $('.form-windows-bg-mobile');
    var formMobile = $('#order-form-mobile');


    /**
     * Remove form windows based on screen width to prevent two forms
     */
    if($(window).width() <= 768) {
        // remove desktop form
        $('.form-windows-bg').remove();
    } else {
        // remove mobile form
        $('.form-windows-bg-mobile').remove();
    }


    /**
     * Match height for order form windows
     */
    formWindows.matchHeight({
        byRow: false,
    });


    /**
     * Open forms initially
     */
    $('#open-forms').on('click', function(e) {
        e.preventDefault();

        // add class to open form windows
        $('.form-windows-bg').addClass('form-windows-bg-open');
        formWindow0.show();
        formWindow1.show();
        formWindow2.show();

        // prevent the body from scrolling
        $('html, body').addClass('halt');

        // add classes just in case to the inputs on window 1 so validation works
        formWindow1.find('input[type=text]').addClass('ignore-validation');
    });


    /**
     * Open Mobile form
     */
    $('#open-mobile-form').on('click', function(e) {
        formWindowMobile.addClass('form-windows-bg-mobile-open');

        // prevent the body from scrolling
        $('html, body').addClass('halt');
    });


    /**
     * Close button for forms
     */
    $('.form-close').on('click', function(e) {
        // remove class to close form windows
        $('.form-windows-bg').removeClass('form-windows-bg-open');

        // remove class to close the mobile form
        formWindowMobile.removeClass('form-windows-bg-mobile-open');

        // enable the body to scroll
        $('html, body').removeClass('halt');
    });


    /**
     * Form 'back button' controls on window 1 (not 0)
     */
    $('#back-btn').on('click', function(e) {
        // show window 0
        formWindow0.show();

        // add classes back to the inputs on window 1 so validation works
        formWindow1.find('input[type=text]').addClass('ignore-validation');
    });


    /**
     * Form 'close button' controls on window 2 (not 1 or 0)
     */
    $('#success-close-btn').on('click', function(e) {
        // remove class to close form windows
        $('.form-windows-bg').removeClass('form-windows-bg-open');

        // enable the body to scroll
        $('html, body').removeClass('halt');
    });


    /**
     * Form validation options
     */
     form.validate({
        // ignore fields with this class. applied to the second window
        // so that the first window can be validated first. the class is
        // removed once the first window closes so that the second form can be validated
        ignore: '.ignore-validation',

        // change error element
        errorElement: 'span',

        // set the rules
        rules: {
            'date': 'required',
            'time': 'required',
            'address': 'required',
            'zipcode': 'required',
            'first-name': 'required',
            'last-name': 'required',
            'email': 'required',
            'phone-number': 'required',
        },
        
        // set the error messages
        messages: {
            'date': { required: 'Please complete all required fields'},
            'time': { required: 'Please complete all required fields'},
            'address': { required: 'Please complete all required fields'},
            'zipcode': { required: 'Please complete all required fields'},
            'first-name': { required: 'Please complete all required fields'},
            'last-name': { required: 'Please complete all required fields'},
            'email': { required: 'Please complete all required fields'},
            'phone-number': { required: 'Please complete all required fields'},
        },

        // combine all error messages into 1
        groups: {
            fields: 'date time address zipcode first-name last-name email phone-number'
        },

        // set div to display error message
        errorLabelContainer: errorMsg,
    });

    /**
     * Validate mobile form
     */
    formMobile.validate({
        // ignore fields with this class. applied to the second window
        // so that the first window can be validated first. the class is
        // removed once the first window closes so that the second form can be validated
        ignore: '.ignore-validation',

        // change error element
        errorElement: 'span',

        // set the rules
        rules: {
            'date': 'required',
            'time': 'required',
            'address': 'required',
            'zipcode': 'required',
            'first-name': 'required',
            'last-name': 'required',
            'email': 'required',
            'phone-number': 'required',
        },
        
        // set the error messages
        messages: {
            'date': { required: 'Please complete all required fields'},
            'time': { required: 'Please complete all required fields'},
            'address': { required: 'Please complete all required fields'},
            'zipcode': { required: 'Please complete all required fields'},
            'first-name': { required: 'Please complete all required fields'},
            'last-name': { required: 'Please complete all required fields'},
            'email': { required: 'Please complete all required fields'},
            'phone-number': { required: 'Please complete all required fields'},
        },

        // combine all error messages into 1
        groups: {
            fields: 'date time address zipcode first-name last-name email phone-number'
        },

        // set div to display error message
        errorLabelContainer: errorMsg,
    });

    // validate quantity elements
    // either 0 or 3 and above since the min order is 3
    // $.validator.addMethod('quantity', function(val, el) {
    //     return (val === '0' || val >= '3');
    // }, '');


    /**
     * Handle order form 'next' button
     */
    nextBtn.on('click', function(e) {
        // if the form on window 0 is valid
        // remove the 'ignore-validation' classes on the second window
        // so that is can be validated. hide the first form window
        if(form.valid()) {
            $('input').removeClass('ignore-validation');
            formWindow0.hide();
        }
    });


    /**
     * Handle desktop order form submission
     */
    form.on('submit', function(e) {
        e.preventDefault();

        console.log('form submitted', $(this));

        // validate the form
        if(form.valid()) {

            // submit form via ajax
            $.ajax({
                type: form.attr('method'),
                
                // this var is stored in functions.php
                url: global_vars_array.ajaxurl,
                data: {
                    query: form.serialize(),
                    action: form.attr('action')
                },
                dataType: 'json',
                success: function(response) {
                    console.log('success response:', response);

                    // if there is a success message, hide window 2
                    if(response.success) {
                        formWindow1.hide();
                    }
                },
                error: function(response) {
                    console.log('error response:', response);
                },
                complete: function(response) {
                    // console.log('response', response);
                }
            });
        }
    });


    /**
     * Handle mobile order form submission
     */
    formMobile.on('submit', function(e) {
        e.preventDefault();

        console.log('form submitted');

        // validate the form
        if(formMobile.valid()) {

            // submit form via ajax
            $.ajax({
                type: formMobile.attr('method'),
                
                // this var is stored in functions.php
                url: global_vars_array.ajaxurl,
                data: {
                    query: formMobile.serialize(),
                    action: formMobile.attr('action')
                },
                dataType: 'json',
                success: function(response) {
                    console.log('success response:', response);

                    // if there is a success message, hide the mobile form window
                    if(response.success) {
                        // remove class to close the mobile form
                        formWindowMobile.removeClass('form-windows-bg-mobile-open');

                        // enable the body to scroll
                        $('html, body').removeClass('halt');
                    }
                },
                error: function(response) {
                    console.log('error response:', response);
                },
                complete: function(response) {
                    // console.log('response', response);
                }
            });
        }
    });
    
})(jQuery);