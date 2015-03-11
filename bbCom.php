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
                                <option value="oil" /> Oil Control<br />
                            </select>
                        </div>
                        <div class="col-md-2 col-xs-2 ">
                            <select  class="filter2 filter-btn" onchange="location = this.options[this.selectedIndex].value;">
                                <option value="">Skin Type</option>
                                <option value="bbNor.php" /> Normal<br />
                                <option value="bbCom.php" /> Combination<br />
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
					<div class="col-md-4 col-sm-6 tolak-product showimg nor oil com 1">
						<div class=" a">
            				<img src="images/skin-natural/bbmiracleskin-m.png"  />
        				</div>
				        <div class="col-xs-6 b">
				           <b>BB Miracle Skin Perfector All-in-1 Perfecting Cream Water Fresh SPF21/PA++</b><p>The All-in-1 Water Fresh BB cream that gives you an amazing fairer-looking skin which is fresh and light.
							</p><a class="bar-findout bar-align" href="BB-miracleskinperfectorallin1.php"> &#9656; Find Out </a>
       					</div>
					</div>

			</div>

			</div>
		</div>

<!-- End OF Begin Content -->







<?php
include('_includes/footer.php');
?>



