
<!--try to make product cards with php oop/foreach loop -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!-- this code for do the card side by side  -->
<style>
 .card {
    display: inline-block;
    margin: 10px;
 }
</style>
<!-- end side by side code-->  
</head>
<div class="container bg-primary-subtle border  border-5 p-15 margin-10  border-dark">
<h2> <center> Feature Collection</center></h2>
  <body>
    <!--php start-->
  <?php
  //define class//
class product{
    public $image;
    public $title;
    public $description;
    public $price;

    public function __construct($image,$title, $description, $price){
        $this->image=$image;
        $this->title=$title;
        $this->description=$description;
        $this->price=$price;
    }

    public function showproduct(){ 
        
    echo ' <div class="card" style="width: 18rem;" >
       <img src="mahinhome/productcard/proimage" ' . $this->image . '" class="card-img-top" alt="Product-Image">
        <div class="card-body">
          <h5 class="card-title">'. $this->title .' </h5>
          <p class="card-text">'. $this->description .' </p>
          <p class="card-text">Price: $'. $this->price .' </p>
          <a href="#" class="btn btn-primary">Buy Now</a>
        </div>
      </div>';
     
}
    }
//object//
$products = [
    new Product('productcard/proimage/p1.jpg', 'BRANDED T-SHIRT', 'T-shirts are a staple of our everyday wardrobe—probably because of how incredibly versatile they are. They can work as a blank canvas for artwork in a way other clothing can’t, and that means the possibilities for t-shirt design are endless.', 100),
    new Product('p2.jpg', 'Unique T-shirt', 'T-shirts are a staple of our everyday wardrobe—probably because of how incredibly versatile they are. They can work as a blank canvas for artwork in a way other clothing can’t, and that means the possibilities for t-shirt design are endless.', 200),
    new Product('p3.jpg', 'T-shit for Man', 'T-shirts are a staple of our everyday wardrobe—probably because of how incredibly versatile they are. They can work as a blank canvas for artwork in a way other clothing can’t, and that means the possibilities for t-shirt design are endless.', 300),
    new Product('p4.jpg', 'Top Stripe Summer Top', 'T-shirts are a staple of our everyday wardrobe—probably because of how incredibly versatile they are. They can work as a blank canvas for artwork in a way other clothing can’t, and that means the possibilities for t-shirt design are endless.', 400),
    new Product('p5.jpg', 'Cotton-Half Sleeves T-Shirt ', 'T-shirts are a staple of our everyday wardrobe—probably because of how incredibly versatile they are. They can work as a blank canvas for artwork in a way other clothing can’t, and that means the possibilities for t-shirt design are endless.', 450),
    new Product('p6.jpg', 'Solid  Round Neck T-Shirt', 'T-shirts are a staple of our everyday wardrobe—probably because of how incredibly versatile they are. They can work as a blank canvas for artwork in a way other clothing can’t, and that means the possibilities for t-shirt design are endless.', 345),
    new Product('p7.jpg', 'Mens Cotton Rich Striped Round Neck ', 'T-shirts are a staple of our everyday wardrobe—probably because of how incredibly versatile they are. They can work as a blank canvas for artwork in a way other clothing can’t, and that means the possibilities for t-shirt design are endless.', 245),
    new Product('p8.jpg', 'Round Neck T-Shirt', 'T-shirts are a staple of our everyday wardrobe—probably because of how incredibly versatile they are. They can work as a blank canvas for artwork in a way other clothing can’t, and that means the possibilities for t-shirt design are endless.', 690),
    new Product('p9.jpg', 'Round Neck T-Shirt', 'T-shirts are a staple of our everyday wardrobe—probably because of how incredibly versatile they are. They can work as a blank canvas for artwork in a way other clothing can’t, and that means the possibilities for t-shirt design are endless.', 690),
];
// foreach looping//
foreach ($products as $product) {
    $product->showproduct();
}

?>
<?php
$path = $_SERVER['PHP_SELF'];
var_dump($path);
?>


</div>
  </body>
</html>