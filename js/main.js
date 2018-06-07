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
            width: '281',
            height: '180',
            directionx: 'left',
            directiony: 'top',
        },
        1: {
            fileName: 'hero_01.png',
            x: '23%',
            y: '4%',
            width: '200',
            height: '160',
            directionx: 'right',
            directiony: 'top',
        },
        2: {
            fileName: 'hero_02.png',
            x: '1%',
            y: '15%',
            width: '177',
            height: '75',
            directionx: 'right',
            directiony: 'top',
        },
        3: {
            fileName: 'hero_03.png',
            x: '5%',
            y: '18%',
            width: '177',
            height: '75',
            directionx: 'left',
            directiony: 'top',
        },
        4: {
            fileName: 'hero_04.png',
            x: '16%',
            y: '34%',
            width: '177',
            height: '75',
            directionx: 'right',
            directiony: 'top',
        },
        5: {
            fileName: 'hero_05.png',
            x: '25%',
            y: '34%',
            width: '177',
            height: '75',
            directionx: 'left',
            directiony: 'bottom',
        },
        6: {
            fileName: 'hero_06.png',
            x: '28%',
            y: '24%',
            width: '177',
            height: '75',
            directionx: 'right',
            directiony: 'bottom',
        },
        7: {
            fileName: 'hero_07.png',
            x: '4%',
            y: '20%',
            width: '177',
            height: '75',
            directionx: 'left',
            directiony: 'bottom',
        },
        8: {
            fileName: 'hero_08.png',
            x: '3%',
            y: '13%',
            width: '177',   
            height: '75',
            directionx: 'right',
            directiony: 'bottom',
        },
        9: {
            fileName: 'hero_09.png',
            x: '17%',
            y: '1%',
            width: '177',
            height: '75',
            directionx: 'left',
            directiony: 'bottom',
        },
        10: {
            fileName: 'hero_10.png',
            x: '39%',
            y: '2%',
            width: '177',
            height: '75',
            directionx: 'right',
            directiony: 'bottom',
        }
    }

    for(var key in heroImgs) {
        var fileName = heroImgs[key].fileName;
        var x = heroImgs[key].x;
        var y = heroImgs[key].y;
        var width = heroImgs[key].width;
        var height = heroImgs[key].height;
        var directionx = heroImgs[key].directionx;
        var directiony = heroImgs[key].directiony;

        var img = document.createElement('img');
        img.src = '/wp-content/themes/maize/images/' + fileName;
        img.style.position = 'absolute';
        // img.style.width = width + 'px';
        // img.style.height = height + 'px';

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

        img.classList.add('hero-img');

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
        $(document).on('click', '.img-card-left', function(e) {
            e.preventDefault();

            // get the id and use it to get the target modal
            var id = $(this).data('id');
            var targetModal = $('.modal[data-id="' + id +  '"]');
            
            // open the modal
            targetModal.addClass('modal-open');

            // prevent the body from scrolling
            $('body').addClass('halt');
        });

        /**
        * Close the modal when the outer area is clicked
        * The close icon doesn't have pointer events, so there is no listener for it
        */
        $(document).on('click', '.modal', function(e) {
            // if they clicked this actually (no bubbling) then close the modal
            if(e.target === this) {
                // close modal
                $(this).removeClass('modal-open');

                // allow body to scroll again
                $('body').removeClass('halt');
            }
        });
    }
    
})(jQuery);