<!-- Header -->
<?php
include('_includes/header.php');
?>



<!-- Begin Content -->
	<div id="content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="breadcrumb"> <a href="index.php">Home</a> > <a href="#">Hair Colour</a> > Olia
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="tajuk-besar">
						<h1>By Type - Affordability</h1>
					</div>
				</div>
			</div>

<!-- Product Filter-->
                    <div class="product-bar">
                  <div class="row leb-product"> 
                         <div class="col-md-6 tajuk-filter"> 
                                    Arrange according to <br/>
                        </div>
                        <div class="col-md-2">
                            <select  class="filter-btn" name="forma" onchange="location = this.options[this.selectedIndex].value;">
                                <option value="0">Type</option>
                                <option value="healthier.php" /> Healthier Looking Hair<br />
                                <option value="amonia.php" /> Ammonia Free<br />
                                <option value="affordability.php" /> Affordability<br />
                            </select>
                        </div>
                        <div class="col-md-2" style="margin-left:30px">
                            <select  class="filter-btn" name="forma" onchange="location = this.options[this.selectedIndex].value;">
                                <option value="0">Color </option>
                                <option value="black.php" /> Black<br />
                                <option value="brown.php" /> Brown<br />
                                <option value="red.php" /> Red<br />
                            </select>
                        </div>
                                 
                    </div>
                </div>



<!-- Products Listed -->

			<div class="row">
					<div class="col-xs-4 tolak-product showimg bk per amm 1">
						<div class=" a">
            				<img src="images/haircolor/ColorNaturals1-HitamAlami.png"  />
        				</div>
				        <div class="col-xs-6 b">
				           <b>Color Naturals
1 - Hitam Alami</b><p>Get nourished, natural-looking, long-lasting color.

							</p><a class="bar-findout bar-align" href="HC-HitamAlami.php"> &#9656; Find Out </a>
       					</div>
					</div>


					<div class="col-xs-4 tolak-product showimg per amm bro 2">
						<div class=" a">
            				<img src="images/haircolor/colornaturalDarkBrownM.png" class='hold' />
        				</div>
				        <div class="col-xs-6 b">
				           <b>Color Naturals
3 - Coklat Gelap</b><p>Get nourished, natural-looking, long-lasting colour.
							</p><a class="bar-findout bar-align" href="HC-Coklat Gelap.php"> &#9656; Find Out </a>
       					</div>
					</div>
					<div class="col-xs-4 tolak-product showimg per amm red 1">
						<div class=" a">
            				<img src="images/haircolor/ColorNaturals3.16-MerahBurgundy.png" class='hold' />
        				</div>
				        <div class="col-xs-6 b">
				           <b>Color Naturals 3.16 - Merah Burgundy</b><p>Get nourished, natural-looking, long-lasting colour

							</p><a class="bar-findout bar-align" href="HC-MerahBurgundy.php"> &#9656; Find Out </a>
       					</div>
					</div>


					<div class="col-xs-4 tolak-product showimg per amm blo bro 1">
						<div class=" a">
            				<img src="images/haircolor/ColorNaturals4.0-Coklat.png" class='hold' />
        				</div>
				        <div class="col-xs-6 b">
				           <b>Color Naturals
4 - Coklat</b><p>Get nourished, natural-looking, long-lasting colour.

							</p><a class="bar-findout bar-align" href="HC-Coklat.php"> &#9656; Find Out </a>
       					</div>
					</div>

					<div class="col-xs-4 tolak-product showimg per amm blo bro 1">
						<div class=" a">
            				<img src="images/haircolor/ColorNaturals5.0-CoklatTerang.png" class='hold' />
        				</div>
				        <div class="col-xs-6 b">
				           <b>Color Naturals
5 - Coklat Terang</b><p>Get nourished, natural-looking, long-lasting colour.

							</p><a class="bar-findout bar-align" href="HC-CoklatTerang.php"> &#9656; Find Out </a>
       					</div>
					</div>
			</div>

			</div>
		</div>

<!-- End OF Begin Content -->







<?php
include('_includes/footer.php');
?>



