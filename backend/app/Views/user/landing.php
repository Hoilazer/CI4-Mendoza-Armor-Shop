<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            /* stack text, button, and image vertically */
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        h1 {
            font-size: 3rem;
            color: #333;
            margin-bottom: 20px;
        }

        button {
            padding: 10px 20px;
            font-size: 1rem;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            margin-bottom: 20px;
            transition: background 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        img {
            width: 200px;
            /* adjust size */
            height: auto;
            border-radius: 10px;
            /* optional rounded corners */
        }
    </style>
</head>

<body>
    <h1>Hello</h1>
    <button onclick="alert('Buru Nya!')">Press me</button>
    <img src="https://wiki.gbl.gg/images/thumb/a/af/MBTL_Neco-Arc_Art.png/479px-MBTL_Neco-Arc_Art.png" alt="Sample Image">
</body>

</html>