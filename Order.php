<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="MenuHeader">
        <div class="warpper">

            <div class="logo">
                <img src="img/140939784_439964713857728_8942879860414551367_n.png" alt="Logo">
            </div>
            <div class="Bar">
                <ul>
                    <li><a href="#">Contact</a></li>
                    <li><a href="Food.php">Food</a></li>
                    <li><a href="Categories.php">Categories</a></li>
                    <li><a href="Index.php">Home</a></li>
                </ul>
            </div>
        </div>

    </div>

    <div class="Search warpper">
        <div class="order">
            <h1 class="Color-white">Fill this form to confirm order.</h1>
            <fieldset>
                <legend>Selected Food</legend>

                <div class="imgfood">
                    <img src="Img/Pizza (2).jpg" alt="Chicke Hawain Pizza" class="width100 imgcurve">
                </div>
                <div class="food-desc">
                    <h3>Peperoni Pizza</h3>
                    <p class="price">$7.3</p>
                    <div class="order-label">Quantity</div>
                    <input type="number" name="qty" class="input-responsive" value="1" required>
                </div>

            </fieldset>



            <fieldset>
                <legend>Delivery Details</legend>
                <div class="order-label">Full Name</div>
                <input type="text" name="full-name" placeholder="E.g. BlueOasys" class="input-responsive" required>

                <div class="order-label">Phone Number</div>
                <input type="tel" name="contact" placeholder="E.g. 0943xxxxxx" class="input-responsive" required>

                <div class="order-label">Email</div>
                <input type="email" name="email" placeholder="E.g. BlueOasys.com" class="input-responsive" required>

                <div class="order-label">Address</div>
                <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive"
                    required></textarea>

                <input type="submit" name="submit" value="Confirm Order" class="btn btn-color">
            </fieldset>

        </div>



    </div>
</body>

</html>