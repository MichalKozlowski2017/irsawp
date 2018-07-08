export default {
  init() {
    // JavaScript to be fired on the home page
    $('#mobileButton').on('click', function(){
      $(this).toggleClass('is-active');
      $('.nav-primary').toggleClass('active-menu');
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS

  },
};
