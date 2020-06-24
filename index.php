<?php session_start(); ?>

<?php
    include "./includes/addToCart.php";
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"
        integrity="sha256-3h45mwconzsKjTUULjY+EoEkoRhXcOIU4l5YAw2tSOU=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css"
        integrity="sha256-etrwgFLGpqD4oNAFW08ZH9Bzif5ByXK2lXNHKy7LQGo=" crossorigin="anonymous" />
    <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <title>Add To Cart</title>
</head>

<body>

<!--TITLE-->
<div class="container mt-3">
        <div class="text-center bg-dark p-3 text-light title-style">
            ADD TO CART
        </div>
</div>

<!--PRODUCTS AND CART-->
<div class="container mt-3 mb-5">
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header text-center text-light bg-secondary">
                    <h5>Products</h5>
                </div>
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-3 text-center"><strong>Product</strong></div>
                        <div class="col-md-2 text-center"><strong>Price</strong></div>
                        <div class="col-md-4 text-center"><strong>Quantity</strong></div>
                        <div class="col-md-3 text-center"><strong>Add</strong></div>
                    </div>
                        <?php include "./includes/productsRender.php"; ?>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-header text-center text-light bg-secondary">
                    <h5>Cart</h5>
                </div>
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-md-2 cart-font-size text-center"><strong>Product</strong></div>
                        <div class="col-md-3 cart-font-size text-center"><strong>Quantity</strong></div>
                        <div class="col-md-2 cart-font-size text-center"><strong>Unit Price</strong></div>
                        <div class="col-md-2 cart-font-size text-center"><strong>Shipping Costs</strong></div>
                        <div class="col-md-2 cart-font-size text-center"><strong>Total Price</strong></div>
                        <div class="col-md-1 cart-font-size text-center"><strong>X</strong></div>
                    </div>
                    <hr>
                    <?php include "./includes/cartRender.php" ?>
                </div>
            </div>
        </div>
    </div>
</div>
    

</body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"
        integrity="sha256-zUQGihTEkA4nkrgfbbAM1f3pxvnWiznBND+TuJoUv3M=" crossorigin="anonymous"></script>
<script>src="/scripts/productsHardcoding.js"</script>

</html>