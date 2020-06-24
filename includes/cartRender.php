<div class="row">
        <?php
            if(!empty($_SESSION["cart"])){
                $total_product_price = 0;
                $total_shipping_costs = 0;
                foreach($_SESSION["cart"] as $keys => $values){
        ?>
            <div class="col-md-2 cart-font-size text-center"><?php echo $values["item_name"]; ?></div>
            <div class="col-md-2 cart-font-size text-center"><?php echo $values["item_quantity"]; ?></div>
            <div class="col-md-2 cart-font-size text-center"><?php echo $values["item_price"]; ?> €</div>
            <div class="col-md-2 cart-font-size text-center"><?php echo number_format(5*$values["item_quantity"]*$values["item_weightFactor"],2); ?> €</div>
            <div class="col-md-2 cart-font-size text-center"><?php echo number_format($values["item_quantity"]*$values["item_price"],2); ?> €</div>
            <div class="col-md-2 cart-font-size text-center"><a href="index.php?action=delete&id=<?php echo $values["item_id"] ?>"><span>Remove</span></a></div>
        <?php   
                $discount = 0;
                $total_product_price = $total_product_price + ($values["item_quantity"]*$values["item_price"]);
                $total_shipping_costs = $total_shipping_costs + (5*$values["item_quantity"]*$values["item_weightFactor"]);
                if($total_product_price >=100){
                    $discount = 0.1*$total_product_price;
                }
            }
        ?>
</div>
        <hr>
        <?php if($discount == 0){ ?>
        <div class="row">
                <div class="col-md-5">Total product price:</div>
                <div class="col-md-7 text-right"><strong><?php echo number_format($total_product_price,2); ?> €</strong></div>
        </div>
        <?php } else{ ?>
            <div class="row">
                <div class="col-md-5">Total product price:</div>
                <div class="col-md-7 text-right">
                    <?php echo number_format($total_product_price,2); ?> € - 
                    <?php echo number_format($discount,2); ?> € ( -10% ) = 
                    <strong><?php echo number_format($total_product_price-$discount,2); ?> €</strong>
                </div>
            </div>
        <?php } ?>
        <div class="row">
            <div class="col-md-12 text-right"><strong>+</strong></div>
        </div>
        <div class="row">
            <div class="col-md-5">Total shipping costs:</div>
            <div class="col-md-7 text-right">
                <strong><?php echo number_format($total_shipping_costs,2); ?> €</strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-5"> Final price:</div>
            <div class="col-md-7 text-right">
                <strong><?php echo number_format($total_product_price + $total_shipping_costs-$discount,2); ?> €</strong>
            </div>
        <?php
        }
        ?>
</div>
<div class="row mt-5">
    <div class="col-md-4 text-left">
        <a class="btn btn-danger" href="index.php?action=delete_all"><span>Remove all items</span></a>
    </div>
    <div class="col-md-8 text-right mt-2">
        <strong>10% discount for purchases over 100 €</strong>
    </div>
</div>

