<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un produit</title>
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
            border: 2px solid #cc6699;
;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
        }
        legend {
            font-weight: bold;
            color: #cc6699;
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
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .warning-box {
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            padding: 15px; 
            margin: 20px;
            border-radius: 5px;
        }
        .warning-box ul {
            list-style-type: none;
            padding: 0;
        }
        .warning-box li {
            color: #721c24;
            padding: 5px 0;
        }
        .warning-box li:not(:last-child) {
            border-bottom: 1px solid #f5c6cb;
        }

    </style>
</head>
<body>
    <header>
        <h1>OurShop</h1>
    </header>

    <br>
    <fieldset>

        <div class="warning-box">
            @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{$error}} </li>
                @endforeach
            </ul>
            @endif
        </div>

        <legend>Ajouter un produit</legend>
        <form action="{{ route('produits.store') }}" method='post'>
            @csrf
            @method('post')

            <table border='1'>
                <tr>
                    <th>Libelle</th>
                    <th>Marque</th>
                    <th>Prix</th>
                    <th>Stock</th>
                    <th>Image</th>
                </tr>
                <tr>
                    <td><input type="text" name="Libelle">
                </td>
                    <td><input type="text" name="Marque">
                </td>
                    <td><input type="number" name="Prix">
                </td>
                    <td><input type="number" name="Stock">
                </td>
                    <td>
                    <input type="file" name="file">
                    </td>
                </tr>
            </table>
            <input type="submit" value="Ajouter un produit">
        </form>
    </fieldset>

    <br>
    <!--<button ><a href="/">Ajouter un produit</a></button>-->
    <footer>
        <h4>welcome to our shop</h4>
    </footer>
</body>
</html>