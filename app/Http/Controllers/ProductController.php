<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::get();
        $products = Product::latest()->paginate(5);
        return view('product.index', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('product.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $product = Product::create($request->except('category', '_token'));
        $product->categories()->attach($request->get('category'));
        return redirect()->route('product.index')->with('message', 'Dodano nową usługę');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $categories = Category::get();
        $product = Product::find($id);
        $prodCategories = [];

        foreach ($product->categories as $prodCategory) {
            $prodCategories[] = $categories->pluck('id')->search($prodCategory->id);
        };

        return view('product.edit', [
            'product' => $product,
            'categories' => $categories,
            'prodCategories' => $prodCategories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->validated());
        return redirect()->route('product.index')->with('message', 'Zaktualizowano pomyślnie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->categories()->detach();
        $product->delete();
        return redirect()->route('product.index')->with('message', 'Wybrana oferta została usunięta');
    }
}
