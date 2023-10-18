<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Product Cards with PHP</title>
</head>
<body>
<?php
$products = [
    [
        'name' => 'Product 1',
        'price' => '$19.99',
        'description' => 'Description for Product 1',
        'image' => 'product1.jpg',
    ],
    [
        'name' => 'Product 2',
        'price' => '$24.99',
        'description' => 'Description for Product 2',
        'image' => 'product2.jpg',
    ],
    // Add more products as needed
];
foreach ($products as $product):
    echo $product['image'];
      echo $product['name'];
      echo $product['description'];
      echo $product['name'];
      echo $product['price'];
?>

    <div class="container">
        <div class="row">
            <?php ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?php  ?>" class="card-img-top" alt="<?php ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php  ?></h5>
                        <p class="card-text"><?php ?></p>
                        <p class="card-text"><strong>Price:</strong> <?php  ?></p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
