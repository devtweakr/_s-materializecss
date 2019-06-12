import "../sass/style.scss";

(function($) {
  $(function() {
    $(".sidenav").sidenav();
    $(".dropdown-trigger").dropdown({ constrainWidth: true });
  }); // end of document ready
})(jQuery); // end of jQuery name space
