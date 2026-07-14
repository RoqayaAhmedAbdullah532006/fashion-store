<?php
include("navbar.php");

$products = [

    "Men T-Shirt" => [
        "price" => "450",
        "img" => "imgs/t-shirt.jpg",
        "desc" => "100% Cotton T-Shirt"
    ],

    "Women Dress" => [
        "price" => "850",
        "img" => "imgs/dress.jbg",   
        "desc" => "Elegant Summer Dress"
    ],

    "Men Jeans" => [
        "price" => "700",
        "img" => "imgs/jeans.jbg",  
        "desc" => "Slim Fit Blue Jeans"
    ],

    "Women Jacket" => [
        "price" => "1200",
        "img" => "imgs/jacket.jfif",
        "desc" => "Winter Fashion Jacket"
    ],

    "Hoodie" => [
        "price" => "900",
        "img" => "imgs/hoodies.jbg",
        "desc" => "Comfortable Casual Hoodie"
    ],

    "Sneakers" => [
        "price" => "1500",
        "img" => "imgs/shose.webp",
        "desc" => "Stylish White Sneakers"
    ]

];
?>

<div class="container mt-5">

    <h2 class="text-center section-title mb-5">Our Collection</h2>

    <div class="row">

        <?php foreach($products as $product => $values){ ?>
<div class="col-lg-4 col-md-6 col-sm-12 mb-4 d-flex">

    <div class="card product-card w-100">

                <img src="<?php echo $values['img']; ?>"
                     class="card-img-top product-img"
                     alt="<?php echo $product; ?>">

                <div class="card-body d-flex flex-column">

                    <h4 class="product-name">
                        <?php echo $product; ?>
                    </h4>

                    <p class="product-desc">
                        <?php echo $values['desc']; ?>
                    </p>

                    <h5 class="product-price">
                        <?php echo $values['price']; ?> EGP
                    </h5>

                  <button class="btn btn-dark btn-block mt-auto">
                    Add To Cart
                </button>

                </div>

            </div>

        </div>

        <?php } ?>

    </div>

</div>

</body>
</html>