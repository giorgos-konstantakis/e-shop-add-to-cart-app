# ADD TO CART APPLICATION ( php )

This is an e-shop add to cart application, developed in php.
User can choose items from the item pool ( hardcoded ) , and add them to the cart,
where information about price, shipping costs and discounts of the products are displayed.

Basically, i use a single php page ( index.php ), which is separated in two "columns". One which displays
the products to be added to the basket , and the basket. To perform the necessary calculations (total products price,shipping costs etc) , i use a SESSION variable, which is an array of objects, where basic parameters of the products are stored ( such as name,price,weightFactor for shipping costs, quantity of a product to be sold etc). User has the ability to add a product to the basket, change the quantity of a specific product he/she wants to buy, remove a product from the basket or remove all products from the basket.