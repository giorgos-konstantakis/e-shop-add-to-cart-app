<?php
    include 'productsHardcoding.php';

    foreach ($products as $product) {
?>  
    <hr>
    <form method="post" action="index.php?action=add&id=<?php echo $product->get_id(); ?>">
        <div class="row mb-2">
        <input type="hidden" name="hidden_id" value="<?php echo $product->get_id(); ?>">
                <input type="hidden" name="hidden_name" value="<?php echo $product->get_name(); ?>">
                <input type="hidden" name="hidden_price" value="<?php echo $product->get_price(); ?>">
                <input type="hidden" name="hidden_weightFactor" value="<?php echo $product->get_weightFactor(); ?>">
                <div class="col-md-3">
                    <span id="name-$product->get_name()">
                    <?php echo $product->get_name(); ?>
                    </span>
                </div>
                <div class="col-md-2">
                    <span id="name-$product->get_price()">
                    <?php echo $product->get_price(); ?>
                    </span>
                    €
                </div>
                <div class="col-md-4">
                    Quantity:
                    <input type="text" name="quantity" class="quantity ml-1" value="1" />
                </div>
                <div class="col-md-3">
                    <input class="btn btn-secondary" name="add_to_cart" type="submit" value="Add to cart" />
                </div>
        </div>
    </form> 

<?php
    }
?>