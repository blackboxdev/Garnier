<!-- Header -->
<?php
include('_includes/header.php');
?>



<!-- Begin Content -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb"> <a href="index.php">Home</a> > <a href="skin-natural.php">Garnier Skin Natural</a> > Duo Clean
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tajuk-besar">
                        <h1>Duo Clean</h1>
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
                                <option value="" >Skin Need</option>
                                <option value="whit" /> Whitening<br />
                                <option value="oil" /> Oil Control<br />
                            </select>
                        </div>
                        <div class="col-md-2 col-xs-2 ">
                            <select  class="filter2 filter-btn" onchange="location = this.options[this.selectedIndex].value;">
                                <option value="">Skin Type</option>
                                <option value="dcNor.php" /> Normal<br />
                                <option value="dcDry.php" /> Dry<br />
                                <option value="dcCom.php" /> Combination<br />
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
                    <div class="col-md-4 col-sm-6 tolak-product showimg whit oil com 1">
                        <div class=" a">
                            <img src="images/skin-natural/duo-clean/duo-clean-whitening-and-oil-control-foam.png"  />
                        </div>
                        <div class="col-xs-6 b">
                           <b>Duo Clean Whitening + Oil Control Duo Foam</b><p>Foam cleanser that removes oil and whitens skin.
                            </p><a class="bar-findout bar-align" href="DC-WhiteningandOilControlFoam.php"> &#9656; Find Out </a>
                        </div>
                    </div>


                    <div class="col-md-4 col-sm-6 tolak-product showimg whit 2">
                        <div class=" a">
                            <img src="images/skin-natural/duo-clean/duo-clean-whitening-and-pore-minimizing-foam.png"  />
                        </div>
                        <div class="col-xs-6 b">
                           <b>Duo Clean Whitening + Pore Minimizing Duo Foam</b><p>Foam cleanser that minimizes pores and whitens skin.
                            </p><a class="bar-findout bar-align" href="DC-WhiteningandPoreMinimizingFoam.php"> &#9656; Find Out </a>
                        </div>
                    </div>

            </div>

            </div>
        </div>

<!-- End OF Begin Content -->







<?php
include('_includes/footer.php');
?>



