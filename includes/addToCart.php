<?php 
    // Adding an item to the cart ( setting the SESSION variable's data )
    if(isset($_POST["add_to_cart"])){
        if(isset($_SESSION["cart"])){
            $item_array_id = array_column($_SESSION["cart"],"item_id");
            if(!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'item_id' => $_POST["hidden_id"],
                    'item_name' => $_POST["hidden_name"],
                    'item_price' => $_POST["hidden_price"],
                    'item_weightFactor' => $_POST["hidden_weightFactor"],
                    'item_quantity' => $_POST["quantity"]
                );
                $_SESSION["cart"][$count] = $item_array;
            } else{
                    echo '<script>alert("Item already added.")</script>';
                    echo '<script>window.location="index.php"</script>'; 
            }
        } else{
            $item_array = array(
                'item_id' => $_POST["hidden_id"],
                'item_name' => $_POST["hidden_name"],
                'item_price' => $_POST["hidden_price"],
                'item_weightFactor' => $_POST["hidden_weightFactor"],
                'item_quantity' => $_POST["quantity"]
            );
            $_SESSION["cart"][0] = $item_array;
        }
    }

    // Handling changes on the quantity of a product
    // that is already added on the cart (increase or decrease quantity)
    if(isset($_GET["action"])){
        if($_GET["action"]=="change_quantity"){
            if(isset($_POST["minus"])){
                foreach($_SESSION["cart"] as $keys =>$values){
                    $count = count($_SESSION["cart"]);
                    if($values["item_id"] == $_GET["id"]){
                        if($values["item_quantity"] > 0){
                            $_SESSION["cart"][$keys]["item_quantity"] = $_SESSION["cart"][$keys]["item_quantity"]-1;
                        }
                    }
                }
            } else{
                foreach($_SESSION["cart"] as $keys =>$values){
                    $count = count($_SESSION["cart"]);
                    if($values["item_id"] == $_GET["id"]){
                        $_SESSION["cart"][$keys]["item_quantity"] = $_SESSION["cart"][$keys]["item_quantity"]+1;
                    }
                }
            }
        }
    }
    
    
    // Delete an individual item from basket
    if(isset($_GET["action"])){
        if($_GET["action"] == "delete"){
            foreach($_SESSION["cart"] as $keys =>$values){
                if($values["item_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>window.location="index.php"</script>';
                }
            }
        }
    }

    // Delete all items from basket
    if(isset($_GET["action"])){
        if($_GET["action"] == "delete_all"){
            unset($_SESSION["cart"]);
            echo '<script>window.location="index.php"</script>';
        }
    }
?>