<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cereales</title>
     <style>
        body {
            background-color: #f5f0ff;
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        h1 {
            color: #6b21a8;
            margin-bottom: 30px;
        }

        p {
            background-color: white;
            padding: 15px;
            width: 300px;
            margin: 15px auto;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(128, 90, 213, 0.3);
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1 style="text-align:center">Información del Cereal</h1>

    <p>Id: {{ $cereal['id'] }}</p>
    <p>Nombre: {{ $cereal['nombre'] }}</p>
    <p>Precio: ${{ $cereal['precio'] }}</p>

</body>
</html>