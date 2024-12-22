<!DOCTYPE html>
<html>
<head>
    <title>Online Watch Store</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:black;
        }
        
        header {
            background-color: #555;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        nav {
            display: flex;
            justify-content: left;
            margin-top: 10px;
            font-size: 30px;
            font-family: bold;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 5px;
        }

        nav a:hover {
            background-color: #555;
        }
        main {
            padding: 20px;
        }
 
       h1 {
           font-size:50px;
           padding: 20px;
        }
        .product-list {
        /* Change flex-wrap to 'nowrap' to force the products to stack in one column */
        display: flex;
        flex-wrap: nowrap;
        /* Center the products horizontally */
        justify-content: center;
    }
        /* .product-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        } */

        .product {
            width: 200px;
            margin: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        .product img {
            max-width: 100%;
        }

        .product h3 {
            margin-top: 10px;
        }

        .product .price {
            font-weight: bold;
            color: #007bff;
        }

        footer {
            background-color: #555;
            color: #fff;
            text-align: left;
            padding: 10px;
        }
        .container {
            margin: 16px;
            padding: 8px;
            background-color: #f0f0f0;
            border-radius: 5px;
            flex: 1; /* Grow to occupy available space evenly */
            max-width: 300px; /* Limit the maximum width of each container */
        }

        /* Additional styles for content in the containers */
        .container h3 {
            margin-bottom: 8px;
        }

        .container p {
            font-size: 14px;
        }

        main {
            padding: 2rem;
            text-align: center;
            display: flex; /* Arrange containers horizontally */
            flex-wrap: wrap; /* Allow containers to wrap to next line if necessary */
            justify-content: center; /* Center the containers horizontally */
        }


        /* Additional styles for content in the containers */
        .container h3 {
            margin-bottom: 8px;
        }

        .container p {
            font-size: 14px;
        }

        /* Image style */
        .top-container {
            background-color: #f0f0f0;
            border-radius: 5px;
            padding: 16px;
            text-align: center;
        }

        .top-container img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .top-container h3 {
            margin-bottom: 8px;
        }

        .top-container p {
            font-size: 14px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 1rem;
            text-align: center;
        }

        footer p {
            margin: 0;
        }
        /* Flex container to arrange the three containers side by side */
.flex-container {
    display: flex;
}

/* Optional: Add some spacing between the containers */
.container {
    margin-right: 20px;
}

    </style>
</head>
<body>
    <header>
        <h1>Welcome to our Watch Store</h1>
        <nav>
            <a href="index.php">Home</a> &emsp;
            <a href="contact.php">Contact</a> &emsp;
            <a href="second.php">Product</a> &emsp;
            <a href="about.php">About</a> &emsp;
        </nav>
    </header>
    <main>

     <div class="top-container">
        <img src="https://cdn.wallpapersafari.com/73/24/W50fcz.jpg"width="1200" height="200"> <br>
    
        <div class="flex-container">
    <div class="container">
        <p>
            Rolex: Founded in 1905 in London, Rolex is arguably the most famous luxury watch brand in the world. Known for its precision and reliability, Rolex watches are often associated with status and prestige. They have a wide range of iconic models, including the Submariner, Datejust, and Daytona.
        </p>
    </div>

    <div class="container">
        <p>
            TAG Heuer: Founded in 1860, TAG Heuer is a Swiss brand known for its sports-inspired timepieces and precision chronographs. They have a strong association with motorsports and have been endorsed by various sports celebrities. The TAG Heuer Monaco, worn by Steve McQueen in the film "Le Mans," is an iconic model.
        </p>
    </div>

    <div class="container">
        <p>
            Casio: Casio is a Japanese brand famous for its digital watches and pioneering electronic technology. They are well-known for their G-Shock series, which offers rugged, shock-resistant watches popular among adventurers and outdoor enthusiasts.
        </p>
    </div>
</div>

           
        <a href="Product.php"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJPNfGtkslG0IXTiRHB4xVpwX0RVIuuaYWDw&usqp=CAU"width="300" height="600"> </a>
         
        <a href="Product.php"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhCA0Gssb6U9NknWSLRaHXxaGEEcWTGt8BXQ&usqp=CAU"width="400" height="800"></a>
         
        <a href="Product.php"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVwhzgzpGCwr3iXTPZMe6sgH6zcnKblEZItg&usqp=CAU"width="400" height="800"> </a>
            
        </div>
    </main>
    

    <footer>
        <p>Contact us at contact@example.com</p>
    </footer>
</body>
</html>
