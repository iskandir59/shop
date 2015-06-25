  <?php
 $products = $db->query('SELECT * FROM products ORDER BY date ASC LIMIT 2')->fetchAll(); 

?>
  <div class="row">

            <div class="col-md-3">

                <p class="lead">Categories</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Category 1</a>
                    <a href="#" class="list-group-item">Category 2</a>
                    <a href="#" class="list-group-item">Category 3</a>
                    <a href="#" class="list-group-item">Category 4</a>
                    <a href="#" class="list-group-item">Category 5</a>
                </div>

                <p class="lead">Featured products</p>

                <div class="product">
                    <div class="thumbnail">
                    <?php foreach ($products as $product) { ?>
                        <img src="<?= "img/product/".$product['picture']?>" alt="">
                        
                       
                        <div class="caption">
                            <h4 class="pull-right"><?= $product['price']?></h4>
                            <h4><a href="#"><?= cutString($product['name'], 20)?></a>
                            </h4>
                            <p><?= nl2br($product['description'])?></p>
                        </div>
                        <div class="ratings">
                            <p class="pull-right">12 reviews</p>
                            <p><?php for ($i=0; $i < $product['rating'] ; $i++) { ?>
                                <span class="glyphicon glyphicon-star"></span>
                               <?php } ?>
                            </p>
                        </div>

                        <div class="btns clearfix">
                            <a class="btn btn-info pull-left" href=""><span class="glyphicon glyphicon-eye-open"></span> View</a>
                            <a class="btn btn-primary pull-right" href=""><span class="glyphicon glyphicon-shopping-cart"></span> Add to cart</a>
                        </div><hr> <?php } ?>
                    </div><!-- /.thumbnail -->
                </div><!-- /.product -->

                

            </div><!-- /.col-md-3 -->
        <div class="col-md-9">