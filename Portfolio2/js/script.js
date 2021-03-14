$(function(){
    
    let navMenu = $('#nav-menu');
    let navToggle = $('#nav-toggle');

    navToggle.on('click', () => {
         navMenu.css('right', '0');
     });

     $('#close').on('click', () => {
          navMenu.css('right', '-100%');
     });

     $(document).on('click', (e) => {
               let target = $(e.target);
               if (!(target.closest('#nav-toggle').length > 0 || target.closest('#nav-menu').length > 0)) {
                   navMenu.css('right', '-100%');
               }
           });
});