<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/head.php'); // HTTP head?>
<title>Tara Reid Photography</title>
<meta name="description" content="couples photography, family photography, wedding photography, children photography">

</head>
<body>

	<section class="ft-container">
		<header>
			<img class="scroll" src="/_assets/img/scroll.png" alt="Tara Reid Photography">
			<h1 id="fittext1">Tara Reid Photography</h1>
		</header>
	</section>

    <section class="slider">

        <div class="flexslider carousel">

	        <ul class="slides">
	            <li>
	  	    	    <img src="/_assets/img/slides/azalea.jpg" alt="Tara Reid Photography - Azalea Ruth Maddox" />
	  	    	</li>
	  	    	<li>
	  	    	    <img src="/_assets/img/slides/austin.jpg" alt="Tara Reid Photography - Austin Reid" />
	  	    	</li>
	  	    	<li>
	  	    	    <img src="/_assets/img/slides/blanket.jpg" alt="Tara Reid Photography - Children Photography" />
	  	    	</li>
	  	    	<li>
	  	    	    <img src="/_assets/img/slides/bridal.jpg" alt="Tara Reid Photography - Bridal Photography" />
	  	    	</li>
	            <li>
	  	    	    <img src="/_assets/img/slides/engagement.jpg" alt="Tara Reid Photography - Engagement Photography" />
	  	    	</li>
	  	    	<li>
	  	    	    <img src="/_assets/img/slides/hats.jpg" alt="Tara Reid Photography - Children Portraits" />
	  	    	</li>
	  	    	<li>
	  	    	    <img src="/_assets/img/slides/jump.jpg" alt="Tara Reid Photography - Child Portraits" />
	  	    	</li>
	  	    	<li>
	  	    	    <img src="/_assets/img/slides/sunflower.jpg" alt="Tara Reid Photography - Infant Photography" />
	  	    	</li>
	        </ul>

        </div>

    </section>

    <section id="mix">

		<div class="controls">

		  <label>Filter:</label>
		  
		  <button class="filter" data-filter="all">All</button>
		  <button class="filter" data-filter=".children">Children</button>
		  <button class="filter" data-filter=".couples">Couples</button>
		  <button class="filter" data-filter=".families">Families</button>
		  <button class="filter" data-filter=".wedding-bridal">Wedding/Bridal</button>
		  
		</div>
		
		<div id="Container" class="container">
		
		  <div class="mix children"></div>
		  <div class="mix children"></div>
		  <div class="mix children"></div>
		  <div class="mix category-2"></div>
		  <div class="mix children"></div>
		  <div class="mix children"></div>
		  <div class="mix category-2"></div>
		  <div class="mix category-2"></div>
		  
		  <div class="gap"></div>
		  <div class="gap"></div>
		
		</div>
	
	</section>

<script type="text/javascript">

	$(function(){
	  $('#Container').mixItUp();
	});	

</script>

<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_assets/inc/footer.php'); // footer, close body and html?>