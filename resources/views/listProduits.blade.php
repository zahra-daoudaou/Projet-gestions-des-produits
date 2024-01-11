<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Produits</title>
    <style>
        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            font-family: 'Helvetica', sans-serif;
        }
        header h1 {
            margin: 0;
            color: #e6b3cc;
        }
        header ol {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        header ol li {
            display: inline;
            margin-right: 10px;
            font-weight: bold;
            font-family: 'Helvetica', sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            text-decoration: none;
            color: #cc6699;
            font-weight: bold;
        }
        a:hover {
            color: #e6b3cc;
        }
        button {
            display: inline-block;
            text-align: center;
            padding: 10px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            border: 2px solid #cc6699;
            border-radius: 5px;
            color: #cc6699;
            background-color: #ffffff;
            transition: background-color 0.3s, color 0.3s, border-color 0.3s;
        }
        button:hover {
            background-color: #cc6699;
            color: #cc6699;
            border-color: #cc6699;
        }
        button:active {
            background-color: #cc6699;
            border-color: white;
        }
        footer {
            background-color: #333;
            color: #e6b3cc;
            font-family: 'Helvetica', sans-serif;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>OurShop</h1>
    </header>

    <table border='1'>
        <tr>
            <th>Liste des produits</th>
        </tr>
        <tr>
            <th>Libelle</th>
            <th>Marque</th>
            <th>Prix</th>
            <th>Stock</th>
            <th>Image</th>
            <th>Action</th>
        </tr>

        @foreach($produits as $value)
        
        <tr>
            <td>{{ $value['Libelle'] }}</td>
            <td>{{ $value['Marque'] }}</td>
            <td>{{ $value['Prix'] }}</td>
            <td>{{ $value['Stock'] }}</td>
            <td>{{ $value['Image'] }}</td>
            <td>
            <button>
                <a href="/modifier">Modifier</a>
            </button>
            </td>
        </tr>
    
        @endforeach
    </table>

    <br>
    <button> <a href="/form">Ajouter un produit</a> </button>

    <footer>
        <h4>welcome to our shop</h4>
    </footer>
</body>
</html>
