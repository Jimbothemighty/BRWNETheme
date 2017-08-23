
<?php
/**
 * The sidebar containing the parallax widget area
 *
 * @package WordPress
 * @subpackage customTheme
 * @since 1.0
 * @version 1.0
 */


?>


<?php dynamic_sidebar( 'sidebar-8' ); ?>


<script type="text/javascript">
var parallaxElements = $('.parallax'),
    parallaxQuantity = parallaxElements.length;

$(window).on('scroll', function () {

  window.requestAnimationFrame(function () {

    for (var i = 0; i < parallaxQuantity; i++) {
      var currentElement = parallaxElements.eq(i);
      var scrolled = $(window).scrollTop();

      currentElement.css({
        'transform': 'translate3d(0,' + scrolled * -0.6 + 'px, 0)'
      });
    }
  });

});
</script>