<!-- <section class="parallax-container">

	<div class="parallax-surface-text">
		<div class="parallax-button pxbutton2">

				<div class="pxtextbox">Button 2 (last)</div>

		</div>
		<div class="parallax-button pxbutton1">

			<div class="pxtextbox">Button 1 (first)</div>

		</div>
	</div>

	<div class="parallax" style="background: url(http://127.0.0.1/wp-content/uploads/2017/06/earth-space.jpg) center center / cover no-repeat;">
	</div>		
</section>  
-->

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


<script type="text/javascript">
$(".next").click(function() {
       $('html,body').animate({ scrollTop:$(this).parent().next().offset().top}, 'slow');
});
</script>