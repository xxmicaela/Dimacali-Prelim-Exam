<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GRWM Receipt</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-direction: column;
            width: 100%;
        }

        .nav {
            width: 100%;
            text-align: center;
            background-color: #fff;
            padding: 10px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .con {
            background-color: #fff;
            padding: 40px 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 80%; 
            text-align: center;
            border: 2px solid #DE3163;
            margin: 0 auto;
        }

        h2 {
            color: #DE3163;
            text-align: center;
        }

        .receipt {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        .receipt .item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
            width: 100%;
            max-width: 800px; 
        }

        .item-name {
            text-align: left;
            font-size: 1.1rem;
        }

        .item-price {
            text-align: right;
            font-size: 1.1rem;
        }

        .total {
            font-weight: bold;
            padding-top: 15px;
            font-size: 1.3rem;
            border-top: 2px solid #DE3163;
            width: 100%;
            max-width: 800px; 
        }

        button {
            background-color: #DE3163;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            margin-top: 20px;
        }

    </style>
</head>
<body>
    
    <div class="nav">
        <h1><i style="color:pink">GRWM RECEIPT</i></h1>
        <div class="con">
            <?php
           
            $username = $_POST['u-name'];
            $address = $_POST['address'];

            echo "<h2>Order Receipt for $username</h2>";
            echo "<p><strong>Address:</strong> $address</p>";
            
            $products = [
                'nami' => ['name' => 'Nami Blush', 'price' => 299.00],
                'huntress' => ['name' => 'Huntress Blush', 'price' => 299.00],
                'latte' => ['name' => 'Latte Blush', 'price' => 299.00],
                'berry-pepper' => ['name' => 'Berry Pepper Lip Speak', 'price' => 349.00],
                'main-char' => ['name' => 'Main Character Lip Speak', 'price' => 349.00],
                'margarita' => ['name' => 'Margarita Lip Speak', 'price' => 349.00],
                'oat' => ['name' => 'Oat Pressed Powder', 'price' => 399.00],
                'nutmeg' => ['name' => 'Nutmeg Pressed Powder', 'price' => 399.00],
                'mocha' => ['name' => 'Mocha Pressed Powder', 'price' => 399.00],
                'almond' => ['name' => 'Almond Radiance Tint', 'price' => 449.00],
                'cedar' => ['name' => 'Cedar Radiance Tint', 'price' => 449.00],
                'cashmere' => ['name' => 'Cashmere Radiance Tint', 'price' => 449.00],
                'length' => ['name' => 'Lengthening Lash Booster', 'price' => 350.00],
                'vol' => ['name' => 'Volumizing Lash Booster', 'price' => 350.00],
            ];
            
            $total = 0;
            
            echo "<div class='receipt'>";
            foreach ($products as $key => $product) {
                if (isset($_POST[$key])) {
                    echo "<div class='item'><span class='item-name'>{$product['name']}</span><span class='item-price'>₱{$product['price']}</span></div>";
                    $total += $product['price'];
                }
            }

            echo "<div class='total'><span>Total:</span> ₱$total</div>";
            echo "</div>";
            ?>

            <button onclick="window.print()">Print Receipt</button>
        </div>
    </div>

</body>
</html>
