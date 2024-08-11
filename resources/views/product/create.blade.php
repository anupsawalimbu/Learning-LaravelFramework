<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Product</title>
    <style>
        /* Reset some default browser styles */
        body, h1, p, input, textarea, button {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Basic body styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
            margin: 0;
        }

        /* Form container styling */
        .form-container {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
            max-width: 600px;
            border: 1px solid #ff9800; /* Thinner orange border */
        }

        /* Form heading */
        .form-container h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Form styling */
        form {
            display: flex;
            flex-direction: column;
        }

        /* Label styling */
        label {
            font-size: 16px;
            color: #333;
            margin-bottom: 8px;
        }

        /* Input and textarea styling */
        input, textarea {
            font-size: 16px;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ddd; /* Thinner light gray border */
            border-radius: 6px;
        }

        /* File input specific styling */
        input[type="file"] {
            padding: 0;
            border: 1px solid #ddd; /* Thinner light gray border */
            border-radius: 6px;
            font-size: 16px;
        }

        /* Textarea specific styling */
        textarea {
            resize: vertical;
            height: 120px;
        }

        /* Submit button styling */
        button {
            background-color: #ff9800;
            color: white;
            border: none;
            padding: 12px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 6px;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        button:hover {
            background-color: #e68a00;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h1>Create a Product</h1>
        <form action="#" method="post" enctype="multipart/form-data">
            <label for="product">Product Name</label>
            <input type="text" id="product" name="product" required>

            <label for="description">Description</label>
            <textarea id="description" name="description" required></textarea>

            <label for="image">Upload Image</label>
            <input type="file" id="image" name="image">

            <button type="submit">Submit</button>
        </form>
    </div>

</body>
</html>
