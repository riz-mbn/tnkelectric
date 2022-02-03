(function($){

    var app = {
        onReady: function(){
            app.customDropdown();
            app.tabScrolling_2();
        },	
        onLoad: function(){
            app.preloader();
            app.typewriter();
            $(document).foundation();
            app.utils();
            app.anchor_section();
        },

        typewriter: function() {
            var elements = document.getElementsByClassName('typewrite');
            for (var i=0; i<elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-type');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                  new TxtType(elements[i], JSON.parse(toRotate), period);
                }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".typewrite > .wrap:after { content: '_'; color: #29BCFC; animation: blinking 1s infinite;}";
            document.body.appendChild(css);
        },

        preloader: function(){
            //preloader            
            $('#preloader').delay(100).fadeOut('slow');
        },

        anchor_section: function(){
            

            // var $windowWidth = $(window).width();
            
            // $('a[href*=#]:not([href=#])').click(function() {
            //     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            //       var target = $(this.hash);
            //       target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            //       if (target.length) {
                      					  
			// 		if( $windowWidth <= 1023 ){ offset = 70;}
			// 		else { offset = 100; }	

            //         $('html,body').animate({
            //           scrollTop: target.offset().top - offset
            //         }, 1000);
            //         return false;
            //       }
            //     }
            //   });

        },

		utils: function(){         
            

            document.body.classList.remove("no-js");

            $('.navbar .btn-user').click(function(){
                $('#header').toggleClass('show-account');
                $('#header').removeClass('show-classes');
                $('#header').removeClass('show-menu');
            });
            
            $('.navbar .btn-classes').click(function(){
                $('#header').toggleClass('show-classes');
                $('#header').removeClass('show-account');
                $('#header').removeClass('show-menu');
            });

            var $windowWidth = $(window).width();
    
            if (  $windowWidth <= 425 ) {
                $('#nav-service-links .wp-block-columns').slick({
                    arrows: true,                  
                    dots: false,
                    infinite: true,
                    speed: 300,
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    responsive: [
                        {
                        breakpoint: 430,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                        }
                    ]
                })      
            }   

            $(window).scroll(function() {
                
                var button_up;
                var sticky = false;
                var top = $(window).scrollTop();
                    
                if (top > 0) {

                    $('.sticky').addClass('is-stuck');
                    $('.sticky').removeClass('is-anchored');
                    sticky = true;

                } else {

                        $('.sticky').addClass('is-anchored');
                        $('.sticky').removeClass('is-stuck');

                }  
                /* Button Scroll Up */
                (button_up = function() {
                    var button;
                    button = $('.btn_scroll_up');
                    if (top > $(window).offset().top){
                        return button.fadeIn('slow');
                    } else {
                        return button.fadeOut('slow');
                    }
                })();       

            });   
            
            //Click event to scroll to top
            $('.btn_scroll_up').click(function(){
                $('html, body').animate({scrollTop : 0},800);
                return false;
            }); 

            $('.testi_slick').slick({ 
                arrows: false,                  
                dots: false,
                infinite: true,
                speed: 300,
                slidesToShow: 2,
                slidesToScroll: 1,
                responsive: [
                    {
                      breakpoint: 1024,
                      settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                      }
                    },
                    {
                      breakpoint: 610,
                      settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                      }
                    }
                ]
            });

            $('.slider-arrows .slick-prev').click(function() {
                $('.testi_slick').slick('slickPrev');
            });
            
            $('.slider-arrows .slick-next').click(function() {
                $('.testi_slick').slick('slickNext');
            });

            //faqs
            $('.faqs_nav > .cat_item').each(function(){

                var default_cat = $('#general');
                default_cat.fadeIn('slow').siblings('.faqs_container').fadeOut('slow');
                $(this).closest('.faqs_nav').find('.general').addClass('active');

                $(this).click(function(){

                    var target = $(this).data('anchor');                
                    //remove active on siblings
                    $(this).closest('.faqs_nav').find('.cat_item.active').removeClass('active');

                    //hide items not active
                    $('#' + target).fadeIn('slow').siblings('.faqs_container').fadeOut('slow');

                    if( $(this).hasClass('active') ) {
                        $(this).removeClass('active');
                    }
                    else{
                    
                        $(this).addClass('active');
                    }
                });
            });

            //gallery
            $('.grid_nav > .grid_nav_item').each(function(){

                $(this).closest('.grid_nav').find('.all').addClass('active');

                var id_nav = $(this).closest('.grid_nav').find('.slick-current').data('anchor');

                $(this).click(function(){

                    var target = $(this).data('anchor');  
                    
                    //remove active on siblings
                    //$(this).closest('.grid_nav').find('.grid_nav_item.active').removeClass('active');

                    //hide items not active
                    if ( target != 'all') {
                        $('#' + target).fadeIn('slow').siblings('.gallery_item').fadeOut('slow');
                    }
                    else {
                        $('.gallery_item').fadeIn('slow');
                    }

                    $('.grid_nav_item.active').removeClass('active slick-current');

				    $(this).addClass('active slick-current');   

                });
            });

            // $('.gallery_photos').slick({
            //     slidesToShow: 1,
            //     slidesToScroll: 1,
            //     arrows: false,
            //     asNavFor: '.grid_nav'
            // });

            //gridnav slick
            $('.grid_nav').slick({
                arrows: true,                  
                dots: false,
                infinite: true,
                speed: 300,
                slidesToShow: 5,
                slidesToScroll: 1,
                focusOnSelect: true,
                // asNavFor: '.gallery_photos',
                responsive: [
                    {
                      breakpoint: 1024,
                      settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                      }
                    },
                    {
                      breakpoint: 768,
                      settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                      }
                    },
                    {
                      breakpoint: 590,
                      settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                      }
                    },
                    {
                      breakpoint: 500,
                      settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                      }
                    }
                ]

            });

            //file upload drop area overrite text 
            $('.gform_drop_instructions').text('Drop files here to upload  or choose file.');
            
            //jobs accordion
            $('.jobs_item > .jobs_title').click(function(j){
                var toggle  = $(this).closest('.jobs_item');
    			var dropDown = $(this).closest('.jobs_item').find('.jobs_content');
               //$(this).closest('.jobs_item').find('.jobs_content').not(dropDown).slideUp();

                if (toggle.hasClass('active')) {                  
                    toggle.removeClass('active');
                } else {
                  
                    //$(this).closest('.faqs-list').find('.faqs-question.active').removeClass('active');
                    toggle.addClass('active');
                  }              

                //dropDown.stop(false, true).slideToggle();
                j.preventDefault();

            });

            $('#services-slider1').slick({ 
                arrows: false,                  
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1
            });
            $('#slider-container-1 .arrow-left__services').click(function() {
                $('#services-slider1').slick('slickPrev');
            });
            $('#slider-container-1 .arrow-right__services').click(function() {
                $('#services-slider1').slick('slickNext');
            });


            $('#services-slider2').slick({ 
                arrows: false,                  
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1
            });
            $('#slider-container-2 .arrow-left__services').click(function() {
                $('#services-slider2').slick('slickPrev');
            });
            $('#slider-container-2 .arrow-right__services').click(function() {
                $('#services-slider2').slick('slickNext');
            });


            $('#services-slider3').slick({ 
                arrows: false,                  
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1
            });
            $('#slider-container-3 .arrow-left__services').click(function() {
                $('#services-slider3').slick('slickPrev');
            });
            $('#slider-container-3 .arrow-right__services').click(function() {
                $('#services-slider3').slick('slickNext');
            });


            $('#services-slider4').slick({ 
                arrows: false,                  
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1
            });

            $('#slider-container-4 .arrow-left__services').click(function() {
                $('#services-slider4').slick('slickPrev');
            });
            $('#slider-container-4 .arrow-right__services').click(function() {
                $('#services-slider4').slick('slickNext');
            });

            $('.grid').isotope({
                itemSelector: '.grid-item',
                percentPosition: true,
                masonry: {
                  columnWidth: '.grid-sizer'
                }
            });
                 
            
        },

        customDropdown: function() {
            $('.custom_dropdown > li').hover(function(){
                $(this).addClass('hover');
            }, function(){
                $(this).removeClass('hover');
            })

            $('.custom_dropdown > li').click(function(){
                $(this).toggleClass('hover');
            });

            
        },


        tabScrolling: function() {
            $(document).on("scroll", onScroll);
            
            //smoothscroll
            // $('a[href^="#"]').on('click', function (e) {
            //     e.preventDefault();
            //     $(document).off("scroll");
                
            //     $('a').each(function () {
            //         $(this).removeClass('active');
            //     })
            //     $(this).addClass('active');
              
            //     var target = this.hash,
            //         menu = target;
            //     $target = $(target);


            //     $('html, body').stop().animate({
            //         'scrollTop': $target.offset().top+2
            //     }, 500, 'swing', function () {
            //         window.location.hash = target;
            //         $(document).on("scroll", onScroll);
            //     });
            // });
            // function onScroll(event){
            //     var scrollPos = $(document).scrollTop();
            //     $('#nav-service-links .services-nav-item').each(function () {
            //         var currLink = $(this).find('.service-link');
            //         var refElement = $(currLink.attr("href"));
                    
            //         if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            //             $('#nav-service-links .services-nav-item.active').removeClass("active");
            //             $(this).addClass("active");
            //         }
            //         else{
            //             $(this).removeClass("active");
            //         }
            //     });
            // }
            

            // var $windowWidth = $(window).width();
            
            // $('a[href*=#]:not([href=#])').click(function() {
            //     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            //       var target = $(this.hash);
            //       target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            //       if (target.length) {
                      					  
			// 		if( $windowWidth <= 1023 ){ offset = 70;}
			// 		else { offset = 100; }	

            //         $('html,body').animate({
            //           scrollTop: target.offset().top - offset
            //         }, 1000);
            //         return false;
            //       }
            //     }
            //   });

            //smoothscroll
            $('a[href^="#"]').on('click', function (e) {
                e.preventDefault();
                $(document).off("scroll");
                
                $('a').each(function () {
                    $(this).removeClass('active');
                })
                $(this).addClass('active');
              
                var target = this.hash,
                    menu = target;
                $target = $(target);
                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top+2
                }, 500, 'swing', function () {
                    window.location.hash = target;
                    $(document).on("scroll", onScroll);
                });
            });
            function onScroll(event){
                var scrollPos = $(document).scrollTop();
                $('#nav-service-links a').each(function () {
                    var currLink = $(this);
                    var refElement = $(currLink.attr("href"));

                    if (refElement.position().top <= scrollPos ) {
                        $('#nav-service-links a').removeClass("active");
                        currLink.addClass("active");
                    }
                    else{
                        currLink.removeClass("active");
                    }
                });
            }
        },

        tabScrolling_2: function(){

            var $windowWidth = $(window).width();
		//smooth scroll
		$('a[href*="#"]').click(function (e) {
			var target = this.hash;
			var $target = $(target);
			var name = this.hash.slice(1);
			var offset = 0;
			
			target = target.length ? target : $('[name=' + name +']');

			if( $windowWidth <= 1023 ){
				offset = 150;
			}
			else {
				offset = 150;
			}
			
			offset = $target.offset().top - offset + 'px';
			
			$('html, body').stop().animate({
				scrollTop: offset
			}, function () {
				window.location.hash = target;
			});
		});
		
		
            var lastId, topMenu = $('#nav-service-links'),
            topMenuHeight = topMenu.outerHeight()+15,
            // All list items
            menuItems = topMenu.find('a'), 
            // Anchors corresponding to menu items
            scrollItems = menuItems.map(function(){
                var url = $(this).attr("href");
                var hash = url.substring(url.indexOf("#"));
                var item = $(hash);
                if (item.length) { return item; }
            });   
		
			$(window).scroll(function(e) {  
                // Get container scroll position
                var fromTop = $(this).scrollTop()+topMenuHeight;
				
			if( $windowWidth <= 1023 ){ offset = 250;}
			else { offset = 200; }	
                // Get id of current scroll item
                var cur = scrollItems.map(function(){
                    var offsetTop = $(this).offset().top - offset;
                    if (offsetTop < fromTop)
                    return this;
                });                
                // Get the id of the current element
                cur = cur[cur.length-1];
                var id = cur && cur.length ? cur[0].id : "";
				
                if (lastId !== id) {
                    lastId = id;   					
					if ( lastId !== '' ) {
						var classname = "." + lastId;
                        console.log(lastId);
                        //$('#nav-service-links ' + classname).addClass('active');
						// $('.sec-service-wrap ' + classname).addClass('is_active').siblings().removeClass('is_active');   
                        // $('#nav-service-links a')
						if( !$('#nav-service-links ' + classname).hasClass('active') ) {
							$('#nav-service-links .service-link.active').removeClass('active');
							$('#nav-service-links .service-link' + classname).addClass('active');
						}
						
					}
				} 

			});

        }
        
    }

    var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };
    
    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];
    
        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }
    
        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';
    
        var that = this;
        var delta = 200 - Math.random() * 100;
    
        if (this.isDeleting) { delta /= 2; }
    
        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }
    
        setTimeout(function() {
        that.tick();
        }, delta);
    };

    document.addEventListener('DOMContentLoaded', app.onReady);
    window.addEventListener('load', app.onLoad);

})(jQuery);

