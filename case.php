<?php
    $products = $db->query('SELECT * FROM products ORDER BY date DESC LIMIT 6')->fetchAll(); 
?>              
                <div class="row">
              
                    <?php
                         foreach($products as $product) {

                            echo displayProduct($product, 100);

                    }
                    ?>
                 
                </div><!-- /.row -->