$(function(){
    let headerElem = $('header');
    let logo = $('#logo');
    let navMenu = $('#nav-menu');
    let navToggle = $('#nav-toggle');
    
           $('#testimonial-slider').slick({
               infinite: true,
               slidesToShow: 1,
               slidesToScroll: 1,
               prevArrow: '<a href="#" class="slick-arrow slick-prev"><i class="fas fa-chevron-circle-left"></i></a>',
               nextArrow: '<a href="#" class="slick-arrow slick-next"><i class="fas fa-chevron-circle-right"></i></a>'
          });

          $(document).scroll(() => {
                    let scrollTop = $(document).scrollTop();

                    if (scrollTop > 0) {
                        navMenu.addClass('is-sticky');
                        logo.css('color', '#fff');
                        headerElem.css('background', '#1d3557');
                        navToggle.css('border-color', '#fff');
                        navToggle.find('.strip').css('background-color', '#1d3557');
                        navToggle.css('background-color', '#fff');
                    } else {
                        navMenu.removeClass('is-sticky');
                        logo.css('color', '#1d3557');
                        headerElem.css('background', 'transparent');
                        navToggle.css('bordrer-color', '#fff');
                        navToggle.find('.strip').css('background-color', '#fff');
                        navToggle.css('background-color', '#1d3557');
                    }

                    headerElem.css(scrollTop >= 200 ? {'box-shadow': '0 -4px 10px 1px #999'} : {'padding': '1rem 0', 'box-shadow': 'none' });
                });

                $(document).trigger('scroll');
                
                
                navToggle.on('click', () => {
         navMenu.css('right', '0');
     });

     $('.close').on('click', () => {
          navMenu.css('right', '-100%');
     });

     $(document).on('click', (e) => {
               let target = $(e.target);
               if (!(target.closest('#nav-toggle').length > 0 || target.closest('#nav-menu').length > 0)) {
                   navMenu.css('right', '-100%');
               }
           });
});