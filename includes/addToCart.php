<?php 
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

    if(isset($_GET["action"])){
        if($_GET["action"] == "delete_all"){
            unset($_SESSION["cart"]);
            echo '<script>window.location="index.php"</script>';
        }
    }
?>