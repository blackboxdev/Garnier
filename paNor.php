<!-- Header -->
<?php
include('_includes/header.php');
?>



<!-- Begin Content -->
	<div id="content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="breadcrumb"> <a href="index.php">Home</a> > <a href="register.php">Register</a> > Pure Active
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="tajuk-besar">
						<h1>Pure Active</h1>
					</div>
				</div>
			</div>

<!-- Product Filter-->
                <div class="product-bar">
                  <div class="row leb-product"> 
                         <div class="col-md-6 col-xs-6 tajuk-filter"> 
                                    Arrange according to <br/>
                        </div>
                        <div class="col-md-2 col-xs-2 " onchange="location = this.options[this.selectedIndex].value;">
                            <select  class="filter1 filter-btn">
                                <option value="">Skin Need</option>
                                <option value="acne" /> Anti-Acne<br />
                                <option value="oil" /> Oil Control<br />
                            </select>
                        </div>
                        <div class="col-md-2 col-xs-2 ">
                            <select  class="filter2 filter-btn" onchange="location = this.options[this.selectedIndex].value;">
                                <option>Skin Type</option>
                                <option value="paNor.php" /> Normal<br />
                                <option value="paCom.php" /> Combination<br />
                            </select>
                        </div>
                        <div class="col-md-2 col-xs-2 ">
                            <select  class="filter3 filter-btn" onchange="location = this.options[this.selectedIndex].value;">
                                <option value="">New / Popular</option>
                                <option value="new" /> New <br />
                                <option value="new" /> Popular<br />
                            </select>
                        </div>           
                    </div>
                </div>



<!-- Products Listed -->

			<div class="row">
					<div class="col-md-4 col-sm-6 tolak-product showimg acne oil com 1">
						<div class=" a">
            				<img src="images/skin-natural/pureactive3in1.png" class='hold' />
        				</div>
				        <div class="col-xs-6 b">
				           <b>Pure Active 3-in-1 Wash, Scrub & Mask</b></p>Simplify your skincare regime by delivering 3 benefits & actions in 1 product.
							</p><a class="bar-findout bar-align" href="PA-active3in1.php"> &#9656; Find Out </a>
       					</div>
					</div>


					<div class="col-md-4 col-sm-6 tolak-product showimg acne oil com 1">
						<div class=" a">
            				<img src="images/skin-natural/pureactive6in1multifoam.png" class='hold' />
        				</div>
				        <div class="col-xs-6 b">
				           <b>Pure Active 6-in-1 Multi-Action Foam</b></p>Fight 6 signs of acne with Multi-Action Anti-Imperfection foam wash.
							</p><a class="bar-findout bar-align" href="PA-active6in1.php"> &#9656; Find Out </a>
       					</div>
					</div>


					<div class="col-xs-4 tolak-product showimg acne com oil 1">
						<div class=" a">
            				<img src="images/skin-natural/acnofightscrub-m.png" class='hold' />
        				</div>
				        <div class="col-xs-6 b">
				           <b>Pure Active 6 in 1 Multi-Action Scrub</b></p>Fight 6 signs of acne with Multi-Action Anti-Imperfection scrub wash.
							</p><a class="bar-findout bar-align" href="PA-AcnoFightScrub.php"> &#9656; Find Out </a>
       					</div>
					</div>
					
					<div class="col-md-4 col-sm-6 tolak-product showimg acne oil com 1">
						<div class=" a">
            				<img src="images/skin-natural/PureActive6in1Toner.png" class='hold' />
        				</div>
				        <div class="col-xs-6 b">
				           <b>Pure Active 6-in-1 Multi-Action Toner</b></p>Transform your skin to be free from the 6 signs of acne and oil.
							</p><a class="bar-findout bar-align" href="PA-active6in1-toner.php"> &#9656; Find Out </a>
       					</div>
					</div>					

					<div class="col-xs-4 tolak-product showimg acne com oil 1">
						<div class=" a">
            				<img src="images/skin-natural/pureactivefruitenegy.png" class='hold' />
        				</div>
				        <div class="col-xs-6 b">
				           <b>Pure Active Fruit Energy Energizing Facial Foam</b></p>Refreshing cleanser for fairer and acne free skin.
							</p><a class="bar-findout bar-align" href="PA-FruitEnergyEnergizingFacialFoam.php"> &#9656; Find Out </a>
       					</div>
					</div>
					
					
			</div>

			</div>
		</div>

<!-- End OF Begin Content -->







<?php
include('_includes/footer.php');
?>



