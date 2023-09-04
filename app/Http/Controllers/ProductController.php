<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function welcome(){
// dd(Auth::user()->products);     //per accedere a tutti i prodotti
        return view('welcome');
    }

// CREA LISTA DEL FORM

public function create(){
    return view('products.create');
}



// CREA IL PRODOTTO SUL DATABASE

public function store(Request $request){
    Product::create(
        [
            'name'=>$request->input('name'),
            'category'=>$request->input('category'),
            'price'=>$request->input('price'),
            'gender'=>$request->input('gender'),
            'img'=>$request->file('img')->store('public/product'),
            'user_id'=> Auth::user()->id

        ]
        );



        return redirect()->route('product.create')->with('message','Prodotto aggiunto con successo');
}




// MOSTRA PRODOTTI


public function index(){
    $products = Product::oldest()->get();
    return view('products.index', compact('products'));
}


//SCHEDA SINGOLA PRODOTTO

public function show(Product $product){

    return view('products.show',compact('product'));





}




// EDIT PRODOTTO


public function edit(Product $product){



return view('products.edit',compact('product'));


}




public function updates(Product $product , Request $request){

    $product->update([
    $product->name = $request->name,
    $product->category = $request->category,
    $product->gender = $request->gender,
    $product->price = $request->price,



    ]);

if($request->img){
    $product->update ([
        $product->img = $request->file('img')->store('public/product')

    ]);

    
}
return redirect()->route('product.index');

}





public function destroy(Product $product){
$product->delete();

return redirect()->route('product.index');


}


}
