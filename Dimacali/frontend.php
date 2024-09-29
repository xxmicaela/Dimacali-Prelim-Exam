<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prelim Exam</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="nav">
        <h1><i style="color:pink">GET READY WITH ME</i></h1>
    </div>

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
        }

        .nav {
            width: 100%;
            text-align: center;
            background-color: #fff;
            padding: 10px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .container {
            display: flex;
            flex-direction: justify;
            align-items: center;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 900px;
            margin: 20px auto;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            padding-bottom: 20px;
        }

        form label {
            font-size: 1.2rem;
            margin: 5px 0;
        }

        form input[type="text"] {
            padding: 8px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 300px;
            margin-bottom: 15px;
        }

        form button {
            background-color: #DE3163;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
        }

        .product-grid {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            margin: 20px 0;
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 50%;
            max-width: 800px;
            border: 2px solid #DE3163;
        }

        .product-item img {
            width: 50px;
            height: 50px;
            border-radius: 5px;
            object-fit: cover;
        }

        .product-grid label {
            font-size: 1rem;
            margin-left: 10px;
        }

        h4 {
            margin-bottom: 10px;
            text-align: center;
        }
    </style>

    <div class="container">
        <form action="backend.php" method="post">
            <!-- Username -->
            <label for="u-name">Username:</label>
            <input type="text" name="u-name" id="u-name" placeholder="Enter your username" required
                   value="<?php echo isset($_POST['u-name']) ? $_POST['u-name'] : ''; ?>">

            <!-- Address -->
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" placeholder="Enter your address" required
                   value="<?php echo isset($_POST['address']) ? $_POST['address'] : ''; ?>">

            <h2><i style="color:#DE3163">PRODUCTS</i></h2>

            <!-- Blush On Section -->
            <section class="product-grid">
                <div class="blush">
                    <h4><i style="color:hotpink">Blush On</i></h4>
                    <div class="product-item">
                        <input type="checkbox" name="nami" id="nami">
                        <img src="img/nami.jpg" alt="Nami Blush">
                        <label for="nami">Nami</label>
                    </div>
                    <div class="product-item">
                        <input type="checkbox" name="huntress" id="huntress">
                        <img src="img/huntress.jpg" alt="Huntress Blush">
                        <label for="huntress">Huntress</label>
                    </div>
                    <div class="product-item">
                        <input type="checkbox" name="latte" id="latte">
                        <img src="img/latte.jpg" alt="Latte Blush">
                        <label for="latte">Latte</label>
                    </div>
                </div>
            </section>

            <!-- Lip Speak Section -->
            <section class="product-grid">
                <div class="lipspeak">
                    <h4><i style="color:hotpink">Lip Speak</i></h4>
                    <div class="product-item">
                        <input type="checkbox" name="berry-pepper" id="berry-pepper">
                        <img src="img/Berry Pepper.jpg" alt="">
                        <label for="berry-pepper">Berry Pepper</label>
                    </div>
                    <div class="product-item">
                    <input type="checkbox" name="main-char" id="main-char">
                    <img src="img/Main Character.jpg" alt="">
                    <label for="main-char">Main Character</label>
                    </div>    
                    <div class="product-item">
                    <input type="checkbox" name="margarita" id="margarita">
                    <img src="img/Margarita.jpg" alt="">
                    <label for="margarita">Margarita</label>
                    </div>
                    
                </div>
            </section>

            <!-- Pressed Powder Section -->
            <section class="product-grid">
                <div class="pressedpowder">
                    <h4><i style="color:hotpink">Pressed Powder</i></h4>
                    <div class="product-item">
                        <input type="checkbox" name="oat" id="oat">
                        <img src="img/Pressed Oat.jpg" alt="">
                        <label for="oat">Oat</label>
                    </div>
                    <div class="product-item">
                        <input type="checkbox" name="nutmeg" id="nutmeg">
                        <img src="img/Pressed Nutmeg.jpg" alt="">
                        <label for="nutmeg">Nutmeg</label>
                    </div>
                    <div class="product-item">
                        <input type="checkbox" name="mocha" id="mocha">
                        <img src="img/Pressed Mocha.jpg" alt="">
                        <label for="mocha">Mocha</label>
                    </div>
                </div>
            </section>

            <!-- Radiance Tint Section -->
            <section class="product-grid">
                <div class="radiance">
                    <h4><i style="color:hotpink">Radiance Tint</i></h4>
                    <div class="product-item">
                        <input type="checkbox" name="almond" id="almond">
                        <img src="img/Almond.jpg" alt="">
                        <label for="almond">Almond</label>
                    </div>
                    <div class="product-item">
                        <input type="checkbox" name="cedar" id="cedar">
                        <img src="img/Cedar.jpg" alt="">
                        <label for="cedar">Cedar</label>
                    </div>
                    <div class="product-item">
                        <input type="checkbox" name="cashmere" id="cashmere">
                        <img src="img/Cashmere.jpg" alt="">
                        <label for="cashmere">Cashmere</label>
                    </div>    
                </div>
            </section>

            <!-- Lash Booster Section -->
            <section class="product-grid">
                <div class="lash">
                    <h4><i style="color:hotpink">Lash Booster</i></h4>
                    <div class="product-item">
                        <input type="checkbox" name="length" id="length">
                        <img src="img/Lengthening.jpg" alt="">
                        <label for="length">Lengthening</label>
                    </div>

                    <div class="product-item">
                        <input type="checkbox" name="vol" id="vol">
                        <img src="img/Volumizing.jpg" alt="">
                        <label for="vol">Volumizing</label>
                    </div>
                </div>
            </section>

            <!-- Submit Button -->
            <button type="submit">Submit</button>
        </form>
    </div>

</body>
</html>
