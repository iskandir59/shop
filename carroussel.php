<?php
 $productss = $db->query('SELECT * FROM products ORDER BY date DESC LIMIT 6')->fetchAll(); 

?>
<div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="<?php echo "img/product/".$productss[array_rand($productss)]["picture"] ?>" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="<?php echo "img/product/".$productss[array_rand($productss)]["picture"] ?>" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="<?php echo "img/product/".$productss[array_rand($productss)]["picture"] ?>" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="<?php echo "img/product/".$productss[array_rand($productss)]["picture"] ?>" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="<?php echo "img/product/".$productss[array_rand($productss)]["picture"] ?>" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div><!-- /.carousel -->
                    </div><!-- /.col-md-12 -->

                </div><!-- /.row.carousel-holder -->