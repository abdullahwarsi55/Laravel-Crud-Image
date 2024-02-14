<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  
    public function index()
    {
        $products=Product::all();
        return view('mainpage',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productform');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imagename=time().'.'.$request->image->extension();
        $request->image->move(public_path('product'),$imagename);
        $product=new Product();
        $product->image=$imagename;
        $product->name=$request->name;
        $product->price=$request->price;
        $product->description=$request->description;
        $product->save();
        $products=Product::all();
        return back()->with('success','Product Created Sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    $product=Product::find($id);
    return view('edit',['product'=>$product]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product=Product::find($id);
        if(isset($request->image)){
            $imagename=time().'.'.$request->image->extension();
            $request->image->move(public_path('product'),$imagename);
            $product->image=$imagename;
        }
        $product->name=$request->name;
        $product->price=$request->price;
        $product->description=$request->description; 
        $product->save();
        return back()->with('success','Product updated Sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
