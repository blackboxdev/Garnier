<!-- Header -->
<?php
include('_includes/header.php');
?>



<!-- Begin Content -->
	<div id="content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="breadcrumb"> <a href="index.php">Home</a> > <a href="#">Garnier Men</a> > Icy Duo
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="tajuk-besar">
						<h1>TurboLight Icy Duo</h1>
					</div>
				</div>
			</div>

<!-- Product Filter-->
                <div class="product-bar">
                  <div class="row leb-product"> 
                         <div class="col-md-6 tajuk-filter"> 
                                    Arrange according to <br/>
                        </div>
                        <div class="col-md-2"  onchange="location = this.options[this.selectedIndex].value;">
                            <select class="filter1 filter-btn">
                                <option value="whit" /> Skin Need<br />
                                <option value="whit" /> Whitening<br />
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select class="filter2 filter-btn"  onchange="location = this.options[this.selectedIndex].value;">
                                <option>Skin Type</option>
                                <option value="idNor.php" /> Normal<br />
                                <option value="idCom.php" /> Combination<br />
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select class="filter3 filter-btn"  onchange="location = this.options[this.selectedIndex].value;">
                                <option>New / Popular</option>
                                <option value="new" /> New <br />
                                <option value="new" /> Popular<br />
                            </select>
                        </div>           
                    </div>
                </div>


<!-- Products Listed -->

			<div class="row">
					<div class="col-xs-4 tolak-product showimg whit  1">
						<div class=" a">
            				<img src="images/men/icy-duo/TurboLightDoubleWhiteIcyDuoFoam.png" class='hold' />
        				</div>
				        <div class="col-xs-6 b">
				           <b>TurboLight Double White Icy Duo Foam</b><p>Foam cleanser for fairer and brighter skin.
							</p><a class="bar-findout bar-align" href="GM-FoamDoubleWhite.php"> &#9656; Find Out </a>
       					</div>
					</div>
					
			</div>

			</div>
		</div>

<!-- End OF Begin Content -->







<?php
include('_includes/footer.php');
?>



