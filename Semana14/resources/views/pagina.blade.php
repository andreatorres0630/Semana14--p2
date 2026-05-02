<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi nombre</title>
    <style>
        body {
            background-color: #f5f0ff;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .contenedor {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(128, 90, 213, 0.3);
            text-align: center;
            border: 3px solid #a855f7;
        }

        h1 {
            color: #6b21a8;
            font-size: 32px;
        }
    </style>
</head>
<body>
     <div class="contenedor">
        <h1>Mi nombre es: {{ $nombre }}</h1>
    </div>
</body>
</html>