
		<footer>

		</footer>


	<script src="/_assets/js/main.js"></script>
 	<script src="/_assets/js/jquery.fittext.js"></script>
 	<script src="/_assets/js/jquery.flexslider.js"></script>
 	<script src="/_assets/js/jquery.fancybox.js"></script>
 	<script src="/_assets/js/jquery.mixitup.js"></script>

	<script type="text/javascript">
		$("#fittext1").fitText();
	</script>

	<script type="text/javascript">
	    $(function(){
	      SyntaxHighlighter.all();
	    });
	    $(window).load(function(){
	      $('.flexslider').flexslider({
	        animation: "slide",
	        animationLoop: true,
	        start: function(slider){
	          $('body').removeClass('loading');
	        }
	      });
	    });
	</script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('.fancybox').fancybox();
	</script>

	<script type="text/javascript">
		var $container = $('#container');
		// init
		$container.isotope({
		  // options
		  itemSelector: '.item',
		  layoutMode: 'fitRows'
		});

		var $container = $('#nav').sorting({
		  getSortData: {
		    name: '.name', // text from querySelector
		    category: '[data-category]', // value of attribute
		    weight: function( itemElem ) { // function
		      var weight = $( itemElem ).find('.weight').text();
		      return parseFloat( weight.replace( /[\(\)]/g, '') );
		    }
		  }
		});
	</script>

	<script>

	   var config = {
	   	  '.chosen-container'		 : {},
	      '.chosen-select'           : {width:"100%"},
	      '.chosen-select-deselect'  : {allow_single_deselect:true},
	      '.chosen-select-no-single' : {disable_search_threshold:10},
	      '.chosen-select-no-results': {no_results_text:"You're not in Kansas anymore."},
	      '.chosen-select-width'     : {width:"95%"}
	    }
	    for (var selector in config) {
	      $(selector).chosen(config[selector]);
	    }

	</script>

	</body>
</html>