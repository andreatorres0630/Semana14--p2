<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorbetes</title>
    <style>
        body {
            background-color: #f5f0ff;
            font-family: Arial, sans-serif;
            margin: 30px;
        }

        h2 {
            color: #6b21a8;
            margin-bottom: 20px;
        }

        table {
            width: 60%;
            margin: auto;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 4px 10px rgba(128, 90, 213, 0.3);
            border-radius: 10px;
            overflow: hidden;
        }

        th {
            background-color: #a855f7;
            color: white;
            padding: 12px;
        }

        td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f3e8ff;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Lista de Sorbetes</h2>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Precio ($)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sorbetes as $sorbete)
                <tr>
                    <td>{{ $sorbete['id'] }}</td>
                    <td>{{ $sorbete['nombre'] }}</td>
                    <td>{{ $sorbete['precio'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>