<?php
    session_start();

    //if there no login, it goes back to index
    if(empty($_SESSION)){
        header("location: ../views/");
        exit;
    }

    include "../classes/Product.php";
    $product_id = $_GET['product_id'];


    $product = new Product;
    $product_details = $product->displaySpecificProduct($product_id);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Buy Product</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white justify-content-between">
        <a href="dashboard.php" class="ms-3" title="Home">
            <i class="fa-solid fa-house fa-2x text-dark"></i>
        </a>

        <a href="profile.php" class="nav-link text-secondary">
            <span class="fw-bold fs-5">Welcome, <?= ucfirst($_SESSION['username'])?></span>
        </a>

        <!-- <div class="ms-auto me-3 navbar-nav"> -->
            <a href="../actions/logout.php" class="me-3" title="Logout"><i class="fa-solid fa-user-xmark fa-2x text-danger"></i></a>
        <!-- </div> -->
    </nav>
    <br>
    <div class="card w-50 mx-auto border-0">
        <h1 class="display-4 fw-bold text-success text-center"><i class="fa-solid fa-hand-holding-dollar"></i> Payment</h1>

        <form action="../actions/product-actions.php?product_id=<?= $product_id ?>" method="post" class="w-75 mx-auto pt-4 p-5">
            <div class="row mb-3">
                <div class="col-md">
                    <label for="product-name" class="form-label small text-secondary">Product Name</label>
                    <p class="h1"><?= $product_details['product_name'] ?></p>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="price" class="form-label small text-secondary">Total Price</label>
                    <p class="h1">$ <?= $product_details['price'] * $_POST['buy_quantity'] ?></p>
                </div>
                <div class="col-md-6">
                    <label for="quantity" class="form-label small text-secondary">Buy Quantity</label>
                    <p class="h1"><?= $_POST['buy_quantity'] ?></p>
                    <p class="text-danger">Maximum of <?= $product_details['quantity'] ?></p>
                </div>
            </div>
            <div class="col-md-6">
                <label for="buy_quantity" class="form-label small text-secondary">Payment</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="price-tag">$</span>
                    <input type="number" name="price" id="price" class="form-control" aria-label="Price" aria-describedby="price-tag" min="<?= $product_details['price'] * $_POST['buy_quantity'] ?>">
                </div>
            </div>
            <br>
            <input type="hidden" name="buy_quantity" value="<?= $_POST['buy_quantity'] ?>">
        

            <div class="row">
                <div class="col-md">
                    <button type="submit" class="btn btn-success w-100" name="pay_product">Pay</button>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>