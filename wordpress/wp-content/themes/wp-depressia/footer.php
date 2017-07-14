    <div class="clear"></div>
  </div>

  <div class="footer_pusher"></div>

  <div class="footer_wrapper">
    <div class="footer">
      <p class="copy">&copy; <?php echo date("Y"); ?> Собственность <?php bloginfo('name'); ?>. </p>
    </div>
  </div>
  <?php wp_footer(); ?>
  <script>
  $(document).ready(function() {

    $('.block_1_push').click(function() {
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
    $('.block_2_push').click(function() {
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
  </script>
  <script language="javascript">
  $(document).ready(function() {
    var floatsidebar = $("#float-sidebar");
    var offset = floatsidebar.offset();
    var left = offset.left;
    var top = offset.top;
    var width = $("#float-sidebar").width();
    var height = $("#float-sidebar").height();
    $(window).scroll(function() {
      var scrollTop = $(window).scrollTop();
      if (scrollTop >= top) {
        $('#float-sidebar').css({
          left: left + 'px',
          position: 'fixed',
          top: "0px",
          width: width + "px"
        });
      } else {
        $('#float-sidebar').css({
          position: 'static',
        });
      }
    });
  });
  </script>

</body>
</html>
