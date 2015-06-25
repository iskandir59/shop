 

 <?php include_once "header.php"; ?>
 <div class="row">
 <?php
    
    include "sidebar.php";
    if (empty($_GET['id'])) {
    header('Location: index.php');
    exit();
    }

    $id = intval($_GET['id']);
    
    $query = $db->prepare('SELECT * FROM products WHERE id = :id');
    $query->bindValue('id', $id, PDO::PARAM_INT);
    $query->execute();
    $product = $query->fetch();


    
    // if (empty($product)) {
    //     header('Location: index.php');
    //     exit();
    // }
    // 
    // $back_link = 'index.php';
    // if (!empty($_SERVER['HTTP_REFERER'])) {
    //     $back_link = $_SERVER['HTTP_REFERER'];
    // }
?>


       

            

            <div class="col-md-9">

                <div class="product-full">
                    <div class="thumbnail">
                        <img class="img-responsive" src="img/product/<?= $product['picture']?>" alt="">
                        <div class="caption-full">
                            <h4 class="pull-right"><?= $product['price']?></h4>
                            <h4><a href="#"><?= $product['name']?></a>
                            </h4>
                            <blockquote>
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <strong>Duis aute irure dolor in</strong> reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
                            </blockquote>
                            <p><?= nl2br($product['description'])?><br><br>
                            Product features :</p>
                            <ul>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Ut enim ad minim veniam</li>
                                <li>Consectetur adipisicing elit</li>
                                <li>Sed do eiusmod tempor incididunt</li>
                                <li>Sunt in culpa qui officia deserunt</li>
                            </ul>
                            <p>See more product infos at <a target="_blank" href="#">http://www.brand.com/product/</a>.</p>
                        </div>
                        <div class="ratings">
                            <p class="pull-right">3 reviews</p>
                            <p>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                                4.0 stars
                            </p>
                        </div>
                        <div class="btns text-center clearfix">
                            <a class="btn btn-success" href=""><span class="glyphicon glyphicon-shopping-cart"></span> Add to cart</a>
                        </div>
                    </div><!-- /.thumbnail -->
                </div><!-- /.product-full -->

                <div class="well">

                    <div class="text-right">
                        <a class="btn btn-primary">Leave a Review</a>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">10 days ago</span>
                            <p>This product was great in terms of quality. I would definitely buy another!</p>
                        </div>
                    </div><!-- /.row -->

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">12 days ago</span>
                            <p>I've alredy ordered another one!</p>
                        </div>
                    </div><!-- /.row -->

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <?php for ($i=0; $i < $product['rating'] ; $i++) { ?>
                            <span class="glyphicon glyphicon-star"></span>
                            <?php } ?>
                            Anonymous
                            <span class="pull-right">15 days ago</span>
                            <p>I've seen some better than this, but not at this price. I definitely recommend this item.</p>
                        </div>
                    </div><!-- /.row -->

                </div><!-- /.well -->

            </div><!-- /.col-md-9 -->

        </div><!-- /.row -->

    </div><!-- /.container -->

   <?php include_once "footer.php"; ?>