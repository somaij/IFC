"use strict";

/**
 * Custom JS.
 *
 * Custom JS scripts.
 *
 * @since 1.0.0
 */
console.log('CustomJS');

(function ($) {
  $(document).ready(function () {
    $("input, textarea").each(function () {
      if ($(this).val().length != 0) {
        $(this).parent().siblings("label").addClass("move");
      } else {
        $(this).parent().siblings("label").removeClass("move");
      }
    });
    $("input, textarea").focus(function () {
      $(this).parent().siblings("label").addClass("move");
    });
    $("input, textarea").focusout(function () {
      if ($(this).val().length == 0) {
        $(this).parent().siblings("label").removeClass("move");
      }
    });
    $('a[data-rel^=lightcase]').lightcase();
  });
})(jQuery);