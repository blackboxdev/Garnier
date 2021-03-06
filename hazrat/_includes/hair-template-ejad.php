
<input id="hidEmailPlaceholder" type="hidden" value="<?php if(isset($_SESSION['email'])) echo $_SESSION['email']; ?>" />

<script id="hiddenHairTemplate" type="text/x-custom-template">
<div id="rootHair">
	<div class="navbar">
	  <div class="navbar-inner">
	    <div class="container">
		<ul>
	  	<li><a href="#tab1" data-toggle="tab" id="tab1Header">
	  		<!-- Will be populated by JS -->

	  		</a>
	  	</li>
		<li><a href="#tab2" data-toggle="tab" id="tab2Header">
			<!-- Will be populated by JS -->
			</a>
		</li>
		<li><a href="#tab3" data-toggle="tab" id="tab3Header">
			<!-- Will be populated by JS -->
			</a>
		</li>	
		<li><a href="#tab4" data-toggle="tab" id="tab4Header">
			<!-- Will be populated by JS -->
			</a>
		</li>	
		<li><a href="#tab5" data-toggle="tab" id="tab5Header">
			<!-- Will be populated by JS -->
			</a>
		</li>			
		</ul>
	 </div>
	  </div>
	</div>
   
	<div class="tab-content">
	    <div class="tab-pane" id="tab1">
	    	<h3 id="question"></h3>
	      <ul class="list-group">
	      	<!-- Will be populated by JS -->
	      </ul>
	    </div>
	    <div class="tab-pane" id="tab2">
	    	<h3 id="question"></h3>
	      <ul class="list-group">
	      	<!-- Will be populated by JS -->
	      </ul>
	    </div>
	    <div class="tab-pane" id="tab3">
	    	<h3 id="question"></h3>
	      <ul class="list-group">
	      	<!-- Will be populated by JS -->
	      </ul>
	    </div>
	    <div class="tab-pane" id="tab4">
	    	<h3 id="question"></h3>
	      <ul class="list-group">
	      	<!-- Will be populated by JS -->
	      </ul>
	    </div>
		<div class="tab-pane" id="tabResult">

			<div class="jumbotron">
			  <h1 class="product-name1"></h1>
			  <img id="productImage1" src="" class="img-rounded" alt="" width="304" height="236">
			  <p>We recommend <span class="product-name1"></span> for you! </p>
			  <p><a id="learnMoreBtn1" class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
			</div>

			<div class="jumbotron" id="productTemplate2">
			  <h1 class="product-name2"></h1>
			  <img id="productImage2" src="" class="img-rounded" alt="" width="304" height="236">
			  <p>We recommend <span class="product-name2"></span> for you! </p>
			  <p><a id="learnMoreBtn2" class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
			</div>

			<div class="jumbotron" id="productTemplate3">
			  <h1 class="product-name3"></h1>
			  <img id="productImage3" src="" class="img-rounded" alt="" width="304" height="236">
			  <p>We recommend <span class="product-name3"></span> for you! </p>
			  <p><a id="learnMoreBtn3" class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
			</div>

			<div class="jumbotron" id="productTemplate4">
			  <h1 class="product-name4"></h1>
			  <img id="productImage4" src="" class="img-rounded" alt="" width="304" height="236">
			  <p>We recommend <span class="product-name4"></span> for you! </p>
			  <p><a id="learnMoreBtn4" class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
			</div>

			<div class="jumbotron" id="productTemplate5">
			  <h1 class="product-name5"></h1>
			  <img id="productImage5" src="" class="img-rounded" alt="" width="304" height="236">
			  <p>We recommend <span class="product-name5"></span> for you! </p>
			  <p><a id="learnMoreBtn5" class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
			</div>

			<div class="jumbotron" id="productTemplate6">
			  <h1 class="product-name6"></h1>
			  <img id="productImage6" src="" class="img-rounded" alt="" width="304" height="236">
			  <p>We recommend <span class="product-name6"></span> for you! </p>
			  <p><a id="learnMoreBtn6" class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
			</div>
	    </div>
		<ul class="pager wizard">
			<!-- <li class="previous first" style="display:none;"><a href="#">First</a></li> -->
			<li class="previous"><a href="#">Previous</a></li>
			<!-- <li class="next last" style="display:none;"><a href="#">Last</a></li> -->
		  	<li class="next"><a href="#">Next</a></li>
		  	<li class="finish" style="display:none;"><a href="javascript:;">Restart</a></li>
		</ul>
	</div>

	<div id="bar" class="progress">
      <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
    </div>
</div>
</script>