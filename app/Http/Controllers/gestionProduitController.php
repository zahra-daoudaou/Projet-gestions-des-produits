<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests\StorePostRequest;
use App\Models\produit;

class gestionProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /*
        $produits=[
            [
                "Libelle" => "Laptop",
                "Marque" => "Dell",
                "Prix" => 899.99,
                "Stock" => 20,
                "Image" => "laptop_image.jpg"
            ],
            [
                "Libelle" => "Smartphone",
                "Marque" => "Samsung",
                "Prix" => 499.99,
                "Stock" => 50,
                "Image" => "smartphone_image.jpg"
            ],
            [
                "Libelle" => "Headphones",
                "Marque" => "Sony",
                "Prix" => 129.99,
                "Stock" => 30,
                "Image" => "headphones_image.jpg"
            ],
            [
                "Libelle" => "Coffee Maker",
                "Marque" => "Keurig",
                "Prix" => 79.99,
                "Stock" => 10,
                "Image" => "coffeemaker_image.jpg"
            ],
            [
                "Libelle" => "Tablet",
                "Marque" => "Apple",
                "Prix" => 699.99,
                "Stock" => 15,
                "Image" => "tablet_image.jpg"
            ],
            [
                "Libelle" => "Smart Watch",
                "Marque" => "Samsung",
                "Prix" => 199.99,
                "Stock" => 25,
                "Image" => "smartwatch_image.jpg"
            ]
        ];
        */

        $produits = produit::all();
        return view('listProduits',['produits'=>$produits]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'Libelle' => 'required | string',
            'Marque' => 'required',
            'Prix' => 'required | numeric',
            'Stock' => 'required | integer | min:1 | max:4',
            'Image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $newProduit = produit::create($data);
        //return redirect(route('produits.index'))->with('succès, produit est ajouter!');

        return redirect(route('produits.index'))->with('success', 'Produit est ajouté!');

        /*
        $Libelle=$request->input('Libelle');
        $Marque=$request->input('Marque');
        $Prix=$request->input('Prix');
        $Stock=$request->input('Stock');
        $Image=$request->input('Image');

        //dd($request->all(), $Libelle);
        //dd($request);
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(produit $produit)
    {
        return view('produits.edit', ['produit' => $produit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(produit $produit, Request $request)
    {

        $data = $request->validate([
            'Libelle' => 'required | string',
            'Marque' => 'required',
            'Prix' => 'required | numeric',
            'Stock' => 'required | integer | min:1 | max:4',
            'Image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $produit->update($data);
        return redirect(route('produits.index'))->with('success, produit est modifier!');

       /*
        $produit = produit::find($id);
        $produit->update($request->all());

        return redirect(route('produits.index'));
        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(produit $produit)
    {
        $produit->delete();
        return redirect(route('produits.index'))->with('success, produit est supprimé!');
    }
}
