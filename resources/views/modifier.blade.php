<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un produit</title>
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
        fieldset {
            border: 2px solid #3498db;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
        }
        legend {
            font-weight: bold;
            color: #3498db;
        }
        table {
            border-collapse: collapse;
            width: 80%;
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

    <br>
    <fieldset>
        <legend>Modifier un produit</legend>
        <form action="{{ route('produits.update') }}" method="POST">
            @csrf
            @method('PUT')

            <table border='1'>
                <tr>
                    <th><label for="Libelle">Libelle</label></th>
                    <th><label for="Marque">Marque</label></th>
                    <th><label for="Prix">Prix</label></th>
                    <th><label for="Stock">Stock</label></th>
                    <th><label for="Image">Image</label></th>
                </tr>
                <tr>
                    <td><input type="text" name="Libelle"></td>
                    <td><input type="text" name="Marque"></td>
                    <td><input type="number" name="Prix"></td>
                    <td><input type="number" name="Stock"></td>
                    <td><input type="file" name="Image"></td>
                </tr>
            </table>
            <button>modifier</button>
        </form>
    </fieldset>

    <footer>
        <h4>welcome to our shop</h4>
    </footer>
</body>
</html>