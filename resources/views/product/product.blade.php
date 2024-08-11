<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page with Navigation and Buy Button</title>
    <style>
        /* Reset some default browser styles */
        body, h1, p, ul, li {
            margin: 0;
            padding: 0;
        }

        /* Basic body styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        /* Navigation bar styling */
        .navbar {
            background-color: #333;
            overflow: hidden;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 14px 20px;
            margin-bottom: 20px;
        }

        .navbar a {
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            font-size: 17px;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Buy button styling */
        .buy-btn {
            background-color: #ff9800;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        .buy-btn:hover {
            background-color: #e68a00;
        }

        /* Product container styling */
        .product-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
        }

        .product-card {
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 250px;
            height: 350px; /* Fixed height for uniform card sizes */
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .product-card img {
            width: 100%;
            height: 150px; /* Fixed height for images */
            object-fit: cover; /* Ensures the image covers the area without stretching */
            border-bottom: 1px solid #ddd;
        }

        .product-card h2 {
            font-size: 20px;
            color: #333;
            margin: 10px 0;
        }

        .product-card p {
            font-size: 16px;
            color: #666;
            margin: 0 0 20px;
        }

        .product-card .buy-btn {
            width: 100%;
            padding: 10px 0;
            border: none;
        }
    </style>
</head>
<body>

    <!-- Navigation bar -->
    <div class="navbar">
        <div class="nav-links">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#contact">Contact</a>
        </div>
    </div>

    <!-- Product cards -->
    <div class="product-container">
        <div class="product-card">
            <img src="https://media.istockphoto.com/id/1161219626/photo/beauty-brushes.jpg?s=1024x1024&w=is&k=20&c=eB-bI0NBPHvf8qm2UKEUD9UN2v_qP9nlhr0W3NCe0Xk=" alt="Product 1 Image">
            <h2>Product 1</h2>
            <p>Description of Product 1</p>
            <a href="#buy" class="buy-btn">Buy Now</a>
        </div>
        <div class="product-card">
            <img src="https://ecommercephotographyindia.com/assets/img/gallery/cosmetics-products-photography1.jpg" alt="Product 2 Image">
            <h2>Product 2</h2>
            <p>Description of Product 2</p>
            <a href="#buy" class="buy-btn">Buy Now</a>
        </div>
        <div class="product-card">
            <img src="https://images.unsplash.com/photo-1631214524049-0ebbbe6d81aa?q=80&w=2574&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product 3 Image">
            <h2>Product 3</h2>
            <p>Description of Product 3</p>
            <a href="#buy" class="buy-btn">Buy Now</a>
        </div>
        <div class="product-card">
            <img src="https://images.unsplash.com/photo-1661346380522-fcbb31e5845a?q=80&w=2487&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product 4 Image">
            <h2>Product 4</h2>
            <p>Description of Product 4</p>
            <a href="#buy" class="buy-btn">Buy Now</a>
        </div>
    </div>

</body>
</html>
