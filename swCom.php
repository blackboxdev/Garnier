<!-- Header -->
<?php
include('_includes/header.php');
?>



<!-- Begin Content -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb"> <a href="index.php">Home</a> > <a href="#">Garnier Skin Natural</a> > Sakura White
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tajuk-besar">
                        <h1>Sakura White</h1>
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
                                <option value="whit" >Skin Need</option>
                                <option value="whit" /> Whitening<br />
                            </select>
                        </div>
                        <div class="col-md-2 col-xs-2">
                            <select  class="filter2 filter-btn" onchange="location = this.options[this.selectedIndex].value;">
                                <option value="" >Skin Type</option>
                                <option value="swNor.php" /> Normal<br />
                                <option value="swDry.php" /> Dry<br />
                                <option value="swSen.php" /> Sensitive<br />
                                <option value="swCom.php" /> Combination<br />
                            </select>
                        </div>
                        <div class="col-md-2 col-xs-2">
                            <select  class=" filter3 filter-btn" onchange="location = this.options[this.selectedIndex].value;">
                                <option value=""> New / Popular</option>
                                <option value="new" /> New <br />
                                <option value="new" /> Popular<br />
                            </select>
                        </div>           
                    </div>
                </div>

<!-- Products Listed -->

            <div class="row">
                    <div class="col-md-4 col-sm-6 tolak-product showimg whit nor dry sen 1">
                        <div class=" a">
                            <img src="images/skin-natural/sakura-white/pinkish-radiance-gentle-cleansing-foam.png" class='hold' />
                        </div>
                        <div class="col-xs-6 b">
                           <b>Sakura White Pinkish Radiance Gentle Cleansing Foam</b><p>A gentle foam cleanser that reveals fresh and pinkish radiant skin. 
                            </p><a class="bar-findout bar-align" href="SW-PinkishRadianceGentleCleansingFoam.php"> &#9656; Find Out </a>
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-6 tolak-product showimg whit sen 1">
                        <div class=" a">
                            <img src="images/skin-natural/sakura-white/sw-pinkishradiancecream-m.png" class='hold' />
                        </div>
                        <div class="col-xs-6 b">
                           <b>Sakura White Matte Pinkish Radiance Whitening Cream</b><p>Pinkish radiant-looking skin with a freshly-powdered finish.


                            </p><a class="bar-findout bar-align" href="SW-PinkishRadianceRadianceWhiteningCream.php" > &#9656; Find Out </a>
                        </div>
                    </div>

            </div>

            </div>
        </div>

<!-- End OF Begin Content -->







<?php
include('_includes/footer.php');
?>



