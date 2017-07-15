// Avoid `console` errors in browsers that lack a console.
(function() {
  var method;
  var noop = function() {};
  var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd', 'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());
if (typeof jQuery === 'undefined') {
  console.warn('jQuery hasn\'t loaded');
} else {
  console.log('jQuery has loaded');
}
// Place any jQuery/helper plugins in here.
$(document).ready(function() {

  $('.block_1_push').click(function(e) {
    e.preventDefault();
    if ($('.block_1').css('display') == 'none') {
      $('.block_1').show();
      $('.block_2').hide();
      $('.block_1_push').css('background', '#627897');
      $('.block_2_push').css('background', '#f1f4f7');
      $('.block_1_push').css('color', '#ffffff');
      $('.block_2_push').css('color', '#4b6486');
      $('.block_2_push').css('border', '1px solid #627897');
      $('.block_1_push').css('height', '21px');
      $('.block_2_push').css('height', '21px');

    }
  });
  $('.block_2_push').click(function(e) {
    e.preventDefault();
    if ($('.block_2').css('display') == 'none') {
      $('.block_1').hide();
      $('.block_2').show();
      $('.block_1_push').css('background', '#f1f4f7');
      $('.block_2_push').css('background', '#627897');
      $('.block_1_push').css('color', '#4b6486');
      $('.block_2_push').css('color', '#ffffff');
      $('.block_1_push').css('border', '1px solid #627897');
      $('.block_1_push').css('height', '21px');
      $('.block_2_push').css('height', '21px');
    }
  });
});
