<?php
    // Displaying the products on the index.php page
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
                <div class="col-md-3  text-center">
                    <span id="name-$product->get_name()">
                    <?php echo $product->get_name(); ?>
                    </span>
                </div>
                <div class="col-md-2  text-center">
                    <span id="name-$product->get_price()">
                    <?php echo $product->get_price(); ?>
                    </span>
                    €
                </div>
                <div class="col-md-4 text-center">
                    <input type="number" min="1" name="quantity" class="quantity-products ml-1" value="1" />
                </div>
                <div class="col-md-3 text-center">
                    <input class="btn btn-secondary" name="add_to_cart" type="submit" value="Add" />
                </div>
        </div>
    </form> 

<?php
    }
?>